@extends('layouts.app')

@section('title', 'Beacon Energy - Leading the Shift to Renewable Power')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="{{ asset('css/cleaning-services.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section id="home">
    <!-- Top Blue Section with Text -->
    <div class="hero-top-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-3 fw-bold mb-4 text-white">Leading the Shift to Renewable Power</h1>
                </div>
                <div class="col-lg-6">
                    <p class="lead text-white mb-0" style="margin-top: 50px;">At Beacon Energy, we <strong>empower</strong> communities and industries with <strong>renewable energy</strong> innovations.</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Hero Image Section with Stats Overlay -->
    <div class="hero-image-section">
        <div class="container">
            <div class="hero-image-wrapper">
                <img src="{{ asset('assets/images/D1.png') }}" alt="Solar Farm" class="img-fluid">
                
                <!-- Stats and Explore Button Overlay -->
                <div class="hero-stats-overlay">
                    <div class="hero-stats-container">
                        <div class="hero-stat-item">
                            <div class="stat-number">45+</div>
                            <div class="stat-label">Projects Completed</div>
                        </div>
                        <div class="hero-stat-item">
                            <div class="stat-number">99%</div>
                            <div class="stat-label">Uptime with monitoring systems</div>
                        </div>
                        <div class="hero-stat-item">
                            <div class="stat-number">1 M+</div>
                            <div class="stat-label">Tons CO2 offset since 2019</div>
                        </div>
                    </div>
                    
                    <!-- Explore More Button -->
                    <a href="#solutions" class="hero-explore-btn" style="text-decoration: none; cursor: pointer;">
                        <div class="d-inline-flex align-items-center">
                            <img src="{{ asset('assets/icons/mouse-icon.svg') }}" class="img-fluid" style="width: 20px;height: 20px; margin-right: 5px; object-fit: fill !important;">
                            <span>Explore More</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Solutions Section -->
<section class="py-5" id="solutions">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold">Empowering the World with Clean Energy Solutions</h2>
            </div>
            <div class="col-lg-6" style="display: flex;flex-direction: column;justify-content: flex-end; /* pushes content to bottom */">
                <p class="text-muted">Discover the sustainable technologies we use to drive the global transition to renewable energy.</p>
            </div>
        </div>
        <div class="row g-4">
            @forelse($solutions as $solution)
            <div class="@if($loop->first) col-lg-6 col-md-6 @else col-lg-3 col-md-6 @endif">
                <div class="card solution-card shadow-sm">
                    @if($solution->image)
                    <img src="{{ asset('storage/' . $solution->image) }}" alt="{{ $solution->title }}">
                    @else
                    <div class="bg-secondary" style="height: 400px; width: 100%;"></div>
                    @endif
                    <div class="solution-card-overlay">
                        <h5>{{ $solution->title }}</h5>
                        <p>{!! Str::limit(strip_tags($solution->description), 120) !!}</p>
                        <div class="d-inline-flex align-items-center">
                            <a href="{{ $solution->url ?? '#' }}" class="btn">More Details</a>
                            <a href="{{ $solution->url ?? '#' }}"><img src="{{ $loop->first ? asset('assets/icons/solid-white-arrow-up.svg')
                             : asset('assets/icons/slim-arrow-up.svg') }}" class="img-fluid" 
                            style="width: 40px;height: 40px;"></a>
                            
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

