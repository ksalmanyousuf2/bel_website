@extends('layouts.app')

@section('title', 'INTRIX - Same Legend, New Chapter | Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/intrix.css') }}">
<style>
    .intrix-inverter-section {
        background-image: linear-gradient(rgba(30, 58, 138, 0.85), rgba(37, 99, 235, 0.85)), url('{{ asset('assets/images/intrix_bg_2.png') }}');
        background-size: cover;
        background-position: center;
    }
</style>
@endpush

@section('content')

<!-- Hero Section: Same Legend, New Chapter -->
<section class="intrix-hero-section">
    <div class="intrix-container">
        <h1 class="intrix-hero-title">
            <span class="intrix-hero-title-top">Same Legend, New Chapter</span>
            {{-- <span class="intrix-hero-title-bottom">New Chapter</span> --}}
        </h1>
        <p class="intrix-hero-description">
            Harmonizes solar, grid, and battery power, ensuring an uninterrupted energy ballet.
        </p>

        <div class="intrix-hero-product-container">
            <!-- <img src="{{ asset('assets/images/intrix-1.png') }}" alt="INTRIX Inverter" class="intrix-product-top">
            <img src="{{ asset('assets/images/intrix-2.png') }}" alt="INTRIX Battery" class="intrix-product-bottom"> -->
            
            <!-- Scroll Down Arrow -->
            <a href="#smart-inverter" class="intrix-hero-arrow">
                <i class="fas fa-arrow-down"></i>
            </a>
        </div>
    </div>
</section>

<!-- Smart Inverter Section -->
<section class="intrix-inverter-section" id="smart-inverter">
    <div class="intrix-bg-pattern"></div>
    
    <div class="intrix-container">
        <h2 class="intrix-section-title">
            SMART <span class="intrix-text-highlight">INVERTER</span>
        </h2>

        <div class="intrix-inverter-content position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="position-relative">
                        <!-- Central Product Image -->
                        <div class="text-center mb-5">
                            <img src="{{ asset('assets/images/smart_inverter.png') }}" 
                                 alt="Smart Inverter" 
                                 class="intrix-inverter-image">
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="intrix-description-box mt-5">
                        <p>
                            INTRIX High Voltage is a brand new three-phase inverter supporting a 120-600V HV battery, 
                            ensuring the highest system efficiency and minimum heat dissipation. Crafted to seamlessly 
                            integrate solar, grid, and battery power sources, it guarantees an uninterrupted power 
                            supply even during grid failures. Bridging the physical and virtual worlds, users are freed from 
                            negatives like expenses. Equipped with an integrated advanced remote-support device, users can utilize 
                            solar power confidently until net metering is active without concerns about surplus energy 
                            that needs to be shared with others.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Smart Battery Section -->
<section class="intrix-battery-section" id="smart-battery">
    <div class="intrix-container">
        <h2 class="intrix-section-title" style="color: #111827;">
            SMART <span style="color: #fbbf24;">BATTERY</span>
        </h2>

        <div class="intrix-battery-grid">
            <!-- Left Column Features -->
          <img src="{{ asset('assets/images/intrix-4.png') }}" alt="Smart Battery" class="intrix-battery-image">
        </div>

        <!-- Battery Description -->
        <div class="intrix-description-box" style="color: #4b5563;">
            <p>
                INTRIX High Voltage is a brand new three-phase inverter supporting a 120-600V HV battery, 
                ensuring the highest system efficiency and minimum heat dissipation. Crafted to seamlessly 
                integrate solar, grid and battery power sources, it guarantees an uninterrupted power 
                supply even during grid failures. Bridging the physical and virtual worlds, users are freed from 
                negatives like expenses. Equipped with an integrated advanced remote-support device, users can utilize 
                solar power confidently until net metering is active without concerns about surplus energy 
                that needs to be shared with others.
            </p>
        </div>
    </div>
</section>

