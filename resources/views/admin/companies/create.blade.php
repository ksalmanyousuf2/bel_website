@extends('layouts.admin')

@section('title', 'Create Company - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Company</h1>
    <a href="{{ route('admin.companies.index') }}" class="btn btn-secondary">Back to List</a>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('admin.companies.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="mb-3">
        <label for="type" class="form-label">Type <span class="text-danger">*</span></label>
        <select class="form-select" id="type" name="type" required>
            <option value="commercial" {{ old('type') === 'commercial' ? 'selected' : '' }}>Commercial</option>
            <option value="industrial" {{ old('type') === 'industrial' ? 'selected' : '' }}>Industrial</option>
        </select>
    </div>
    
    <div class="mb-3">
        <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
    </div>
    
    <div class="mb-3">
        <label for="logo" class="form-label">Logo</label>
        <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
        <small class="form-text text-muted">Accepted formats: JPEG, PNG, JPG, GIF, SVG. Max size: 2MB</small>
    </div>
    
    <div class="mb-3">
        <label for="order" class="form-label">Order</label>
        <input type="number" class="form-control" id="order" name="order" value="{{ old('order', 0) }}" min="0">
        <small class="form-text text-muted">Lower numbers appear first</small>
    </div>
    
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_active">
                Active
            </label>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Create Company</button>
    <a href="{{ route('admin.companies.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection

