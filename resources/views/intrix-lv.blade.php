@extends('layouts.app')

@section('title', 'INTRIX LV - Hybrid Solar Solution | Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/intrix-lv.css') }}">
@endpush

@section('content')

<!-- Hero Section: Hybrid Solar Solution -->
<section class="intrix-lv-hero-section">
    <div class="intrix-lv-container">
        <div class="intrix-lv-hero-content">
            <h1 class="intrix-lv-hero-title">HYBRID SOLAR SOLUTION</h1>
            <p class="intrix-lv-hero-description">
                Harmonizes solar, grid, and battery power, ensuring an uninterrupted energy ballet.
            </p>
        </div>

        <div class="intrix-lv-hero-product-container">
            {{-- <img src="{{ asset('assets/images/LV-inverter 1.png') }}" alt="INTRIX LV Inverter" class="intrix-lv-product-top">
            <img src="{{ asset('assets/images/LV-battery 1.png') }}" alt="INTRIX LV Battery" class="intrix-lv-product-bottom"> --}}
            
            <!-- Scroll Down Arrow -->
            <a href="#smart-inverter" class="intrix-lv-hero-arrow">
                <i class="fas fa-arrow-down"></i>
            </a>
        </div>
    </div>
</section>

<!-- Smart Solar Inverter Section -->
<section class="intrix-lv-inverter-section" id="smart-inverter">
    <div class="intrix-lv-bg-pattern"></div>
    
    <div class="intrix-lv-container">
        <h2 class="intrix-lv-section-title">
            SMART SOLAR <span class="intrix-lv-text-highlight">INVERTER</span>
        </h2>

        <div class="intrix-lv-inverter-content">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Central Product Image -->
                    <div class="text-center mb-5">
                        <img src="{{ asset('assets/images/LV-inverter 1.png') }}" 
                             alt="Smart Solar Inverter" 
                             class="intrix-lv-inverter-image">
                    </div>

                    <!-- Description -->
                    <div class="intrix-lv-description-box mt-5">
                        <p style="text-align: left;">
                            INTRIX Inverter seamlessly combines solar, grid, and battery power for uninterrupted
                            supply. Its grid feed-in lets you sell surplus energy, potentially resulting in zero
                            or negative bills. The smart inverter includes a built-in zero export feature, limiting
                            grid feed-in until Net-metering is complete.
                        </p>
                        <ul class="mt-5" style="text-align: left;padding-left: 1rem !important;">
                            <li style="margin-bottom: 10px;">Intelligent Self Consumption and Feed-into the Grid</li>
                            <li style="margin-bottom: 10px;">AI-augmented management of backup energy and peak tariff offset</li>
                            <li style="margin-bottom: 10px;">Smart Battery Charger for Optimized Battery Performance and Life</li>
                            <li style="margin-bottom: 10px;">Built-in Zero Export Device and Energy Meter</li>
                            <li style="margin-bottom: 10px;">Maximum Fault Protections</li>
                            <li style="margin-bottom: 10px;">Multiple Inverter Configuration</li>
                            <li style="margin-bottom: 10px;">Cloud Connectivity via Wi-Fi</li>
                            <li style="margin-bottom: 10px;">RGB LED is stylishly integrated to show the battery charge stage</li>
                            <li style="margin-bottom: 10px;">Integrated with Auto Load Transfer Switch</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Smart Battery Section -->
<section class="intrix-lv-battery-section" id="smart-battery">
    <div class="intrix-lv-container">
        <h2 class="intrix-lv-section-title" style="color: #111827;">
            SMART <span style="color: #fbbf24;">BATTERY</span>
        </h2>

        <div class="intrix-lv-battery-grid">
            <img src="{{ asset('assets/images/LV-battery 1.png') }}" alt="Smart Battery" class="intrix-lv-battery-image">
        </div>

        <!-- Battery Description -->
        <div class="intrix-lv-description-box" style="color: #4b5563; text-align: left;">
            <p>
                INTRIX uses Lithium-Ion batteries with an intelligent management system, ensuring safety
                 and maximizing lifespan. The Battery Management System (BMS) maintains optimal cell voltage,
                  temperature, and cycles. Multiple battery packs can be configured in parallel to boost the overall 
                  capacity of the battery bank.
            </p>
            <ul class="mt-5" style="text-align: left;padding-left: 1rem !important;">
                <li style="margin-bottom: 10px;">Smart Battery Management System</li>
                <li style="margin-bottom: 10px;">Multiple Batteries Configuration</li>
                <li style="margin-bottom: 10px;">Smart and Longer Life Span than Conventional</li>
            </ul>
        </div>
    </div>
