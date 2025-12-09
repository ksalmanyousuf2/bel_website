<article class="blog-post-card mb-5 position-relative">
    <div class="blog-timeline-dot"></div>
    <h2 class="blog-post-title">{{ $blog->title }}</h2>
    <div class="blog-post-meta">
        <span class="blog-post-author"><b>Areeba Khalil</b> </span><br>
        {{-- <span class="blog-post-separator">•</span> --}}
        <span class="blog-post-date">Published on {{ $blog->published_at ? $blog->published_at->format('F d, Y') : 'N/A' }}</span>
    </div>
    @if($blog->featured_image)
    <div class="blog-post-image-wrapper">
        <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}" class="blog-post-image">
        <div class="blog-post-image-overlay">
            {{-- <p class="blog-post-image-text">{{ strtoupper($blog->title) }}</p> --}}
        </div>
    </div>
    @endif
    <div class="blog-post-excerpt">
        <p>{{ $blog->excerpt ? Str::limit(strip_tags($blog->excerpt), 200) : Str::limit(strip_tags($blog->content), 200) }}</p>
    </div>
    <a href="{{ route('blogs.show', $blog->slug) }}" class="btn blog-read-more-btn">
        Read More
    </a>
    <img src="{{ asset('assets/icons/solid-white-arrow-up.svg') }}" class="blog-read-more-arrow" alt="Arrow">
</article>

