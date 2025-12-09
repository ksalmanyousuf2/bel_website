@extends('layouts.admin')

@section('title', 'Edit Blog - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Blog</h1>
    <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Back</a>
</div>

<form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Title *</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $blog->title) }}" required>
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug', $blog->slug) }}">
    </div>
    <div class="mb-3">
        <label for="excerpt" class="form-label">Excerpt</label>
        <textarea class="form-control" id="excerpt" name="excerpt" rows="3">{{ old('excerpt', $blog->excerpt) }}</textarea>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Content *</label>
        <textarea class="form-control" id="content" name="content" rows="10">{{ old('content', $blog->content) }}</textarea>
    </div>
    <div class="mb-3">
        <label for="featured_image" class="form-label">Featured Image</label>
        @if($blog->featured_image)
        <div class="mb-2">
            <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}" style="max-width: 200px;">
        </div>
        @endif
        <input type="file" class="form-control" id="featured_image" name="featured_image" accept="image/*">
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured', $blog->is_featured) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_featured">Featured</label>
        </div>
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="is_published" name="is_published" value="1" {{ old('is_published', $blog->is_published) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_published">Published</label>
        </div>
    </div>
    <div class="mb-3">
        <label for="published_at" class="form-label">Published At</label>
        <input type="datetime-local" class="form-control" id="published_at" name="published_at" value="{{ old('published_at', $blog->published_at ? $blog->published_at->format('Y-m-d\TH:i') : '') }}">
    </div>
    <button type="submit" class="btn btn-primary">Update Blog</button>
</form>
@endsection

@push('scripts')
<script>
    let excerptEditor, contentEditor;
    
    ClassicEditor
        .create(document.querySelector('#excerpt'), {
            toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'undo', 'redo']
        })
        .then(instance => {
            excerptEditor = instance;
        })
        .catch(error => {
            console.error(error);
        });
    
    ClassicEditor
        .create(document.querySelector('#content'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'insertTable', '|', 'undo', 'redo']
        })
        .then(instance => {
            contentEditor = instance;
        })
        .catch(error => {
            console.error(error);
        });
    
    // Sync CKEditor with textarea before form submission and validate
    document.querySelector('form').addEventListener('submit', function(e) {
        if (excerptEditor) {
            excerptEditor.updateSourceElement();
        }
        if (contentEditor) {
            contentEditor.updateSourceElement();
            // Validate that content is not empty
            const content = contentEditor.getData().trim();
            if (!content) {
                e.preventDefault();
                alert('Please enter content.');
                contentEditor.focus();
                return false;
            }
        }
    });
</script>
@endpush

