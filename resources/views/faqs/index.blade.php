@extends('layouts.app')

@section('title', 'Frequently Asked Questions - Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/faqs.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="faq-hero-section">
    <div class="faq-hero-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="faq-hero-title">Frequently Asked Questions</h1>
                {{-- <p class="faq-hero-subtitle">Find answers to common questions about our solar solutions</p> --}}
            </div>
        </div>
    </div>
</section>

<!-- FAQs Section -->
<section class="faq-content-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                @if($faqs->isEmpty())
                <div class="text-center py-5">
                    <i class="fas fa-question-circle fa-4x text-muted mb-3"></i>
                    <h3>No FAQs Available</h3>
                    <p class="text-muted">Check back soon for frequently asked questions.</p>
                </div>
                @else
                <!-- Search Bar -->
                <div class="faq-search-wrapper mb-5">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0">
                            <i class="fas fa-search text-muted"></i>
                        </span>
                        <input type="text" class="form-control border-start-0" id="faqSearch" placeholder="Search FAQs...">
                    </div>
                </div>

                <!-- FAQs by Category -->
                @foreach($faqs as $category => $categoryFaqs)
                <div class="faq-category mb-5" data-category="{{ strtolower($category ?? 'general') }}">
                    @if($category)
                    <h2 class="faq-category-title mb-4">
                        <i class="fas fa-folder-open me-2"></i>{{ $category }}
                    </h2>
                    @else
                    <h2 class="faq-category-title mb-4">
                        <i class="fas fa-question-circle me-2"></i>General
                    </h2>
                    @endif
                    
                    <div class="accordion" id="faqAccordion{{ $loop->index }}">
                        @foreach($categoryFaqs as $index => $faq)
                        <div class="accordion-item faq-item" data-question="{{ strtolower($faq->question) }}" data-answer="{{ strtolower(strip_tags($faq->answer)) }}">
                            <h3 class="accordion-header" id="heading{{ $loop->parent->index }}{{ $index }}">
                                <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $loop->parent->index }}{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $loop->parent->index }}{{ $index }}">
                                    <i class="fas fa-question-circle me-3 text-primary"></i>
                                    {{ $faq->question }}
                                </button>
                            </h3>
                            <div id="collapse{{ $loop->parent->index }}{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="heading{{ $loop->parent->index }}{{ $index }}" data-bs-parent="#faqAccordion{{ $loop->parent->index }}">
                                <div class="accordion-body">
                                    <div class="faq-answer">
                                        {!! $faq->answer !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach

                <!-- No Results Message -->
                <div id="noResults" class="text-center py-5 d-none">
                    <i class="fas fa-search fa-4x text-muted mb-3"></i>
                    <h3>No FAQs Found</h3>
                    <p class="text-muted">Try searching with different keywords.</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('faqSearch');
    const faqItems = document.querySelectorAll('.faq-item');
    const faqCategories = document.querySelectorAll('.faq-category');
    const noResults = document.getElementById('noResults');
    
    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase().trim();
            let visibleCount = 0;
            
            if (searchTerm === '') {
                // Show all FAQs
                faqItems.forEach(item => {
                    item.style.display = '';
                    const category = item.closest('.faq-category');
                    if (category) category.style.display = '';
                });
                faqCategories.forEach(category => category.style.display = '');
                if (noResults) noResults.classList.add('d-none');
            } else {
                // Filter FAQs
                faqItems.forEach(item => {
                    const question = item.getAttribute('data-question') || '';
                    const answer = item.getAttribute('data-answer') || '';
                    const matches = question.includes(searchTerm) || answer.includes(searchTerm);
                    
                    if (matches) {
                        item.style.display = '';
                        visibleCount++;
                    } else {
                        item.style.display = 'none';
                    }
                });
                
                // Show/hide categories based on visible items
                faqCategories.forEach(category => {
                    const visibleItems = category.querySelectorAll('.faq-item[style=""]');
                    if (visibleItems.length > 0) {
                        category.style.display = '';
                    } else {
                        category.style.display = 'none';
                    }
                });
                
                // Show/hide no results message
                if (noResults) {
                    if (visibleCount === 0) {
                        noResults.classList.remove('d-none');
                    } else {
                        noResults.classList.add('d-none');
                    }
                }
            }
        });
    }
});
</script>
@endpush

