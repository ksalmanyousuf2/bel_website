@extends('layouts.app')

@section('title', $blog->title . ' - Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/blogs.css') }}">
<style>
    /* Blog Detail Page Specific Styles */
    .blog-detail-hero {
        position: relative;
        min-height: 60vh;
        display: flex;
        align-items: flex-end;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 120px 0 60px;
        margin-top: 0;
    }
    
    .blog-detail-hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 100%);
        z-index: 1;
    }
    
    .blog-detail-hero-content {
        position: relative;
        z-index: 2;
        color: white;
    }
    
    .blog-breadcrumb {
        margin-bottom: 1.5rem;
    }
    
    .blog-breadcrumb a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .blog-breadcrumb a:hover {
        color: white;
    }
    
    .blog-breadcrumb .separator {
        color: rgba(255, 255, 255, 0.6);
        margin: 0 0.5rem;
    }
    
    .blog-detail-title {
        font-size: 3.5rem;
        font-weight: 800;
        color: white;
        margin-bottom: 1.5rem;
        line-height: 1.2;
        text-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
    }
    
    .blog-detail-meta {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        flex-wrap: wrap;
        margin-bottom: 1rem;
    }
    
    .blog-meta-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.95rem;
    }
    
    .blog-meta-item i {
        font-size: 1rem;
    }
    
    .blog-article-wrapper {
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        padding: 3rem;
        margin-top: -80px;
        position: relative;
        z-index: 3;
    }
    
    .blog-article-content {
        font-size: 1.1rem;
        line-height: 1.9;
        color: #333;
    }
    
    .blog-article-content h2,
    .blog-article-content h3,
    .blog-article-content h4 {
        color: var(--primary-blue);
        margin-top: 2.5rem;
        margin-bottom: 1rem;
        font-weight: 700;
    }
    
    .blog-article-content h2 {
        font-size: 2rem;
    }
    
    .blog-article-content h3 {
        font-size: 1.75rem;
    }
    
    .blog-article-content h4 {
        font-size: 1.5rem;
    }
    
    .blog-article-content p {
        margin-bottom: 1.5rem;
    }
    
    .blog-article-content img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
        margin: 2rem 0;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }
    
    .blog-article-content blockquote {
        border-left: 4px solid var(--primary-blue);
        padding-left: 1.5rem;
        margin: 2rem 0;
        font-style: italic;
        color: #666;
        font-size: 1.15rem;
    }
    
    .blog-article-content ul,
    .blog-article-content ol {
        margin: 1.5rem 0;
        padding-left: 2rem;
    }
    
    .blog-article-content li {
        margin-bottom: 0.75rem;
    }
    
    .blog-share-section {
        padding: 2rem 0;
        border-top: 2px solid #f0f0f0;
        border-bottom: 2px solid #f0f0f0;
        margin: 3rem 0;
    }
    
    .blog-share-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 1rem;
    }
    
    .blog-share-buttons {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }
    
    .share-btn {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 500;
        font-size: 0.95rem;
        transition: all 0.3s ease;
    }
    
    .share-btn-facebook {
        background: #1877f2;
        color: white;
    }
    
    .share-btn-twitter {
        background: #1da1f2;
        color: white;
    }
    
    .share-btn-linkedin {
        background: #0077b5;
        color: white;
    }
    
    .share-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        color: white;
    }
    
    .related-blog-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        text-decoration: none;
        color: inherit;
    }
    
    .related-blog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        text-decoration: none;
        color: inherit;
    }
    
    .related-blog-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    
    .related-blog-content {
        padding: 1.5rem;
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    
    .related-blog-title {
        font-size: 1.1rem;
        font-weight: 700;
        color: var(--primary-blue);
        margin-bottom: 0.75rem;
        line-height: 1.4;
    }
    
    .related-blog-date {
        font-size: 0.85rem;
        color: #666;
        margin-top: auto;
    }
    
    @media (max-width: 768px) {
        .blog-detail-hero {
            min-height: 50vh;
            padding: 100px 0 40px;
        }
        
        .blog-detail-title {
            font-size: 2rem;
        }
        
        .blog-article-wrapper {
            padding: 2rem 1.5rem;
            margin-top: -60px;
        }
        
        .blog-article-content {
            font-size: 1rem;
        }
        
        .blog-detail-meta {
            gap: 1rem;
        }
    }
</style>
@endpush

@section('content')
<!-- Hero Section -->
@if($blog->featured_image)
<section class="blog-detail-hero" style="background-image: url('{{ asset('storage/' . $blog->featured_image) }}');">
@else
<section class="blog-detail-hero" style="background: linear-gradient(135deg, var(--primary-blue) 0%, #4299e1 100%);">
@endif
    <div class="blog-detail-hero-overlay"></div>
    <div class="container">
        <div class="blog-detail-hero-content">
            <nav class="blog-breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span class="separator">/</span>
                <a href="{{ route('blogs.index') }}">Blogs</a>
                <span class="separator">/</span>
                <span style="color: white;">{{ Str::limit($blog->title, 50) }}</span>
            </nav>
            <h1 class="blog-detail-title">{{ $blog->title }}</h1>
            <div class="blog-detail-meta">
                <div class="blog-meta-item">
                    <i class="fas fa-calendar-alt"></i>
                    <span>{{ $blog->published_at ? $blog->published_at->format('F d, Y') : 'Not published' }}</span>
                </div>
                <div class="blog-meta-item">
                    <i class="fas fa-user"></i>
                    <span>Beacon Energy</span>
                </div>
                <div class="blog-meta-item">
                    <i class="fas fa-clock"></i>
                    <span id="readingTime">5 min read</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Article Content Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Main Article -->
            <div class="col-lg-8">
                <article class="blog-article-wrapper">
                    @if($blog->featured_image)
                    <div class="mb-4">
                        <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}" class="img-fluid rounded-3" style="width: 100%; max-height: 500px; object-fit: cover;">
                    </div>
                    @endif
                    
                    @if($blog->excerpt)
                    <div class="blog-excerpt mb-4" style="font-size: 1.2rem; color: #666; font-style: italic; padding: 1.5rem; background: #f8f9fa; border-left: 4px solid var(--primary-blue); border-radius: 8px;">
                        {!! $blog->excerpt !!}
                    </div>
                    @endif
                    
                    <div class="blog-article-content">
                        {!! $blog->content !!}
                    </div>
                    
                    <!-- Share Section -->
                    <div class="blog-share-section">
                        <div class="blog-share-title">Share this article</div>
                        <div class="blog-share-buttons">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank" class="share-btn share-btn-facebook">
                                <i class="fab fa-facebook-f"></i>
                                Facebook
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($blog->title) }}" target="_blank" class="share-btn share-btn-twitter">
                                <i class="fab fa-twitter"></i>
                                Twitter
                            </a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}" target="_blank" class="share-btn share-btn-linkedin">
                                <i class="fab fa-linkedin-in"></i>
                                LinkedIn
                            </a>
                        </div>
                    </div>
                </article>
            </div>
            
            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Related Articles -->
                <div class="blog-sidebar-widget mb-5">
                    <h3 class="blog-sidebar-title">
                        <i class="fas fa-newspaper me-2"></i>Related Articles
                    </h3>
                    @forelse($relatedBlogs as $related)
                    <a href="{{ route('blogs.show', $related->slug) }}" class="related-blog-card mb-3">
                        @if($related->featured_image)
                        <img src="{{ asset('storage/' . $related->featured_image) }}" alt="{{ $related->title }}" class="related-blog-image">
                        @else
                        <div class="related-blog-image" style="background: linear-gradient(135deg, var(--primary-blue) 0%, #4299e1 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem;">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        @endif
                        <div class="related-blog-content">
                            <h4 class="related-blog-title">{{ $related->title }}</h4>
                            <div class="related-blog-date">
                                <i class="fas fa-calendar-alt me-1"></i>
                                {{ $related->published_at ? $related->published_at->format('M d, Y') : 'N/A' }}
                            </div>
                        </div>
                    </a>
                    @empty
                    <p class="text-muted">No related articles available.</p>
                    @endforelse
                </div>
                
                <!-- Back to Blogs -->
                <div class="blog-sidebar-widget">
                    <a href="{{ route('blogs.index') }}" class="btn btn-primary w-100" style="display: flex; align-items: center; justify-content: center; gap: 0.5rem;">
                        <i class="fas fa-arrow-left"></i>
                        Back to All Blogs
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Calculate reading time
    const articleContent = document.querySelector('.blog-article-content');
    if (articleContent) {
        const text = articleContent.innerText || articleContent.textContent;
        const words = text.trim().split(/\s+/).length;
        const readingTime = Math.ceil(words / 200); // Average reading speed: 200 words per minute
        const readingTimeElement = document.getElementById('readingTime');
        if (readingTimeElement) {
            readingTimeElement.textContent = readingTime + ' min read';
        }
    }
});
</script>
@endpush
