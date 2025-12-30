<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use App\Models\Blog;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $solutions = Solution::where('is_active', true)->orderBy('order')->get();
        $featuredBlog = Blog::where('is_featured', true)->where('is_published', true)->first();
        $blogs = Blog::where('is_published', true)
            ->where('is_featured', false)
            ->orderBy('published_at', 'desc')
            ->limit(4)
            ->get();
        $projects = Project::where('is_active', true)->orderBy('order')->limit(4)->get();

        return view('home', compact('solutions', 'featuredBlog', 'blogs', 'projects'));
    }

    public function variation2()
    {
        $solutions = Solution::where('is_active', true)->orderBy('order')->get();
        $featuredBlog = Blog::where('is_featured', true)->where('is_published', true)->first();
        $blogs = Blog::where('is_published', true)
            ->where('is_featured', false)
            ->orderBy('published_at', 'desc')
            ->limit(4)
            ->get();
        $projects = Project::where('is_active', true)->orderBy('order')->limit(4)->get();

        return view('home-variation-2', compact('solutions', 'featuredBlog', 'blogs', 'projects'));
    }

    public function variation3()
    {
        $solutions = Solution::where('is_active', true)->orderBy('order')->get();
        $featuredBlog = Blog::where('is_featured', true)->where('is_published', true)->first();
        $blogs = Blog::where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get();
        $projects = Project::where('is_active', true)->orderBy('order')->limit(3)->get();

        return view('home-variation-3', compact('solutions', 'featuredBlog', 'blogs', 'projects'));
    }
}