<section class="py-5 bg-primary text-white industrial-commercial-section">
    <div class="container-fluid px-0">
        <div class="row g-0 align-items-center">
            <div class="col-lg-5">
                <div class="industrial-commercial-content-wrapper">
                    <div class="container">
                        <h2 class="display-5 fw-bold mb-4">Industrial &amp; Commercial Segments</h2>
                        <p class="mt-5">Our solutions deliver optimal Return on Investment (ROI) and significantly reduce energy bills for our customers.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card text-dark industrial-commercial-card" id="industrialCardWrapper" style="background-image: url(&quot;http://localhost/bel/bel%20website/public/assets/images/mask_group.png&quot;);">
                    <div class="card-body">
                        <div id="industrialCarousel" class="carousel slide industrial-overlay-carousel" data-bs-ride="carousel" data-bs-interval="6000">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-background="{{ asset('assets/images/D3.png') }}">
                                    <div class="industrial-overlay-card">
                                        <div class="industrial-overlay-thumb">
                                            <img src="{{ asset('assets/images/D3.png') }}" alt="Energy Independence">
                                        </div>
                                        <h5>Energy Independence</h5>
                                        <p>Discover the sustainable technologies we use to drive the global transition to renewable energy.</p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-background="{{ asset('assets/images/D4.png') }}">
                                    <div class="industrial-overlay-card">
                                        <div class="industrial-overlay-thumb">
                                            <img src="{{ asset('assets/images/D4.png') }}" alt="Smart Monitoring">
                                        </div>
                                        <h5>Smart Monitoring</h5>
                                        <p>Track performance in real-time with proactive insights that keep your operations efficient and reliable.</p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-background="{{ asset('assets/images/D5.png') }}">
                                    <div class="industrial-overlay-card">
                                        <div class="industrial-overlay-thumb">
                                            <img src="{{ asset('assets/images/D5.png') }}" alt="Smart Monitoring">
                                        </div>
                                        <h5>Backup Power & System Reliability</h5>
                                        <p>Energy storage solutions designed to maintain critical operations during grid outages, ensuring continuity, safety, and system resilience.</p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-background="{{ asset('assets/images/D6.png') }}">
                                    <div class="industrial-overlay-card">
                                        <div class="industrial-overlay-thumb">
                                            <img src="{{ asset('assets/images/D6.png') }}" alt="Smart Monitoring">
                                        </div>
                                        <h5>Renewable Energy Integration</h5>
                                        <p>Integrated storage and control systems that enable efficient utilization of solar and other renewable sources within industrial and commercial power networks.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="industrial-overlay-nav">
                            <button class="industrial-nav-btn" type="button" data-bs-target="#industrialCarousel" data-bs-slide="prev">
                                <i class="fas fa-arrow-left"></i> Previous
                            </button>
                            <button class="industrial-nav-btn" type="button" data-bs-target="#industrialCarousel" data-bs-slide="next">
                                Next <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="mt-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-3">
                {{-- <p class="text-muted mb-0">We specialize in providing solar and energy solutions that help businesses reduce electricity costs, improve power reliability and reduce greenhouse gas emissions.</p> --}}
            </div>
            <div class="col-lg-9 text-lg-end">
                <h2 class="display-5 fw-bold mb-0">Real Projects. Real Impact</h2>
            </div>
        </div>
        
        @if($projects->count() > 0)
            @php
                $featuredProject = $projects->first();
                $otherProjects = $projects->skip(1);
            @endphp
            
            <!-- Featured Project with Images -->
            <div class="featured-project mb-5">
                <table class="project-header-table mb-4">
                    <tr>
                        <td>
                            <h5 class="fw-bold mb-0">{{ $featuredProject->name }}</h5>
                        </td>
                        <td>
                            <span class="text-muted">{{ $featuredProject->location }}</span>
                        </td>
                        @if($featuredProject->capacity)
                        <td>
                            <span class="text-muted">{{ $featuredProject->capacity }}</span>
                        </td>
                        @else
                        <td></td>
                        @endif
                        <td>
                            <span class="badge project-badge project-badge-fill">{{ $featuredProject->category ?? 'Solar energy' }}</span>
                        </td>
                    </tr>
                </table>
                
                @if($featuredProject->images->count() > 0)
                <div class="row g-3 mb-4 mt-5">
                    <div class="col-md-8">
                        <img src="{{ asset('storage/' . $featuredProject->images->first()->image_path) }}" class="img-fluid project-featured-image" alt="{{ $featuredProject->images->first()->alt_text ?? $featuredProject->name }}">
                    </div>
                    @if($featuredProject->images->count() > 1)
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $featuredProject->images->skip(1)->first()->image_path) }}" class="img-fluid project-featured-image featured-image-2" alt="{{ $featuredProject->images->skip(1)->first()->alt_text ?? $featuredProject->name }}">
                    </div>
                    @endif
                </div>
                @endif
                
                <div class="row">
                    <div class="col-lg-8">
                    <p class="text-muted mb-0 flex-grow-1 me-4">We specialize in providing solar and energy solutions that help businesses reduce electricity costs, improve power reliability and reduce greenhouse gas emissions.</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-inline-flex align-items-center" style="float: right;">
                            <a href="{{ route('projects.index') }}" class="btn btn-outline-primary flex-shrink-0 selected-projects-btn">View Selected Projects <i class="fas fa-arrow-up-right"></i></a>
                            <img src="{{ asset('assets/icons/blue-arrow-up.png') }}" class="img-fluid" style="width: 40px;height: 40px;">
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Other Projects List -->
            @if($otherProjects->count() > 0)
            <div class="projects-list mb-5">
                <table class="projects-list-table">
                    @foreach($otherProjects as $project)
                    <tr>
                        <td>
                            <h5 class="fw-bold mb-0">{{ $project->name }}</h5>
                        </td>
                        <td>
                            <span class="text-muted">{{ $project->location }}</span>
                        </td>
                        @if($project->capacity)
                        <td>
                            <span class="text-muted">{{ $project->capacity }}</span>
                        </td>
                        @else
                        <td></td>
                        @endif
                        <td>
                            <span class="badge project-badge">{{ $project->category ?? 'Solar energy' }}</span>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            @endif
        @else
            <div class="text-center text-muted py-5">
                <p>No projects available at the moment.</p>
            </div>
        @endif
        {{-- <img src="{{ asset('assets/images/connect_icon.png') }}" class="img-fluid rounded connect-icon" alt="Connect Icon"> --}}

    </div>
