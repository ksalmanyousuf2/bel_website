@extends('layouts.app')

@section('title', 'Contact Us - Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="contact-hero-section">
    <div class="contact-hero-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="contact-hero-title">Have a project in mind?</h1>
                <p class="contact-hero-subtitle">Exploring Clean Energy Insights</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Info Section -->
<section class="contact-info-section py-5">
    <div class="container">

        <!-- Contact Method Cards -->
        <div class="row mb-5">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="contact-card">
                    <div class="contact-card-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h3 class="contact-card-title">0310 0000 235</h3>
                    <p class="contact-card-description">Our support team is here for you.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-card">
                    <div class="contact-card-icon">
                        <i class="fas fa-paper-plane"></i>
                    </div>
                    <h3 class="contact-card-title">info@beaconenergy.pk</h3>
                    <p class="contact-card-description">You'll get a reply in 18 to 24 hours.</p>
                </div>
            </div>
        </div>

        <!-- Office Location Cards -->
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="office-card">
                    <h4 class="office-title">Head Office</h4>
                    <p class="office-city">(Islamabad)</p>
                    <p class="office-address">Plot-2, Sheikh Zayed Bin Sultan Road, Sec "A" Phase-II, DHA</p>
                    <a href="https://maps.google.com/?q=Plot-2,Sheikh+Zayed+Bin+Sultan+Road,Sec+A+Phase-II,DHA,Islamabad" target="_blank" class="office-directions">Get Directions</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="office-card">
                    <h4 class="office-title">Regional Office</h4>
                    <p class="office-city">(Peshawar)</p>
                    <p class="office-address">Office-D1, Block-D, New DiUan Plaza, Achini, Ring Rd</p>
                    <a href="https://maps.google.com/?q=Office-D1,Block-D,New+DiUan+Plaza,Achini,Ring+Rd,Peshawar" target="_blank" class="office-directions">Get Directions</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="office-card">
                    <h4 class="office-title">Regional Office</h4>
                    <p class="office-city">(Karachi)</p>
                    <p class="office-address">Office No. 201, 16-C, Khayaban e Shahbaz, Phase VI, DHA</p>
                    <a href="https://maps.google.com/?q=Office+No.+201,16-C,Khayaban+e+Shahbaz,Phase+VI,DHA,Karachi" target="_blank" class="office-directions">Get Directions</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="office-card">
                    <h4 class="office-title">Regional Office</h4>
                    <p class="office-city">(Lahore)</p>
                    <p class="office-address">Plot no 300, Sector-K, Defence Housing Authority, Phase-1</p>
                    <a href="https://maps.google.com/?q=Plot+no+300,Sector-K,Defence+Housing+Authority,Phase-1,Lahore" target="_blank" class="office-directions">Get Directions</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="contact-form-section py-5" id="sct-form-contact">
    <div class="container position-relative zindex-100">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-12 text-center">
                <h3>Contact us</h3>
                <p class="lh-190">If there's something we can help you with, just let us know. We'll be more than happy to offer you our help</p>
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
                <form id="form-contact" action="{{ route('contact.store') }}" method="POST">
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
                        <button type="submit" class="btn btn-block btn-lg btn-primary mt-4">Send your message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

