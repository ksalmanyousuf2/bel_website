@extends('layouts.admin')

@section('title', 'Careers - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Career Jobs</h1>
    <a href="{{ route('admin.careers.create') }}" class="btn btn-primary">Add New Job</a>
</div>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Type</th>
                <th>Location</th>
                <th>Department</th>
                <th>Status</th>
                <th>Applications</th>
                <th>Views</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($jobs as $job)
            <tr>
                <td>
                    <a href="{{ route('careers.show', $job->slug) }}" target="_blank">{{ $job->title }}</a>
                </td>
                <td>{{ ucfirst(str_replace('-', ' ', $job->type)) }}</td>
                <td>{{ $job->location ?? '-' }}</td>
                <td>{{ $job->department ?? '-' }}</td>
                <td>
                    @if($job->is_active)
                    <span class="badge bg-success">Active</span>
                    @else
                    <span class="badge bg-secondary">Inactive</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.job-applications.index', ['job_id' => $job->id]) }}">
                        {{ $job->applications->count() }}
                    </a>
                </td>
                <td>{{ $job->views }}</td>
                <td>
                    <a href="{{ route('admin.careers.edit', $job) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('admin.careers.destroy', $job) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure? This will also delete all applications for this job.')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" class="text-center">No jobs found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

