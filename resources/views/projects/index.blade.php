@extends('layouts.app')

@section('title', 'Projects - Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="projects-hero-section">
    {{-- <div class="projects-hero-animated-background">
        <div class="projects-hero-floating-shape projects-hero-shape-1"></div>
        <div class="projects-hero-floating-shape projects-hero-shape-2"></div>
        <div class="projects-hero-floating-shape projects-hero-shape-3"></div>
        <div class="projects-hero-floating-shape projects-hero-shape-4"></div>
    </div> --}}
    <div class="projects-hero-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="projects-hero-title">Selected Projects</h1>
                <p class="projects-hero-subtitle">Innovating Sustainable Energy Solutions</p>
            </div>
        </div>
    </div>
</section>

<!-- Projects Content Section -->
<section class="projects-content-section py-5" id="projects-content">
    <div class="container">
        <!-- Tabs -->
        <div class="projects-tabs">
            <button class="projects-tab {{ $category === 'both' ? 'active' : '' }}" data-category="both">
                Both
            </button>
            <button class="projects-tab {{ $category === 'commercial' ? 'active' : '' }}" data-category="commercial">
                Commercial
            </button>
            <button class="projects-tab {{ $category === 'industrial' ? 'active' : '' }}" data-category="industrial">
                Industrial
            </button>
        </div>

        <!-- Projects Grid -->
        <div class="projects-grid" id="projectsGrid">
            @forelse($projects as $index => $project)
            @php
                $projectType = $project->type ? strtolower(trim($project->type)) : 'both';
            @endphp
            <div class="project-card {{ $index === 0 ? 'active' : '' }}" data-category="{{ $projectType }}">
                
                @if($project->images->count() > 0)
                <div class="project-image-wrapper">
                    <img src="{{ asset('storage/' . $project->images->first()->image_path) }}" 
                            alt="{{ $project->name }}" 
                            class="project-image">
                </div>
                @endif
                <div class="project-card-body">
                    <p class="project-capacity">{{ $project->name }}</p>
                    @if($project->capacity)
                    <p class="project-capacity">Capacity: {{ $project->capacity }}</p>
                    @endif
                    <p class="project-location">
                        <i class="fas fa-map-marker-alt"></i>
                        {{ $project->location }}
                    </p>
                </div>
                
            </div>
            @empty
            <div class="projects-empty">
                <p>No projects available at the moment.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animated Counter for Statistics
    const counters = document.querySelectorAll('.projects-stat-number');
    const animateCounter = (counter) => {
        const target = parseInt(counter.getAttribute('data-count')) || 0;
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

    // Smooth scroll for CTA button
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
    
    // Existing tab filtering code
    const tabs = document.querySelectorAll('.projects-tab');
    const projectCards = document.querySelectorAll('.project-card');
    
    // Function to normalize category for comparison
    function normalizeCategory(category) {
        if (!category || category === 'null' || category === '') {
            return 'both';
        }
        return category.toLowerCase().trim();
    }
    
    // Function to filter projects
    function filterProjects(selectedCategory) {
        const normalizedSelected = normalizeCategory(selectedCategory);
        let visibleCount = 0;
        
        projectCards.forEach(card => {
            const cardCategory = normalizeCategory(card.getAttribute('data-category'));
            
            // Show if "both" is selected or categories match
            if (normalizedSelected === 'both' || cardCategory === normalizedSelected) {
                card.style.display = 'block';
                card.style.opacity = '0';
                setTimeout(() => {
                    card.style.transition = 'opacity 0.3s ease';
                    card.style.opacity = '1';
                }, 10);
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });
        
        // Show empty message if no projects visible
        const emptyMessage = document.querySelector('.projects-empty');
        const grid = document.getElementById('projectsGrid');
        if (visibleCount === 0 && !emptyMessage) {
            const emptyDiv = document.createElement('div');
            emptyDiv.className = 'projects-empty';
            emptyDiv.innerHTML = '<p>No projects found in this category.</p>';
            grid.appendChild(emptyDiv);
        } else if (visibleCount > 0 && emptyMessage) {
            emptyMessage.remove();
        }
    }
    
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            
            // Update active tab
            tabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            
            // Filter projects
            filterProjects(category);
            
            // Update URL without page reload
            const url = new URL(window.location);
            if (category === 'both') {
                url.searchParams.delete('category');
            } else {
                url.searchParams.set('category', category);
            }
            window.history.pushState({}, '', url);
        });
    });
    
    // Remove active class from all cards after initial load
    setTimeout(() => {
        projectCards.forEach(card => {
            card.classList.remove('active');
        });
    }, 100);
    
    // Apply initial filter based on URL parameter
    const urlParams = new URLSearchParams(window.location.search);
    const initialCategory = urlParams.get('category') || 'both';
    const initialTab = document.querySelector(`[data-category="${initialCategory}"]`);
    if (initialTab && initialCategory !== 'both') {
        tabs.forEach(t => t.classList.remove('active'));
        initialTab.classList.add('active');
        filterProjects(initialCategory);
    }
});
</script>
@endpush
@endsection
