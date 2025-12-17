@extends('layouts.admin')

@section('title', 'Job Applications - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Job Applications</h1>
</div>

<!-- Filters -->
<div class="card mb-4">
    <div class="card-body">
        <form method="GET" action="{{ route('admin.job-applications.index') }}" class="row g-3">
            <div class="col-md-3">
                <label for="search" class="form-label">Search</label>
                <input type="text" class="form-control" id="search" name="search" value="{{ request('search') }}" placeholder="Name or email...">
            </div>
            <div class="col-md-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status">
                    <option value="">All Statuses</option>
                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="reviewing" {{ request('status') == 'reviewing' ? 'selected' : '' }}>Reviewing</option>
                    <option value="shortlisted" {{ request('status') == 'shortlisted' ? 'selected' : '' }}>Shortlisted</option>
                    <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                    <option value="hired" {{ request('status') == 'hired' ? 'selected' : '' }}>Hired</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="job_id" class="form-label">Job</label>
                <select class="form-select" id="job_id" name="job_id">
                    <option value="">All Jobs</option>
                    @foreach($jobs as $job)
                    <option value="{{ $job->id }}" {{ request('job_id') == $job->id ? 'selected' : '' }}>{{ $job->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label">&nbsp;</label>
                <div>
                    <button type="submit" class="btn btn-primary w-100">Filter</button>
                    @if(request()->hasAny(['search', 'status', 'job_id']))
                    <a href="{{ route('admin.job-applications.index') }}" class="btn btn-outline-secondary w-100 mt-2">Clear</a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Job Position</th>
                <th>Status</th>
                <th>Applied Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($applications as $application)
            <tr>
                <td>{{ $application->full_name }}</td>
                <td>{{ $application->email }}</td>
                <td>{{ $application->phone ?? '-' }}</td>
                <td>
                    <a href="{{ route('careers.show', $application->job->slug) }}" target="_blank">
                        {{ $application->job->title }}
                    </a>
                </td>
                <td>
                    <span class="badge bg-{{ $application->status == 'pending' ? 'warning' : ($application->status == 'shortlisted' ? 'success' : ($application->status == 'rejected' ? 'danger' : ($application->status == 'hired' ? 'primary' : 'info'))) }}">
                        {{ ucfirst($application->status) }}
                    </span>
                </td>
                <td>{{ $application->created_at->format('F d, Y') }}</td>
                <td>
                    <a href="{{ route('admin.job-applications.show', $application) }}" class="btn btn-sm btn-primary">View</a>
                    <a href="{{ route('admin.job-applications.download-resume', $application) }}" class="btn btn-sm btn-info">Resume</a>
                    <form action="{{ route('admin.job-applications.destroy', $application) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">No applications found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@if($applications->hasPages())
<div class="mt-4">
    {{ $applications->links() }}
</div>
@endif
@endsection

