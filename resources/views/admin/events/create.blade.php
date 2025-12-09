@extends('layouts.admin')

@section('title', 'Create Event - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Event</h1>
    <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">Back</a>
</div>

<form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
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
        <label for="title" class="form-label">Title *</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}" placeholder="Auto-generated from title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description *</label>
        <textarea class="form-control" id="description" name="description" rows="5">{{ old('description') }}</textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*">
    </div>
    <div class="mb-3">
        <label for="event_date" class="form-label">Event Date *</label>
        <input type="datetime-local" class="form-control" id="event_date" name="event_date" value="{{ old('event_date') }}" required>
    </div>
    <div class="mb-3">
        <label for="location" class="form-label">Location</label>
        <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}">
    </div>
    <div class="mb-3">
        <label for="social_media_link" class="form-label">Social Media Link</label>
        <input type="url" class="form-control" id="social_media_link" name="social_media_link" value="{{ old('social_media_link') }}" placeholder="https://facebook.com/event or https://linkedin.com/event">
        <small class="form-text text-muted">Enter the full URL to the event's social media page (Facebook, LinkedIn, etc.)</small>
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="is_published" name="is_published" value="1" {{ old('is_published') ? 'checked' : '' }}>
            <label class="form-check-label" for="is_published">Published</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Create Event</button>
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
    
    // Sync CKEditor with textarea before form submission and validate
    document.querySelector('form').addEventListener('submit', function(e) {
        if (editor) {
            editor.updateSourceElement();
            // Validate that description is not empty
            const description = editor.getData().trim();
            if (!description) {
                e.preventDefault();
                alert('Please enter a description.');
                editor.focus();
                return false;
            }
        }
    });
</script>
@endpush