</section>

<!-- AI Power Management Section -->
<section class="intrix-lv-ai-section" id="ai-power">
    <div class="intrix-lv-bg-pattern"></div>
    
    <div class="intrix-lv-container">
        <div class="intrix-lv-ai-container">
            <h2 class="intrix-lv-section-title">
                AI Power <span class="intrix-lv-text-highlight">Management</span>
            </h2>

            <!-- AI Diagram/Image Area -->
            <div class="intrix-lv-ai-image-area">
                <img src="{{ asset('assets/images/AI.png') }}" alt="AI Power Management" class="intrix-lv-ai-img">
            </div>

            <!-- Description -->
            <div class="intrix-lv-ai-text mt-5">
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
<section class="intrix-lv-packages-section" id="packages">
    <div class="intrix-lv-container">
        <h2 class="intrix-lv-section-title" style="color: #111827;">
            RESIDENTIAL PACKAGES
        </h2>

        <!-- Package Tabs -->
        <div class="text-center mb-5">
            <div class="intrix-lv-packages-tabs">
                <button class="intrix-lv-tab-btn active" onclick="showPackageLv('6kw')">6 kW</button>
                <button class="intrix-lv-tab-btn" onclick="showPackageLv('12kw')">12 kW</button>
                <button class="intrix-lv-tab-btn" onclick="showPackageLv('24kw')">24 kW</button>
                <button class="intrix-lv-tab-btn" onclick="showPackageLv('36kw')">36 kW</button>
            </div>
        </div>

        <!-- Package Content -->
        <!-- 6kW Package -->
        <div id="package-lv-6kw" class="intrix-lv-package-content">
            <div class="intrix-lv-package-image-col">
                <img src="{{ asset('assets/images/lv-residencial-pkg.png') }}" 
                     alt="INTRIX LV Package" 
                     style="max-width: 100%; height: 100%; object-fit: contain;">
            </div>

            <div class="intrix-lv-package-details-col">
                <h3 class="intrix-lv-package-title">Package 6kW</h3>
                
                <p style="color: #6b7280; line-height: 1.8; margin-bottom: 2rem;">
                    This system has been sized for a one to two bedroom house. 
                    The system can energize load of:
                    <br><br>
                    Two 1-ton inverter AC or one 2-ton inverter AC, fridge, LCD/LED TV and a number of lights and fans
                </p>

                <!-- Specifications Grid -->
                <div class="intrix-lv-spec-grid">
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">System Rated Capacity:</div>
                        <div class="intrix-lv-spec-value">6 kW</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Max Connected Load:</div>
                        <div class="intrix-lv-spec-value">4 kW</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Grid Type:</div>
                        <div class="intrix-lv-spec-value">Single phase</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Normal Connected Load:</div>
                        <div class="intrix-lv-spec-value">3 kW</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Smart Energy Storage Pack:</div>
                        <div class="intrix-lv-spec-value">5 kWh</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Net Metering:</div>
                        <div class="intrix-lv-spec-value">Enabled</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Rated Solar Power:</div>
                        <div class="intrix-lv-spec-value">7800 W</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Connectivity:</div>
                        <div class="intrix-lv-spec-value">WiFi & Cloud Communication</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Battery Voltage:</div>
                        <div class="intrix-lv-spec-value">48V LV</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 12kW Package -->
        <div id="package-lv-12kw" class="intrix-lv-package-content" style="display: none;">
            <div class="intrix-lv-package-image-col">
                <img src="{{ asset('assets/images/lv-residencial-pkg.png') }}" 
                     alt="INTRIX LV Package" 
                     style="max-width: 100%; height: 100%; object-fit: contain;">
            </div>

            <div class="intrix-lv-package-details-col">
                <h3 class="intrix-lv-package-title">Package 12kW</h3>
                
                <p style="color: #6b7280; line-height: 1.8; margin-bottom: 2rem;">
                    This system has been sized for a medium-sized home with moderate energy demands.
                    The system can energize load of:
                    <br><br>
                    Multiple ACs, refrigerator, washing machine, LCD/LED TVs, and complete lighting throughout the house
                </p>

                <!-- Specifications Grid -->
                <div class="intrix-lv-spec-grid">
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">System Rated Capacity:</div>
                        <div class="intrix-lv-spec-value">12 kW</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Max Connected Load:</div>
                        <div class="intrix-lv-spec-value">8 kW</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Grid Type:</div>
                        <div class="intrix-lv-spec-value">Single phase</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Normal Connected Load:</div>
                        <div class="intrix-lv-spec-value">6 kW</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Smart Energy Storage Pack:</div>
                        <div class="intrix-lv-spec-value">10 kWh</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Net Metering:</div>
                        <div class="intrix-lv-spec-value">Enabled</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Rated Solar Power:</div>
                        <div class="intrix-lv-spec-value">15600 W</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Connectivity:</div>
                        <div class="intrix-lv-spec-value">WiFi & Cloud Communication</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Battery Voltage:</div>
                        <div class="intrix-lv-spec-value">48V LV</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 24kW Package -->
        <div id="package-lv-24kw" class="intrix-lv-package-content" style="display: none;">
            <div class="intrix-lv-package-image-col">
                <img src="{{ asset('assets/images/lv-residencial-pkg.png') }}" 
                     alt="INTRIX LV Package" 
                     style="max-width: 100%; height: 100%; object-fit: contain;">
            </div>

            <div class="intrix-lv-package-details-col">
                <h3 class="intrix-lv-package-title">Package 24kW</h3>
                
                <p style="color: #6b7280; line-height: 1.8; margin-bottom: 2rem;">
                    This system has been sized for large homes with high energy demands.
                    The system can energize load of:
                    <br><br>
                    Multiple ACs, refrigerators, washing machines, dryers, pool equipment, LCD/LED TVs, and complete lighting
                </p>

                <!-- Specifications Grid -->
                <div class="intrix-lv-spec-grid">
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">System Rated Capacity:</div>
                        <div class="intrix-lv-spec-value">24 kW</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Max Connected Load:</div>
                        <div class="intrix-lv-spec-value">16 kW</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Grid Type:</div>
                        <div class="intrix-lv-spec-value">Single phase</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Normal Connected Load:</div>
                        <div class="intrix-lv-spec-value">12 kW</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Smart Energy Storage Pack:</div>
                        <div class="intrix-lv-spec-value">20 kWh</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Net Metering:</div>
                        <div class="intrix-lv-spec-value">Enabled</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Rated Solar Power:</div>
                        <div class="intrix-lv-spec-value">31200 W</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Connectivity:</div>
                        <div class="intrix-lv-spec-value">WiFi & Cloud Communication</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Battery Voltage:</div>
                        <div class="intrix-lv-spec-value">48V LV</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 36kW Package -->
        <div id="package-lv-36kw" class="intrix-lv-package-content" style="display: none;">
            <div class="intrix-lv-package-image-col">
                <img src="{{ asset('assets/images/lv-residencial-pkg.png') }}" 
                     alt="INTRIX LV Package" 
                     style="max-width: 100%; height: 100%; object-fit: contain;">
            </div>

            <div class="intrix-lv-package-details-col">
                <h3 class="intrix-lv-package-title">Package 36kW</h3>
                
                <p style="color: #6b7280; line-height: 1.8; margin-bottom: 2rem;">
                    This system has been sized for very large homes or small commercial applications with maximum energy demands.
                    The system can energize load of:
                    <br><br>
                    Entire home including multiple central AC units, all appliances, pool equipment, workshop tools, and more
                </p>

                <!-- Specifications Grid -->
                <div class="intrix-lv-spec-grid">
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">System Rated Capacity:</div>
                        <div class="intrix-lv-spec-value">36 kW</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Max Connected Load:</div>
                        <div class="intrix-lv-spec-value">24 kW</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Grid Type:</div>
                        <div class="intrix-lv-spec-value">Single phase</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Normal Connected Load:</div>
                        <div class="intrix-lv-spec-value">18 kW</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Smart Energy Storage Pack:</div>
                        <div class="intrix-lv-spec-value">30 kWh</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Net Metering:</div>
                        <div class="intrix-lv-spec-value">Enabled</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Rated Solar Power:</div>
                        <div class="intrix-lv-spec-value">46800 W</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Connectivity:</div>
                        <div class="intrix-lv-spec-value">WiFi & Cloud Communication</div>
                    </div>
                    <div class="intrix-lv-spec-item">
                        <div class="intrix-lv-spec-label">Battery Voltage:</div>
                        <div class="intrix-lv-spec-value">48V LV</div>
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
    function showPackageLv(packageType) {
        // Hide all packages
        document.getElementById('package-lv-6kw').style.display = 'none';
        document.getElementById('package-lv-12kw').style.display = 'none';
        document.getElementById('package-lv-24kw').style.display = 'none';
        document.getElementById('package-lv-36kw').style.display = 'none';
        
        // Remove active class from all tabs
        document.querySelectorAll('.intrix-lv-tab-btn').forEach(btn => {
            btn.classList.remove('active');
        });
        
        // Show selected package
        document.getElementById('package-lv-' + packageType).style.display = 'flex';
        
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

