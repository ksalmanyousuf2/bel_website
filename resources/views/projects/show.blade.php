@extends('layouts.app')

@section('title', $project->name . ' - Beacon Energy')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-5 fw-bold mb-3">{{ $project->name }}</h1>
                <p class="text-muted mb-4">{{ $project->location }}</p>
                @if($project->capacity)
                <p class="mb-2"><strong>Capacity:</strong> {{ $project->capacity }}</p>
                @endif
                @if($project->completion_date)
                <p class="mb-2"><strong>Completion Date:</strong> {{ $project->completion_date->format('F Y') }}</p>
                @endif
                @if($project->description)
                <div class="mb-4">{!! $project->description !!}</div>
                @endif
                
                @if($project->images->count() > 0)
                <div class="row g-3 mb-4">
                    @foreach($project->images as $image)
                    <div class="col-md-6">
                        <img src="{{ asset('storage/' . $image->image_path) }}" class="img-fluid rounded" alt="{{ $image->alt_text ?? $project->name }}">
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="col-lg-4">
                <h5 class="fw-bold mb-3">Related Projects</h5>
                @forelse($relatedProjects as $related)
                <div class="mb-3">
                    <a href="{{ route('projects.show', $related->id) }}" class="text-decoration-none">
                        <h6>{{ $related->name }}</h6>
                        <p class="text-muted small">{{ $related->location }}</p>
                    </a>
                </div>
                @empty
                <p class="text-muted">No related projects.</p>
                @endforelse
            </div>
        </div>
    </div>
</section>
@endsection

