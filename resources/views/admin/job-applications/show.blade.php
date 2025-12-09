@extends('layouts.admin')

@section('title', 'Application Details - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Application Details</h1>
    <a href="{{ route('admin.job-applications.index') }}" class="btn btn-secondary">Back</a>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card mb-4">
            <div class="card-header">
                <h5>Applicant Information</h5>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th width="200">Name:</th>
                        <td>{{ $jobApplication->full_name }}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><a href="mailto:{{ $jobApplication->email }}">{{ $jobApplication->email }}</a></td>
                    </tr>
                    @if($jobApplication->phone)
                    <tr>
                        <th>Phone:</th>
                        <td><a href="tel:{{ $jobApplication->phone }}">{{ $jobApplication->phone }}</a></td>
                    </tr>
                    @endif
                    <tr>
                        <th>Applied For:</th>
                        <td>
                            <a href="{{ route('careers.show', $jobApplication->job->slug) }}" target="_blank">
                                {{ $jobApplication->job->title }}
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>Applied Date:</th>
                        <td>{{ $jobApplication->created_at->format('F d, Y h:i A') }}</td>
                    </tr>
                    <tr>
                        <th>Status:</th>
                        <td>
                            <span class="badge bg-{{ $jobApplication->status == 'pending' ? 'warning' : ($jobApplication->status == 'shortlisted' ? 'success' : ($jobApplication->status == 'rejected' ? 'danger' : ($jobApplication->status == 'hired' ? 'primary' : 'info'))) }}">
                                {{ ucfirst($jobApplication->status) }}
                            </span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        @if($jobApplication->cover_letter)
        <div class="card mb-4">
            <div class="card-header">
                <h5>Cover Letter</h5>
            </div>
            <div class="card-body">
                <div class="content">
                    {!! nl2br(e($jobApplication->cover_letter)) !!}
                </div>
            </div>
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h5>Resume</h5>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.job-applications.download-resume', $jobApplication) }}" class="btn btn-primary">
                    <i class="fas fa-download me-2"></i> Download Resume
                </a>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h5>Update Status</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.job-applications.update-status', $jobApplication) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="pending" {{ $jobApplication->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="reviewing" {{ $jobApplication->status == 'reviewing' ? 'selected' : '' }}>Reviewing</option>
                            <option value="shortlisted" {{ $jobApplication->status == 'shortlisted' ? 'selected' : '' }}>Shortlisted</option>
                            <option value="rejected" {{ $jobApplication->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                            <option value="hired" {{ $jobApplication->status == 'hired' ? 'selected' : '' }}>Hired</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="admin_notes" class="form-label">Admin Notes</label>
                        <textarea class="form-control" id="admin_notes" name="admin_notes" rows="5" placeholder="Internal notes about this application...">{{ old('admin_notes', $jobApplication->admin_notes) }}</textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-100">Update Status</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