<!-- BEL EYE Section -->
<section class="intrix-beleye-section" id="bel-eye">
    <div class="intrix-bg-pattern"></div>
    
    <div class="intrix-container">
        <div class="intrix-beleye-container">
            <h2 class="intrix-section-title">
                BEL <span class="intrix-text-highlight">EYE</span>
            </h2>
            <p style="font-size: 1.3rem; font-weight: 300; margin-bottom: 3rem;">
                Inspiring Intelligence
            </p>

            <!-- BEL EYE Diagram/Image Area -->
            <div class="intrix-beleye-image-area position-relative">
                <img src="{{ asset('assets/images/bel-eye-1.png') }}" alt="BEL EYE" class="intrix-beleye-img">
            </div>

            <!-- Description -->
            <div class="intrix-beleye-text mt-5">
                <p>
                    Our AI-driven power management system optimizes energy usage by prioritizing real-time 
                    solar energy for immediate consumption and storing excess production in batteries. 
                    In synchronization with the Network Operation Centre (NOC), the system optimizes energy 
                    management, prioritizing stored production to provide consistent backup.
                </p>
                <p class="mt-3">
                    When rooftop back-up energy is needed, the system gives you maximum storage. When there is a limited 
                    load shedding, the system reconnects to the grid for your battery to discharge down to prevent brief 
                    backup interruption that preserves your battery lifespan.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Residential Packages Section -->