</section>

<!-- Connect App Section -->
<section class="cleaning-connect-section">
    <div class="cleaning-connect-background">
        <img src="{{ asset('assets/images/Group 175.png') }}" alt="Background" class="img-fluid">
    </div>
    {{-- <div class="cleaning-connect-overlay"></div> --}}
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="cleaning-connect-content">
                    <div class="cleaning-connect-logo">
                        <img src="{{ asset('assets/images/connect_icon.png') }}" alt="Connect" class="img-fluid">
                    </div>
                    <h2 class="cleaning-connect-title mt-5">Seamless Visibility and Support for Your Energy Journey.</h2>
                    <p class="cleaning-connect-description">
                        Beacon Energy has a robust Monitoring & support app that gives customers complete visibility over their solar system. Available on all mobile and desktop platforms, the app allows the user to see all current and historical data about energy production, utilization, export, and overall saving.
                    </p>
                    <div class="cleaning-connect-buttons">
                        <a href="https://play.google.com/store/apps/details?id=com.energise.bel&hl=en&gl=US&pli=1" class="cleaning-app-btn">
                            <img src="{{ asset('assets/icons/google_store.svg') }}" alt="Google Play" class="img-fluid">
                        </a>
                        <a href="https://apps.apple.com/pk/app/bel-connect/id1523014430" class="cleaning-app-btn">
                            <img src="{{ asset('assets/icons/apple_store.svg') }}" alt="App Store" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Space for potential phone images or other content -->
            </div>
        </div>
    </div>
</section>

