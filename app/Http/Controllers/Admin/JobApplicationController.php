<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobApplicationController extends Controller
{
    public function index(Request $request)
    {
        $query = JobApplication::with('job');

        // Filter by status
        if ($request->has('status') && $request->status) {
            $query->where('status', $request->status);
        }

        // Filter by job
        if ($request->has('job_id') && $request->job_id) {
            $query->where('career_job_id', $request->job_id);
        }

        // Search
        if ($request->has('search') && $request->search) {
            $query->where(function($q) use ($request) {
                $q->where('first_name', 'like', '%' . $request->search . '%')
                  ->orWhere('last_name', 'like', '%' . $request->search . '%')
                  ->orWhere('email', 'like', '%' . $request->search . '%');
            });
        }

        $applications = $query->orderBy('created_at', 'desc')->paginate(20);

        // Get all jobs for filter
        $jobs = \App\Models\Job::orderBy('title')->get();

        return view('admin.job-applications.index', compact('applications', 'jobs'));
    }

    public function show(JobApplication $jobApplication)
    {
        $jobApplication->load('job');
        return view('admin.job-applications.show', compact('jobApplication'));
    }

    public function updateStatus(Request $request, JobApplication $jobApplication)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,reviewing,shortlisted,rejected,hired',
            'admin_notes' => 'nullable|string|max:5000',
        ]);

        $jobApplication->update($validated);

        return redirect()->route('admin.job-applications.show', $jobApplication)
            ->with('success', 'Application status updated successfully.');
    }

    public function downloadResume(JobApplication $jobApplication)
    {
        if (!$jobApplication->resume_path || !Storage::disk('public')->exists($jobApplication->resume_path)) {
            return redirect()->back()->with('error', 'Resume file not found.');
        }

        return Storage::disk('public')->download(
            $jobApplication->resume_path,
            $jobApplication->first_name . '_' . $jobApplication->last_name . '_resume.' . pathinfo($jobApplication->resume_path, PATHINFO_EXTENSION)
        );
    }

    public function destroy(JobApplication $jobApplication)
    {
        // Delete resume file
        if ($jobApplication->resume_path && Storage::disk('public')->exists($jobApplication->resume_path)) {
            Storage::disk('public')->delete($jobApplication->resume_path);
        }

        $jobApplication->delete();

        return redirect()->route('admin.job-applications.index')
            ->with('success', 'Application deleted successfully.');
    }
}
