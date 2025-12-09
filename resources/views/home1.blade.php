@extends('layouts.app')

@section('title', 'Beacon Energy - Leading the Shift to Renewable Power')

@push('styles')
<style>
    .hero-section {
        background: linear-gradient(rgba(26, 54, 93, 0.8), rgba(26, 54, 93, 0.8)), url('https://images.unsplash.com/photo-1509391366360-2e959784a276?w=1920') center/cover;
        min-height: 600px;
        display: flex;
        align-items: center;
        color: white;
    }
    .stat-box {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        padding: 20px;
        border-radius: 10px;
        margin: 10px 0;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        min-height: 150px;
    }
    .stat-box h2 {
        margin-bottom: 10px;
    }
    .stat-box p {
        margin-bottom: 0;
    }
    .solution-card {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        transition: transform 0.3s;
        height: 100%;
        border: none;
    }
    .solution-card:hover {
        transform: translateY(-5px);
    }
    .solution-card img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        display: block;
    }
    .solution-card-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.6), transparent);
        padding: 30px 25px 25px;
        color: white;
    }
    .solution-card-overlay h5 {
        color: white;
        font-weight: 600;
        margin-bottom: 12px;
        font-size: 1.25rem;
    }
    .solution-card-overlay p {
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 20px;
        font-size: 0.95rem;
        line-height: 1.6;
    }
    .solution-card-overlay .btn {
        background: white;
        color: #1a365d;
        border: none;
        padding: 10px 20px;
        font-weight: 500;
        border-radius: 4px;
        transition: all 0.3s;
    }
    .solution-card-overlay .btn:hover {
        background: #f0f0f0;
        color: #0d1b2a;
        transform: translateX(3px);
    }
    .solution-card-overlay .btn i {
        margin-left: 8px;
        font-size: 0.9rem;
    }
    .project-item {
        border-bottom: 1px solid #e0e0e0;
        padding: 20px 0;
    }
    .blog-featured {
        position: relative;
        overflow: hidden;
    }
    .blog-featured img {
        width: 100%;
        height: 400px;
        object-fit: cover;
    }
    .blog-featured-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0,0,0,0.8));
        color: white;
        padding: 30px;
    }
    @media (max-width: 768px) {
        .hero-section {
            min-height: 400px;
        }
        .stat-box {
            margin: 5px 0;
            min-height: 120px;
        }
        .solution-card img {
            height: 300px;
        }
        .solution-card-overlay {
            padding: 20px;
        }
        .solution-card-overlay h5 {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }
        .solution-card-overlay p {
            font-size: 0.9rem;
            margin-bottom: 15px;
        }
    }
    @media (max-width: 576px) {
        .solution-card img {
            height: 250px;
        }
        .solution-card-overlay {
            padding: 15px;
        }
    }
</style>
@endpush

@section('content')
<!-- Hero Section -->
<section class="hero-section" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-3 fw-bold mb-4">Leading the Shift to Renewable Power</h1>
                <p class="lead">At Beacon Energy, we <strong>empower</strong> communities and industries with <strong>renewable energy</strong> innovations.</p>
            </div>
            <div class="col-lg-6">
                <div class="row mt-4 g-3">
                    <div class="col-md-4 d-flex">
                        <div class="stat-box text-center w-100">
                            <h2 class="display-4 fw-bold">45+</h2>
                            <p class="mb-0">Projects Completed</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="stat-box text-center w-100">
                            <h2 class="display-4 fw-bold">99%</h2>
                            <p class="mb-0">Uptime with monitoring systems</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="stat-box text-center w-100">
                            <h2 class="display-4 fw-bold">1M+</h2>
                            <p class="mb-0">Tons CO2 offset since 2019</p>
                        </div>
                    </div>
                </div>
                <div class="text-end mt-4">
                    <button class="btn btn-light">Explore More</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Solutions Section -->
