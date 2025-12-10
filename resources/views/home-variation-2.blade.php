@extends('layouts.app')

@section('title', 'Beacon Energy - Leading the Shift to Renewable Power')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="{{ asset('css/home-variation-2.css') }}">
@endpush

@section('content')
<!-- Hero Section with Video Background -->
<section id="home" class="hero-video-section">
    <!-- Video Background -->
    <div class="hero-video-wrapper">
        <!-- Option 1: Direct Video URL (Currently Active) -->
        <!-- Using a free stock video from Pexels - Solar Energy Theme -->
        <video class="hero-video" autoplay muted loop playsinline>
            <!-- Primary source: High-quality solar/renewable energy video from Pexels -->
            <source src="{{ asset('assets/videos/4034091-uhd_3840_2160_30fps.mp4') }}" type="video/mp4">
            <!-- Alternative: Another solar energy video option -->
            <!-- <source src="https://videos.pexels.com/video-files/2491284/2491284-hd_1920_1080_24fps.mp4" type="video/mp4"> -->
        </video>
        
        <!-- Option 2: Local Video File (Uncomment and add your video path when you download it) -->
        <!-- 
        <video class="hero-video" autoplay muted loop playsinline>
            <source src="{{ asset('assets/videos/solar-hero-video.mp4') }}" type="video/mp4">
            <source src="{{ asset('assets/videos/solar-hero-video.webm') }}" type="video/webm">
        </video>
        -->
        
        <!-- Option 3: YouTube Embed (Uncomment and add your YouTube video ID) -->
        <!-- 
        <iframe 
            class="hero-video-iframe" 
            src="https://www.youtube.com/embed/YOUR_VIDEO_ID?autoplay=1&mute=1&loop=1&playlist=YOUR_VIDEO_ID&controls=0&showinfo=0&rel=0&iv_load_policy=3&modestbranding=1" 
            frameborder="0" 
            allow="autoplay; encrypted-media" 
            allowfullscreen>
        </iframe>
        -->
        
        <!-- Fallback background image if video doesn't load -->
        <div class="hero-video-fallback" style="background-image: url('{{ asset('assets/images/hero_section_image.png') }}');"></div>
        
        <!-- Overlay for better text readability -->
        <div class="hero-video-overlay"></div>
        
        <!-- Animated background particles/shapes -->
        <div class="hero-video-particles">
            <div class="particle particle-1"></div>
            <div class="particle particle-2"></div>
            <div class="particle particle-3"></div>
            <div class="particle particle-4"></div>
        </div>
    </div>
    
    <!-- Hero Content -->
    <div class="hero-video-content">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-7">
                    <div class="hero-content-wrapper">
                        <!-- Badge -->
                        <div class="hero-badge">
                            <i class="fas fa-solar-panel me-2"></i>Clean Energy Pioneer
                        </div>
                        
                        <!-- Main Title -->
                        <h1 class="hero-main-title">
                            Leading the Shift to Renewable Power
                        </h1>
                        
                        <!-- Subtitle -->
                        <p class="hero-subtitle">
                            At Beacon Energy, we <strong>empower</strong> communities and industries with <strong>renewable energy</strong> innovations.
                        </p>
                        
                        <!-- Description -->
                        <p class="hero-description">
                            Transforming the energy landscape with cutting-edge solar solutions that deliver sustainable power, reduce costs, and create a cleaner future for generations to come.
                        </p>
                        
                        <!-- CTA Button -->
                        <div class="hero-cta-wrapper">
                            <a href="#solutions" class="btn hero-cta-btn">
                                <span>Explore Solutions</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Stats Section -->
                <div class="col-lg-5">
                    <div class="hero-stats-grid">
                        <div class="hero-stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <div class="stat-content">
                                <div class="stat-number" data-count="45">0</div>
                                <div class="stat-label">Projects Completed</div>
                            </div>
                        </div>
                        
                        <div class="hero-stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="stat-content">
                                <div class="stat-number" data-count="99">0</div>
                                <div class="stat-label">Uptime with monitoring systems</div>
                            </div>
                        </div>
                        
                        <div class="hero-stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <div class="stat-content">
                                <div class="stat-number" data-count="1">0</div>
                                <div class="stat-label">Million+ Tons CO2 offset since 2019</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="hero-scroll-indicator">
            <div class="scroll-mouse">
                <div class="scroll-wheel"></div>
            </div>
            <span class="scroll-text">Scroll to explore</span>
        </div>
    </div>
