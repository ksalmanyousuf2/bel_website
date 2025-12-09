<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CareerController extends Controller
{
    public function index(Request $request)
    {
        $query = Job::where('is_active', true);

        // Search functionality
        if ($request->has('search') && $request->search) {
            $query->where(function($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%')
                  ->orWhere('location', 'like', '%' . $request->search . '%')
                  ->orWhere('department', 'like', '%' . $request->search . '%');
            });
        }

        // Filter by type
        if ($request->has('type') && $request->type) {
            $query->where('type', $request->type);
        }

        // Filter by location
        if ($request->has('location') && $request->location) {
            $query->where('location', 'like', '%' . $request->location . '%');
        }

        // Filter by department
        if ($request->has('department') && $request->department) {
            $query->where('department', $request->department);
        }

        $jobs = $query->orderBy('created_at', 'desc')->paginate(12);

        // Get unique locations and departments for filters
        $locations = Job::where('is_active', true)
            ->whereNotNull('location')
            ->distinct()
            ->pluck('location')
            ->filter()
            ->sort()
            ->values();

        $departments = Job::where('is_active', true)
            ->whereNotNull('department')
            ->distinct()
            ->pluck('department')
            ->filter()
            ->sort()
            ->values();

        return view('careers.index', compact('jobs', 'locations', 'departments'));
    }

    public function show($slug)
    {
        $job = Job::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        // Increment views
        $job->incrementViews();

        // Get related jobs (same department or type)
        $relatedJobs = Job::where('is_active', true)
            ->where('id', '!=', $job->id)
            ->where(function($q) use ($job) {
                $q->where('department', $job->department)
                  ->orWhere('type', $job->type);
            })
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        return view('careers.show', compact('job', 'relatedJobs'));
    }

    public function apply($slug)
    {
        $job = Job::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        // Check if application deadline has passed
        if ($job->application_deadline && $job->application_deadline->isPast()) {
            return redirect()->route('careers.show', $job->slug)
                ->with('error', 'The application deadline for this position has passed.');
        }

        return view('careers.apply', compact('job'));
    }

    public function storeApplication(Request $request, $slug)
    {
        $job = Job::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        // Check if application deadline has passed
        if ($job->application_deadline && $job->application_deadline->isPast()) {
            return redirect()->route('careers.show', $job->slug)
                ->with('error', 'The application deadline for this position has passed.');
        }

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'cover_letter' => 'nullable|string|max:5000',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:10240', // 10MB max
        ]);

        // Store resume
        $resumePath = $request->file('resume')->store('resumes', 'public');

        // Create application
        $application = JobApplication::create([
            'career_job_id' => $job->id,
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'cover_letter' => $validated['cover_letter'] ?? null,
            'resume_path' => $resumePath,
            'status' => 'pending',
        ]);

        return redirect()->route('careers.show', $job->slug)
            ->with('success', 'Your application has been submitted successfully! We will review it and get back to you soon.');
    }
}
