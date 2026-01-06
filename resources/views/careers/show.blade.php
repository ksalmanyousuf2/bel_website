@extends('layouts.app')

@section('title', $job->title . ' - Careers - Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/careers.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="careers-hero-section">
    <div class="careers-hero-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="careers-hero-title">{{ $job->title }}</h1>
                <p class="careers-hero-subtitle">{{ $job->department ?? 'Join Our Team' }}</p>
            </div>
        </div>
    </div>
</section>

<!-- Job Details Section -->
<section class="careers-detail-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                @endif

                <div class="job-detail-card">
                    <div class="job-detail-header mb-4">
                        <div class="d-flex justify-content-between align-items-start flex-wrap gap-3">
                            <div>
                                <h2 class="job-detail-title">{{ $job->title }}</h2>
                                <div class="job-detail-meta mt-2">
                                    @if($job->location)
                                    <span class="job-meta-item">
                                        <i class="fas fa-map-marker-alt"></i> {{ $job->location }}
                                    </span>
                                    @endif
                                    <span class="job-meta-item">
                                        <i class="fas fa-briefcase"></i> {{ ucfirst(str_replace('-', ' ', $job->type)) }}
                                    </span>
                                    @if($job->department)
                                    <span class="job-meta-item">
                                        <i class="fas fa-building"></i> {{ $job->department }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <span class="job-type-badge job-type-{{ $job->type }}">{{ ucfirst(str_replace('-', ' ', $job->type)) }}</span>
                        </div>
                    </div>

                    <div class="job-detail-content">
                        <div class="job-section mb-4">
                            <h3>Job Description</h3>
                            <div class="content">
                                {!! $job->description !!}
                            </div>
                        </div>

                        @if($job->responsibilities)
                        <div class="job-section mb-4">
                            <h3>Key Responsibilities</h3>
                            <div class="content">
                                {!! $job->responsibilities !!}
                            </div>
                        </div>
                        @endif

                        @if($job->requirements)
                        <div class="job-section mb-4">
                            <h3>Requirements</h3>
                            <div class="content">
                                {!! $job->requirements !!}
                            </div>
                        </div>
                        @endif

                        <div class="job-detail-info mb-4">
                            @if($job->salary_range)
                            <div class="info-item">
                                <strong>Salary Range:</strong> {{ $job->salary_range }}
                            </div>
                            @endif
                            @if($job->application_deadline)
                            <div class="info-item">
                                <strong>Application Deadline:</strong> {{ $job->application_deadline->format('F d, Y') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="job-detail-actions mt-4">
                        <a href="{{ route('careers.apply', $job->slug) }}" class="btn btn-primary" style="border-radius: 16px;">
                            <i class="fas fa-paper-plane me-2"></i> Apply Now
                        </a>
                        <a href="{{ route('careers.index') }}" class="btn btn-outline-secondary" style="border-radius: 16px;">
                            <i class="fas fa-arrow-left me-2"></i> Back to Jobs
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="job-sidebar">
                    <div class="sidebar-card mb-4">
                        <h4>Job Overview</h4>
                        <ul class="job-overview-list">
                            <li>
                                <strong>Type:</strong>
                                <span>{{ ucfirst(str_replace('-', ' ', $job->type)) }}</span>
                            </li>
                            @if($job->location)
                            <li>
                                <strong>Location:</strong>
                                <span>{{ $job->location }}</span>
                            </li>
                            @endif
                            @if($job->department)
                            <li>
                                <strong>Department:</strong>
                                <span>{{ $job->department }}</span>
                            </li>
                            @endif
                            @if($job->salary_range)
                            <li>
                                <strong>Salary:</strong>
                                <span>{{ $job->salary_range }}</span>
                            </li>
                            @endif
                            @if($job->application_deadline)
                            <li>
                                <strong>Deadline:</strong>
                                <span>{{ $job->application_deadline->format('M d, Y') }}</span>
                            </li>
                            @endif
                        </ul>
                    </div>

                    @if($relatedJobs->count() > 0)
                    <div class="sidebar-card">
                        <h4>Related Jobs</h4>
                        <ul class="related-jobs-list">
                            @foreach($relatedJobs as $relatedJob)
                            <li>
                                <a href="{{ route('careers.show', $relatedJob->slug) }}">
                                    {{ $relatedJob->title }}
                                </a>
                                <small>{{ $relatedJob->location ?? '' }}</small>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

