@extends('layouts.admin')

@section('title', 'Edit Testimonial - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Testimonial</h1>
    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">Back</a>
</div>

<form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Name *</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $testimonial->name) }}" required>
    </div>
    <div class="mb-3">
        <label for="position" class="form-label">Position</label>
        <input type="text" class="form-control" id="position" name="position" value="{{ old('position', $testimonial->position) }}">
    </div>
    <div class="mb-3">
        <label for="company" class="form-label">Company</label>
        <input type="text" class="form-control" id="company" name="company" value="{{ old('company', $testimonial->company) }}">
    </div>
    <div class="mb-3">
        <label for="testimonial" class="form-label">Testimonial *</label>
        <textarea class="form-control" id="testimonial" name="testimonial" rows="5">{{ old('testimonial', $testimonial->testimonial) }}</textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        @if($testimonial->image)
        <div class="mb-2">
            <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" style="max-width: 200px;">
        </div>
        @endif
        <input type="file" class="form-control" id="image" name="image" accept="image/*">
    </div>
    <div class="mb-3">
        <label for="youtube_video_link" class="form-label">YouTube Video Link</label>
        <input type="url" class="form-control" id="youtube_video_link" name="youtube_video_link" value="{{ old('youtube_video_link', $testimonial->youtube_video_link) }}" placeholder="https://www.youtube.com/watch?v=... or https://youtu.be/...">
        <small class="form-text text-muted">Enter the full YouTube video URL. The video will be shown when clicking on the testimonial.</small>
        @if($testimonial->youtube_video_link)
        <div class="mt-2">
            <a href="{{ $testimonial->youtube_video_link }}" target="_blank" class="btn btn-sm btn-outline-primary">
                <i class="fab fa-youtube me-1"></i> View Video
            </a>
        </div>
        @endif
    </div>
    <div class="mb-3">
        <label for="rating" class="form-label">Rating (1-5)</label>
        <input type="number" class="form-control" id="rating" name="rating" value="{{ old('rating', $testimonial->rating) }}" min="1" max="5">
    </div>
    <div class="mb-3">
        <label for="order" class="form-label">Order</label>
        <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $testimonial->order) }}">
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $testimonial->is_active) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_active">Active</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Update Testimonial</button>
</form>
@endsection

@push('scripts')
<script>
    let editor;
    ClassicEditor
        .create(document.querySelector('#testimonial'), {
            toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'undo', 'redo']
        })
        .then(instance => {
            editor = instance;
        })
        .catch(error => {
            console.error(error);
        });
    
    // Sync CKEditor with textarea before form submission and validate
    document.querySelector('form').addEventListener('submit', function(e) {
        if (editor) {
            editor.updateSourceElement();
            // Validate that testimonial is not empty
            const testimonial = editor.getData().trim();
            if (!testimonial) {
                e.preventDefault();
                alert('Please enter a testimonial.');
                editor.focus();
                return false;
            }
        }
    });
</script>
@endpush

