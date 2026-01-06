@extends('layouts.app')

@section('title', 'BESS - Battery Energy Storage System | Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/bess.css') }}">
<link rel="stylesheet" href="{{ asset('css/industrial-commercial.css') }}">
@endpush

@section('content')

<!-- Hero Section -->
<section class="bess-hero-section">
    <div class="bess-hero-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="bess-hero-title">BESS</h1>
                <p class="bess-hero-subtitle">Battery Energy Storage System</p>
            </div>
        </div>
    </div>
</section>

<!-- Problem/Solution Introduction Section -->
<section class="bess-intro-section py-5" id="our-mission">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="bess-intro-question">Is unreliable power disrupting your operations and impacting productivity?</h2>
                <p class="bess-intro-description">
                    BEL BESS is an intelligent Battery Energy Storage solution designed to maximize renewable energy utilization, enhance power reliability, and reduce reliance on the grid. Tailored for commercial and industrial needs, our BESS systems seamlessly integrate with your existing infrastructure to provide uninterrupted power supply, optimize energy costs, and support sustainable operations.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Key Features/Benefits Section -->
<section class="bess-features-section py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Feature 1: No Upfront Capital Investment -->
            <div class="col-lg-3 col-md-6">
                <div class="bess-feature-card">
                    <div class="bess-feature-icon">
                        <!-- Icon placeholder - user will add image -->
                        <img src="{{ asset('assets/icons/image 1.svg') }}" alt="No Upfront Capital Investment" class="img-fluid">
                    </div>
                    <h5 class="bess-feature-title">No Upfront Capital Investment</h5>
                </div>
            </div>
            
            <!-- Feature 2: Real Time Control -->
            <div class="col-lg-3 col-md-6">
                <div class="bess-feature-card">
                    <div class="bess-feature-icon">
                        <!-- Icon placeholder - user will add image -->
                        <img src="{{ asset('assets/icons/image 2.svg') }}" alt="Real Time Control" class="img-fluid">
                    </div>
                    <h5 class="bess-feature-title">Real Time Control</h5>
                </div>
            </div>
            
            <!-- Feature 3: Black Start -->
            <div class="col-lg-3 col-md-6">
                <div class="bess-feature-card">
                    <div class="bess-feature-icon">
                        <!-- Icon placeholder - user will add image -->
                        <img src="{{ asset('assets/icons/image 3.svg') }}" alt="Black Start" class="img-fluid">
                    </div>
                    <h5 class="bess-feature-title">Black Start</h5>
                </div>
            </div>
            
            <!-- Feature 4: Solar Wind Farming -->
            <div class="col-lg-3 col-md-6">
                <div class="bess-feature-card">
                    <div class="bess-feature-icon">
                        <!-- Icon placeholder - user will add image -->
                        <img src="{{ asset('assets/icons/image 5.svg') }}" alt="Solar Wind Farming" class="img-fluid">
                    </div>
                    <h5 class="bess-feature-title">Solar Wind Farming</h5>
                </div>
            </div>

              <!-- Feature 5: Power Factor Improvement -->
              <div class="col-lg-3 col-md-6">
                <div class="bess-feature-card">
                    <div class="bess-feature-icon">
                        <!-- Icon placeholder - user will add image -->
                        <img src="{{ asset('assets/icons/image 10.svg') }}" alt="Power Factor Improvement" class="img-fluid">
                    </div>
                    <h5 class="bess-feature-title">Power Factor Improvement</h5>
                </div>
            </div>
            
            <!-- Feature 6: Power Factor Improvement -->
            <div class="col-lg-3 col-md-6">
                <div class="bess-feature-card">
                    <div class="bess-feature-icon">
                        <!-- Icon placeholder - user will add image -->
                        <img src="{{ asset('assets/icons/image 7.svg') }}" alt="Power Factor Improvement" class="img-fluid">
                    </div>
                    <h5 class="bess-feature-title">Genset Support & Contingency Management</h5>
                </div>
            </div>
            
            <!-- Feature 7: Genset Support & Contingency Management -->
            <div class="col-lg-3 col-md-6">
                <div class="bess-feature-card">
                    <div class="bess-feature-icon">
                        <!-- Icon placeholder - user will add image -->
                        <img src="{{ asset('assets/icons/image 8.svg') }}" alt="Genset Support & Contingency Management" class="img-fluid">
                    </div>
                    <h5 class="bess-feature-title">Genset Support & Contingency Management</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Choice Section -->
