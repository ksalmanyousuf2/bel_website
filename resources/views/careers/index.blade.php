@extends('layouts.app')

@section('title', 'Careers - Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/careers.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="careers-hero-section">
    <div class="careers-hero-animated-background">
        <div class="careers-hero-floating-shape careers-hero-shape-1"></div>
        <div class="careers-hero-floating-shape careers-hero-shape-2"></div>
        <div class="careers-hero-floating-shape careers-hero-shape-3"></div>
        <div class="careers-hero-floating-shape careers-hero-shape-4"></div>
    </div>
    <div class="careers-hero-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-10 mx-auto">
                <div class="careers-hero-content-wrapper text-center">
                    <div class="careers-hero-badge">
                        <i class="fas fa-briefcase me-2"></i>Career Opportunities
                    </div>
                    <h1 class="careers-hero-title">Join Our Team</h1>
                    <p class="careers-hero-subtitle">Build Your Career with Beacon Energy</p>
                    <p class="careers-hero-description">
                        Join a dynamic team dedicated to transforming the energy landscape. At Beacon Energy, we offer exciting career opportunities in renewable energy, engineering, sales, operations, and more. Grow your career while making a positive impact on the environment and communities.
                    </p>
                    
                    <!-- Career Statistics -->
                    <div class="careers-hero-stats">
                        <div class="careers-stat-item">
                            <div class="careers-stat-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <div class="careers-stat-content">
                                <div class="careers-stat-number" data-count="{{ $jobs->total() }}">0</div>
                                <div class="careers-stat-label">Open Positions</div>
                            </div>
                        </div>
                        <div class="careers-stat-item">
                            <div class="careers-stat-icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="careers-stat-content">
                                <div class="careers-stat-number" data-count="{{ $departments->count() }}">0</div>
                                <div class="careers-stat-label">Departments</div>
                            </div>
                        </div>
                        <div class="careers-stat-item">
                            <div class="careers-stat-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="careers-stat-content">
                                <div class="careers-stat-number" data-count="{{ $locations->count() }}">0</div>
                                <div class="careers-stat-label">Locations</div>
                            </div>
                        </div>
                        <div class="careers-stat-item">
                            <div class="careers-stat-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="careers-stat-content">
                                <div class="careers-stat-number" data-count="4">0</div>
                                <div class="careers-stat-label">Job Types</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="careers-hero-cta">
                        <a href="#careers-content" class="btn careers-learn-btn">
                            <i class="fas fa-arrow-down me-2"></i>View Openings
                        </a>
                        <img src="{{ asset('assets/icons/solid-white-arrow-up.svg') }}" class="careers-cta-arrow" alt="Arrow">
                    </div>
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

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animated Counter for Statistics
    const counters = document.querySelectorAll('.careers-stat-number');
    const animateCounter = (counter) => {
        const target = parseInt(counter.getAttribute('data-count')) || 0;
        const duration = 2000;
        const increment = target / (duration / 16);
        let current = 0;
        
        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.floor(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        };
        updateCounter();
    };

    // Intersection Observer for counters
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));

    // Smooth scroll for CTA button
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
</script>
@endpush
@endsection

