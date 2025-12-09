@extends('layouts.app')

@section('title', 'Projects - Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="projects-hero-section">
    <div class="projects-hero-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="projects-hero-title">Selected Projects</h1><br>
                <p class="projects-hero-subtitle">Innovating Sustainable Energy Solutions</p>
                <div class="projects-hero-cta">
                    <a href="#projects-content" class="btn projects-learn-btn">Learn more</a>
                    <img src="{{ asset('assets/icons/solid-white-arrow-up.svg') }}" class="projects-cta-arrow" alt="Arrow">
                </div>
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
            <div class="project-card {{ $index === 0 ? 'active' : '' }}" data-category="{{ $projectType }}" @if($loop->first) style="background-color: var(--primary-blue); color: white;" @endif>
                <a href="{{ route('projects.show', $project->id) }}" class="text-decoration-none">
                    @if($project->images->count() > 0)
                    <div class="project-image-wrapper">
                        <img src="{{ asset('storage/' . $project->images->first()->image_path) }}" 
                             alt="{{ $project->name }}" 
                             class="project-image">
                    </div>
                    @endif
                    <div class="project-card-body">
                        <h3 class="project-name" @if($loop->first) style="color: white;" @endif>{{ $project->name }}</h3>
                        @if($project->capacity)
                        <p class="project-capacity" @if($loop->first) style="color: white;" @endif>Capacity: {{ $project->capacity }}</p>
                        @endif
                        <p class="project-location" @if($loop->first) style="color: white;" @endif>
                            <i class="fas fa-map-marker-alt"></i>
                            {{ $project->location }}
                        </p>
                    </div>
                </a>
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
