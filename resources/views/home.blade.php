@extends('layouts.app')

@section('title', 'Beacon Energy - Leading the Shift to Renewable Power')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
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
                    <p class="lead text-white mb-0">At Beacon Energy, we <strong>empower</strong> communities and industries with <strong>renewable energy</strong> innovations.</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Hero Image Section with Stats Overlay -->
    <div class="hero-image-section">
        <div class="container">
            <div class="hero-image-wrapper">
                <img src="{{ asset('assets/images/hero_section_image.png') }}" alt="Solar Farm" class="img-fluid">
                
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
                            <div class="stat-number">1M+</div>
                            <div class="stat-label">Tons CO2 offset since 2019</div>
                        </div>
                    </div>
                    
                    <!-- Explore More Button -->
                    <div class="hero-explore-btn">
                        {{-- <button type="button">
                            <i class="fas fa-arrow-up-right"></i>
                        </button> --}}
                        <div class="d-inline-flex align-items-center">
                           
                            <img src="{{ asset('assets/icons/mouse-icon.svg') }}" class="img-fluid" style="width: 20px;height: 20px; margin-right: 5px; object-fit: fill !important;">
                            <span>Explore More</span>
                        </div>
                        
                    </div>
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
            <div class="col-lg-6">
                <p class="text-muted">Discover the sustainable technologies we use to drive the global transition to renewable energy.</p>
            </div>
        </div>
        <div class="row g-4">
            @forelse($solutions as $solution)
            <div class="col-lg-4 col-md-6">
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
                            <a href="#" class="btn">More Details</a>
                            <img src="{{ $loop->first ? asset('assets/icons/solid-white-arrow-up.svg')
                             : asset('assets/icons/slim-arrow-up.svg') }}" class="img-fluid" 
                            style="width: 40px;height: 40px;">
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
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold mb-4">Industrial & Commercial Segments</h2>
                <p>Our solutions deliver optimal Return on Investment (ROI) and significantly reduce energy bills for our customers.</p>
            </div>
            <div class="col-lg-6">
                <div class="card text-dark industrial-commercial-card" id="industrialCardWrapper" style="background-image: url('{{ asset('assets/images/hero_section_image.png') }}');">
                    <div class="card-body">
                        <div id="industrialCarousel" class="carousel slide industrial-overlay-carousel" data-bs-ride="carousel" data-bs-interval="6000">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-background="{{ asset('assets/images/hero_section_image.png') }}">
                                    <div class="industrial-overlay-card">
                                        <div class="industrial-overlay-thumb">
                                            <img src="{{ asset('assets/images/hero_section_image.png') }}" alt="Energy Independence">
                                        </div>
                                        <h5>Energy Independence</h5>
                                        <p>Discover the sustainable technologies we use to drive the global transition to renewable energy.</p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-background="{{ asset('assets/images/mask_group.png') }}">
                                    <div class="industrial-overlay-card">
                                        <div class="industrial-overlay-thumb">
                                            <img src="{{ asset('assets/images/mask_group.png') }}" alt="Smart Monitoring">
                                        </div>
                                        <h5>Smart Monitoring</h5>
                                        <p>Track performance in real-time with proactive insights that keep your operations efficient and reliable.</p>
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
<section class="py-5" id="projects">
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
        <img src="{{ asset('assets/images/connect_icon.png') }}" class="img-fluid rounded connect-icon" alt="Connect Icon">

    </div>
</section>

<!-- Connect App Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-4">
                <div class="text-center mb-4">
                    <img src="{{ asset('assets/images/mobile_app.png') }}" alt="Connect App" class="img-fluid mobile-app-image">
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-8">
                <h4 class="mb-4">Seamless Visibility and Support for Your Energy Journey.</h4>
                <p>Beacon Energy has a robust Monitoring & support app that gives customers complete visibility over their solar system. Available on all mobile and desktop platforms, the app allows the user to see all current and historical data about energy production, utilization, export, and overall saving.</p>
                <div class="d-flex gap-3 mt-4">
                    <a href="#" class="btn btn-light"><img src="{{ asset('assets/icons/google_store.svg') }}" alt="Google Play"></a>
                    <a href="#" class="btn btn-light"><img src="{{ asset('assets/icons/apple_store.svg') }}" alt="App Store"></a>
                </div>
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
                    <h5 class="fw-bold">{{ $blog->title }}</h5>
                    @if($blog->excerpt)
                    <div class="text-muted">{!! Str::limit(strip_tags($blog->excerpt), 100) !!}</div>
                    @endif
                    <a href="{{ route('blogs.show', $blog->slug) }}" class="text-decoration-none">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
                @empty
                <p class="text-muted">No blog posts available at the moment.</p>
                @endforelse
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<div class="row cta-section-row">
    <div class="col-lg-8 col-md-4 col-sm-8 col-xs-8">
        <section class="py-5 cta-section-item" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('assets/images/8840190 6.png') }}') center/cover; border-radius: 0 26px 26px 0">
            <div class="container h-100 d-flex align-items-center" style="justify-content: center !important;">
                <h2 class="display-4 fw-bold mb-0 text-white">For a Brighter Cleaner Future</h2>
            </div>
        </section>
    </div>
    <div class="col-lg-4 col-md-8 col-sm-4 col-xs-4">
        <section class="py-5 cta-section-item" style="background-color: var(--primary-blue); border-radius: 26px 0 0 26px; ">
            <div class="container h-100 d-flex align-items-center">
                <div class="card bg-primary text-white w-100" style="border-color: var(--primary-blue) !important;">
                    <div class="card-body p-4">
                        <h3 class="fw-bold mb-3">Let's Power the Planet- Sustainably</h3>
                        <p>Discover the sustainable technologies we use to drive the global transition to renewable energy.</p>
                        <div class="d-inline-flex align-items-center">
                            <a href="#contact" class="btn btn-outline-primary flex-shrink-0 btn-outline-primary-cta text-white "style="border-radius: 28px; border-color:white !important;" >Get connected</a> 
                            <img src="{{ asset('assets/icons/blue-arrow-up.png') }}" class="img-fluid" style="width: 40px;height: 40px;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

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
});
</script>
@endpush