<section class="bess-product-choice-section">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-5">
                <h2 class="bess-section-title">Make the right choice.</h2>

            </div>
            <div class="col-lg-7">
                <img src="{{ asset('assets/icons/System 1.svg') }}" alt="BEL BESS Product Choice" style="width: 100%; height: auto;" class="img-fluid">
            </div>
        </div>
        
        <!-- Two Product Options -->
        <div class="row g-4 py-5">
            <!-- Commercial BESS -->
            <div class="col-lg-12">
                <div class="bess-product-card" style="background-color: #00399E !important; border-radius: 16px; min-height: 550px;">
                    <div class="row g-4" style="color: white !important;">
                        <div class="col-lg-6">
                            <div class="bess-product-image" style="height: 500px !important; min-height: 500px;">
                                <!-- Image placeholder - user will add image -->
                                <img src="{{ asset('assets/images/commercial-bess.png') }}" alt="Commercial BESS" class="img-fluid" style="width: 485px; height: 458px; object-fit: contain;">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bess-product-content">
                                <h3 class="bess-product-title">Commercial BESS</h3>
                                <p class="bess-product-description">
                                    Our smart energy storage system seamlessly integrates solar power, battery storage, and the grid to deliver a reliable and efficient energy solution 
                                    for modern businesses. Designed for flexibility, it enables rapid transitions between on-grid and off-grid modes, ensuring a continuous and stable power 
                                    supply even during outages or grid fluctuations. This intelligent system supports uninterrupted operations, optimizes energy usage, reduces reliance on
                                     the grid, and promotes sustainable power management for a greener, more resilient future.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Industrial BESS -->
            <div class="col-lg-12">
                
                <div class="bess-product-card" style="min-height: 550px;">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="bess-product-content">
                                <h3 class="bess-product-title" style="color: black; !important;">Industrial BESS</h3>
                                <p class="bess-product-description" style="color: black !important;">
                                    Our highly efficient Battery Energy Storage System (BESS) is designed to minimize production losses and maximize
                                    solar power generation, providing businesses with a reliable path toward energy independence and improved productivity.
                                    With a range of battery capacities tailored to diverse operational needs, BESS delivers flexible energy solutions ideal
                                    for small to medium-sized enterprises. By ensuring consistent power availability and optimizing renewable energy usage,
                                    it helps reduce costs, enhance sustainability, and maintain seamless operations.</p>
                            </div> 
                        </div>
                        <div class="col-lg-6">
                            <div class="bess-product-image" style="height: 500px !important; min-height: 500px; background:white !important;">
                                <!-- Image placeholder - user will add image -->
                                <img src="{{ asset('assets/images/industrial_bess.png') }}" alt="Industrial BESS" class="img-fluid">
                            </div>
                        </div>
                        
                    </div>
                    {{-- <div class="bess-product-image">
                        <!-- Image placeholder - user will add image -->
                        <img src="" alt="Industrial BESS" class="img-fluid">
                    </div>
                    <div class="bess-product-content">
                        <h3 class="bess-product-title">Industrial BESS</h3>
                        <p class="bess-product-description">
                            Designed to minimize production losses, maximize solar power generation, and provide reliable energy for small to medium-sized enterprises. Our Industrial BESS ensures consistent power supply, optimizes renewable energy usage, and supports critical operations with seamless grid integration and intelligent energy management.
                        </p>
                    </div> --}}
                </div>
            </div>
            

        </div>
    </div>
</section>

