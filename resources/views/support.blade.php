@extends('layouts.app')

@section('title', 'Support - Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/support.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="support-hero-section">
    {{-- <div class="support-hero-animated-background">
        <div class="support-hero-floating-shape support-hero-shape-1"></div>
        <div class="support-hero-floating-shape support-hero-shape-2"></div>
        <div class="support-hero-floating-shape support-hero-shape-3"></div>
        <div class="support-hero-floating-shape support-hero-shape-4"></div>
    </div> --}}
    <div class="support-hero-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-10 mx-auto">
                <div class="support-hero-content-wrapper text-center">
                    <div class="support-hero-badge">
                        <i class="fas fa-headset me-2"></i>24/7 Customer Support
                    </div>
                    <h1 class="support-hero-title">Customer Services</h1>
                    <p class="support-hero-subtitle">Comprehensive Support for Your Energy Needs</p>
                    <p class="support-hero-description">
                        At Beacon Energy, we provide exceptional customer service through our Network Operations Center, financing solutions, net-metering services, and Power Purchase Agreements. Our dedicated team ensures seamless operations and maximum value for your renewable energy investments.
                    </p>
                    
                    <!-- Support Statistics -->
                    {{-- <div class="support-hero-stats">
                        <div class="support-stat-item">
                            <div class="support-stat-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="support-stat-content">
                                <div class="support-stat-number" data-count="24">0</div>
                                <div class="support-stat-label">/7 Support</div>
                            </div>
                        </div>
                        <div class="support-stat-item">
                            <div class="support-stat-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="support-stat-content">
                                <div class="support-stat-number" data-count="4">0</div>
                                <div class="support-stat-label">Services</div>
                            </div>
                        </div>
                        <div class="support-stat-item">
                            <div class="support-stat-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="support-stat-content">
                                <div class="support-stat-number" data-count="100">0</div>
                                <div class="support-stat-label">% Available</div>
                            </div>
                        </div>
                        <div class="support-stat-item">
                            <div class="support-stat-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="support-stat-content">
                                <div class="support-stat-number" data-count="365">0</div>
                                <div class="support-stat-label">Days/Year</div>
                            </div>
                        </div>
                    </div> --}}
                    
                    <div class="support-hero-cta">
                        <a href="#services" class="btn support-learn-btn">
                            <i class="fas fa-arrow-down me-2"></i>Explore Services
                        </a>
                        {{-- <img src="{{ asset('assets/icons/solid-white-arrow-up.svg') }}" class="support-cta-arrow" alt="Arrow"> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="support-services-section py-5" id="services">
    <div class="container">
        <div class="services-timeline-wrapper position-relative">
            <!-- Continuous Timeline Line -->
            <div class="service-timeline-line-continuous"></div>
            
            <!-- Network Operations Center -->
            <div class="row align-items-center mb-5 pb-5 service-row position-relative">
                <div class="service-timeline-dot"></div>
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/images/noc (1) 2.png') }}" alt="Network Operations Center" class="img-fluid service-image rounded">
                </div>
                <div class="col-lg-6">
                    <h2 class="service-title">Network Operations Center</h2>
                    <p class="service-description">Our Network Operations Center ensures seamless production by proactively monitoring systems 24/7, addressing customer service calls for both proactive and reactive support. Operating year-round, we guarantee continuous availability, optimizing investment returns.</p>
                    <div class="row">
                        <div class="col-lg-12">
                        <a href="tel:+923100222235" class="btn service-contact-btn">
                            <i class="fas fa-phone me-2"></i>
                            <span>+92 310 0222 235</span>
                        </a>
                        <a href="mailto:support@beaconenergy.pk" class="btn service-contact-btn">
                            <i class="fas fa-envelope me-2"></i>
                            <span>support@beaconenergy.pk</span>
                        </a>
                        </div>
                        {{-- <div class="col-lg-6">
                        
                        </div> --}}
                    </div>
                </div>
            </div>

            <!-- Financing -->
            <div class="row align-items-center mb-5 pb-5 service-row position-relative">
                <div class="service-timeline-dot"></div>
                <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/images/image 12.png') }}" alt="Financing" class="img-fluid service-image rounded">
                </div>
                <div class="col-lg-6 order-lg-1">
                    <h2 class="service-title">Financing</h2>
                    <p class="service-description">BEL facilitates financing for solar systems through partnerships with leading banks. We assist with documentation, application processes, and ensure a high success rate for financing approvals, making solar energy accessible to more customers.</p>
                </div>
            </div>

            <!-- Net-Metering -->
            <div class="row align-items-center mb-5 pb-5 service-row position-relative">
                <div class="service-timeline-dot"></div>
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/images/image 13.png') }}" alt="Net-Metering" class="img-fluid service-image rounded">
                </div>
                <div class="col-lg-6">
                    <h2 class="service-title">Net-Metering</h2>
                    <p class="service-description">With net-metering, solar users can sell excess power back to the grid. Your meter runs backward when you generate more than you consume, earning credits that reduce your electricity bills. This system benefits both users and the community by promoting renewable energy adoption.</p>
                </div>
            </div>

            <!-- Power Purchase Agreement -->
            <div class="row align-items-center mb-5 pb-5 service-row position-relative">
                <div class="service-timeline-line service-timeline-line-last"></div>
                <div class="service-timeline-dot"></div>
                <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/images/image 15.png') }}" alt="Power Purchase Agreement" class="img-fluid service-image rounded">
                </div>
                <div class="col-lg-6 order-lg-1">
                    <h2 class="service-title">Power Purchase Agreement</h2>
                    <p class="service-description">BEL offers Power Purchase Agreement (PPA) options for commercial projects. We cover all capital costs, provide fixed monthly charges, handle system design and installation, manage operations and maintenance, and give you access to energy metrics through our dedicated app.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animated Counter for Statistics
    const counters = document.querySelectorAll('.support-stat-number');
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
});
</script>
@endpush
@endsection

