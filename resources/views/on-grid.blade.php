@extends('layouts.app')

@section('title', 'Grid Tied Solar Solution | Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/on-grid.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="ongrid-hero-section">
    <div class="ongrid-container">
        <div class="ongrid-hero-content">
            <h1 class="ongrid-hero-title">GRID TIED SOLAR SOLUTION</h1>
            <p class="ongrid-hero-description">
                Maximize your energy savings by feeding surplus solar power back to the grid and earn credits on your electricity bill.
            </p>
        </div>

        <div class="ongrid-hero-product-container">
            <!-- Scroll Down Arrow -->
          <div class="hero-learn-cta">
                <a href="#how-it-works" class="btn hero-learn-btn">
                    <i class="fas fa-arrow-down me-2"></i>Explore More
                </a>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="ongrid-info-section" id="how-it-works">
        <div class="ongrid-info-content">
        <div class="row g-0 align-items-stretch">
            <div class="col-lg-6">
                <img src="{{ asset('assets/images/on-grid-1.png') }}" alt="Grid Tied Solar Products" class="ongrid-product-image-full">
                </div>
            <div class="col-lg-6 ongrid-blue-section">
                <div class="ongrid-blue-content">
                    <h2 class="ongrid-section-title-left">
                        SOLAR <span class="ongrid-text-highlight">INVERTER</span>
                    </h2>
                    <div class="ongrid-info-text-white" style="text-align: justify;">
                        <p>
                            A cutting-edge grid-tied solar inverter, epitomizes innovation and efficiency in renewable energy
                            solutions. Boasting a robust design, it ensures seamless integration with the grid, maximizing energy
                            conversion from solar panels. With advanced Maximum Power Point Tracking (MPPT) technology, it optimizes
                            power output even in varying light conditions. BEL Connect allows remote monitoring and control through 
                            NOC, empowering users with real-time insights. Built for longevity, Grid Tied Inverters come with a 
                            comprehensive warranty, reinforcing its commitment to sustainable energy and customer satisfaction.
                        </p>
                    </div>
                    <div class="ongrid-workflow-diagram">
                        <img src="{{ asset('assets/images/work-flow_solar-inverter.png') }}" 
                             alt="Solar System Workflow" 
                             class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Savings Graph Section -->
<section class="ongrid-savings-section" id="savings">
    <div class="ongrid-container">
        <div class="ongrid-savings-wrapper">
            <div class="row align-items-center">
                <!-- Left Column - Text Content -->
                <div class="col-lg-6">
                    <div class="ongrid-savings-left">
                        <h2 class="ongrid-savings-main-title">More Power More Savings</h2>
                        <div class="ongrid-savings-description">
                            <p>
                                The global average cost of electricity from renewable power technologies is projected to continue decreasing, 
                                making renewables more competitive compared to fossil fuels. This trend opens up opportunities for widespread 
                                renewable adoption and significant decarbonization in the power sector.
                            </p>
                            <p>
                                In Pakistan, increasing energy costs and attractive solar loan conditions offer a distinctive solar investment 
                                payback period for solar investments. Typically, commercial and industrial consumers recover their investment 
                                in 3 to 4 years, while residential consumers see a payback in 4 to 5 years. Afterward, solar energy remains 
                                nearly cost-free for the next 20 years.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Graph -->
                <div class="col-lg-6">
                    <div class="ongrid-savings-right">
                        {{-- <h3 class="ongrid-graph-title">Increase in Savings every year</h3> --}}
                        
                    <div class="ongrid-graph-container">
                        <img src="{{ asset('assets/images/saving_graph.png') }}" 
                             alt="Savings Graph" 
                             class="ongrid-graph-image img-fluid">
                    </div>

                        {{-- <div class="ongrid-graph-legend">
                            <div class="ongrid-legend-item">
                                <span class="ongrid-legend-line ongrid-legend-solar"></span>
                                <span class="ongrid-legend-text">Solar Levelized Tarrif</span>
                            </div>
                            <div class="ongrid-legend-item">
                                <span class="ongrid-legend-line ongrid-legend-grid"></span>
                                <span class="ongrid-legend-text">Grid Tarrif</span>
                            </div>
                        </div>

                        <div class="ongrid-chart-descriptor">
                            <h4 class="ongrid-descriptor-title">Chart Descriptor</h4>
                            <p class="ongrid-descriptor-subtitle">Cost of Solar vs Grid Tarrif</p>
                            <p class="ongrid-descriptor-source">Source: BEL Development Team</p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Package Options Section -->
<section class="ongrid-packages-section" id="packages">
    <div class="ongrid-container">
        <h2 class="ongrid-packages-title">RESIDENTIAL PACKAGES</h2>

        <!-- Package Tabs -->
        <div class="text-center mb-5">
            <div class="ongrid-package-tabs">
                <button class="ongrid-package-tab active" data-package="10kw">10 kW</button>
                <button class="ongrid-package-tab" data-package="15kw">15 kW</button>
                <button class="ongrid-package-tab" data-package="20kw">20 kW</button>
                <button class="ongrid-package-tab" data-package="25kw">25 kW</button>
            </div>
        </div>

        <!-- Package Content -->
        <div class="ongrid-package-content-wrapper">
            <!-- 10kW Package -->
            <div class="ongrid-package-content active" id="package-10kw">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="ongrid-package-image">
                            <img src="{{ asset('assets/images/on-grid-pkg-img.png') }}" alt="Solar Equipment" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ongrid-package-details">
                            <h3 class="ongrid-package-detail-title">Package 10kW</h3>
                            <div class="ongrid-package-specs-grid">
                                <div class="ongrid-spec-item">
                                    <div class="ongrid-spec-label">Inverter size:</div>
                                    <div class="ongrid-spec-value">25 kVA</div>
                                </div>
                                <div class="ongrid-spec-item">
                                    <div class="ongrid-spec-label">Units generated per month (Average)</div>
                                    <div class="ongrid-spec-value">3375</div>
                                </div>
                                <div class="ongrid-spec-item">
                                    <div class="ongrid-spec-label">Solar Panel capacity:</div>
                                    <div class="ongrid-spec-value">31.25 Kwp</div>
                                </div>
                                <div class="ongrid-spec-item">
                                    <div class="ongrid-spec-label">Cost saving monthly (without tax):</div>
                                    <div class="ongrid-spec-value">118,125</div>
                                </div>
                                <div class="ongrid-spec-item">
                                    <div class="ongrid-spec-label">Area Required:</div>
                                    <div class="ongrid-spec-value">3125 Sqft</div>
                                </div>
                            </div>
                </div>
            </div>
                </div>
            </div>

            <!-- 15kW Package -->
            <div class="ongrid-package-content" id="package-15kw">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="ongrid-package-image">
                            <img src="{{ asset('assets/images/on-grid-pkg-img.png') }}" alt="Solar Equipment" class="img-fluid">
                        </div>
                </div>
                    <div class="col-lg-8">
                        <div class="ongrid-package-details">
                            <h3 class="ongrid-package-detail-title">Package 15kW</h3>
                            <div class="ongrid-package-specs-grid">
                                <div class="ongrid-spec-item">
                                    <div class="ongrid-spec-label">Inverter size:</div>
                                    <div class="ongrid-spec-value">30 kVA</div>
            </div>
                                <div class="ongrid-spec-item">
                                    <div class="ongrid-spec-label">Units generated per month (Average)</div>
                                    <div class="ongrid-spec-value">5063</div>
                </div>
                                <div class="ongrid-spec-item">
                                    <div class="ongrid-spec-label">Solar Panel capacity:</div>
                                    <div class="ongrid-spec-value">46.88 Kwp</div>
            </div>
                                <div class="ongrid-spec-item">
                                    <div class="ongrid-spec-label">Cost saving monthly (without tax):</div>
                                    <div class="ongrid-spec-value">177,188</div>
                </div>
                                <div class="ongrid-spec-item">
                                    <div class="ongrid-spec-label">Area Required:</div>
                                    <div class="ongrid-spec-value">4688 Sqft</div>
            </div>
        </div>
    </div>
                </div>
                </div>
            </div>

            <!-- 20kW Package -->
            <div class="ongrid-package-content" id="package-20kw">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="ongrid-package-image">
                            <img src="{{ asset('assets/images/on-grid-pkg-img.png') }}" alt="Solar Equipment" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ongrid-package-details">
                            <h3 class="ongrid-package-detail-title">Package 20kW</h3>
                            <div class="ongrid-package-specs-grid">
                                <div class="ongrid-spec-item">
                                    <div class="ongrid-spec-label">Inverter size:</div>
                                    <div class="ongrid-spec-value">40 kVA</div>
                                </div>
                                <div class="ongrid-spec-item">
                                    <div class="ongrid-spec-label">Units generated per month (Average)</div>
                                    <div class="ongrid-spec-value">6750</div>
                                </div>
                                <div class="ongrid-spec-item">
                                    <div class="ongrid-spec-label">Solar Panel capacity:</div>
                                    <div class="ongrid-spec-value">62.5 Kwp</div>
                                </div>
                                <div class="ongrid-spec-item">
                                    <div class="ongrid-spec-label">Cost saving monthly (without tax):</div>
                                    <div class="ongrid-spec-value">236,250</div>
                                </div>
                                <div class="ongrid-spec-item">
                                    <div class="ongrid-spec-label">Area Required:</div>
                                    <div class="ongrid-spec-value">6250 Sqft</div>
                                </div>
                            </div>
                        </div>
                </div>
                </div>
            </div>

            <!-- 25kW Package -->
            <div class="ongrid-package-content" id="package-25kw">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="ongrid-package-image">
                            <img src="{{ asset('assets/images/on-grid-pkg-img.png') }}" alt="Solar Equipment" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ongrid-package-details">
                            <h3 class="ongrid-package-detail-title">Package 25kW</h3>
                            <div class="ongrid-package-specs-grid">
                                <div class="ongrid-spec-item">
                                    <div class="ongrid-spec-label">Inverter size:</div>
                                    <div class="ongrid-spec-value">50 kVA</div>
                                </div>
                                <div class="ongrid-spec-item">
                                    <div class="ongrid-spec-label">Units generated per month (Average)</div>
                                    <div class="ongrid-spec-value">8438</div>
                                </div>
                                <div class="ongrid-spec-item">
                                    <div class="ongrid-spec-label">Solar Panel capacity:</div>
                                    <div class="ongrid-spec-value">78.13 Kwp</div>
                                </div>
                                <div class="ongrid-spec-item">
                                    <div class="ongrid-spec-label">Cost saving monthly (without tax):</div>
                                    <div class="ongrid-spec-value">295,313</div>
                                </div>
                                <div class="ongrid-spec-item">
                                    <div class="ongrid-spec-label">Area Required:</div>
                                    <div class="ongrid-spec-value">7813 Sqft</div>
                                </div>
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
    // Package Tabs Functionality
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.ongrid-package-tab');
        const contents = document.querySelectorAll('.ongrid-package-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs
                tabs.forEach(t => t.classList.remove('active'));
                
                // Add active class to clicked tab
                this.classList.add('active');

                // Hide all content
                contents.forEach(content => content.classList.remove('active'));

                // Show corresponding content
                const packageId = 'package-' + this.getAttribute('data-package');
                const targetContent = document.getElementById(packageId);
                if (targetContent) {
                    targetContent.classList.add('active');
                }
            });
        });
    });

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

    // Add scroll animations
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

    // Observe sections
    document.querySelectorAll('section').forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(30px)';
        section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(section);
    });

    // Animate benefit cards on scroll
    const cardObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.ongrid-benefit-card, .ongrid-package-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        cardObserver.observe(card);
    });
</script>
@endpush


