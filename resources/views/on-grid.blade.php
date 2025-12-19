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
            <img src="{{ asset('assets/images/on-grid-pkg-img.png') }}" 
                 alt="Grid Tied Solar Products" 
                 class="ongrid-product-image">
            
            <!-- Scroll Down Arrow -->
            <a href="#how-it-works" class="ongrid-hero-arrow">
                <i class="fas fa-arrow-down"></i>
            </a>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="ongrid-info-section" id="how-it-works">
    <div class="ongrid-container">
        <h2 class="ongrid-section-title">
            HOW <span class="ongrid-text-highlight">IT WORKS</span>
        </h2>

        <div class="ongrid-info-content">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="ongrid-info-text">
                        <p>
                            Grid-tied solar systems, also known as on-grid or grid-connected systems, are the most 
                            common type of solar installation. These systems are directly connected to your local 
                            utility grid, allowing you to draw power when needed and send excess solar energy back 
                            to the grid.
                        </p>
                        <p class="mt-3">
                            With net metering, when your solar panels produce more electricity than you use, the 
                            surplus energy is fed back into the grid, and you receive credits on your electricity 
                            bill. This makes grid-tied systems highly cost-effective and enables you to achieve 
                            significant savings on your energy costs.
                        </p>
                        <ul class="ongrid-features-list mt-4">
                            <li><i class="fas fa-check-circle"></i> Lower electricity bills with net metering</li>
                            <li><i class="fas fa-check-circle"></i> No battery required - lower installation cost</li>
                            <li><i class="fas fa-check-circle"></i> Sell excess energy back to the grid</li>
                            <li><i class="fas fa-check-circle"></i> Environmentally friendly and sustainable</li>
                            <li><i class="fas fa-check-circle"></i> Minimal maintenance requirements</li>
                            <li><i class="fas fa-check-circle"></i> Quick return on investment</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ongrid-workflow-image">
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
    <div class="ongrid-bg-pattern"></div>
    
    <div class="ongrid-container">
        <h2 class="ongrid-section-title">
            YOUR <span class="ongrid-text-highlight">SAVINGS</span>
        </h2>

        <div class="ongrid-savings-content">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="ongrid-graph-container">
                        <img src="{{ asset('assets/images/saving_graph.png') }}" 
                             alt="Savings Graph" 
                             class="ongrid-graph-image img-fluid">
                    </div>

                    <div class="ongrid-savings-text mt-5">
                        <h3 class="ongrid-savings-subtitle">Increase in Savings Every Year</h3>
                        <p>
                            As electricity prices continue to rise, your solar investment becomes increasingly valuable. 
                            The graph above illustrates the growing gap between grid electricity costs and your fixed 
                            solar levelized tariff, demonstrating the substantial long-term savings you can achieve.
                        </p>
                        <p class="mt-3">
                            With grid-tied solar, you can lock in your energy costs for decades while traditional 
                            electricity prices keep climbing. By 2030, the difference in costs could save you thousands 
                            of rupees annually, making solar one of the smartest investments for your home or business.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- System Benefits Section -->
<section class="ongrid-benefits-section">
    <div class="ongrid-container">
        <h2 class="ongrid-section-title" style="color: #111827;">
            SYSTEM <span style="color: #fbbf24;">BENEFITS</span>
        </h2>

        <div class="ongrid-benefits-grid">
            <div class="ongrid-benefit-card">
                <div class="ongrid-benefit-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <h3 class="ongrid-benefit-title">Lower Costs</h3>
                <p class="ongrid-benefit-text">
                    No battery storage required, reducing upfront investment and maintenance costs significantly.
                </p>
            </div>

            <div class="ongrid-benefit-card">
                <div class="ongrid-benefit-icon">
                    <i class="fas fa-sync-alt"></i>
                </div>
                <h3 class="ongrid-benefit-title">Net Metering</h3>
                <p class="ongrid-benefit-text">
                    Earn credits by selling excess electricity back to the grid, offsetting your energy costs.
                </p>
            </div>

            <div class="ongrid-benefit-card">
                <div class="ongrid-benefit-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="ongrid-benefit-title">High Efficiency</h3>
                <p class="ongrid-benefit-text">
                    Direct grid connection ensures maximum energy utilization with minimal losses.
                </p>
            </div>

            <div class="ongrid-benefit-card">
                <div class="ongrid-benefit-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <h3 class="ongrid-benefit-title">Eco-Friendly</h3>
                <p class="ongrid-benefit-text">
                    Reduce your carbon footprint and contribute to a cleaner, greener environment.
                </p>
            </div>

            <div class="ongrid-benefit-card">
                <div class="ongrid-benefit-icon">
                    <i class="fas fa-tools"></i>
                </div>
                <h3 class="ongrid-benefit-title">Low Maintenance</h3>
                <p class="ongrid-benefit-text">
                    Simple system design with fewer components means less maintenance and worry.
                </p>
            </div>

            <div class="ongrid-benefit-card">
                <div class="ongrid-benefit-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 class="ongrid-benefit-title">Quick ROI</h3>
                <p class="ongrid-benefit-text">
                    Fast return on investment with immediate savings on your electricity bills.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Package Options Section -->
