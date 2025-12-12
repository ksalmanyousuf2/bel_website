@extends('layouts.app')

@section('title', 'Events - Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/events.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="events-hero-section">
    {{-- <div class="events-hero-animated-background">
        <div class="events-hero-floating-shape events-hero-shape-1"></div>
        <div class="events-hero-floating-shape events-hero-shape-2"></div>
        <div class="events-hero-floating-shape events-hero-shape-3"></div>
        <div class="events-hero-floating-shape events-hero-shape-4"></div>
    </div> --}}
    <div class="events-hero-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-10 mx-auto">
                <div class="events-hero-content-wrapper text-center">
                    <div class="events-hero-badge">
                        <i class="fas fa-calendar-alt me-2"></i>Upcoming Events
                    </div>
                    <h1 class="events-hero-title">Events</h1>
                    <p class="events-hero-subtitle">Join Us in Shaping the Future of Clean Energy</p>
                    <p class="events-hero-description">
                        Be part of our exciting events, conferences, and community gatherings focused on renewable energy innovation, sustainability, and clean technology. Connect with industry leaders, learn from experts, and contribute to the clean energy revolution.
                    </p>
                    
                    {{-- <!-- Event Statistics -->
                    <div class="events-hero-stats">
                        <div class="events-stat-item">
                            <div class="events-stat-icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="events-stat-content">
                                <div class="events-stat-number" data-count="{{ $events->total() }}">0</div>
                                <div class="events-stat-label">Total Events</div>
                            </div>
                        </div>
                        <div class="events-stat-item">
                            <div class="events-stat-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="events-stat-content">
                                <div class="events-stat-number" data-count="{{ $events->where('event_date', '>=', now())->count() }}">0</div>
                                <div class="events-stat-label">Upcoming</div>
                            </div>
                        </div>
                        <div class="events-stat-item">
                            <div class="events-stat-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="events-stat-content">
                                <div class="events-stat-number" data-count="{{ $events->pluck('location')->filter()->unique()->count() }}">0</div>
                                <div class="events-stat-label">Locations</div>
                            </div>
                        </div>
                        <div class="events-stat-item">
                            <div class="events-stat-icon">
                                <i class="fas fa-share-alt"></i>
                            </div>
                            <div class="events-stat-content">
                                <div class="events-stat-number" data-count="{{ $events->whereNotNull('social_media_link')->count() }}">0</div>
                                <div class="events-stat-label">Social Links</div>
                            </div>
                        </div>
                    </div> --}}
                    
                    <div class="events-hero-cta">
                        <a href="#events-content" class="btn events-learn-btn">
                            <i class="fas fa-arrow-down me-2"></i>View Events
                        </a>
                        <img src="{{ asset('assets/icons/solid-white-arrow-up.svg') }}" class="events-cta-arrow" alt="Arrow">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Events Content Section -->
<section class="events-section py-5" id="events-content">
    <div class="container">
        <div class="row g-4">
            @forelse($events as $event)
            <div class="col-lg-4 col-md-6">
                <div class="event-card">
                    @if($event->image)
                    <div class="event-image-wrapper">
                        <img src="{{ asset('storage/' . $event->image) }}" class="event-image" alt="{{ $event->title }}">
                    </div>
                    @endif
                    <div class="event-card-body">
                        <div class="event-date">
                            <i class="fas fa-calendar me-2"></i>{{ $event->event_date->format('F d, Y') }}
                        </div>
                        @if($event->location)
                        <div class="event-date mb-2">
                            <i class="fas fa-map-marker-alt me-2"></i>{{ $event->location }}
                        </div>
                        @endif
                        <h5 class="event-title">{{ $event->title }}</h5>
                        <p class="event-description">{{ Str::limit(strip_tags($event->description), 120) }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('events.show', $event->slug) }}" class="btn btn-outline-primary">Read More</a>
                            @if($event->social_media_link)
                            <a href="{{ $event->social_media_link }}" target="_blank" rel="noopener noreferrer" class="event-social-link">
                                <i class="fas fa-external-link-alt me-2"></i>Social Media
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p class="text-center text-muted py-5">No events available at the moment.</p>
            </div>
            @endforelse
        </div>
        <div class="mt-5">
            {{ $events->links() }}
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animated Counter for Statistics
    const counters = document.querySelectorAll('.events-stat-number');
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