<section class="intrix-packages-section" id="packages">
    <div class="intrix-container">
        <h2 class="intrix-section-title" style="color: #111827;">
            RESIDENTIAL PACKAGES
        </h2>

        <!-- Package Tabs -->
        <div class="text-center mb-5">
            <div class="intrix-packages-tabs">
                <button class="intrix-tab-btn active" onclick="showPackage('6kw')">6kW</button>
                <button class="intrix-tab-btn" onclick="showPackage('10kw')">10kW</button>
            </div>
        </div>

        <!-- Package Content -->
        <div id="package-6kw" class="intrix-package-content">
            <div class="intrix-package-image-col">
                
                <img src="{{ asset('assets/images/intrix-2.png') }}" 
                     alt="INTRIX Battery" 
                     style="max-width: 100%;height: 100%; object-fit: cover;">
            </div>

            <div class="intrix-package-details-col">
                <h3 class="intrix-package-title">Package 6kW</h3>
                
                <p style="color: #6b7280; line-height: 1.8; margin-bottom: 2rem;">
                    This system has been sized for a house of one to two bedroom house. 
                    The system can energize load of:
                    <br>
                    <br>
                    Two 1-ton inverter AC or one 2-ton inverter AC, fridge, LCD/LED TV and a number of lights and fans
                </p>

                {{-- <div style="background: #f9fafb; padding: 20px; border-radius: 10px; margin-bottom: 2rem;">
                    <p style="margin: 0; color: #1f2937; font-weight: 600;">
                        Two 1-ton inverter AC or one 2-ton inverter AC, fridge, LCD/LED TV 
                        and a number of lights and fans
                    </p>
                </div> --}}

                <!-- Specifications Grid -->
                <div class="intrix-spec-grid">
                    <div class="intrix-spec-item">
                        <div class="intrix-spec-label">System Rated Capacity:</div>
                        <div class="intrix-spec-value">6 kW</div>
                    </div>
                    <div class="intrix-spec-item">
                        <div class="intrix-spec-label">Max Connected Load with 6kWh Battery:</div>
                        <div class="intrix-spec-value">3.4 kW</div>
                    </div>
                    <div class="intrix-spec-item">
                        <div class="intrix-spec-label">Grid Type:</div>
                        <div class="intrix-spec-value">Three phase</div>
                    </div>
                    <div class="intrix-spec-item">
                        <div class="intrix-spec-label">Normal Connected Load with 6kWh Battery:</div>
                        <div class="intrix-spec-value">3 kW</div>
                    </div>
                    <div class="intrix-spec-item">
                        <div class="intrix-spec-label">Smart Energy Storage Pack:</div>
                        <div class="intrix-spec-value">6 kWh</div>
                    </div>
                    <div class="intrix-spec-item">
                        <div class="intrix-spec-label">Net Metering:</div>
                        <div class="intrix-spec-value">Enabled</div>
                    </div>
                    <div class="intrix-spec-item">
                        <div class="intrix-spec-label">Rated Solar Power:</div>
                        <div class="intrix-spec-value">9000 W</div>
                    </div>
                    <div class="intrix-spec-item">
                        <div class="intrix-spec-label">Connectivity:</div>
                        <div class="intrix-spec-value">WiFi & Cloud Communication</div>
                    </div>
                    <div class="intrix-spec-item">
                        <div class="intrix-spec-label">Dimensions:</div>
                        <div class="intrix-spec-value">1720mm H x 600mm W x 230mm D</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 10kW Package (Hidden by default) -->
        <div id="package-10kw" class="intrix-package-content" style="display: none;">
            <div class="intrix-package-image-col">
                <img src="{{ asset('assets/images/intrix-2.png') }}" 
                     alt="INTRIX Battery" 
                     style="max-width: 100%;height: 100%; object-fit: cover;">
            </div>

            <div class="intrix-package-details-col">
                <h3 class="intrix-package-title">Package 10kW</h3>
                
                <p style="color: #6b7280; line-height: 1.8; margin-bottom: 2rem;">
                    This system has been sized for larger homes with higher energy demands. 
                    The system can energize load of:
                    <br>
                    <br>
                    Two 1-ton inverter AC or one 2-ton inverter AC, fridge, LCD/LED TV and a number of lights and fans
                </p>

                {{-- <div style="background: #f9fafb; padding: 20px; border-radius: 10px; margin-bottom: 2rem;">
                    <p style="margin: 0; color: #1f2937; font-weight: 600;">
                        Multiple ACs, refrigerator, washing machine, LCD/LED TVs, 
                        and complete lighting throughout the house
                    </p>
                </div> --}}

                <!-- Specifications Grid -->
                <div class="intrix-spec-grid">
                    <div class="intrix-spec-item">
                        <div class="intrix-spec-label">System Rated Capacity:</div>
                        <div class="intrix-spec-value">10 kW</div>
                    </div>
                    <div class="intrix-spec-item">
                        <div class="intrix-spec-label">Max Connected Load with 10kWh Battery:</div>
                        <div class="intrix-spec-value">6 kW</div>
                    </div>
                    <div class="intrix-spec-item">
                        <div class="intrix-spec-label">Grid Type:</div>
                        <div class="intrix-spec-value">Three phase</div>
                    </div>
                    <div class="intrix-spec-item">
                        <div class="intrix-spec-label">Normal Connected Load with 10kWh Battery:</div>
                        <div class="intrix-spec-value">5 kW</div>
                    </div>
                    <div class="intrix-spec-item">
                        <div class="intrix-spec-label">Smart Energy Storage Pack:</div>
                        <div class="intrix-spec-value">10 kWh</div>
                    </div>
                    <div class="intrix-spec-item">
                        <div class="intrix-spec-label">Net Metering:</div>
                        <div class="intrix-spec-value">Enabled</div>
                    </div>
                    <div class="intrix-spec-item">
                        <div class="intrix-spec-label">Rated Solar Power:</div>
                        <div class="intrix-spec-value">15000 W</div>
                    </div>
                    <div class="intrix-spec-item">
                        <div class="intrix-spec-label">Connectivity:</div>
                        <div class="intrix-spec-value">WiFi & Cloud Communication</div>
                    </div>
                    <div class="intrix-spec-item">
                        <div class="intrix-spec-label">Dimensions:</div>
                        <div class="intrix-spec-value">1720mm H x 600mm W x 230mm D</div>
                    </div>
                </div>
            </div>
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

    // Package switching functionality
    function showPackage(packageType) {
        // Hide all packages
        document.getElementById('package-6kw').style.display = 'none';
        document.getElementById('package-10kw').style.display = 'none';
        
        // Remove active class from all tabs
        document.querySelectorAll('.intrix-tab-btn').forEach(btn => {
            btn.classList.remove('active');
        });
        
        // Show selected package
        document.getElementById('package-' + packageType).style.display = 'flex';
        
        // Add active class to clicked tab
        event.target.classList.add('active');
    }

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
</script>
@endpush

