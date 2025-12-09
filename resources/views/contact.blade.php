@extends('layouts.app')

@section('title', 'Contact Us - Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="contact-hero-section">
    <div class="animated-background">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>
        <div class="floating-shape shape-4"></div>
        <div class="floating-shape shape-5"></div>
    </div>
    <div class="contact-hero-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <div class="hero-content-wrapper">
                    <div class="hero-badge">
                        <i class="fas fa-bolt me-2"></i>Get Started Today
                    </div>
                    <h1 class="contact-hero-title">Have a project in mind?</h1>
                    <p class="contact-hero-subtitle">Exploring Clean Energy Insights</p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <div class="stat-number" data-count="1000">0</div>
                            <div class="stat-label">Happy Customers</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" data-count="24">0</div>
                            <div class="stat-label">Hour Support</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" data-count="99">0</div>
                            <div class="stat-label">% Satisfaction</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Contact Floating Buttons -->
<div class="floating-contact-buttons">
    <a href="tel:03100000235" class="floating-btn phone-btn" title="Call Us">
        <i class="fas fa-phone"></i>
    </a>
    <a href="mailto:info@beaconenergy.pk" class="floating-btn email-btn" title="Email Us">
        <i class="fas fa-envelope"></i>
    </a>
    <a href="#sct-form-contact" class="floating-btn form-btn" title="Quick Form">
        <i class="fas fa-comment-dots"></i>
    </a>
</div>

<!-- Contact Info Section -->
<section class="contact-info-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="section-title">Get in Touch</h2>
            <p class="section-subtitle">We're here to help you with your clean energy needs</p>
        </div>

        <!-- Contact Method Cards -->
        <div class="row mb-5">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="contact-card glass-card">
                    <div class="contact-card-icon">
                        <i class="fas fa-phone-alt"></i>
                        <div class="icon-ripple"></div>
                    </div>
                    <h3 class="contact-card-title">0310 0000 235</h3>
                    <p class="contact-card-description">Our support team is here for you.</p>
                    <a href="tel:03100000235" class="contact-action-btn">
                        <i class="fas fa-phone me-2"></i>Call Now
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-card glass-card">
                    <div class="contact-card-icon">
                        <i class="fas fa-paper-plane"></i>
                        <div class="icon-ripple"></div>
                    </div>
                    <h3 class="contact-card-title">info@beaconenergy.pk</h3>
                    <p class="contact-card-description">You'll get a reply in 18 to 24 hours.</p>
                    <a href="mailto:info@beaconenergy.pk" class="contact-action-btn">
                        <i class="fas fa-envelope me-2"></i>Send Email
                    </a>
                </div>
            </div>
        </div>

        <!-- Trust Badges Section -->
        <div class="trust-badges-section">
            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="trust-badge">
                        <i class="fas fa-shield-alt"></i>
                        <span>Certified</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="trust-badge">
                        <i class="fas fa-award"></i>
                        <span>Quality Assured</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="trust-badge">
                        <i class="fas fa-users"></i>
                        <span>Expert Team</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="trust-badge">
                        <i class="fas fa-clock"></i>
                        <span>24/7 Support</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Office Location Cards -->
        <div class="office-locations-header text-center mb-4 mt-5">
            <h3 class="locations-title">Our Offices</h3>
            <p class="locations-subtitle">Visit us at any of our locations across Pakistan</p>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="office-card">
                    <div class="office-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h4 class="office-title">Head Office</h4>
                    <p class="office-city">(Islamabad)</p>
                    <p class="office-address">Plot-2, Sheikh Zayed Bin Sultan Road, Sec "A" Phase-II, DHA</p>
                    <a href="https://maps.google.com/?q=Plot-2,Sheikh+Zayed+Bin+Sultan+Road,Sec+A+Phase-II,DHA,Islamabad" target="_blank" class="office-directions">
                        <i class="fas fa-directions me-2"></i>Get Directions
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="office-card">
                    <div class="office-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h4 class="office-title">Regional Office</h4>
                    <p class="office-city">(Peshawar)</p>
                    <p class="office-address">Office-D1, Block-D, New DiUan Plaza, Achini, Ring Rd</p>
                    <a href="https://maps.google.com/?q=Office-D1,Block-D,New+DiUan+Plaza,Achini,Ring+Rd,Peshawar" target="_blank" class="office-directions">
                        <i class="fas fa-directions me-2"></i>Get Directions
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="office-card">
                    <div class="office-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h4 class="office-title">Regional Office</h4>
                    <p class="office-city">(Karachi)</p>
                    <p class="office-address">Office No. 201, 16-C, Khayaban e Shahbaz, Phase VI, DHA</p>
                    <a href="https://maps.google.com/?q=Office+No.+201,16-C,Khayaban+e+Shahbaz,Phase+VI,DHA,Karachi" target="_blank" class="office-directions">
                        <i class="fas fa-directions me-2"></i>Get Directions
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="office-card">
                    <div class="office-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h4 class="office-title">Regional Office</h4>
                    <p class="office-city">(Lahore)</p>
                    <p class="office-address">Plot no 300, Sector-K, Defence Housing Authority, Phase-1</p>
                    <a href="https://maps.google.com/?q=Plot+no+300,Sector-K,Defence+Housing+Authority,Phase-1,Lahore" target="_blank" class="office-directions">
                        <i class="fas fa-directions me-2"></i>Get Directions
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="contact-form-section py-5" id="sct-form-contact">
    <div class="container position-relative zindex-100">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10 text-center">
                <div class="form-header">
                    <h3 class="form-title">Send Us a Message</h3>
                    <p class="form-subtitle">If there's something we can help you with, just let us know. We'll be more than happy to offer you our help</p>
                </div>
            </div>
        </div>

        @if(session('success'))
        <div class="row justify-content-center mb-4">
            <div class="col-lg-9">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        @endif

        @if($errors->any())
        <div class="row justify-content-center mb-4">
            <div class="col-lg-9">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <!-- Form Progress Indicator -->
                <div class="form-progress-wrapper">
                    <div class="form-progress-bar">
                        <div class="form-progress-fill" id="formProgress"></div>
                    </div>
                    <div class="form-progress-text">
                        <span id="progressText">0%</span> Complete
                    </div>
                </div>

                <form id="form-contact" action="{{ route('contact.store') }}" method="POST" class="modern-form">
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">First name</label>
                                <input class="form-control" type="text" name="first_name" placeholder="Enter your first name" value="{{ old('first_name') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Last name</label>
                                <input class="form-control" type="text" name="last_name" placeholder="Also your last name" value="{{ old('last_name') }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input class="form-control" type="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                                <small class="form-text text-muted mt-2">This is the main email address that we'll send notifications.</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Contact No</label>
                                <input class="form-control" type="text" name="contact_no" placeholder="+92 310 0000 000" value="{{ old('contact_no') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">How did you hear about us?*</label>
                                <select class="form-select" name="hear_about_us" required>
                                    <option disabled selected value="">Select option</option>
                                    <option value="Online Advertisement" {{ old('hear_about_us') == 'Online Advertisement' ? 'selected' : '' }}>Online Advertisement</option>
                                    <option value="Word of Mouth" {{ old('hear_about_us') == 'Word of Mouth' ? 'selected' : '' }}>Word of Mouth</option>
                                    <option value="Social Media" {{ old('hear_about_us') == 'Social Media' ? 'selected' : '' }}>Social Media</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Customer Type*</label>
                                <select class="form-select" name="customer_type" required>
                                    <option disabled selected value="">Select option</option>
                                    <option value="Residential" {{ old('customer_type') == 'Residential' ? 'selected' : '' }}>Residential</option>
                                    <option value="Industrial" {{ old('customer_type') == 'Industrial' ? 'selected' : '' }}>Industrial</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Maximum Summer Electricity Bill?*</label>
                                <select class="form-select" name="max_summer_bill" required>
                                    <option disabled selected value="">Select option</option>
                                    <option value="5000" {{ old('max_summer_bill') == '5000' ? 'selected' : '' }}>5000</option>
                                    <option value="10000" {{ old('max_summer_bill') == '10000' ? 'selected' : '' }}>10000</option>
                                    <option value="15000" {{ old('max_summer_bill') == '15000' ? 'selected' : '' }}>15000</option>
                                    <option value="20000" {{ old('max_summer_bill') == '20000' ? 'selected' : '' }}>20000</option>
                                    <option value="25000" {{ old('max_summer_bill') == '25000' ? 'selected' : '' }}>25000</option>
                                    <option value="30000" {{ old('max_summer_bill') == '30000' ? 'selected' : '' }}>30000</option>
                                    <option value="35000" {{ old('max_summer_bill') == '35000' ? 'selected' : '' }}>35000</option>
                                    <option value="40000" {{ old('max_summer_bill') == '40000' ? 'selected' : '' }}>40000</option>
                                    <option value="> 40000" {{ old('max_summer_bill') == '> 40000' ? 'selected' : '' }}>&gt; 40000</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Property Type*</label>
                                <select class="form-select" name="property_type" required>
                                    <option disabled selected value="">Select option</option>
                                    <option value="House" {{ old('property_type') == 'House' ? 'selected' : '' }}>House</option>
                                    <option value="Apartment" {{ old('property_type') == 'Apartment' ? 'selected' : '' }}>Apartment</option>
                                    <option value="Factory Roof" {{ old('property_type') == 'Factory Roof' ? 'selected' : '' }}>Factory Roof</option>
                                    <option value="Commercial" {{ old('property_type') == 'Commercial' ? 'selected' : '' }}>Commercial</option>
                                    <option value="Farm" {{ old('property_type') == 'Farm' ? 'selected' : '' }}>Farm</option>
                                    <option value="Shop/Office" {{ old('property_type') == 'Shop/Office' ? 'selected' : '' }}>Shop/Office</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="reset" class="btn-reset d-none"></button>
                        <button type="submit" class="btn btn-block btn-lg btn-primary mt-4 submit-btn">
                            <span class="btn-text">
                                <i class="fas fa-paper-plane me-2"></i>Send your message
                            </span>
                            <span class="btn-loader d-none">
                                <i class="fas fa-spinner fa-spin me-2"></i>Sending...
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animated Counter
    const counters = document.querySelectorAll('.stat-number');
    const animateCounter = (counter) => {
        const target = parseInt(counter.getAttribute('data-count'));
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

    // Form Progress Tracker
    const form = document.getElementById('form-contact');
    const progressBar = document.getElementById('formProgress');
    const progressText = document.getElementById('progressText');
    const requiredFields = form.querySelectorAll('[required]');
    const totalFields = requiredFields.length;

    const updateProgress = () => {
        let filled = 0;
        requiredFields.forEach(field => {
            if (field.value.trim() !== '') {
                filled++;
            }
        });
        const progress = (filled / totalFields) * 100;
        progressBar.style.width = progress + '%';
        progressText.textContent = Math.round(progress) + '%';
    };

    requiredFields.forEach(field => {
        field.addEventListener('input', updateProgress);
        field.addEventListener('change', updateProgress);
    });

    // Form submission animation
    form.addEventListener('submit', function(e) {
        const submitBtn = form.querySelector('.submit-btn');
        const btnText = submitBtn.querySelector('.btn-text');
        const btnLoader = submitBtn.querySelector('.btn-loader');
        
        btnText.classList.add('d-none');
        btnLoader.classList.remove('d-none');
        submitBtn.disabled = true;
    });

    // Floating buttons animation
    const floatingBtns = document.querySelectorAll('.floating-btn');
    floatingBtns.forEach((btn, index) => {
        btn.style.animationDelay = (index * 0.1) + 's';
    });
});
</script>
@endpush
@endsection

