<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CareerController extends Controller
{
    public function index()
    {
        $jobs = Job::orderBy('created_at', 'desc')->get();
        return view('admin.careers.index', compact('jobs'));
    }

    public function create()
    {
        return view('admin.careers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:career_jobs,slug',
            'description' => 'required|string',
            'requirements' => 'nullable|string',
            'responsibilities' => 'nullable|string',
            'benefits' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'type' => 'required|in:full-time,part-time,contract,internship',
            'salary_range' => 'nullable|string|max:255',
            'department' => 'nullable|string|max:255',
            'application_deadline' => 'nullable|date|after_or_equal:today',
            'is_active' => 'boolean',
        ]);

        // Validate description is not empty (strip HTML tags)
        $descriptionText = strip_tags($validated['description']);
        if (trim($descriptionText) === '') {
            return redirect()->back()
                ->withInput()
                ->withErrors(['description' => 'The job description is required and cannot be empty.']);
        }

        if (empty($validated['slug'])) {
            $baseSlug = Str::slug($validated['title']);
            $slug = $baseSlug;
            $counter = 1;
            
            // Ensure slug uniqueness
            while (Job::where('slug', $slug)->exists()) {
                $slug = $baseSlug . '-' . $counter;
                $counter++;
            }
            
            $validated['slug'] = $slug;
        }

        $validated['is_active'] = $request->has('is_active');

        try {
            Job::create($validated);
            return redirect()->route('admin.careers.index')->with('success', 'Job created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'An error occurred while creating the job: ' . $e->getMessage()]);
        }
    }

    public function show(Job $career)
    {
        $job = $career;
        return view('admin.careers.show', compact('job'));
    }

    public function edit(Job $career)
    {
        $job = $career;
        return view('admin.careers.edit', compact('job'));
    }

    public function update(Request $request, Job $career)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:career_jobs,slug,' . $career->id,
            'description' => 'required|string',
            'requirements' => 'nullable|string',
            'responsibilities' => 'nullable|string',
            'benefits' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'type' => 'required|in:full-time,part-time,contract,internship',
            'salary_range' => 'nullable|string|max:255',
            'department' => 'nullable|string|max:255',
            'application_deadline' => 'nullable|date',
            'is_active' => 'boolean',
        ]);

        // Validate description is not empty (strip HTML tags)
        $descriptionText = strip_tags($validated['description']);
        if (trim($descriptionText) === '') {
            return redirect()->back()
                ->withInput()
                ->withErrors(['description' => 'The job description is required and cannot be empty.']);
        }

        if (empty($validated['slug'])) {
            $baseSlug = Str::slug($validated['title']);
            $slug = $baseSlug;
            $counter = 1;
            
            // Ensure slug uniqueness (excluding current job)
            while (Job::where('slug', $slug)->where('id', '!=', $career->id)->exists()) {
                $slug = $baseSlug . '-' . $counter;
                $counter++;
            }
            
            $validated['slug'] = $slug;
        }

        $validated['is_active'] = $request->has('is_active');

        $job = $career;
        
        try {
            $job->update($validated);
            return redirect()->route('admin.careers.index')->with('success', 'Job updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'An error occurred while updating the job: ' . $e->getMessage()]);
        }
    }

    public function destroy(Job $career)
    {
        $job = $career;
        // Delete associated applications' resumes
        foreach ($job->applications as $application) {
            if ($application->resume_path && Storage::disk('public')->exists($application->resume_path)) {
                Storage::disk('public')->delete($application->resume_path);
            }
        }

        $job->delete();

        return redirect()->route('admin.careers.index')->with('success', 'Job deleted successfully.');
    }
}
