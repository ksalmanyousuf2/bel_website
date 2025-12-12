@extends('layouts.app')

@section('title', 'Cleaning Services - Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/cleaning-services.css') }}">
<link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="cleaning-hero-section">
    <div class="cleaning-hero-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="cleaning-hero-title">Cleaning Services</h1>
                <p class="cleaning-hero-subtitle">Spotless spaces, stress-free living</p>
                <a href="#our-mission" class="btn cleaning-hero-btn">Learn more</a>
            </div>
        </div>
    </div>
    {{-- <div class="cleaning-hero-tool">
        <img src="{{ asset('assets/images/freepik_edit_Write-confident-marketing-copy-for-a-professional- 1.png') }}" alt="Cleaning Tool" class="img-fluid">
    </div> --}}
</section>

<!-- Our Mission Section -->
<section class="cleaning-mission-section" id="our-mission">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="cleaning-section-title">Our Mission:</h2>
                <p class="cleaning-mission-text">
                    At Beacon Energy, our mission is to provide innovative, eco-friendly solar panel cleaning solutions that maximize efficiency and sustainability for our clients in Lahore. We aim to enhance the performance and longevity of solar energy systems through automated, water-saving auto cleaning technologies. By integrating environmentally conscious practices with cutting-edge automation, we seek to contribute to a cleaner, greener future while delivering unmatched convenience and value to our customers.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="cleaning-mission-image">
                    <img src="{{ asset('assets/images/freepik_edit_Write-confident-marketing-copy-for-a-professional- 1.png') }}" alt="Solar Panel Cleaning" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Offerings Section -->
<section class="cleaning-services-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <img src="{{ asset('assets/images/Group 177.png') }}" alt="Commercial Cleaning" class="img-fluid" style="    max-height: 564px !important; width: 100% !important; object-fit: cover;">

                {{-- <div class="cleaning-services-images"> --}}
                    {{-- <div class="service-image-top">
                        <img src="{{ asset('assets/images/Rectangle.png') }}" alt="Industrial Cleaning" class="img-fluid">
                    </div> --}}
                    {{-- <div class="service-image-bottom">
                    </div> --}}
                {{-- </div> --}}
            </div>
            <div class="col-lg-4">
                <div class="cleaning-services-content">
                    <!-- Industrial Cleaning Service -->
                    <div class="service-item-wrapper">
                        <div class="service-header">
                            <img src="{{ asset('assets/icons/mdi_industrial.svg') }}" alt="Industrial" class="service-icon-img">
                            <h3 class="service-title">Industrial cleaning services</h3>
                        </div>
                        <p class="service-description">
                            Maximize your solar panel efficiency with our specialized industrial solar panel cleaning services.
                        </p>
                    </div>

                    <!-- Commercial Cleaning Service -->
                    <div class="service-item-wrapper">
                        <div class="service-header">
                            <img src="{{ asset('assets/icons/Layer_1 (1).svg') }}" alt="Commercial" class="service-icon-img">
                            <h3 class="service-title">Commercial cleaning services</h3>
                        </div>
                        <p class="service-description">
                            Maximize the efficiency of your solar panels with our professional commercial solar panel cleaning services. Contact us to schedule a service.
                        </p>
                    </div>
                    <!-- Industrial Cleaning Service -->
                    {{-- <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-industry"></i>
                        </div>
                        <h3 class="service-title">Industrial cleaning services</h3>
                        <p class="service-description">
                            Maximize your solar panel efficiency with our specialized industrial solar panel cleaning services.
                        </p>
                    </div> --}}
                    
                    <!-- Commercial Cleaning Service -->
                    {{-- <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3 class="service-title">Commercial cleaning services</h3>
                        <p class="service-description">
                            Maximize the efficiency of your solar panels with our professional commercial solar panel cleaning services. Contact us to schedule a service.
                        </p>
                    </div> --}}
                </div>
            </div>
        </div>
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
                    <h2 class="cleaning-connect-title mt-5" style="margin-top: 240px !important;">Get Solar Cleaning Service</h2>
                    <p class="cleaning-connect-description">
                        Beacon Energy has a robust Monitoring & support app that gives customers complete visibility over their solar system. Available on all mobile and desktop platforms, the app allows the user to see all current and historical data about energy production, utilization, export, and overall saving.
                    </p>
                    <div class="cleaning-connect-buttons">
                        <a href="#" class="cleaning-app-btn">
                            <img src="{{ asset('assets/icons/google_store.svg') }}" alt="Google Play" class="img-fluid">
                        </a>
                        <a href="#" class="cleaning-app-btn">
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

