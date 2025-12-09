@extends('layouts.admin')

@section('title', 'Edit Page - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Page</h1>
    <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">Back</a>
</div>

<form action="{{ route('admin.pages.update', $page) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    @if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    
    <div class="mb-3">
        <label for="title" class="form-label">Title *</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $page->title) }}" required>
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug', $page->slug) }}">
        <small class="form-text text-muted">URL-friendly version of the title</small>
    </div>
    <div class="mb-3">
        <label for="hero_image" class="form-label">Hero Image</label>
        @if($page->hero_image)
        <div class="mb-2">
            <img src="{{ asset('storage/' . $page->hero_image) }}" alt="Hero Image" style="max-width: 300px; height: auto;" class="img-fluid rounded">
        </div>
        @endif
        <input type="file" class="form-control" id="hero_image" name="hero_image" accept="image/*">
        <small class="form-text text-muted">Image displayed in the hero section</small>
    </div>
    <div class="mb-3">
        <label for="hero_title" class="form-label">Hero Title</label>
        <input type="text" class="form-control" id="hero_title" name="hero_title" value="{{ old('hero_title', $page->hero_title) }}" placeholder="Optional: Different title for hero section">
        <small class="form-text text-muted">If left empty, the main title will be used</small>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Content *</label>
        <textarea class="form-control" id="content" name="content" rows="15">{{ old('content', $page->content) }}</textarea>
    </div>
    <div class="mb-3">
        <label for="meta_title" class="form-label">Meta Title (SEO)</label>
        <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ old('meta_title', $page->meta_title) }}" placeholder="Page title for search engines">
    </div>
    <div class="mb-3">
        <label for="meta_description" class="form-label">Meta Description (SEO)</label>
        <textarea class="form-control" id="meta_description" name="meta_description" rows="3" placeholder="Page description for search engines">{{ old('meta_description', $page->meta_description) }}</textarea>
    </div>
    <div class="mb-3">
        <label for="order" class="form-label">Order</label>
        <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $page->order) }}">
        <small class="form-text text-muted">Lower numbers appear first in lists</small>
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $page->is_active) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_active">Active</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Update Page</button>
</form>
@endsection

@push('scripts')
<script>
    let editor;
    const contentTextarea = document.querySelector('#content');
    
    if (contentTextarea) {
        ClassicEditor
            .create(contentTextarea, {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'insertTable', '|', 'undo', 'redo']
            })
            .then(instance => {
                editor = instance;
            })
            .catch(error => {
                console.error('CKEditor initialization error:', error);
            });
    }
    
    // Sync CKEditor with textarea before form submission and validate
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            if (editor) {
                editor.updateSourceElement();
                // Validate that content is not empty
                const content = editor.getData().trim();
                if (!content) {
                    e.preventDefault();
                    alert('Please enter content.');
                    editor.focus();
                    return false;
                }
            }
        });
    }
</script>
@endpush

