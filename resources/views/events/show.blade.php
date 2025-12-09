@extends('layouts.app')

@section('title', $event->title . ' - Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/events.css') }}">
@endpush

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @if($event->image)
                <img src="{{ asset('storage/' . $event->image) }}" class="img-fluid rounded mb-4" alt="{{ $event->title }}">
                @endif
                <h1 class="display-5 fw-bold mb-3">{{ $event->title }}</h1>
                <p class="text-muted mb-2">
                    <i class="fas fa-calendar me-2"></i>{{ $event->event_date->format('F d, Y') }}
                </p>
                @if($event->location)
                <p class="text-muted mb-4">
                    <i class="fas fa-map-marker-alt me-2"></i>{{ $event->location }}
                </p>
                @endif
                <div class="content mb-4">
                    {!! $event->description !!}
                </div>
                @if($event->social_media_link)
                <div class="mb-4">
                    <a href="{{ $event->social_media_link }}" target="_blank" rel="noopener noreferrer" class="event-social-link">
                        <i class="fas fa-external-link-alt me-2"></i>View on Social Media
                    </a>
                </div>
                @endif
            </div>
            <div class="col-lg-4">
                <h5 class="fw-bold mb-3">Related Events</h5>
                @forelse($relatedEvents as $related)
                <div class="mb-3">
                    <a href="{{ route('events.show', $related->slug) }}" class="text-decoration-none">
                        <h6>{{ $related->title }}</h6>
                        <p class="text-muted small">{{ $related->event_date->format('M d, Y') }}</p>
                    </a>
                </div>
                @empty
                <p class="text-muted">No related events.</p>
                @endforelse
            </div>
        </div>
    </div>
</section>
@endsection

