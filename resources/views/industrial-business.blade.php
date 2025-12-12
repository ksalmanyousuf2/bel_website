@extends('layouts.app')

@section('title', 'Industrial & Commercial - Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/industrial-commercial.css') }}">
<style>
    .dark-blue-card{
        background-image: url('{{ asset('assets/images/dark_blue_card.png') }}');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        color: white !important;
    }
    .light-blue-card{
        background-image: url('{{ asset('assets/images/light_blue_card.png') }}');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        color: #2958AA !important;
    }
</style>
@endpush

@section('content')
<!-- Hero Section -->
<section class="industrial-hero-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="industrial-hero-content" style="margin-top: 50px;">
                    <span class="hero-badge">[BUSINESS]</span>
                    <h1 class="hero-title">COMMERCIAL</h1>
                    <p class="hero-subtitle">POWERING INDUSTRIES WITH RENOWNED SOLAR SOLUTIONS</p>
                    <div class="hero-image-wrapper-overlay mt-4">
                        <img src="{{ asset('assets/images/commercial_hero.svg') }}" alt="Solar Farm" class="img-fluid rounded-3">
                        <div class="white-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.5);"></div>
                        {{-- <div class="hero-image-overlay">
                            <div class="overlay-text-bottom-right">MAXIMIZE ENERGY SAVINGS</div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="hero-background-image">
        <img src="{{ asset('assets/images/hero_section_image.png') }}" alt="Solar Farm" class="img-fluid">
    </div> --}}
</section>

<!-- Challenges Businesses Encounter Section -->
<section class="challenges-section py-5">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <h2 class="section-title mb-0">Challenges Businesses Encounter</h2>
            </div>
            <div class="col-lg-6">
                <p class="section-description mb-0">Across Pakistan's ecosystem, face growing energy hurdles that impact operations</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="challenge-card dark-blue-card" style="border-radius: 0 12px 12px 12px !important;">
                    <div class="challenge-card-icon">
                        <img src="{{ asset('assets/icons/Group 109.svg') }}" alt="High Upfront Investment" class="img-fluid" style="width: 32px; height: 32px;">
                    </div>
                    <h3 class="challenge-card-title">High Upfront Investment</h3>
                    <p class="challenge-card-description">Initial capital requirements for solar installations can be significant, making it challenging for businesses to adopt renewable energy solutions.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="challenge-card dark-blue-card" style="border-radius: 0 12px 12px 12px !important;">
                    <div class="challenge-card-icon">
                        <img src="{{ asset('assets/icons/Group 110.svg') }}" alt="Intermittent Power Generation" class="img-fluid" style="width: 42px; height: 32px;">

                    </div>
                    <h3 class="challenge-card-title">Market Competition and Pricing Pressure</h3>
                    <p class="challenge-card-description">Intense competition in the energy market creates pricing pressures that affect profitability and operational sustainability.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="challenge-card light-blue-card" style="border-radius: 0 12px 12px 12px !important;">
                    <div class="challenge-card-icon">
                        <img src="{{ asset('assets/icons/energy-storage.svg') }}" alt="Energy Storage Limitations" class="img-fluid" style="width: 18px; height: 32px;">

                    </div>
                    <h3 class="challenge-card-title">Regulatory and Policy Uncertainty</h3>
                    <p class="challenge-card-description">Frequent changes in energy policies and regulations create uncertainty, making long-term planning difficult for businesses.</p>
                </div>
            </div>
           
            <div class="col-md-6 col-lg-3">
                <div class="challenge-card dark-blue-card" style="border-radius: 0 12px 12px 12px !important;">
                    <div class="challenge-card-icon">
                        <img src="{{ asset('assets/icons/Group 111 light.png') }}" alt="Space Requirements" class="img-fluid" style="width: 32px; height: 32px;">
                        
                    </div>
                    <h3 class="challenge-card-title">Technological and Maintenance Challenges</h3>
                    <p class="challenge-card-description">Keeping up with rapidly evolving solar technology and ensuring proper maintenance requires specialized expertise and resources.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Metric Section -->
<section class="key-metric-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="key-metric-content-wrapper" style="position: relative; height: 300px;">
                    <div class="key-metric-content" style="position: absolute; bottom: 0; left: 0;">
                        <div class="key-metric-number">80</div>
                        <div class="key-metric-label">Megawatts Installed</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="key-metric-chart">
                    <div class="key-metric-bar" style="height: 50%;">
                        <div class="key-metric-bar-label">Commercial</div>
                        <div class="key-metric-bar-value">120</div>
                    </div>
                    <div class="key-metric-bar" style="height: 65%;">
                        <div class="key-metric-bar-label">Commercial</div>
                        <div class="key-metric-bar-value">120</div>
                    </div>
                    <div class="key-metric-bar" style="height: 85%;">
                        <div class="key-metric-bar-label">Commercial</div>
                        <div class="key-metric-bar-value">120</div>
                    </div>
                    <div class="key-metric-bar" style="height: 90%;">
                        <div class="key-metric-bar-label">Commercial</div>
                        <div class="key-metric-bar-value">120</div>
                    </div>
                    <div class="key-metric-bar" style="height: 100%;">
                        <div class="key-metric-bar-label">Commercial</div>
                        <div class="key-metric-bar-value">120</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Providing Solutions to Top Companies Section -->
