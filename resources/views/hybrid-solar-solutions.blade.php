@extends('layouts.app')

@section('title', 'Hybrid Solar Solutions - The Heart of Next Generation Power Grids | Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/hybrid-solar-solutions.css') }}">
@endpush

@section('content')

<!-- Hero Section -->
<section class="hybrid-hero-section">
    <div class="hybrid-container">
        <h1 class="hybrid-hero-title">Hybrid Solar Solutions</h1>
        <p class="hybrid-hero-subtitle">The Heart of Next Generation Power Grids</p>
        <a href="#hv-inverter" class="hybrid-learn-more-btn">
            Learn more
            <i class="fas fa-arrow-right"></i>
        </a>
    </div>
</section>

<!-- INTRIX HV Inverter Section -->
<section class="hybrid-inverter-section" id="hv-inverter">
    <div class="hybrid-container">
        <div class="hybrid-product-grid">
            <div class="hybrid-product-image-col">
                <img src="{{ asset('assets/images/HV-inverter 1.png') }}" 
                     alt="INTRIX HV Inverter" 
                     class="hybrid-product-image">
            </div>
            <div class="hybrid-product-text-col">
                <h2 class="hybrid-product-title"> <span style="color: #fbbf24;">INTRIX</span> HV Inverter</h2>

                <p class="hybrid-product-description">
                    INTRIX High Voltage is a brand new three-phase inverter supporting a 120-600V HV battery, 
                    ensuring the highest system efficiency and minimum heat dissipation. Crafted to seamlessly 
                    integrate solar, grid, and battery power sources, it guarantees an uninterrupted power 
                    supply. With grid feed-in capability, surplus energy can be sold, potentially leading to 
                    zero or negative bills. Equipped with an integrated advanced zero-export device, users can 
                    utilize solar power confidently until net metering is active without concerns about surplus 
                    energy being wasted due to load imbalances.
                </p>

                <div class="d-inline-flex align-items-center">
                    <a href="{{ route('intrix') }}" class="btn" style="margin-top: 50px !important;">More Details</a>
                    <a href="{{ route('intrix') }}" ><img src="{{ asset('assets/icons/slim-arrow-up.svg') }}" class="img-fluid" 
                    style="width: 40px;height: 40px; margin-top: 50px;"></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Smart Battery Section -->
<section class="hybrid-battery-section" id="smart-battery">
    <div class="hybrid-container">
        <div class="hybrid-product-grid hybrid-product-grid-reverse">
            <div class="hybrid-product-text-col">
                <h2 class="hybrid-product-title"> <span style="color: #fbbf24;">Smart</span> Battery</h2>

                <p class="hybrid-product-description">
                    INTRIX High Voltage is a brand new three-phase inverter supporting a 120-600V HV battery, 
                    ensuring the highest system efficiency and minimum heat dissipation. Crafted to seamlessly 
                    integrate solar, grid, and battery power sources, it guarantees an uninterrupted power 
                    supply. With grid feed-in capability, surplus energy can be sold, potentially leading to 
                    zero or negative bills. Equipped with an integrated advanced zero-export device, users can 
                    utilize solar power confidently until net metering is active without concerns about surplus 
                    energy being wasted due to load imbalances.
                </p>
            </div>
            <div class="hybrid-product-image-col">
                <img src="{{ asset('assets/images/HV-battery 1.png') }}" 
                     alt="Smart Battery" 
                     class="hybrid-product-image">
            </div>
        </div>
    </div>
</section>

<!-- INTRIX LV Inverter Section -->
<section class="hybrid-lv-inverter-section" id="lv-inverter">
    <div class="hybrid-container">
        <div class="hybrid-product-grid">
            <div class="hybrid-product-image-col">
                <img src="{{ asset('assets/images/LV-inverter 1 copy.png') }}" 
                     alt="INTRIX LV Inverter" 
                     class="hybrid-product-image">
            </div>
            <div class="hybrid-product-text-col">
                <h2 class="hybrid-product-title"> <span style="color: #fbbf24;">INTRIX</span> LV Inverter</h2>

                <p class="hybrid-product-description">
                    INTRIX Inverter seamlessly combines solar, grid, and battery power for uninterrupted supply. 
                    Its grid feed-in lets you sell surplus energy, potentially resulting in zero or negative bills. 
                    The smart inverter includes a built-in zero export feature, limiting grid feed-in until 
                    Net-metering is complete.
                </p>
                <ul class="hybrid-features-list">
                    <li>Intelligent Self Consumption and Feed-into the Grid</li>
                    <li>AI-augmented management of backup energy and peak tariff offset</li>
                    <li>Smart Battery Charger for Optimized Battery Performance and Life</li>
                    <li>Built-in Zero Export Device and Energy Meter</li>
                    <li>Maximum Fault Protections</li>
                    <li>Multiple Inverter Configuration</li>
                    <li>Cloud Connectivity via Wi-Fi</li>
                    <li>RGB LED is stylishly integrated to show the battery charge stage</li>
                    <li>Integrated with Auto Load Transfer Switch</li>
                </ul>
                <div class="d-inline-flex align-items-center">
                    <a href="{{ route('intrix-lv') }}" class="btn" style="margin-top: 50px !important;">More Details</a>
                    <a href="{{ route('intrix-lv') }}" ><img src="{{ asset('assets/icons/slim-arrow-up.svg') }}" class="img-fluid" 
                    style="width: 40px;height: 40px; margin-top: 50px;"></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Smart Battery LV Section -->
<section class="hybrid-lv-battery-section" id="lv-battery">
    <div class="hybrid-container">
        <div class="hybrid-product-grid">
            <div class="hybrid-product-text-col">
                
                <h2 class="hybrid-product-title"> <span style="color: #fbbf24;">Smart</span> Battery</h2>
                <p class="hybrid-product-description">
                    INTRIX uses Lithium-Ion batteries with an intelligent management system, ensuring safety and 
                    maximizing lifespan. The Battery Management System (BMS) maintains optimal cell voltage, 
                    temperature, and cycles. Multiple battery packs can be configured in parallel to boost the 
                    overall capacity of the battery bank.
                </p>
                <ul class="hybrid-features-list">
                    <li>Smart Battery Management System</li>
                    <li>Multiple Batteries Configuration</li>
                    <li>Smart and Longer Life Span than Conventional</li>
                </ul>
            </div>
            <div class="hybrid-product-image-col">
                <img src="{{ asset('assets/images/LV-battery 1 copy.png') }}" 
                     alt="Smart Battery" 
                     class="hybrid-product-image">
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

