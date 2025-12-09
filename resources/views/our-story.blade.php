@extends('layouts.app')

@section('title', 'Our Story - Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/our-story.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="our-story-hero-section">
    <div class="our-story-hero-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="our-story-hero-title">Our Story</h1>
                <p class="our-story-hero-subtitle">Illuminating Paths to Progress 
                    {{-- One of our key aspirations for diversifying into renewable energy was to be a catalyst for positive change in the world. --}}
                </p>
                <div class="our-story-hero-cta">
                    <a href="#ceo-message" class="btn our-story-learn-btn">Learn more</a>
                    <img src="{{ asset('assets/icons/solid-white-arrow-up.svg') }}" class="our-story-cta-arrow" alt="Arrow">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CEO's Message Section -->
<section class="ceo-message-section" id="ceo-message">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="ceo-message-title">CEO's Message</h2>
                <div class="ceo-message-content">
                    <p>Beacon Energy Limited (BEL) is a venture of The Beaconhouse Group, focusing on quality and customer needs. We aspire to diversify into renewable energy, recognizing the adverse impact of humans on the planet.</p>
                    <p>Solar energy is environmentally friendly, inexpensive, and accessible to disadvantaged people. Our goal is to provide affordable clean energy for a cleaner and more equal future.</p>
                    <p>By embedding ESG principles into our strategy and leveraging our global network to drive impactful green energy innovations, we have successfully achieved green and zero-waste factories since 2022, making significant strides toward carbon neutrality.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ceo-image-wrapper">
                    <img src="{{ asset('assets/images/ceo_image_with_bg.png') }}" alt="BEL Logo" class="img-fluid">
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="beaconhouse-group-header-section">
    <div class="beaconhouse-group-header-pattern"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="beaconhouse-group-header-content">
                    <div class="beaconhouse-group-logo-wrapper">
                        <img src="{{ asset('assets/logos/Layer_1 (2).png') }}" alt="Beaconhouse Group" class="beaconhouse-group-logo">
                    </div>
                    <h2 class="beaconhouse-group-title">Beaconhouse Group</h2>
                    <div class="beaconhouse-group-divider"></div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="beaconhouse-group-description-wrapper">
                    <p class="beaconhouse-group-description">The Beaconhouse Group is a global leader in education, operating as one of the largest private school networks worldwide, with <strong>315,000+ students</strong> across seven countries—Pakistan, Malaysia, Oman, the UAE, the Philippines, Thailand, and Belgium.</p>
                    <p class="beaconhouse-group-description">Beyond education, the Group has expanded its presence into publishing, real estate, information technology, renewable energy, and hospitality. By leveraging expertise across diverse industries, we strive to drive innovation and create meaningful impact across multiple sectors.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="beaconhouse-group-section-connector"></div>
</section>

<!-- Beaconhouse Group Section -->
<section class="beaconhouse-group-section">
    <div class="beaconhouse-group-image-wrapper">
        <img src="{{ asset('assets/images/Asset 24 1.png') }}" alt="Beaconhouse Group" class="beaconhouse-group-bg-image">
    </div>
    <div class="beaconhouse-group-content">
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="beaconhouse-logos-container">
                        <!-- Early childhood to Higher Education -->
                        <div class="logo-category mb-4">
                            <h3 class="category-title">Early childhood to Higher Education</h3>
                            <div class="logos-grid">

                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 39.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 42.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 43.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 44.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 45.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 46.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 47.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 48.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 49.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 50.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 51.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 52.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/2648273629456.png') }}" alt="Logo">
                                </div>
                            </div>
                        </div>

                        <!-- Beyond Education -->
                        <div class="logo-category mb-4">
                            <h3 class="category-title">Beyond Education</h3>
                            <div class="logos-grid">
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 25.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 34.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 32.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/Asset 31.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/2648329514416.png') }}" alt="Logo">
                                </div>
                            </div>
                        </div>

                        <!-- Non-Profit -->
                        <div class="logo-category">
                            <h3 class="category-title">Non-Profit</h3>
                            <div class="logos-grid">
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/2648378431840.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/2648378448576.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/2648378466144.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/2648378476000.png') }}" alt="Logo">
                                </div>
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/Beacan_Child_company_Logos/2648378486944.png') }}" alt="Logo">
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

