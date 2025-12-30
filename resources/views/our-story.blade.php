@extends('layouts.app')

@section('title', 'Our Story - Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/our-story.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="our-story-hero-section">
    {{-- <div class="hero-animated-background">
        <div class="hero-floating-shape hero-shape-1"></div>
        <div class="hero-floating-shape hero-shape-2"></div>
        <div class="hero-floating-shape hero-shape-3"></div>
        <div class="hero-floating-shape hero-shape-4"></div>
    </div> --}}
    <div class="our-story-hero-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto">
                <div class="hero-content-wrapper text-center">
                    <div class="hero-badge">
                        <i class="fas fa-seedling me-2"></i>Pioneering Clean Energy
                    </div>
                    <h1 class="our-story-hero-title">Our Story</h1>
                    <p class="our-story-hero-subtitle">Illuminating Paths to Progress</p>
                    <p class="our-story-hero-description">
                        One of our key aspirations for diversifying into renewable energy was to be a catalyst for positive change in the world. We believe in creating a sustainable future through innovative clean energy solutions that empower communities and transform lives.
                    </p>
                    
                    <!-- Key Highlights -->
                    {{-- <div class="hero-highlights">
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div class="highlight-content">
                                <div class="highlight-number" data-count="7">0</div>
                                <div class="highlight-label">Countries</div>
                            </div>
                        </div>
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="highlight-content">
                                <div class="highlight-number" data-count="315">0</div>
                                <div class="highlight-label">Thousand+ Students</div>
                            </div>
                        </div>
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <div class="highlight-content">
                                <div class="highlight-number" data-count="2022">0</div>
                                <div class="highlight-label">Green Since</div>
                            </div>
                        </div>
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-industry"></i>
                            </div>
                            <div class="highlight-content">
                                <div class="highlight-number" data-count="5">0</div>
                                <div class="highlight-label">Industries</div>
                            </div>
                        </div>
                    </div> --}}
                    
                    <div class="our-story-hero-cta">
                        <a href="#ceo-message" class="btn our-story-learn-btn">
                            <i class="fas fa-arrow-down me-2"></i>Discover Our Journey
                        </a>
                        {{-- <img src="{{ asset('assets/icons/solid-white-arrow-up.svg') }}" class="our-story-cta-arrow" alt="Arrow"> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="hero-scroll-indicator">
        <div class="scroll-mouse">
            <div class="scroll-wheel"></div>
        </div>
        <span class="scroll-text">Scroll to explore</span>
    </div> --}}
</section>

<!-- CEO's Message Section -->
<section class="ceo-message-section" id="ceo-message">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-badge">
                    <i class="fas fa-quote-left me-2"></i>Leadership
                </div>
                <h2 class="ceo-message-title">CEO's Message</h2>
                <div class="ceo-message-content">
                    <p>Beacon Energy Limited (BEL) is a venture of The Beaconhouse Group, focusing on quality and customer needs. We aspire to diversify into renewable energy, recognizing the adverse impact of humans on the planet.</p>
                    <p>Solar energy is environmentally friendly, inexpensive, and accessible to disadvantaged people. Our goal is to provide affordable clean energy for a cleaner and more equal future.</p>
                    <p>By embedding ESG principles into our strategy and leveraging our global network to drive impactful green energy innovations, we have successfully achieved green and zero-waste factories since 2022, making significant strides toward carbon neutrality.</p>
                </div>
                <div class="ceo-signature">
                    <div class="signature-line"></div>
                    <p class="signature-text" style="margin-bottom: 50px;">Leading the Future of Energy</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ceo-image-wrapper">
                    <div class="ceo-image-glow"></div>
                    <img src="{{ asset('assets/images/ceo_image.png') }}" alt="CEO" class="img-fluid">
                </div>
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

<!-- Timeline of Achievements Section -->
<section class="timeline-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">  
        <h2 class="section-title mb-5">Timeline of Achievements</h2>
            
            </div>
            <div class="col-lg-8">
                <p class="section-description mb-5" style="text-align: justify;">Beacon Energy has a robust Monitoring & support app that gives customers complete visibility over their solar system. Available on all mobile and desktop platforms, the app allows the user to see all current and historical data about energy production, utilization, export, and overall saving.</p>
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
<!-- Mission & Vision Section -->
<section class="mission-vision-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="mission-vision-card">
                    <div class="card-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="card-title">Our Mission</h3>
                    <p class="card-content">To empower communities and industries with innovative renewable energy solutions that drive sustainable growth, reduce environmental impact, and create a cleaner, more equitable future for all.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mission-vision-card">
                    <div class="card-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="card-title">Our Vision</h3>
                    <p class="card-content">To become a global leader in clean energy transformation, setting new standards for sustainability, innovation, and social responsibility while making renewable energy accessible to everyone.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="beaconhouse-group-header-section">
    <div class="beaconhouse-group-header-pattern"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="beaconhouse-group-header-content">
                    <div class="beaconhouse-group-logo-wrapper">
                        <img src="{{ asset('assets/logos/Layer_1 (2).png') }}" alt="Beaconhouse Group" class="beaconhouse-group-logo">
                    </div>
                    <h2 class="beaconhouse-group-title">Beaconhouse Group</h2>
                    <div class="beaconhouse-group-divider"></div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="beaconhouse-group-description-wrapper">
                    <p class="beaconhouse-group-description">The Beaconhouse Group is a global leader in education, operating as one of the largest private school networks worldwide, with <strong>315,000+ students</strong> across seven countries—Pakistan, Malaysia, Oman, the UAE, the Philippines, Thailand, and Belgium.</p>
                    <p class="beaconhouse-group-description">Beyond education, the Group has expanded its presence into publishing, real estate, information technology, renewable energy, and hospitality. By leveraging expertise across diverse industries, we strive to drive innovation and create meaningful impact across multiple sectors.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="beaconhouse-group-section-connector"></div>
</section>

<!-- Beaconhouse Group Section -->
<section class="beaconhouse-group-section">
    <div class="beaconhouse-group-image-wrapper">
        <img src="{{ asset('assets/images/Asset 24 1.png') }}" alt="Beaconhouse Group" class="beaconhouse-group-bg-image">
    </div>
    <div class="beaconhouse-group-content">
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="beaconhouse-logos-container">
                        <!-- Early childhood to Higher Education -->
                        <div class="logo-category mb-4">
                            <h3 class="category-title">Early childhood to Higher Education</h3>
                            <div class="logos-grid">

                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 39.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 42.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 43.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 44.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 45.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 46.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 47.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 48.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 49.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 50.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 51.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 52.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/icons/2648273629456.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/icons/2648378431840.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/icons/2648378448576.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/icons/2648378466144.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/icons/2648378476000.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/icons/2648378486944.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/icons/2648322508528.png') }}" alt="Logo">
                                </div>
                                
                            </div>
                        </div>

                        <!-- Beyond Education -->
                        <div class="logo-category mb-4">
                            <h3 class="category-title">Beyond Education</h3>
                            <div class="logos-grid">
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 25.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 34.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 32.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 31.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/icons/2648329514416.png') }}" alt="Logo">
                                </div>
                            </div>
                        </div>

                        <!-- Non-Profit -->
                        <div class="logo-category">
                            <h3 class="category-title">Non-Profit</h3>
                            <div class="logos-grid">
                                <div class="logo-item">
                                    <img src="{{ asset('assets/icons/bnu.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/icons/makwt.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/icons/sot.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/icons/lighthouse.png') }}" alt="Logo">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animated Counter for Highlights
    const counters = document.querySelectorAll('.highlight-number');
    const animateCounter = (counter) => {
        const target = parseInt(counter.getAttribute('data-count'));
        const duration = 2000;
        const increment = target / (duration / 16);
        let current = 0;
        
        const updateCounter = () => {
            current += increment;
            if (current < target) {
                if (target >= 1000) {
                    counter.textContent = Math.floor(current) + 'K';
                } else {
                    counter.textContent = Math.floor(current);
                }
                requestAnimationFrame(updateCounter);
            } else {
                if (target >= 1000) {
                    counter.textContent = target + 'K';
                } else {
                    counter.textContent = target;
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

    // Initialize achievements carousel (timeline)
    const achievementsCarousel = document.getElementById('achievementsCarousel');
    if (achievementsCarousel) {
        const carousel = new bootstrap.Carousel(achievementsCarousel, {
            interval: 5000,
            ride: 'carousel',
            pause: false,
            wrap: true
        });

        const prevBtn = document.querySelector('.achievements-nav-btn.carousel-control-prev');
        const nextBtn = document.querySelector('.achievements-nav-btn.carousel-control-next');

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
@endsection

