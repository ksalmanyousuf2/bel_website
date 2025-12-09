@extends('layouts.app')

@section('title', 'Careers - Beacon Energy')

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
                <h1 class="careers-hero-title">Join Our Team</h1>
                <p class="careers-hero-subtitle">Build Your Career with Beacon Energy</p>
                <div class="careers-hero-cta">
                    <a href="#careers-content" class="btn careers-learn-btn">View Openings</a>
                    <img src="{{ asset('assets/icons/solid-white-arrow-up.svg') }}" class="careers-cta-arrow" alt="Arrow">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Careers Content Section -->
<section class="careers-content-section py-5" id="careers-content">
    <div class="container">
        <!-- Filters -->
        <div class="row mb-4">
            <div class="col-12">
                <form method="GET" action="{{ route('careers.index') }}" class="careers-filters">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <input type="text" name="search" class="form-control" placeholder="Search jobs..." value="{{ request('search') }}">
                        </div>
                        <div class="col-md-2">
                            <select name="type" class="form-select">
                                <option value="">All Types</option>
                                <option value="full-time" {{ request('type') == 'full-time' ? 'selected' : '' }}>Full Time</option>
                                <option value="part-time" {{ request('type') == 'part-time' ? 'selected' : '' }}>Part Time</option>
                                <option value="contract" {{ request('type') == 'contract' ? 'selected' : '' }}>Contract</option>
                                <option value="internship" {{ request('type') == 'internship' ? 'selected' : '' }}>Internship</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select name="location" class="form-select">
                                <option value="">All Locations</option>
                                @foreach($locations as $location)
                                <option value="{{ $location }}" {{ request('location') == $location ? 'selected' : '' }}>{{ $location }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select name="department" class="form-select">
                                <option value="">All Departments</option>
                                @foreach($departments as $department)
                                <option value="{{ $department }}" {{ request('department') == $department ? 'selected' : '' }}>{{ $department }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary w-100">Filter</button>
                            @if(request()->hasAny(['search', 'type', 'location', 'department']))
                            <a href="{{ route('careers.index') }}" class="btn btn-outline-secondary w-100 mt-2">Clear</a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Jobs List -->
        <div class="row">
            @forelse($jobs as $job)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="job-card">
                    <div class="job-card-header">
                        <h3 class="job-title">
                            <a href="{{ route('careers.show', $job->slug) }}">{{ $job->title }}</a>
                        </h3>
                        <span class="job-type-badge job-type-{{ $job->type }}">{{ ucfirst(str_replace('-', ' ', $job->type)) }}</span>
                    </div>
                    <div class="job-card-body">
                        @if($job->location)
                        <p class="job-location">
                            <i class="fas fa-map-marker-alt"></i> {{ $job->location }}
                        </p>
                        @endif
                        @if($job->department)
                        <p class="job-department">
                            <i class="fas fa-building"></i> {{ $job->department }}
                        </p>
                        @endif
                        @if($job->salary_range)
                        <p class="job-salary">
                            <i class="fas fa-dollar-sign"></i> {{ $job->salary_range }}
                        </p>
                        @endif
                        <p class="job-excerpt">{{ Str::limit(strip_tags($job->description), 120) }}</p>
                        @if($job->application_deadline)
                        <p class="job-deadline">
                            <small><i class="fas fa-calendar-alt"></i> Deadline: {{ $job->application_deadline->format('M d, Y') }}</small>
                        </p>
                        @endif
                    </div>
                    <div class="job-card-footer">
                        <a href="{{ route('careers.show', $job->slug) }}" class="btn btn-primary btn-sm">View Details</a>
                        <a href="{{ route('careers.apply', $job->slug) }}" class="btn btn-outline-primary btn-sm">Apply Now</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-info text-center">
                    <p class="mb-0">No job openings available at the moment. Please check back later.</p>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($jobs->hasPages())
        <div class="row mt-4">
            <div class="col-12">
                {{ $jobs->links() }}
            </div>
        </div>
        @endif
    </div>
</section>
@endsection