<!-- Popular Projects Carousel Section -->
<section class="cleaning-projects-section">
    <div class="container">
        <div class="projects-carousel-header">
            <div class="projects-carousel-title-wrapper">
                <h2 class="projects-carousel-title">Let's See Popular Projects</h2>
                <a href="{{ route('projects.index') }}" class="projects-see-all-link">See All Projects</a>
            </div>
            <div class="projects-carousel-nav">
                <button class="projects-carousel-nav-btn projects-carousel-prev" type="button" aria-label="Previous">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="projects-carousel-nav-btn projects-carousel-next" type="button" aria-label="Next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
        
        @if($projects->count() > 0)
        <div class="projects-carousel-wrapper">
            <div class="projects-carousel-track" id="projectsCarouselTrack">
                @foreach($projects as $project)
                <div class="projects-carousel-slide">
                    <div class="project-card">
                        @if($project->images->count() > 0)
                        <div class="project-image-wrapper">
                            <img src="{{ asset('storage/' . $project->images->first()->image_path) }}" 
                                    alt="{{ $project->name }}" 
                                    class="project-image">
                        </div>
                        @else
                        <div class="project-image-wrapper">
                            <div class="project-image-placeholder">
                                <i class="fas fa-solar-panel"></i>
                            </div>
                        </div>
                        @endif
                        <div class="project-card-body">
                            <p class="project-name">{{ $project->name }}</p>
                            @if($project->capacity)
                            <p class="project-capacity">Capacity: {{ $project->capacity }}</p>
                            @endif
                            <p class="project-location">
                                <i class="fas fa-map-marker-alt"></i>
                                {{ $project->location }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @else
        <div class="projects-empty">
            <p>No projects available at the moment.</p>
        </div>
        @endif
    </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const carouselTrack = document.getElementById('projectsCarouselTrack');
    const prevBtn = document.querySelector('.projects-carousel-prev');
    const nextBtn = document.querySelector('.projects-carousel-next');
    
    if (!carouselTrack || !prevBtn || !nextBtn) {
        return;
    }
    
    const slides = carouselTrack.querySelectorAll('.projects-carousel-slide');
    if (slides.length === 0) {
        return;
    }
    
    let currentIndex = 0;
    let visibleSlides = 3; // Number of slides visible at once
    let slideWidth = 0;
    let gap = 24; // Gap between slides in pixels
    
    function updateVisibleSlides() {
        const containerWidth = carouselTrack.parentElement.offsetWidth;
        if (window.innerWidth >= 1200) {
            visibleSlides = 3;
        } else if (window.innerWidth >= 992) {
            visibleSlides = 2;
        } else if (window.innerWidth >= 768) {
            visibleSlides = 2;
        } else {
            visibleSlides = 1;
        }
        
        slideWidth = (containerWidth - (gap * (visibleSlides - 1))) / visibleSlides;
        slides.forEach(slide => {
            slide.style.minWidth = slideWidth + 'px';
            slide.style.maxWidth = slideWidth + 'px';
        });
        
        updateCarousel();
    }
    
    function updateCarousel() {
        const maxIndex = Math.max(0, slides.length - visibleSlides);
        const translateX = -(currentIndex * (slideWidth + gap));
        carouselTrack.style.transform = `translateX(${translateX}px)`;
        
        prevBtn.classList.toggle('disabled', currentIndex === 0);
        nextBtn.classList.toggle('disabled', currentIndex >= maxIndex);
    }
    
    function moveNext() {
        const maxIndex = Math.max(0, slides.length - visibleSlides);
        if (currentIndex < maxIndex) {
            currentIndex++;
            updateCarousel();
        }
    }
    
    function movePrev() {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        }
    }
    
    nextBtn.addEventListener('click', moveNext);
    prevBtn.addEventListener('click', movePrev);
    
    // Initialize
    updateVisibleSlides();
    window.addEventListener('resize', function() {
        clearTimeout(window.carouselResizeTimeout);
        window.carouselResizeTimeout = setTimeout(updateVisibleSlides, 150);
    });
});
</script>
@endpush