<!-- Blogs Section -->
<section class="py-5" id="blogs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="display-5 fw-bold">Article & Blogs</h2>
            <div class="d-inline-flex align-items-center" style="float: right;">
                <a href="{{ route('blogs.index') }}" class="btn btn-outline-primary flex-shrink-0 selected-projects-btn">View All Blogs <i class="fas fa-arrow-up-right"></i></a>
                <img src="{{ asset('assets/icons/blue-arrow-up.png') }}" class="img-fluid" style="width: 40px;height: 40px;">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                @if($featuredBlog)
                <div class="blog-featured">
                    @if($featuredBlog->featured_image)
                    <img src="{{ asset('storage/' . $featuredBlog->featured_image) }}" alt="{{ $featuredBlog->title }}">
                    @else
                    <div class="bg-secondary" style="height: 400px;"></div>
                    @endif
                    <div class="blog-featured-overlay">
                        {{-- <h3 class="fw-bold">{{ Str::upper($featuredBlog->title) }}</h3> --}}
                    </div>
                </div>
                @endif
            </div>
            <div class="col-lg-6">
                @forelse($blogs as $blog)
                

                <div class="mb-4 pb-3 border-bottom">
                    <div class="row">
                        <div class="col-lg-9">
                            @if($loop->first)<h5 @else <p style="font-weight: 300;" @endif class="@if($loop->first) fw-bold @endif">{{ $blog->title }}
                        </@if($loop->first)h5 @else p @endif>
                            @if($blog->excerpt && $loop->first)
                            <div class="text-muted">{!! Str::limit(strip_tags($blog->excerpt), 100) !!}</div>
                            @endif
                        </div>
                        <div class="col-lg-3" style="display: flex; align-items: center;">
                            <a href="{{ route('blogs.show', $blog->slug) }}" style="color: black;" class="text-decoration-underline">Read More </a>
                        </div>
                    </div>
                    
                </div>
                @empty
                <p class="text-muted">No blog posts available at the moment.</p>
                @endforelse
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
{{-- <div class="row cta-section-row">
    <div class="col-lg-8 col-md-4 col-sm-8 col-xs-8">
        <section class="py-5 cta-section-item" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('assets/images/8840190 6.png') }}') center/cover; border-radius: 0 26px 26px 0">
            <div class="container h-100 d-flex align-items-center" style="justify-content: center !important;">
                <h2 class="display-4 fw-bold mb-0 text-white">For a Brighter Cleaner Future</h2>
            </div>
        </section>
    </div>
    <div class="col-lg-4 col-md-8 col-sm-4 col-xs-4">
        <section class="py-5 cta-section-item" style="background-color: #00399E; border-radius: 26px 0 0 26px; ">
            <div class="container h-100 d-flex align-items-center">
                <div class="card bg-primary text-white w-100" style="border-color: #00399E !important;">
                    <div class="card-body p-4">
                        <h3 class="fw-bold mb-3">Let's Power the Planet- Sustainably</h3>
                        <p>Discover the sustainable technologies we use to drive the global transition to renewable energy.</p>
                        <div class="d-inline-flex align-items-center">
                            <a href="#contact" class="btn btn-outline-primary flex-shrink-0 btn-outline-primary-cta text-white "style="border-radius: 28px; border-color:white !important;" >Get connected</a> 
                            <img src="{{ asset('assets/icons/solid-white-arrow-up.svg') }}" class="btn-icon-default img-fluid" style="width: 35px;height: 35px;     background: #00399E;
    border: 1px solid #00399E;
    border-radius: 16px;" alt="Arrow">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div> --}}

