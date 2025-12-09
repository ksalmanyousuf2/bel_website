@extends('layouts.admin')

@section('title', 'Create Global Partner - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Global Partner</h1>
    <a href="{{ route('admin.global-partners.index') }}" class="btn btn-secondary">Back</a>
</div>

<form action="{{ route('admin.global-partners.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    @if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <div class="mb-3">
        <label for="name" class="form-label">Name *</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="5">{{ old('description') }}</textarea>
        @error('description')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="mb-3">
        <label for="logo" class="form-label">Logo</label>
        <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
        <small class="form-text text-muted">Accepted formats: JPEG, PNG, JPG, GIF, SVG (Max: 2MB)</small>
        @error('logo')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="mb-3">
        <label for="order" class="form-label">Order</label>
        <input type="number" class="form-control" id="order" name="order" value="{{ old('order', 0) }}">
        @error('order')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_active">
                Active
            </label>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Create Partner</button>
</form>
@endsection