@if($companies->count() > 0)
<section class="providing-solutions-section">
    <div class="container">
        <h2 class="providing-solutions-title">Providing Solutions to Top Companies in Pakistan</h2>
        <div class="providing-solutions-grid">
            @foreach($companies as $company)
            <div class="company-logo-card">
                @if($company->logo)
                <img src="{{ asset('storage/' . $company->logo) }}" alt="{{ $company->name }}">
                @else
                <div class="company-name">{{ $company->name }}</div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Applications Section -->
<section class="applications-section">
    <div class="container-fluid" style="padding-right: 0px !important;">
        <h2 class="section-title">Applications</h2>
        <p class="section-description">Our solutions deliver optimal Return on Investment (ROI) and significantly reduce energy bills for our customers.</p>
        <hr class="my-4">
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
                                <img src="{{ asset('assets/images/hero_section_image.png') }}" alt="Textile" class="img-fluid">
                            </div>
                            <div class="application-content">
                                <h3 class="application-title">Textile</h3>
                                <p class="application-description">Beacon Energy has a robust Monitoring & support app that gives customers complete visibility over their solar system. Available on all mobile and desktop platforms, the app allows the user to see all current and historical data about energy production, utilization, export, and overall saving.</p>
                            </div>
                        </div>
                        <div class="application-card">
                            <div class="application-image">
                                <img src="{{ asset('assets/images/hero_section_image.png') }}" alt="Beverages" class="img-fluid">
                            </div>
                            <div class="application-content">
                                <h3 class="application-title">Beverages</h3>
                                <p class="application-description">Beacon Energy has a robust Monitoring & support app that gives customers complete visibility over their solar system. Available on all mobile and desktop platforms, the app allows the user to see all current and historical data about energy production, utilization, export, and overall saving.</p>
                            </div>
                        </div>
                        <div class="application-card">
                            <div class="application-image">
                                <img src="{{ asset('assets/images/hero_section_image.png') }}" alt="Cold Storage" class="img-fluid">
                            </div>
                            <div class="application-content">
                                <h3 class="application-title">Cold Storage</h3>
                                <p class="application-description">Beacon Energy has a robust Monitoring & support app that gives customers complete visibility over their solar system. Available on all mobile and desktop platforms, the app allows the user to see all current and historical data about energy production, utilization, export, and overall saving.</p>
                            </div>
                        </div>
                        <div class="application-card">
                            <div class="application-image">
                                <img src="{{ asset('assets/images/hero_section_image.png') }}" alt="Manufacturing" class="img-fluid">
                            </div>
                            <div class="application-content">
                                <h3 class="application-title">Manufacturing</h3>
                                <p class="application-description">Beacon Energy provides comprehensive solar solutions for manufacturing facilities, helping reduce operational costs and carbon footprint.</p>
                            </div>
                        </div>
                        <div class="application-card">
                            <div class="application-image">
                                <img src="{{ asset('assets/images/hero_section_image.png') }}" alt="Warehouses" class="img-fluid">
                            </div>
                            <div class="application-content">
                                <h3 class="application-title">Warehouses</h3>
                                <p class="application-description">Large-scale solar installations for warehouses provide significant energy savings and support sustainable logistics operations.</p>
                            </div>
                        </div>
                        <div class="application-card">
                            <div class="application-image">
                                <img src="{{ asset('assets/images/hero_section_image.png') }}" alt="Retail" class="img-fluid">
                            </div>
                            <div class="application-content">
                                <h3 class="application-title">Retail</h3>
                                <p class="application-description">Retail chains benefit from our solar solutions with reduced electricity costs and enhanced brand reputation for sustainability.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
