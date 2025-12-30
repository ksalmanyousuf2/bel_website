@extends('layouts.app')

@section('title', 'BESS - Battery Energy Storage System | Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/bess.css') }}">
@endpush

@section('content')

<!-- Hero Section -->
<section class="bess-hero-section">
    <div class="bess-hero-overlay"></div>
    <div class="container">
        <div class="bess-hero-content">
            <h1 class="bess-hero-title">BESS</h1>
            <h2 class="bess-hero-subtitle">Battery Energy Storage System</h2>
            <div class="bess-hero-scroll-indicator">
                <div class="bess-scroll-circle"></div>
            </div>
        </div>
    </div>
</section>

<!-- Problem/Solution Introduction Section -->
<section class="bess-intro-section py-5">
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
<section class="bess-product-choice-section py-5">
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

<!-- Applications Section -->
<section class="bess-applications-section py-5">
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
</section>

@endsection

@push('scripts')
<script>
// Add any JavaScript functionality if needed
</script>
@endpush

