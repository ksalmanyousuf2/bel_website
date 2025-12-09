@extends('layouts.app')

@section('title', 'Apply for ' . $job->title . ' - Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/careers.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="careers-hero-section">
    <div class="careers-hero-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="careers-hero-title">Apply for Position</h1>
                <p class="careers-hero-subtitle">{{ $job->title }}</p>
            </div>
        </div>
    </div>
</section>

<!-- Application Form Section -->
<section class="careers-apply-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="application-form-card">
                    <div class="mb-4">
                        <a href="{{ route('careers.show', $job->slug) }}" class="btn btn-link">
                            <i class="fas fa-arrow-left me-2"></i> Back to Job Details
                        </a>
                    </div>

                    <h2 class="mb-4">Application Form</h2>

                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    @endif

                    <form action="{{ route('careers.store-application', $job->slug) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="first_name" class="form-label">First Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="last_name" class="form-label">Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+92 310 0000 000">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="resume" class="form-label">Resume/CV <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
                            <small class="form-text text-muted">Accepted formats: PDF, DOC, DOCX (Max: 10MB)</small>
                        </div>

                        <div class="mb-3">
                            <label for="cover_letter" class="form-label">Cover Letter</label>
                            <textarea class="form-control" id="cover_letter" name="cover_letter" rows="6" placeholder="Tell us why you're interested in this position...">{{ old('cover_letter') }}</textarea>
                            <small class="form-text text-muted">Optional: Share your motivation and relevant experience</small>
                        </div>

                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            <strong>Note:</strong> By submitting this application, you confirm that all information provided is accurate and truthful.
                        </div>

                        <div class="d-flex gap-3">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-paper-plane me-2"></i> Submit Application
                            </button>
                            <a href="{{ route('careers.show', $job->slug) }}" class="btn btn-outline-secondary btn-lg">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