{{-- <!-- Applications Section -->
<section class="bess-applications-section">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12">
                <h2 class="bess-section-title">Applications</h2>
                <p class="bess-section-subtitle">Where intelligent storage delivers real impact</p>
            </div>
        </div>
        
        <!-- Large Image -->
        <div class="bess-applications-image mb-4">
            <!-- Image placeholder - user will add image -->
            <img src="{{ asset('assets/images/bess_image_3.png') }}" alt="BESS Applications" class="img-fluid">
        </div>
        
        <!-- Application Cards -->
        <div class="row g-4">
            <!-- Industrial High-load -->
            <div class="col-lg-6 col-md-6">
                <div class="bess-application-card bess-application-card-blue">
                    <div class="bess-application-icon">
                        <!-- Icon placeholder - user will add image -->
                        <img src="{{ asset('assets/icons/industry_17601279 1.svg') }}" alt="Industrial High-load" >
                    </div>
                    <h5 class="bess-application-title">Industrial High-load</h5>
                    <p class="bess-application-subtitle">High-load • Continuous operations</p>
                </div>
            </div>
            
            <!-- Commercial -->
            <div class="col-lg-6 col-md-6">
                <div class="bess-application-card bess-application-card-light-blue">
                    <div class="bess-application-icon">
                        <!-- Icon placeholder - user will add image -->
                        <img src="{{ asset('assets/icons/retail_17601150 1.svg') }}" alt="Commercial">
                    </div>
                    <h5 class="bess-application-title">Commercial</h5>
                    <p class="bess-application-subtitle">Cost optimization • Reliability</p>
                </div>
            </div>

             <!-- Hybrid & Off-Grid -->
             <div class="col-lg-6 col-md-6">
                <div class="bess-application-card bess-application-card-light-blue">
                    <div class="bess-application-icon" style="width: 156px !important; height: 156px !important; background: #78909C; border-radius: 80px!important;">
                        <!-- Icon placeholder - user will add image -->
                        <img src="{{ asset('assets/icons/17967289 1 (1).svg') }}" alt="Hybrid & Off-Grid" class="img-fluid">
                    </div>
                    <h5 class="bess-application-title">SME & Enterprises</h5>
                    <p class="bess-application-subtitle">Smart storage • Energy control</p>
                </div>
            </div>
            
            <!-- SME & Enterprises -->
            <div class="col-lg-6 col-md-6">
                <div class="bess-application-card bess-application-card-blue">
                    <div class="bess-application-icon"  style="width: 156px !important; height: 156px !important; background: #78909C; border-radius: 80px!important;">
                        <!-- Icon placeholder - user will add image -->
                        <img src="{{ asset('assets/icons/17601436 1.svg') }}" alt="SME & Enterprises" class="img-fluid">
                    </div>
                    <h5 class="bess-application-title">Hybrid & Off-Grid</h5>
                    <p class="bess-application-subtitle">Energy independence</p>
                </div>
            </div>
            
        </div>
    </div>
</section> --}}