<section class="ongrid-packages-section" id="packages">
    <div class="ongrid-bg-pattern"></div>
    
    <div class="ongrid-container">
        <h2 class="ongrid-section-title">
            RESIDENTIAL <span class="ongrid-text-highlight">PACKAGES</span>
        </h2>

        <div class="ongrid-packages-grid">
            <!-- 5kW Package -->
            <div class="ongrid-package-card">
                <div class="ongrid-package-header">
                    <h3 class="ongrid-package-title">5 kW</h3>
                    <p class="ongrid-package-subtitle">Basic Plan</p>
                </div>
                <div class="ongrid-package-body">
                    <ul class="ongrid-package-specs">
                        <li><strong>System Capacity:</strong> 5 kW</li>
                        <li><strong>Solar Panels:</strong> 550W x 10</li>
                        <li><strong>Inverter:</strong> 5kW Grid-Tied</li>
                        <li><strong>Grid Type:</strong> Single Phase</li>
                        <li><strong>Avg. Generation:</strong> 20-22 units/day</li>
                        <li><strong>Ideal For:</strong> 2-3 bedroom home</li>
                    </ul>
                </div>
            </div>

            <!-- 10kW Package -->
            <div class="ongrid-package-card ongrid-package-featured">
                <div class="ongrid-package-badge">Most Popular</div>
                <div class="ongrid-package-header">
                    <h3 class="ongrid-package-title">10 kW</h3>
                    <p class="ongrid-package-subtitle">Standard Plan</p>
                </div>
                <div class="ongrid-package-body">
                    <ul class="ongrid-package-specs">
                        <li><strong>System Capacity:</strong> 10 kW</li>
                        <li><strong>Solar Panels:</strong> 550W x 20</li>
                        <li><strong>Inverter:</strong> 10kW Grid-Tied</li>
                        <li><strong>Grid Type:</strong> Three Phase</li>
                        <li><strong>Avg. Generation:</strong> 40-45 units/day</li>
                        <li><strong>Ideal For:</strong> 4-5 bedroom home</li>
                    </ul>
                </div>
            </div>

            <!-- 15kW Package -->
            <div class="ongrid-package-card">
                <div class="ongrid-package-header">
                    <h3 class="ongrid-package-title">15 kW</h3>
                    <p class="ongrid-package-subtitle">Premium Plan</p>
                </div>
                <div class="ongrid-package-body">
                    <ul class="ongrid-package-specs">
                        <li><strong>System Capacity:</strong> 15 kW</li>
                        <li><strong>Solar Panels:</strong> 550W x 30</li>
                        <li><strong>Inverter:</strong> 15kW Grid-Tied</li>
                        <li><strong>Grid Type:</strong> Three Phase</li>
                        <li><strong>Avg. Generation:</strong> 60-65 units/day</li>
                        <li><strong>Ideal For:</strong> Large homes/Small business</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <p class="ongrid-custom-note">
                Need a custom solution? <a href="{{ route('contact') }}" class="ongrid-contact-link">Contact us</a> 
                for a personalized quote tailored to your energy needs.
            </p>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
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