</section>

<!-- Solutions Section -->
<section class="py-5 solutions-section-v2" id="solutions">
    <div class="solutions-section-pattern"></div>
    <div class="container position-relative">
        <div class="row mb-5">
            <div class="col-lg-12 text-center">
                <div class="section-badge-v2 mb-3">
                    <i class="fas fa-lightbulb me-2"></i>Our Solutions
                </div>
                <h2 class="section-title-v2 mb-3">Empowering the World with Clean Energy Solutions</h2>
                <p class="section-subtitle-v2">Discover the sustainable technologies we use to drive the global transition to renewable energy.</p>
            </div>
        </div>
        <div class="row g-4">
            @forelse($solutions as $solution)
            <div class="col-lg-4 col-md-6">
                <div class="solution-card-v2">
                    <div class="solution-card-image-wrapper">
                        @if($solution->image)
                        <img src="{{ asset('storage/' . $solution->image) }}" alt="{{ $solution->title }}" class="solution-card-image">
                        @else
                        <div class="solution-card-placeholder">
                            <i class="fas fa-solar-panel"></i>
                        </div>
                        @endif
                        <div class="solution-card-overlay-v2">
                            <div class="solution-card-content">
                                <div class="solution-icon-badge">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                                <h5 class="solution-card-title-v2">{{ $solution->title }}</h5>
                                <p class="solution-card-description-v2">{!! Str::limit(strip_tags($solution->description), 120) !!}</p>
                                <a href="#" class="solution-card-link-v2">
                                    Learn More <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p class="text-center text-muted">No solutions available at the moment.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Industrial & Commercial Section -->
