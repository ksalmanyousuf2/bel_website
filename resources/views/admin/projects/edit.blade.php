@extends('layouts.admin')

@section('title', 'Edit Project - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Project</h1>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Back</a>
</div>

<form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Name *</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name) }}" required>
    </div>
    <div class="mb-3">
        <label for="location" class="form-label">Location *</label>
        <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $project->location) }}" required>
    </div>
    <div class="mb-3">
        <label for="capacity" class="form-label">Capacity</label>
        <input type="text" class="form-control" id="capacity" name="capacity" value="{{ old('capacity', $project->capacity) }}">
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <input type="text" class="form-control" id="category" name="category" value="{{ old('category', $project->category) }}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="5">{{ old('description', $project->description) }}</textarea>
    </div>
    <div class="mb-3">
        <label for="completion_date" class="form-label">Completion Date</label>
        <input type="date" class="form-control" id="completion_date" name="completion_date" value="{{ old('completion_date', $project->completion_date ? $project->completion_date->format('Y-m-d') : '') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Current Images</label>
        <div class="row g-2">
            @foreach($project->images as $image)
            <div class="col-md-3">
                <div class="position-relative">
                    <img src="{{ asset('storage/' . $image->image_path) }}" class="img-fluid rounded" alt="Project Image">
                    <form action="{{ route('admin.projects.images.delete', ['project' => $project, 'image' => $image]) }}" method="POST" class="position-absolute top-0 end-0 m-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this image?')">×</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="mb-3">
        <label for="images" class="form-label">Add More Images</label>
        <input type="file" class="form-control" id="images" name="images[]" accept="image/*" multiple>
    </div>
    <div class="mb-3">
        <label for="order" class="form-label">Order</label>
        <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $project->order) }}">
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $project->is_active) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_active">Active</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Update Project</button>
</form>
@endsection

@push('scripts')
<script>
    let editor;
    ClassicEditor
        .create(document.querySelector('#description'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'insertTable', '|', 'undo', 'redo']
        })
        .then(instance => {
            editor = instance;
        })
        .catch(error => {
            console.error(error);
        });
    
    // Sync CKEditor with textarea before form submission
    document.querySelector('form').addEventListener('submit', function(e) {
        if (editor) {
            editor.updateSourceElement();
        }
    });
</script>
@endpush

