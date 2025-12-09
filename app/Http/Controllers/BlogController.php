<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Blog::where('is_published', true);
        
        // Search functionality
        if ($request->has('search') && $request->search) {
            $query->where(function($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('content', 'like', '%' . $request->search . '%')
                  ->orWhere('excerpt', 'like', '%' . $request->search . '%');
            });
        }
        
        // Filter by year and month (archives)
        if ($request->has('year') && $request->year) {
            $query->whereYear('published_at', $request->year);
        }
        if ($request->has('month') && $request->month) {
            $query->whereMonth('published_at', $request->month);
        }
        
        $blogs = $query->orderBy('published_at', 'desc')
            ->paginate(12);
        
        // Get recent posts for sidebar
        // Try to get posts that are NOT on the current page first
        $currentPageIds = $blogs->pluck('id')->toArray();
        $recentPosts = Blog::where('is_published', true)
            ->when(count($currentPageIds) > 0, function($query) use ($currentPageIds) {
                return $query->whereNotIn('id', $currentPageIds);
            })
            ->orderBy('published_at', 'desc')
            ->limit(5)
            ->get();
        
        // If excluding current page posts leaves us with less than 5, 
        // get the most recent posts overall (even if they're on current page)
        if ($recentPosts->count() < 5) {
            $allRecentPosts = Blog::where('is_published', true)
                ->orderBy('published_at', 'desc')
                ->limit(5)
                ->get();
            
            // Merge collections, remove duplicates, and take 5 most recent
            $recentPosts = $recentPosts->merge($allRecentPosts)
                ->unique('id')
                ->sortByDesc(function($post) {
                    return $post->published_at ? $post->published_at->timestamp : 0;
                })
                ->take(5)
                ->values();
        }
        
        // Get archives (grouped by year and month)
        // Use database-agnostic approach
        $archives = Blog::where('is_published', true)
            ->whereNotNull('published_at')
            ->get()
            ->groupBy(function($blog) {
                return $blog->published_at->format('Y-m');
            })
            ->map(function($group, $key) {
                $date = Carbon::createFromFormat('Y-m', $key);
                return [
                    'year' => (int) $date->format('Y'),
                    'month' => (int) $date->format('m'),
                    'month_name' => $date->format('M Y'), // Short month format: "Dec 2024"
                    'count' => $group->count()
                ];
            })
            ->sortByDesc(function($item) {
                return $item['year'] * 100 + $item['month'];
            })
            ->values();

        return view('blogs.index', compact('blogs', 'recentPosts', 'archives'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        $relatedBlogs = Blog::where('is_published', true)
            ->where('id', '!=', $blog->id)
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get();

        return view('blogs.show', compact('blog', 'relatedBlogs'));
    }

    public function loadMore(Request $request)
    {
        $query = Blog::where('is_published', true);
        
        // Apply same filters as index
        if ($request->has('search') && $request->search) {
            $query->where(function($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('content', 'like', '%' . $request->search . '%')
                  ->orWhere('excerpt', 'like', '%' . $request->search . '%');
            });
        }
        
        if ($request->has('year') && $request->year) {
            $query->whereYear('published_at', $request->year);
        }
        if ($request->has('month') && $request->month) {
            $query->whereMonth('published_at', $request->month);
        }
        
        $blogs = $query->orderBy('published_at', 'desc')
            ->paginate(12, ['*'], 'page', $request->page);
        
        $html = '';
        foreach ($blogs as $blog) {
            $html .= view('blogs.partials.blog-card', ['blog' => $blog])->render();
        }
        
        return response()->json([
            'html' => $html,
            'hasMore' => $blogs->hasMorePages(),
            'nextPage' => $blogs->currentPage() + 1
        ]);
    }
}