<!-- Applications Section -->
<section class="applications-section">
    <div class="container-fluid" style="padding-right: 0px !important;">
        <h2 class="section-title">Applications</h2>
        <p class="section-description">Our solutions deliver optimal Return on Investment (ROI) and significantly reduce energy bills for our customers.</p>

        <hr class="my-4" style="margin-bottom: 6.5rem !important;">
        <div class="applications-carousel-wrapper">
            <div class="applications-carousel-nav">
                <button class="applications-nav-btn carousel-control-prev" type="button" aria-label="Previous application">
                    <i class="fas fa-arrow-left"></i>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="applications-nav-btn carousel-control-next" type="button" aria-label="Next application">
                    <i class="fas fa-arrow-right"></i>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="applications-carousel-content">
                <div class="applications-slider">
                    <div class="applications-slider-track">
                        <div class="application-card">
                            <div class="application-image">
                                <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=800&h=600&fit=crop&q=80" alt="Textile mill with solar panels" class="img-fluid" loading="lazy">
                            </div>
                            <div class="application-content">
                                <h3 class="application-title">Textile</h3>
                                <p class="application-description">Beacon Energy delivers tailored solar solutions for textile mills, enabling uninterrupted power for spinning, weaving, and processing operations. Our systems reduce energy costs, stabilize production, and support sustainability goals while providing real-time monitoring and long-term reliability across high-consumption industrial environments.</p>
                            </div>
                        </div>
                        <div class="application-card">
                            <div class="application-image">
                                <img src="https://images.pexels.com/photos/1267320/pexels-photo-1267320.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop" alt="Beverage manufacturing facility" class="img-fluid" loading="lazy">
                            </div>
                            <div class="application-content">
                                <h3 class="application-title">Beverages</h3>
                                <p class="application-description">Beacon Energy provides reliable solar energy solutions for beverage manufacturers, ensuring continuous power for bottling, processing, and refrigeration systems. Our solar installations lower operational costs, enhance energy efficiency, and protect businesses from rising electricity tariffs while maintaining consistent production performance year-round.</p>
                            </div>
                        </div>
                        <div class="application-card">
                            <div class="application-image">
                                <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&h=600&fit=crop&q=80" alt="Cold storage warehouse" class="img-fluid" loading="lazy">
                            </div>
                            <div class="application-content">
                                <h3 class="application-title">Cold Storage</h3>
                                <p class="application-description">Beacon Energy offers specialized solar solutions for cold storage facilities, delivering dependable power for refrigeration and temperature-controlled environments. Our systems minimize energy expenses, reduce product spoilage risks, and ensure uninterrupted operations, even during peak load hours and grid instability.</p>
                            </div>
                        </div>
                        <div class="application-card">
                            <div class="application-image">
                                <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=800&h=600&fit=crop&q=80" alt="Manufacturing facility" class="img-fluid" loading="lazy">
                            </div>
                            <div class="application-content">
                                <h3 class="application-title">Manufacturing</h3>
                                <p class="application-description">Beacon Energy supports manufacturing facilities with high-capacity solar solutions designed for heavy machinery and continuous operations. Our systems help manufacturers control energy costs, improve operational efficiency, and achieve sustainable growth while maintaining consistent power availability across production cycles.</p>
                            </div>
                        </div>
                        <div class="application-card">
                            <div class="application-image">
                                <img src="https://images.pexels.com/photos/442150/pexels-photo-442150.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop" alt="Warehouse and logistics center" class="img-fluid" loading="lazy">
                            </div>
                            <div class="application-content">
                                <h3 class="application-title">Warehousing</h3>
                                <p class="application-description">Beacon Energy designs solar solutions for warehouses and logistics centers, utilizing large rooftop spaces to generate clean energy. Our systems reduce electricity expenses, power lighting and automation, and enhance operational efficiency while supporting sustainable, cost-effective warehouse operations.</p>
                            </div>
                        </div>
                        <div class="application-card">
                            <div class="application-image">
                                <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=800&h=600&fit=crop&q=80" alt="Retail store with solar panels" class="img-fluid" loading="lazy">
                            </div>
                            <div class="application-content">
                                <h3 class="application-title">Retail</h3>
                                <p class="application-description">Beacon Energy delivers smart solar solutions for retail businesses, powering lighting, cooling, and daily operations efficiently. Our systems help retailers reduce electricity bills, improve profitability, and strengthen sustainability credentials while ensuring reliable energy during peak customer hours.</p>
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
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll for anchor links
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

    // Applications Carousel
    var slider = document.querySelector('.applications-slider');
    var track = slider ? slider.querySelector('.applications-slider-track') : null;
    var cards = track ? Array.from(track.children) : [];
    var prevBtn = document.querySelector('.applications-nav-btn.carousel-control-prev');
    var nextBtn = document.querySelector('.applications-nav-btn.carousel-control-next');

    if (!slider || !track || cards.length === 0) {
        return;
    }

    var cardFullWidth = 0;
    var maxIndex = 0;
    var currentIndex = 0;
    var resizeTimeout = null;
    var autoPlayInterval = null;
    var autoPlayDelay = 4000; // 4 seconds between slides

    function updateTrack() {
        track.style.transform = 'translateX(-' + (currentIndex * cardFullWidth) + 'px)';
        if (prevBtn) {
            prevBtn.classList.toggle('disabled', currentIndex === 0);
        }
        if (nextBtn) {
            nextBtn.classList.toggle('disabled', currentIndex >= maxIndex);
        }
    }

    function recalc() {
        var computedStyles = getComputedStyle(track);
        var gapValue = parseFloat(computedStyles.gap || computedStyles.columnGap || '0') || 0;
        var cardWidth = cards[0].getBoundingClientRect().width;
        cardFullWidth = cardWidth + gapValue;
        
        // Calculate max index to allow scrolling one card at a time
        // Allow scrolling until the last card is visible
        var visibleCount = Math.floor(slider.offsetWidth / cardFullWidth);
        maxIndex = Math.max(0, cards.length - visibleCount);
        
        // Ensure currentIndex doesn't exceed maxIndex
        if (currentIndex > maxIndex) {
            currentIndex = maxIndex;
        }
        updateTrack();
    }

    function moveNext() {
        if (currentIndex < maxIndex) {
            currentIndex += 1;
        } else {
            // Loop back to the beginning
            currentIndex = 0;
        }
        updateTrack();
    }

    function startAutoPlay() {
        stopAutoPlay(); // Clear any existing interval
        autoPlayInterval = setInterval(moveNext, autoPlayDelay);
    }

    function stopAutoPlay() {
        if (autoPlayInterval) {
            clearInterval(autoPlayInterval);
            autoPlayInterval = null;
        }
    }

    function resetAutoPlay() {
        stopAutoPlay();
        startAutoPlay();
    }

    recalc();
    startAutoPlay(); // Start auto-play

    // Pause on hover
    if (slider) {
        slider.addEventListener('mouseenter', stopAutoPlay);
        slider.addEventListener('mouseleave', startAutoPlay);
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', function(e) {
            e.preventDefault();
            if (currentIndex > 0) {
                currentIndex -= 1; // Move back one card
                updateTrack();
                resetAutoPlay(); // Reset auto-play timer
            }
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', function(e) {
            e.preventDefault();
            if (currentIndex < maxIndex) {
                currentIndex += 1; // Move forward one card
                updateTrack();
                resetAutoPlay(); // Reset auto-play timer
            }
        });
    }

    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(function() {
            recalc();
            resetAutoPlay(); // Restart auto-play after resize
        }, 150);
    });
});
</script>
@endpush

