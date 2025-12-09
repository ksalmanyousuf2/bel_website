@extends('layouts.admin')

@section('title', 'View FAQ - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">View FAQ</h1>
    <div>
        <a href="{{ route('admin.faqs.edit', $faq) }}" class="btn btn-primary">Edit</a>
        <a href="{{ route('admin.faqs.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Question</h5>
        <p class="card-text">{{ $faq->question }}</p>
        
        <h5 class="card-title mt-4">Answer</h5>
        <div class="card-text">{!! $faq->answer !!}</div>
        
        <div class="row mt-4">
            <div class="col-md-6">
                <strong>Category:</strong> {{ $faq->category ?? 'N/A' }}
            </div>
            <div class="col-md-6">
                <strong>Order:</strong> {{ $faq->order }}
            </div>
        </div>
        
        <div class="row mt-2">
            <div class="col-md-6">
                <strong>Status:</strong> 
                @if($faq->is_active)
                <span class="badge bg-success">Active</span>
                @else
                <span class="badge bg-secondary">Inactive</span>
                @endif
            </div>
            <div class="col-md-6">
                <strong>Created:</strong> {{ $faq->created_at->format('M d, Y H:i') }}
            </div>
        </div>
        
        <div class="row mt-2">
            <div class="col-md-6">
                <strong>Last Updated:</strong> {{ $faq->updated_at->format('M d, Y H:i') }}
            </div>
        </div>
    </div>
</div>
@endsection

