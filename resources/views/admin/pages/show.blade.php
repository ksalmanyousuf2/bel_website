@extends('layouts.admin')

@section('title', $page->title . ' - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $page->title }}</h1>
    <div>
        <a href="{{ route('admin.pages.edit', $page) }}" class="btn btn-primary">Edit</a>
        <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        @if($page->hero_image)
        <div class="mb-4">
            <img src="{{ asset('storage/' . $page->hero_image) }}" alt="{{ $page->title }}" class="img-fluid rounded">
        </div>
        @endif
        
        <div class="content">
            {!! $page->content !!}
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Page Details</h5>
                <p><strong>Slug:</strong> {{ $page->slug }}</p>
                <p><strong>Order:</strong> {{ $page->order }}</p>
                <p><strong>Status:</strong> 
                    @if($page->is_active)
                    <span class="badge bg-success">Active</span>
                    @else
                    <span class="badge bg-secondary">Inactive</span>
                    @endif
                </p>
                @if($page->meta_title)
                <p><strong>Meta Title:</strong> {{ $page->meta_title }}</p>
                @endif
                @if($page->meta_description)
                <p><strong>Meta Description:</strong> {{ $page->meta_description }}</p>
                @endif
                <p><strong>Created:</strong> {{ $page->created_at->format('F d, Y') }}</p>
                <p><strong>Updated:</strong> {{ $page->updated_at->format('F d, Y') }}</p>
                <a href="{{ route('pages.show', $page->slug) }}" target="_blank" class="btn btn-sm btn-outline-primary mt-2">View on Frontend</a>
            </div>
        </div>
    </div>
</div>
@endsection

