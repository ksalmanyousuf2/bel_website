@extends('layouts.app')

@section('title', ($page->meta_title ?? $page->title) . ' - Beacon Energy')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages.css') }}">
@endpush

@push('meta')
@if($page->meta_description)
<meta name="description" content="{{ $page->meta_description }}">
@endif
<meta property="og:title" content="{{ $page->meta_title ?? $page->title }}">
@if($page->meta_description)
<meta property="og:description" content="{{ $page->meta_description }}">
@endif
@if($page->hero_image)
<meta property="og:image" content="{{ asset('storage/' . $page->hero_image) }}">
@endif
@endpush

@section('content')
<!-- Hero Section -->
@if($page->hero_image)
<section class="page-hero-section" style="background-image: url('{{ asset('storage/' . $page->hero_image) }}');">
    <div class="page-hero-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="page-hero-title">{{ $page->hero_title ?? $page->title }}</h1>
            </div>
        </div>
    </div>
</section>
@else
<section class="page-hero-section page-hero-no-image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="page-hero-title">{{ $page->title }}</h1>
            </div>
        </div>
    </div>
</section>
@endif

<!-- Page Content Section -->
<section class="page-content-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="page-content">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