<section class="py-5 industrial-commercial-section-v2">
    <div class="container">
        <div class="row align-items-center g-0">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="industrial-content-v2">
                    <h2 class="section-title-v2-white mb-4">Industrial & Commercial Segments</h2>
                    <p class="section-description-v2 mb-5">Our solutions deliver optimal Return on Investment (ROI) and significantly reduce energy bills for our customers.</p>
                    <div class="industrial-features-v2">
                        <div class="feature-item-v2">
                            <div class="feature-icon-v2">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="feature-content-v2">
                                <h6>Optimal ROI</h6>
                                <p>Maximum return on your investment</p>
                            </div>
                        </div>
                        <div class="feature-item-v2">
                            <div class="feature-icon-v2">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <div class="feature-content-v2">
                                <h6>Reduced Bills</h6>
                                <p>Significant energy cost savings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="industrial-image-wrapper-v2">
                    <div class="industrial-image-v2" id="industrialCardWrapper" style="background-image: url('{{ asset('assets/images/hero_section_image.png') }}');">
                        <div class="industrial-image-overlay-v2"></div>
                        <div class="industrial-content-card-v2">
                            <div id="industrialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-background="{{ asset('assets/images/hero_section_image.png') }}">
                                        <div class="industrial-card-content-v2">
                                            <div class="industrial-card-icon-v2">
                                                <i class="fas fa-bolt"></i>
                                            </div>
                                            <h5>Energy Independence</h5>
                                            <p>Discover the sustainable technologies we use to drive the global transition to renewable energy.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-background="{{ asset('assets/images/mask_group.png') }}">
                                        <div class="industrial-card-content-v2">
                                            <div class="industrial-card-icon-v2">
                                                <i class="fas fa-chart-line"></i>
                                            </div>
                                            <h5>Smart Monitoring</h5>
                                            <p>Track performance in real-time with proactive insights that keep your operations efficient and reliable.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section class="py-5 projects-section-v2" id="projects">
    <div class="projects-section-pattern"></div>
    <div class="container position-relative">
        <div class="row mb-5">
            <div class="col-lg-12 text-center">
                <div class="section-badge-v2 mb-3">
                    <i class="fas fa-project-diagram me-2"></i>Our Portfolio
                </div>
                <h2 class="section-title-v2 mb-3">Real Projects. Real Impact</h2>
                <p class="section-subtitle-v2">We specialize in providing solar and energy solutions that help businesses reduce electricity costs, improve power reliability and reduce greenhouse gas emissions.</p>
            </div>
        </div>
        
        @if($projects->count() > 0)
            @php
                $featuredProject = $projects->first();
                $otherProjects = $projects->skip(1);
            @endphp
            
            <!-- Featured Project with Images -->
            <div class="featured-project-v2 mb-5">
                <div class="featured-project-header-v2">
                    <div class="project-header-content-v2">
                        <h3 class="featured-project-title-v2">{{ $featuredProject->name }}</h3>
                        <div class="project-meta-v2">
                            <span class="project-location-v2">
                                <i class="fas fa-map-marker-alt me-2"></i>{{ $featuredProject->location }}
                            </span>
                            @if($featuredProject->capacity)
                            <span class="project-capacity-v2">
                                <i class="fas fa-bolt me-2"></i>{{ $featuredProject->capacity }}
                            </span>
                            @endif
                        </div>
                    </div>
                    <span class="project-badge-v2">{{ $featuredProject->category ?? 'Solar energy' }}</span>
                </div>
                
                @if($featuredProject->images->count() > 0)
                <div class="row g-4 mb-4 mt-4">
                    <div class="col-md-8">
                        <div class="project-image-wrapper-v2">
                            <img src="{{ asset('storage/' . $featuredProject->images->first()->image_path) }}" class="project-featured-image-v2" alt="{{ $featuredProject->images->first()->alt_text ?? $featuredProject->name }}">
                            <div class="project-image-overlay-v2">
                                <a href="{{ route('projects.show', $featuredProject->id) }}" class="project-view-btn-v2">
                                    <i class="fas fa-eye me-2"></i>View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    @if($featuredProject->images->count() > 1)
                    <div class="col-md-4">
                        <div class="project-image-wrapper-v2">
                            <img src="{{ asset('storage/' . $featuredProject->images->skip(1)->first()->image_path) }}" class="project-featured-image-v2" alt="{{ $featuredProject->images->skip(1)->first()->alt_text ?? $featuredProject->name }}">
                        </div>
                    </div>
                    @endif
                </div>
                @endif
                
                <div class="featured-project-footer-v2">
                    <p class="featured-project-description-v2">We specialize in providing solar and energy solutions that help businesses reduce electricity costs, improve power reliability and reduce greenhouse gas emissions.</p>
                    <a href="{{ route('projects.index') }}" class="btn projects-cta-btn-v2">
                        View All Projects <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
            
            <!-- Other Projects List -->
            @if($otherProjects->count() > 0)
            <div class="projects-grid-v2 mb-5">
                @foreach($otherProjects as $project)
                <div class="project-card-v2">
                    <div class="project-card-header-v2">
                        <h5 class="project-card-title-v2">{{ $project->name }}</h5>
                        <span class="project-card-badge-v2">{{ $project->category ?? 'Solar energy' }}</span>
                    </div>
                    <div class="project-card-body-v2">
                        <div class="project-card-meta-v2">
                            <span class="project-card-location-v2">
                                <i class="fas fa-map-marker-alt"></i> {{ $project->location }}
                            </span>
                            @if($project->capacity)
                            <span class="project-card-capacity-v2">
                                <i class="fas fa-bolt"></i> {{ $project->capacity }}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="project-card-footer-v2">
                        <a href="{{ route('projects.show', $project->id) }}" class="project-card-link-v2">
                            View Project <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        @else
            <div class="text-center text-muted py-5">
                <p>No projects available at the moment.</p>
            </div>
        @endif
        <img src="{{ asset('assets/images/connect_icon.png') }}" class="img-fluid rounded connect-icon" alt="Connect Icon">

    </div>
</section>

