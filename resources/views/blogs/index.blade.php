@extends('layouts.app')

@section('title', 'Blogs - Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/blogs.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="blogs-hero-section">
    {{-- <div class="blogs-hero-animated-background">
        <div class="blogs-hero-floating-shape blogs-hero-shape-1"></div>
        <div class="blogs-hero-floating-shape blogs-hero-shape-2"></div>
        <div class="blogs-hero-floating-shape blogs-hero-shape-3"></div>
        <div class="blogs-hero-floating-shape blogs-hero-shape-4"></div>
    </div> --}}
    <div class="blogs-hero-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="blogs-hero-title">From the Blogs</h1>
                <p class="blogs-hero-subtitle">Exploring Clean Energy Insights</p>
            </div>
        </div>
    </div>
</section>

<!-- Main Content Section -->
<section class="blogs-content-section py-5" id="blogs-content">
    <div class="container">
        <div class="blogs-timeline-wrapper position-relative">
            <!-- Continuous Timeline Line -->
            <div class="blog-timeline-line-continuous"></div>
            
            <div class="row">
                <!-- Main Blog Posts Column -->
                <div class="col-lg-8 mb-5 mb-lg-0">
                    @forelse($blogs as $blog)
                        @include('blogs.partials.blog-card', ['blog' => $blog])
                    @empty
                    <div class="blog-post-card">
                        <p class="text-center text-muted py-5">No blog posts available at the moment.</p>
                    </div>
                    @endforelse

                    <!-- Load More Button -->
                    @if($blogs->hasMorePages())
                    <div class="blogs-load-more-wrapper mt-5 text-center">
                        <button id="loadMoreBtn" class="btn blog-load-more-btn" data-page="2" data-has-more="true" style="border-radius: 30px;">
                            <span class="btn-text">Load More</span>
                            <span class="btn-spinner d-none">
                                <i class="fas fa-spinner fa-spin me-2"></i>Loading...
                            </span>
                        </button>
                    </div>
                    @endif
                </div>

                <!-- Sidebar Column -->
                <div class="col-lg-4">
                    <!-- Search Bar -->
                    <div class="blog-sidebar-widget mb-5">
                        <form action="{{ route('blogs.index') }}" method="GET" class="blog-search-form">
                            <div class="blog-search-wrapper">
                                <input type="text" name="search" class="blog-search-input" placeholder="Search" value="{{ request('search') }}">
                                <button type="submit" class="blog-search-btn">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Recent Posts -->
                    <div class="blog-sidebar-widget mb-5 position-relative">
                        {{-- <div class="blog-timeline-dot"></div> --}}
                        <h3 class="blog-sidebar-title">Recent Posts</h3>
                        <ul class="blog-recent-posts-list">
                            @forelse($recentPosts as $recentPost)
                            <li class="blog-recent-post-item">
                                <a href="{{ route('blogs.show', $recentPost->slug) }}" class="blog-recent-post-link">
                                    @if($recentPost->featured_image)
                                    <img src="{{ asset('storage/' . $recentPost->featured_image) }}" alt="{{ $recentPost->title }}" class="blog-recent-post-image">
                                    @else
                                    <div class="blog-recent-post-image-placeholder"></div>
                                    @endif
                                    <span class="blog-recent-post-title">{{ $recentPost->title }}</span>
                                </a>
                            </li>
                            @empty
                            <li class="blog-recent-post-item">
                                <p class="text-muted">No recent posts available.</p>
                            </li>
                            @endforelse
                        </ul>
                    </div>

                    <!-- Archives -->
                    <div class="blog-sidebar-widget position-relative">
                        {{-- <div class="blog-timeline-dot blog-timeline-dot-last"></div> --}}
                        <h3 class="blog-sidebar-title">Archives</h3>
                        <ul class="blog-archives-list">
                            @forelse($archives as $archive)
                            <li class="blog-archive-item">
                                <a href="{{ route('blogs.index', ['year' => $archive['year'], 'month' => $archive['month']]) }}" class="blog-archive-link">
                                    {{ $archive['month_name'] }}
                                </a>
                            </li>
                            @empty
                            <li class="blog-archive-item">
                                <p class="text-muted">No archives available.</p>
                            </li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animated Counter for Statistics
    const counters = document.querySelectorAll('.blogs-stat-number');
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
    
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    const blogsContainer = document.querySelector('.col-lg-8');
    
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            const btn = this;
            const page = btn.getAttribute('data-page');
            const hasMore = btn.getAttribute('data-has-more') === 'true';
            
            if (!hasMore) return;
            
            // Show loading state
            btn.disabled = true;
            btn.querySelector('.btn-text').classList.add('d-none');
            btn.querySelector('.btn-spinner').classList.remove('d-none');
            
            // Get current URL parameters
            const urlParams = new URLSearchParams(window.location.search);
            const search = urlParams.get('search') || '';
            const year = urlParams.get('year') || '';
            const month = urlParams.get('month') || '';
            
            // Build request data
            const requestData = {
                page: page,
                search: search,
                year: year,
                month: month
            };
            
            // Make AJAX request
            fetch('{{ route("blogs.load-more") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(requestData)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.html) {
                    // Create a temporary container to parse HTML
                    const tempDiv = document.createElement('div');
                    tempDiv.innerHTML = data.html;
                    
                    // Get the load more wrapper
                    const loadMoreWrapper = btn.parentElement;
                    
                    // Append each blog card before the load more button
                    const blogCards = tempDiv.querySelectorAll('.blog-post-card');
                    blogCards.forEach(card => {
                        blogsContainer.insertBefore(card, loadMoreWrapper);
                    });
                    
                    // Update button state
                    if (data.hasMore) {
                        btn.setAttribute('data-page', data.nextPage);
                        btn.setAttribute('data-has-more', 'true');
                        btn.disabled = false;
                        btn.querySelector('.btn-text').classList.remove('d-none');
                        btn.querySelector('.btn-spinner').classList.add('d-none');
                    } else {
                        // No more pages, hide button
                        loadMoreWrapper.remove();
                    }
                } else {
                    // Error handling
                    btn.disabled = false;
                    btn.querySelector('.btn-text').classList.remove('d-none');
                    btn.querySelector('.btn-spinner').classList.add('d-none');
                    alert('Failed to load more blogs. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                btn.disabled = false;
                btn.querySelector('.btn-text').classList.remove('d-none');
                btn.querySelector('.btn-spinner').classList.add('d-none');
                alert('An error occurred. Please try again.');
            });
        });
    }
});
</script>
@endpush
@endsection
