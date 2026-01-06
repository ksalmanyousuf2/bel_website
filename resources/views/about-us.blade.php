@extends('layouts.app')

@section('title', 'About Us - Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
<style>
    /* Background images for hero slides - using Laravel asset helper */
    .about-hero-slide-1 {
        background-image: url('{{ asset('assets/images/Gemini_Generated_Image_1wsvii1wsvii1wsv 1.svg') }}');
    }
    .about-hero-slide-2 {
        background-image: url('{{ asset('assets/images/mask_group.png') }}');
    }
</style>
@endpush

@section('content')
<!-- Hero Section -->
<section class="about-hero-section about-hero-slide-1">
    <div class="about-hero-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="about-hero-title">
                    <span class="d-block">Doing Clean Power</span>
                    <span class="d-block">Right</span>
                </h1>
                <p class="about-hero-subtitle">Sustainable energy, smart storage, and reliable power</p>
            </div>
        </div>
    </div>
</section>

<!-- The Right Power Forward Section -->
<section class="py-5" id="learn-more">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="section-title">The Right Power Forward</h2>
                <p class="section-description">Beacon Energy has a robust Monitoring & support app that gives customers complete visibility over their solar system. Available on all mobile and desktop platforms, the app allows the user to see all current and historical data about energy production, utilization, export, and overall saving.</p>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/icons/system_flow.svg') }}" alt="System Flow" class="img-fluid system-flow-image">
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="stat-item">
                    <div class="stat-number">154</div>
                    <div class="stat-label">Power Plants in operation</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="stat-item">
                    <div class="stat-number">18</div>
                    <div class="stat-label">Countries</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="stat-item">
                    <div class="stat-number">1,200</div>
                    <div class="stat-label">Customers</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="stat-item">
                    <div class="stat-number">5.3GW</div>
                    <div class="stat-label">In operation at June 2025</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="stat-item">
                    <div class="stat-number">1GW</div>
                    <div class="stat-label">Under construction</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="stat-item">
                    <div class="stat-number">9.8GW</div>
                    <div class="stat-label">Under development</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline of Achievements Section -->
<section class="timeline-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">  
        <h2 class="section-title text-center mb-5">Timeline of Achievements</h2>
            
            </div>
            <div class="col-lg-8">
                <p class="section-description text-center mb-5">Beacon Energy has a robust monitoring & support app that gives customers complete visibility over their solar system. Available on all mobile and desktop platforms, the app allows the user to see all current and historical data about energy production, utilization, export, and overall saving.</p>
            </div>
        </div>
        <!-- Carousel Navigation - Top Left -->
        <div class="achievements-carousel-nav">
            <button class="achievements-nav-btn carousel-control-prev" type="button" data-bs-target="#achievementsCarousel" data-bs-slide="prev">
                <i class="fas fa-arrow-left"></i>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="achievements-nav-btn carousel-control-next" type="button" data-bs-target="#achievementsCarousel" data-bs-slide="next">
                <i class="fas fa-arrow-right"></i>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
        <div id="achievementsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row g-4">
                        <div class="col-md-3">
                            <div class="achievement-card">
                                <div class="achievement-image">
                                    <img src="{{ asset('assets/images/start_of_operations.png') }}" alt="Start of Operations" class="img-fluid">
                                </div>
                                <div class="achievement-text">
                                    <p>September 2025 <br> Start of commercial operation of Phase I of Black Hollow Sun Solar Complex, with 185 MWp of installed capacity, located in Colorado, serving Platte River Power Authority.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="achievement-card">
                                <div class="achievement-image">
                                    <img src="{{ asset('assets/images/contourglobal.png') }}" alt="ContourGlobal" class="img-fluid">
                                </div>
                                <div class="achievement-text">
                                    <p>September 2025 <br> Start of commercial operation of Phase I of Black Hollow Sun Solar Complex, with 185 MWp of installed capacity, located in Colorado, serving Platte River Power Authority.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="achievement-card">
                                <div class="achievement-image">
                                    <img src="{{ asset('assets/images/inauguration.png') }}" alt="Inauguration" class="img-fluid">
                                </div>
                                <div class="achievement-text">
                                    <p>September 2025 <br> Start of commercial operation of Phase I of Black Hollow Sun Solar Complex, with 185 MWp of installed capacity, located in Colorado, serving Platte River Power Authority.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="achievement-card">
                                <div class="achievement-image">
                                    <img src="{{ asset('assets/images/sales.png') }}" alt="Sale" class="img-fluid">
                                </div>
                                <div class="achievement-text">
                                    <p>September 2025 <br> Start of commercial operation of Phase I of Black Hollow Sun Solar Complex, with 185 MWp of installed capacity, located in Colorado, serving Platte River Power Authority.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second slide for carousel rotation -->
                <div class="carousel-item">
                    <div class="row g-4">
                        <div class="col-md-3">
                            <div class="achievement-card">
                                <div class="achievement-image">
                                    <img src="{{ asset('assets/images/start_of_operations.png') }}" alt="Start of Operations" class="img-fluid">
                                </div>
                                <div class="achievement-text">
                                    <p>September 2025 Start of commercial operation of Phase I of Black Hollow Sun Solar Complex, with 185 MWp of installed capacity, located in Colorado, serving Platte River Power Authority.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="achievement-card">
                                <div class="achievement-image">
                                    <img src="{{ asset('assets/images/contourglobal.png') }}" alt="ContourGlobal" class="img-fluid">
                                </div>
                                <div class="achievement-text">
                                    <p>September 2025 Start of commercial operation of Phase I of Black Hollow Sun Solar Complex, with 185 MWp of installed capacity, located in Colorado, serving Platte River Power Authority.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="achievement-card">
                                <div class="achievement-image">
                                    <img src="{{ asset('assets/images/inauguration.png') }}" alt="Inauguration" class="img-fluid">
                                </div>
                                <div class="achievement-text">
                                    <p>September 2025 Start of commercial operation of Phase I of Black Hollow Sun Solar Complex, with 185 MWp of installed capacity, located in Colorado, serving Platte River Power Authority.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="achievement-card">
                                <div class="achievement-image">
                                    <img src="{{ asset('assets/images/sales.png') }}" alt="Sale" class="img-fluid">
                                </div>
                                <div class="achievement-text">
                                    <p>September 2025 Start of commercial operation of Phase I of Black Hollow Sun Solar Complex, with 185 MWp of installed capacity, located in Colorado, serving Platte River Power Authority.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How Do We Build a More Sustainable Future Section -->
<section class="sustainable-future-section">
    <div class="sustainable-future-wrapper">
        <div class="sustainable-future-image">
            <img src="{{ asset('assets/images/sustainable-fututre-section.svg') }}" alt="Sustainable Future" class="img-fluid">
        </div>
        <div class="sustainable-future-overlay">
            <div class="sustainable-future-content">
                <h2>How Do We Build a More Sustainable Future</h2>
                <p>By embedding ESG principles into our strategy and leveraging our global network to drive impactful green energy innovations, we have successfully achieved green and zero-waste factories since 2022, making significant strides toward carbon neutrality.</p>
                {{-- <div class="sustainable-future-cta">
                    <a href="#" class="btn sustainable-learn-btn">Learn more</a>
                    <div class="sustainable-arrow-circle">
                        <img src="{{ asset('assets/icons/solid-white-arrow-up.svg') }}" alt="Arrow" class="sustainable-arrow-icon">
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>

<!-- Global Partners Section -->
@if($globalPartners->count() > 0)
<section class="global-partners-section">
    <div class="container">
        <h2 class="section-title text-center mb-5">Our Global Partners</h2>
        <div class="row g-4">
            @foreach($globalPartners as $partner)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="partner-card">
                    @if($partner->logo)
                    <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}" class="partner-logo">
                    @else
                    <div class="partner-name">{{ $partner->name }}</div>
                    @endif
                    
                    {{-- @if($partner->description)
                    <div class="partner-description">{{ $partner->description }}</div>
                    @endif --}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize achievements carousel
    var achievementsCarousel = document.getElementById('achievementsCarousel');
    if (achievementsCarousel) {
        var carousel = new bootstrap.Carousel(achievementsCarousel, {
            interval: 5000,
            ride: 'carousel',
            pause: false,
            wrap: true
        });
        
        // Ensure navigation buttons work
        var prevBtn = document.querySelector('.achievements-nav-btn.carousel-control-prev');
        var nextBtn = document.querySelector('.achievements-nav-btn.carousel-control-next');
        
        if (prevBtn) {
            prevBtn.addEventListener('click', function(e) {
                e.preventDefault();
                carousel.prev();
            });
        }
        
        if (nextBtn) {
            nextBtn.addEventListener('click', function(e) {
                e.preventDefault();
                carousel.next();
            });
        }
    }
});
</script>
@endpush