<section class="py-5 cta-section">
    <div class="container-fluid px-0">
        <div class="row g-0 mx-0 cta-row">
            <!-- Left Section -->
            <div class="col-lg-8 col-md-6 col-12 order-2 order-lg-1 cta-col-left" style="padding-right: 20px;">
                <div class="cta-left h-100 d-flex justify-content-center align-items-center cta-left-mobile" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), 
                url('{{ asset('assets/images/8840190 6.png') }}') center/cover; border-radius: 0 26px 26px 0; padding: 3rem 1rem;">
                    <h2 class="display-4 fw-bold mb-0 text-white text-center">For a Brighter<br>Cleaner Future</h2>
                </div>
            </div>

            <!-- Right Section -->
            <div class="col-lg-4 col-md-6 col-12 order-1 order-lg-2 cta-col-right">
                <div class="cta-right h-100 d-flex align-items-center cta-right-mobile" style="background-color: #00399E; border-radius: 26px 0 0 26px; padding: 6rem 1rem;">
                    <div class="card bg-primary text-white w-100" style="border-color: #00399E;">
                        <div class="card-body p-4">
                            <h3 class="fw-bold mb-3">Let's Power the Planet—Sustainably</h3>
                            <p>Discover the sustainable technologies we use to drive the global transition to renewable energy.</p>
                            <div class="d-inline-flex align-items-center">
                                <a href="{{ route('contact') }}" class="btn btn-outline-primary flex-shrink-0 text-white" style="border-radius: 28px; border-color: white;">
                                   Get connected
                                </a> 
                                <a href="{{ route('contact') }}"><img src="{{ asset('assets/icons/solid-white-arrow-up.svg') }}" class="img-fluid" style="width: 40px; height: 40px;"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
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

    // Equalize heights of all carousel cards
    function equalizeCardHeights() {
        var cards = carouselEl.querySelectorAll('.industrial-overlay-card');
        var carouselItems = carouselEl.querySelectorAll('.carousel-item');
        if (cards.length === 0) return;

        // Temporarily make all carousel items visible to measure their true heights
        var originalStyles = [];
        carouselItems.forEach(function(item, index) {
            originalStyles[index] = {
                display: item.style.display,
                visibility: item.style.visibility,
                position: item.style.position
            };
            // Make item visible but off-screen for measurement
            item.style.display = 'block';
            item.style.visibility = 'hidden';
            item.style.position = 'absolute';
            item.style.left = '-9999px';
        });

        // Reset heights to auto to get natural heights
        cards.forEach(function(card) {
            card.style.height = 'auto';
            card.style.minHeight = 'auto';
        });

        // Force a reflow to ensure heights are recalculated
        void carouselEl.offsetHeight;

        // Calculate maximum height using scrollHeight for accurate measurement
        var maxHeight = 0;
        cards.forEach(function(card) {
            // Use scrollHeight to get the full content height including overflow
            var cardHeight = Math.max(card.scrollHeight, card.offsetHeight);
            if (cardHeight > maxHeight) {
                maxHeight = cardHeight;
            }
        });

        // Restore original display states
        carouselItems.forEach(function(item, index) {
            if (originalStyles[index]) {
                item.style.display = originalStyles[index].display || '';
                item.style.visibility = originalStyles[index].visibility || '';
                item.style.position = originalStyles[index].position || '';
                item.style.left = '';
            }
        });

        // Apply maximum height to all cards with a buffer
        if (maxHeight > 0) {
            var finalHeight = maxHeight + 15; // Add 15px buffer for safety
            cards.forEach(function(card) {
                card.style.height = finalHeight + 'px';
                card.style.minHeight = finalHeight + 'px';
                card.style.overflow = 'visible';
            });
        }
    }

    // Wait for images to load before equalizing heights
    var images = carouselEl.querySelectorAll('.industrial-overlay-card img');
    var imagesLoaded = 0;
    var totalImages = images.length;

    if (totalImages === 0) {
        // No images, equalize immediately
        equalizeCardHeights();
    } else {
        // Wait for all images to load
        images.forEach(function(img) {
            if (img.complete) {
                imagesLoaded++;
            } else {
                img.addEventListener('load', function() {
                    imagesLoaded++;
                    if (imagesLoaded === totalImages) {
                        equalizeCardHeights();
                    }
                });
                img.addEventListener('error', function() {
                    imagesLoaded++;
                    if (imagesLoaded === totalImages) {
                        equalizeCardHeights();
                    }
                });
            }
        });

        // If all images are already loaded
        if (imagesLoaded === totalImages) {
            equalizeCardHeights();
        }

        // Fallback timeout in case images don't load
        setTimeout(equalizeCardHeights, 1000);
    }

    // Re-equalize on window resize
    var resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(equalizeCardHeights, 250);
    });

    // Smooth scroll for Explore More button
    const exploreMoreBtn = document.querySelector('.hero-explore-btn');
    if (exploreMoreBtn) {
        exploreMoreBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    }

    // Add scroll animations (same as intrix page)
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe sections (skip the hero section to avoid animation on initial load)
    document.querySelectorAll('section').forEach((section, index) => {
        // Skip the first section (hero) to avoid animation on page load
        if (index > 0) {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(section);
        }
    });
});
</script>
@endpush