<!-- Connect App Section -->
<section class="py-5 connect-app-section-v2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <div class="mobile-app-container-v2">
                    <img src="{{ asset('assets/images/mobile_app.png') }}" alt="Connect App" class="mobile-app-image-v2">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="connect-app-content-v2">
                    <div class="section-badge-v2-white mb-4">
                        <i class="fas fa-mobile-alt me-2"></i>Mobile App
                    </div>
                    <h2 class="connect-app-title-v2 mb-4">Seamless Visibility and Support for Your Energy Journey</h2>
                    <p class="connect-app-description-v2 mb-4">Beacon Energy has a robust Monitoring & support app that gives customers complete visibility over their solar system. Available on all mobile and desktop platforms, the app allows the user to see all current and historical data about energy production, utilization, export, and overall saving.</p>
                    <div class="app-features-v2 mb-4">
                        <div class="app-feature-item-v2">
                            <i class="fas fa-check-circle"></i>
                            <span>Real-time Monitoring</span>
                        </div>
                        <div class="app-feature-item-v2">
                            <i class="fas fa-check-circle"></i>
                            <span>Historical Data</span>
                        </div>
                        <div class="app-feature-item-v2">
                            <i class="fas fa-check-circle"></i>
                            <span>Cross-Platform</span>
                        </div>
                    </div>
                    <div class="app-store-buttons-v2">
                        <a href="#" class="app-store-btn-v2">
                            <img src="{{ asset('assets/icons/google_store.svg') }}" alt="Google Play">
                        </a>
                        <a href="#" class="app-store-btn-v2">
                            <img src="{{ asset('assets/icons/apple_store.svg') }}" alt="App Store">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blogs Section -->
