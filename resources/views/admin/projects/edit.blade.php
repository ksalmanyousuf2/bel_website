@extends('layouts.admin')

@section('title', 'Edit Project - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Project</h1>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Back</a>
</div>

<form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data" id="project-form">
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
        <label for="type" class="form-label">Type</label>
        <select class="form-select" id="type" name="type">
            <option value="">Select Type</option>
            <option value="commercial" {{ old('type', $project->type) === 'commercial' ? 'selected' : '' }}>Commercial</option>
            <option value="industrial" {{ old('type', $project->type) === 'industrial' ? 'selected' : '' }}>Industrial</option>
        </select>
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
        <label>Current Images</label>
        <div class="row g-2" id="project-images-container">
            @foreach($project->images as $image)
            <div class="col-md-3 image-item" data-image-id="{{ $image->id }}">
                <div class="position-relative">
                    <img src="{{ asset('storage/' . $image->image_path) }}" class="img-fluid rounded" alt="Project Image">
                    <button type="button" 
                            class="btn btn-sm btn-danger delete-image-btn position-absolute top-0 end-0 m-1" 
                            data-delete-url="{{ route('admin.projects.images.delete', ['project' => $project, 'image' => $image]) }}"
                            data-image-id="{{ $image->id }}">×</button>
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
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    
    // Handle image deletion with AJAX
    $(document).on('click', '.delete-image-btn', function(e) {
        e.preventDefault();
        
        if (!confirm('Are you sure you want to delete this image?')) {
            return;
        }
        
        const $button = $(this);
        const deleteUrl = $button.data('delete-url');
        const $imageItem = $button.closest('.image-item');
        
        // Disable button during request
        $button.prop('disabled', true).text('...');
        
        $.ajax({
            url: deleteUrl,
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                // Remove the image item from DOM
                $imageItem.fadeOut(300, function() {
                    $(this).remove();
                });
                
                // Show success message if needed
                if (response.message) {
                    // You can add a toast notification here if you have one
                    console.log(response.message);
                }
            },
            error: function(xhr) {
                // Re-enable button
                $button.prop('disabled', false).text('×');
                
                // Show error message
                alert('Error deleting image. Please try again.');
                console.error('Error:', xhr);
            }
        });
    });
</script>
@endpush