@if(isset($testimonials) && $testimonials->count() > 0)
<section class="testimonials-carousel-section">
    <div class="container-fluid" style="padding-right: 0px !important;">
        <h2 class="section-title" style="margin-bottom: 5rem !important; margin-left: 65px !important;">Clients <br> Testimonials</h2>

        <div class="testimonials-carousel-wrapper">
            <div class="testimonials-carousel-nav">
                <button class="testimonials-nav-btn carousel-control-next" type="button" aria-label="Next testimonial">
                    <i class="fas fa-arrow-right"></i>
                    <span class="visually-hidden">Next</span>
                </button>
                <button class="testimonials-nav-btn carousel-control-prev" type="button" aria-label="Previous testimonial">
                    <i class="fas fa-arrow-left"></i>
                    <span class="visually-hidden">Previous</span>
                </button>
              
            </div>

            <div class="testimonials-carousel-content">
                <div class="testimonials-slider">
                    <div class="testimonials-slider-track">
                        @foreach($testimonials as $testimonial)
                        <div class="testimonial-carousel-card">
                            <div class="testimonial-carousel-image-wrapper">
                                <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" class="testimonial-carousel-image">
                                @if($testimonial->youtube_video_link)
                                <button class="testimonial-play-button" onclick="openTestimonialVideo('{{ $testimonial->youtube_video_link }}')" type="button" aria-label="Play video">
                                    <i class="fas fa-play"></i>
                                </button>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@include('partials.testimonial-video-modal')
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    var transparentNavbar = document.querySelector('.navbar-transparent');
    if (transparentNavbar) {
        transparentNavbar.classList.add('navbar-black-links');
    }

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

    // Testimonials Carousel
    var testimonialsSlider = document.querySelector('.testimonials-slider');
    var testimonialsTrack = testimonialsSlider ? testimonialsSlider.querySelector('.testimonials-slider-track') : null;
    var testimonialCards = testimonialsTrack ? Array.from(testimonialsTrack.children) : [];
    var testimonialsPrevBtn = document.querySelector('.testimonials-nav-btn.carousel-control-prev');
    var testimonialsNextBtn = document.querySelector('.testimonials-nav-btn.carousel-control-next');

    if (testimonialsSlider && testimonialsTrack && testimonialCards.length > 0) {
        var testimonialCardFullWidth = 0;
        var testimonialMaxIndex = 0;
        var testimonialCurrentIndex = 0;
        var testimonialResizeTimeout = null;
        var testimonialAutoPlayInterval = null;
        var testimonialAutoPlayDelay = 4000;

        function updateTestimonialsTrack() {
            testimonialsTrack.style.transform = 'translateX(-' + (testimonialCurrentIndex * testimonialCardFullWidth) + 'px)';
            if (testimonialsPrevBtn) {
                testimonialsPrevBtn.classList.toggle('disabled', testimonialCurrentIndex === 0);
            }
            if (testimonialsNextBtn) {
                testimonialsNextBtn.classList.toggle('disabled', testimonialCurrentIndex >= testimonialMaxIndex);
            }
        }

        function recalcTestimonials() {
            var computedStyles = getComputedStyle(testimonialsTrack);
            var gapValue = parseFloat(computedStyles.gap || computedStyles.columnGap || '0') || 0;
            var cardWidth = testimonialCards[0].getBoundingClientRect().width;
            testimonialCardFullWidth = cardWidth + gapValue;
            
            var visibleCount = Math.floor(testimonialsSlider.offsetWidth / testimonialCardFullWidth);
            testimonialMaxIndex = Math.max(0, testimonialCards.length - visibleCount);
            
            if (testimonialCurrentIndex > testimonialMaxIndex) {
                testimonialCurrentIndex = testimonialMaxIndex;
            }
            updateTestimonialsTrack();
        }

        function moveTestimonialsNext() {
            if (testimonialCurrentIndex < testimonialMaxIndex) {
                testimonialCurrentIndex += 1;
            } else {
                testimonialCurrentIndex = 0;
            }
            updateTestimonialsTrack();
        }

        function startTestimonialsAutoPlay() {
            stopTestimonialsAutoPlay();
            testimonialAutoPlayInterval = setInterval(moveTestimonialsNext, testimonialAutoPlayDelay);
        }

        function stopTestimonialsAutoPlay() {
            if (testimonialAutoPlayInterval) {
                clearInterval(testimonialAutoPlayInterval);
                testimonialAutoPlayInterval = null;
            }
        }

        function resetTestimonialsAutoPlay() {
            stopTestimonialsAutoPlay();
            startTestimonialsAutoPlay();
        }

        recalcTestimonials();
        startTestimonialsAutoPlay();

        if (testimonialsSlider) {
            testimonialsSlider.addEventListener('mouseenter', stopTestimonialsAutoPlay);
            testimonialsSlider.addEventListener('mouseleave', startTestimonialsAutoPlay);
        }

        if (testimonialsPrevBtn) {
            testimonialsPrevBtn.addEventListener('click', function(e) {
                e.preventDefault();
                if (testimonialCurrentIndex > 0) {
                    testimonialCurrentIndex -= 1;
                    updateTestimonialsTrack();
                    resetTestimonialsAutoPlay();
                }
            });
        }

        if (testimonialsNextBtn) {
            testimonialsNextBtn.addEventListener('click', function(e) {
                e.preventDefault();
                if (testimonialCurrentIndex < testimonialMaxIndex) {
                    testimonialCurrentIndex += 1;
                    updateTestimonialsTrack();
                    resetTestimonialsAutoPlay();
                }
            });
        }

        window.addEventListener('resize', function() {
            clearTimeout(testimonialResizeTimeout);
            testimonialResizeTimeout = setTimeout(function() {
                recalcTestimonials();
                resetTestimonialsAutoPlay();
            }, 150);
        });
    }
});
</script>
@endpush