<section class="py-5 blogs-section-v2" id="blogs">
    <div class="blogs-section-pattern"></div>
    <div class="container position-relative">
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <div class="section-badge-v2 mb-3">
                            <i class="fas fa-blog me-2"></i>Latest Insights
                        </div>
                        <h2 class="section-title-v2 mb-0">Article & Blogs</h2>
                    </div>
                    <a href="{{ route('blogs.index') }}" class="btn blogs-cta-btn-v2">
                        View All Blogs <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row g-4">
            @if($featuredBlog)
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="blog-featured-card-v2">
                    @if($featuredBlog->featured_image)
                    <div class="blog-featured-image-wrapper-v2">
                        <img src="{{ asset('storage/' . $featuredBlog->featured_image) }}" alt="{{ $featuredBlog->title }}" class="blog-featured-image-v2">
                        <div class="blog-featured-overlay-v2">
                            <span class="blog-featured-badge-v2">Featured</span>
                        </div>
                    </div>
                    @else
                    <div class="blog-featured-placeholder-v2">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    @endif
                    <div class="blog-featured-content-v2">
                        <div class="blog-meta-v2">
                            <span class="blog-date-v2">
                                <i class="fas fa-calendar-alt me-2"></i>
                                {{ $featuredBlog->published_at ? $featuredBlog->published_at->format('M d, Y') : 'Recent' }}
                            </span>
                        </div>
                        <h3 class="blog-featured-title-v2">{{ $featuredBlog->title }}</h3>
                        @if($featuredBlog->excerpt)
                        <p class="blog-featured-excerpt-v2">{!! Str::limit(strip_tags($featuredBlog->excerpt), 150) !!}</p>
                        @endif
                        <a href="{{ route('blogs.show', $featuredBlog->slug) }}" class="blog-featured-link-v2">
                            Read Full Article <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endif
            <div class="col-lg-6">
                <div class="blogs-list-v2">
                    @forelse($blogs as $blog)
                    <div class="blog-item-card-v2">
                        <div class="blog-item-content-v2">
                            <div class="blog-item-meta-v2">
                                <span class="blog-item-date-v2">
                                    <i class="fas fa-calendar-alt me-2"></i>
                                    {{ $blog->published_at ? $blog->published_at->format('M d, Y') : 'Recent' }}
                                </span>
                            </div>
                            <h5 class="blog-item-title-v2">{{ $blog->title }}</h5>
                            @if($blog->excerpt)
                            <p class="blog-item-excerpt-v2">{!! Str::limit(strip_tags($blog->excerpt), 100) !!}</p>
                            @endif
                            <a href="{{ route('blogs.show', $blog->slug) }}" class="blog-item-link-v2">
                                Read More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                    @empty
                    <div class="blog-empty-v2">
                        <i class="fas fa-newspaper"></i>
                        <p>No blog posts available at the moment.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section-v2">
    <div class="row g-0">
        <div class="col-lg-6 col-md-6">
            <div class="cta-image-section-v2" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.3)), url('{{ asset('assets/images/8840190 6.png') }}') center/cover;">
                <div class="cta-image-content-v2">
                    <h2 class="cta-image-title-v2">For a Brighter Cleaner Future</h2>
                    <div class="cta-image-decoration-v2"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="cta-form-section-v2">
                <div class="cta-form-content-v2">
                    <div class="section-badge-v2-white mb-4">
                        <i class="fas fa-handshake me-2"></i>Get Started
                    </div>
                    <h3 class="cta-form-title-v2 mb-4">Let's Power the Planet Sustainably</h3>
                    <p class="cta-form-description-v2 mb-4">Discover the sustainable technologies we use to drive the global transition to renewable energy.</p>
                    <a href="{{ route('contact') }}" class="btn cta-form-btn-v2 mb-4">
                        Get Connected <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                    {{-- <div class="cta-form-features-v2">
                        <div class="cta-feature-v2">
                            <i class="fas fa-check"></i>
                            <span>Expert Consultation</span>
                        </div>
                        <div class="cta-feature-v2">
                            <i class="fas fa-check"></i>
                            <span>Custom Solutions</span>
                        </div>
                        <div class="cta-feature-v2">
                            <i class="fas fa-check"></i>
                            <span>24/7 Support</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animated Counter for Statistics
    const counters = document.querySelectorAll('.stat-number');
    const animateCounter = (counter) => {
        const target = parseInt(counter.getAttribute('data-count')) || 0;
        const duration = 2000;
        const increment = target / (duration / 16);
        let current = 0;
        
        const updateCounter = () => {
            current += increment;
            if (current < target) {
                if (target === 1) {
                    counter.textContent = '1M+';
                } else {
                    counter.textContent = Math.floor(current) + (target === 99 ? '%' : '+');
                }
                requestAnimationFrame(updateCounter);
            } else {
                if (target === 1) {
                    counter.textContent = '1M+';
                } else {
                    counter.textContent = target + (target === 99 ? '%' : '+');
                }
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
    
    // Video fallback handling
    const video = document.querySelector('.hero-video');
    const iframe = document.querySelector('.hero-video-iframe');
    const fallback = document.querySelector('.hero-video-fallback');
    
    if (iframe) {
        // YouTube/iframe video is being used
        if (fallback) fallback.style.display = 'none';
        if (video) video.style.display = 'none';
    } else if (video && fallback) {
        // Check if video has sources
        const hasSources = video.querySelectorAll('source').length > 0;
        const videoSrc = video.getAttribute('src');
        
        if (!hasSources && !videoSrc) {
            // No video sources, show fallback immediately
            video.style.display = 'none';
            fallback.style.display = 'block';
        } else {
            // Video has sources, handle loading
            video.style.display = 'block';
            fallback.style.display = 'none';
            
            // Handle error case
            video.addEventListener('error', function() {
                this.style.display = 'none';
                if (fallback) fallback.style.display = 'block';
            });
            
            // Hide fallback when video starts playing
            video.addEventListener('playing', function() {
                if (fallback) fallback.style.display = 'none';
            });
            
            video.addEventListener('canplay', function() {
                if (fallback) fallback.style.display = 'none';
            });
        }
    } else if (fallback) {
        // No video element, show fallback
        fallback.style.display = 'block';
    }
});

// Industrial Carousel Script
document.addEventListener('DOMContentLoaded', function () {
    var carouselEl = document.getElementById('industrialCarousel');
    var cardWrapper = document.getElementById('industrialCardWrapper');
    if (!carouselEl || !cardWrapper) {
        return;
    }

    var updateBackground = function (item) {
        if (!item) return;
        var background = item.getAttribute('data-background');
        if (background) {
            cardWrapper.style.backgroundImage = 'url(' + background + ')';
        }
    };

    var activeItem = carouselEl.querySelector('.carousel-item.active');
    updateBackground(activeItem);

    carouselEl.addEventListener('slide.bs.carousel', function (event) {
        updateBackground(event.relatedTarget);
    });
});
</script>
@endpush

