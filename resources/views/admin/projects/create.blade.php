@extends('layouts.admin')

@section('title', 'Create Project - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Project</h1>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Back</a>
</div>

<form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
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
    </div>
    <div class="mb-3">
        <label for="location" class="form-label">Location *</label>
        <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}" required>
    </div>
    <div class="mb-3">
        <label for="capacity" class="form-label">Capacity</label>
        <input type="text" class="form-control" id="capacity" name="capacity" value="{{ old('capacity') }}" placeholder="e.g., 5 MW">
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <input type="text" class="form-control" id="category" name="category" value="{{ old('category') }}" placeholder="e.g., Solar energy">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <select class="form-select" id="type" name="type">
            <option value="">Select Type</option>
            <option value="commercial" {{ old('type') === 'commercial' ? 'selected' : '' }}>Commercial</option>
            <option value="industrial" {{ old('type') === 'industrial' ? 'selected' : '' }}>Industrial</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="5">{{ old('description') }}</textarea>
    </div>
    <div class="mb-3">
        <label for="completion_date" class="form-label">Completion Date</label>
        <input type="date" class="form-control" id="completion_date" name="completion_date" value="{{ old('completion_date') }}">
    </div>
    <div class="mb-3">
        <label for="images" class="form-label">Images</label>
        <input type="file" class="form-control" id="images" name="images[]" accept="image/*" multiple>
    </div>
    <div class="mb-3">
        <label for="order" class="form-label">Order</label>
        <input type="number" class="form-control" id="order" name="order" value="{{ old('order', 0) }}">
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_active">Active</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Create Project</button>
</form>
@endsection

@push('scripts')
<script>
    let editor;
    const descriptionTextarea = document.querySelector('#description');
    
    if (descriptionTextarea) {
        ClassicEditor
            .create(descriptionTextarea, {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'insertTable', '|', 'undo', 'redo']
            })
            .then(instance => {
                editor = instance;
            })
            .catch(error => {
                console.error('CKEditor initialization error:', error);
            });
    }
    
    // Sync CKEditor with textarea before form submission
    const form = descriptionTextarea ? descriptionTextarea.closest('form') : document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            if (editor) {
                editor.updateSourceElement();
            }
        });
    }
</script>
@endpush

