@extends('layouts.app')

@section('title', 'REFLEX™ - Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/reflex.css') }}">
<link rel="stylesheet" href="{{ asset('css/industrial-commercial.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="reflex-hero-section">
    <div class="reflex-hero-background" style="background-image: url('{{ asset('assets/images/hero_section_image.png') }}');">
        <div class="reflex-hero-overlay"></div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="reflex-hero-title">REFLEX™</h1>
                <p class="reflex-hero-subtitle">The Heart of Next Generation Power Grids.</p>
            </div>
        </div>
    </div>
</section>

<!-- Introduction Section -->
<section class="reflex-intro-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <p class="reflex-intro-text">
                    REFLEX™ is a customized Battery Energy Storage Platform that empowers you to expand renewable energy absorption, enhance power system reliability, and reduce dependence on costly traditional fuels. Powered by SPARK™ MGC, REFLEX™ delivers power with intelligence—combining advanced energy management with flexible, high-performance storage tailored to your needs.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section 1 -->
<section class="reflex-features-section-1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="reflex-section-question">Is your facility struggling to keep up with energy demands on an outdated network?</h2>
                <div class="reflex-divider"></div>
            </div>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-md-6 col-lg-4">
                <div class="reflex-feature-card">
                    <div class="reflex-feature-icon">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h3 class="reflex-feature-title">No Upfront Capital Investment</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="reflex-feature-card">
                    <div class="reflex-feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="reflex-feature-title">Real Time Control</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="reflex-feature-card">
                    <div class="reflex-feature-icon">
                        <i class="fas fa-search-chart"></i>
                    </div>
                    <h3 class="reflex-feature-title">Black Start</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="reflex-feature-card">
                    <div class="reflex-feature-icon">
                        <i class="fas fa-wind"></i>
                    </div>
                    <h3 class="reflex-feature-title">Solar Wind Firming</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="reflex-feature-card">
                    <div class="reflex-feature-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3 class="reflex-feature-title">Power Factor Improvement</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="reflex-feature-card">
                    <div class="reflex-feature-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="reflex-feature-title">Genset Support & Contingency Management</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="reflex-feature-card">
                    <div class="reflex-feature-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3 class="reflex-feature-title">Genset Improvement</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section 2 -->
<section class="reflex-features-section-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="reflex-section-question">Are you ready to experience the future of energy power meets intelligence with REFLEX™?</h2>
            </div>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-md-6 col-lg-4">
                <div class="reflex-feature-card">
                    <div class="reflex-feature-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="reflex-feature-title">Customized Design</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="reflex-feature-card">
                    <div class="reflex-feature-icon">
                        <i class="fas fa-stopwatch"></i>
                    </div>
                    <h3 class="reflex-feature-title">&lt;80ms Response Time</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="reflex-feature-card">
                    <div class="reflex-feature-icon">
                        <i class="fas fa-percentage"></i>
                    </div>
                    <h3 class="reflex-feature-title">87%+ Round Trip Efficiency</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="reflex-feature-card">
                    <div class="reflex-feature-icon">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <h3 class="reflex-feature-title">SPARK™ MGC Micro-Grid Control System</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="reflex-feature-card">
                    <div class="reflex-feature-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3 class="reflex-feature-title">25 Years Design Life, upto 12000+ cycles</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="reflex-feature-card">
                    <div class="reflex-feature-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3 class="reflex-feature-title">IEC and UL Compliant UL9540, NFPA855</h3>
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