<section class="py-5" id="solutions">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold">Empowering the World with Clean Energy Solutions</h2>
            </div>
            <div class="col-lg-6">
                <p class="text-muted">Discover the sustainable technologies we use to drive the global transition to renewable energy.</p>
            </div>
        </div>
        <div class="row g-4">
            @forelse($solutions as $solution)
            <div class="col-lg-4 col-md-6">
                <div class="card solution-card shadow-sm">
                    @if($solution->image)
                    <img src="{{ asset('storage/' . $solution->image) }}" alt="{{ $solution->title }}">
                    @else
                    <div class="bg-secondary" style="height: 400px; width: 100%;"></div>
                    @endif
                    <div class="solution-card-overlay">
                        <h5>{{ $solution->title }}</h5>
                        <p>{!! Str::limit(strip_tags($solution->description), 120) !!}</p>
                        <a href="#" class="btn">More Details <i class="fas fa-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p class="text-center text-muted">No solutions available at the moment.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Industrial & Commercial Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold mb-4">Industrial & Commercial Segments</h2>
                <p>Our solutions deliver optimal Return on Investment (ROI) and significantly reduce energy bills for our customers.</p>
            </div>
            <div class="col-lg-6">
                <div class="card bg-white text-dark">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Energy Independence</h5>
                        <p class="card-text">Discover the sustainable technologies we use to drive the global transition to renewable energy.</p>
                        <a href="#" class="btn btn-outline-primary">More Details <i class="fas fa-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section class="py-5" id="projects">
    <div class="container">
        <h2 class="display-5 fw-bold mb-4">Real Projects. Real Impact</h2>
        <p class="text-muted mb-4">We specialize in providing solar and energy solutions that help businesses reduce electricity costs, improve power reliability and reduce greenhouse gas emissions.</p>
        
        <div class="row mb-4">
            @forelse($projects as $project)
            <div class="col-md-6 mb-4">
                <div class="project-item">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h5 class="fw-bold">{{ $project->name }}</h5>
                            <p class="text-muted mb-1">{{ $project->location }}</p>
                            @if($project->capacity)
                            <p class="text-muted mb-0">{{ $project->capacity }}</p>
                            @endif
                        </div>
                        <span class="badge bg-primary">Solar energy</span>
                    </div>
                    @if($project->images->count() > 0)
                    <div class="row g-2 mt-3">
                        @foreach($project->images->take(2) as $image)
                        <div class="col-6">
                            <img src="{{ asset('storage/' . $image->image_path) }}" class="img-fluid rounded" alt="{{ $image->alt_text ?? $project->name }}">
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
            @empty
            <div class="col-12">
                <p class="text-center text-muted">No projects available at the moment.</p>
            </div>
            @endforelse
        </div>
        
        <div class="text-end">
            <a href="{{ route('projects.index') }}" class="btn btn-outline-primary">View Selected Projects <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<!-- Connect App Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="text-center mb-4">
                    <img src="https://via.placeholder.com/300x600" alt="Connect App" class="img-fluid" style="max-height: 500px;">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="display-4 fw-bold mb-3">connect.</h2>
                <h4 class="mb-4">Seamless Visibility and Support for Your Energy Journey.</h4>
                <p>Beacon Energy has a robust Monitoring & support app that gives customers complete visibility over their solar system. Available on all mobile and desktop platforms, the app allows the user to see all current and historical data about energy production, utilization, export, and overall saving.</p>
                <div class="d-flex gap-3 mt-4">
                    <a href="#" class="btn btn-light"><img src="https://via.placeholder.com/150x50" alt="Google Play"></a>
                    <a href="#" class="btn btn-light"><img src="https://via.placeholder.com/150x50" alt="App Store"></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blogs Section -->
<section class="py-5" id="blogs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="display-5 fw-bold">Article & Blogs</h2>
            <a href="{{ route('blogs.index') }}" class="btn btn-outline-primary">View All Blogs <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                @if($featuredBlog)
                <div class="blog-featured">
                    @if($featuredBlog->featured_image)
                    <img src="{{ asset('storage/' . $featuredBlog->featured_image) }}" alt="{{ $featuredBlog->title }}">
                    @else
                    <div class="bg-secondary" style="height: 400px;"></div>
                    @endif
                    <div class="blog-featured-overlay">
                        <h3 class="fw-bold">{{ Str::upper($featuredBlog->title) }}</h3>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-lg-6">
                @forelse($blogs as $blog)
                <div class="mb-4 pb-3 border-bottom">
                    <h5 class="fw-bold">{{ $blog->title }}</h5>
                    @if($blog->excerpt)
                    <div class="text-muted">{!! Str::limit(strip_tags($blog->excerpt), 100) !!}</div>
                    @endif
                    <a href="{{ route('blogs.show', $blog->slug) }}" class="text-decoration-none">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
                @empty
                <p class="text-muted">No blog posts available at the moment.</p>
                @endforelse
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?w=1920') center/cover;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-white">
                <h2 class="display-4 fw-bold mb-4">For a Brighter Cleaner Future</h2>
            </div>
            <div class="col-lg-6">
                <div class="card bg-primary text-white">
                    <div class="card-body p-4">
                        <h3 class="fw-bold mb-3">Let's Power the Planet- Sustainably</h3>
                        <p>Discover the sustainable technologies we use to drive the global transition to renewable energy.</p>
                        <a href="#contact" class="btn btn-light">More Details <i class="fas fa-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

