@extends('layouts.app')

@section('title', 'Events - Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/events.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="events-hero-section">
    <div class="events-hero-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="events-hero-title">Events</h1>
                <p class="events-hero-subtitle">Join Us in Shaping the Future of Clean Energy</p>
                <div class="events-hero-cta">
                    <a href="#events-content" class="btn events-learn-btn">Learn more</a>
                    <img src="{{ asset('assets/icons/solid-white-arrow-up.svg') }}" class="events-cta-arrow" alt="Arrow">
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
@endsection

