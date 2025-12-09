@extends('layouts.app')

@section('title', $blog->title . ' - Beacon Energy')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <article>
                    @if($blog->featured_image)
                    <img src="{{ asset('storage/' . $blog->featured_image) }}" class="img-fluid rounded mb-4" alt="{{ $blog->title }}">
                    @endif
                    <h1 class="display-5 fw-bold mb-3">{{ $blog->title }}</h1>
                    @if($blog->published_at)
                    <p class="text-muted mb-4">{{ $blog->published_at->format('F d, Y') }}</p>
                    @endif
                    <div class="content">
                        {!! $blog->content !!}
                    </div>
                </article>
            </div>
            <div class="col-lg-4">
                <h5 class="fw-bold mb-3">Related Articles</h5>
                @forelse($relatedBlogs as $related)
                <div class="mb-3">
                    <a href="{{ route('blogs.show', $related->slug) }}" class="text-decoration-none">
                        <h6>{{ $related->title }}</h6>
                    </a>
                </div>
                @empty
                <p class="text-muted">No related articles.</p>
                @endforelse
            </div>
        </div>
    </div>
</section>
@endsection

