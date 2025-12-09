@extends('layouts.admin')

@section('title', 'Create Blog - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Blog</h1>
    <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Back</a>
</div>

<form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
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
        <label for="excerpt" class="form-label">Excerpt</label>
        <textarea class="form-control" id="excerpt" name="excerpt" rows="3">{{ old('excerpt') }}</textarea>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Content *</label>
        <textarea class="form-control" id="content" name="content" rows="10">{{ old('content') }}</textarea>
    </div>
    <div class="mb-3">
        <label for="featured_image" class="form-label">Featured Image</label>
        <input type="file" class="form-control" id="featured_image" name="featured_image" accept="image/*">
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }}>
            <label class="form-check-label" for="is_featured">Featured</label>
        </div>
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="is_published" name="is_published" value="1" {{ old('is_published') ? 'checked' : '' }}>
            <label class="form-check-label" for="is_published">Published</label>
        </div>
    </div>
    <div class="mb-3">
        <label for="published_at" class="form-label">Published At</label>
        <input type="datetime-local" class="form-control" id="published_at" name="published_at" value="{{ old('published_at') }}">
    </div>
    <button type="submit" class="btn btn-primary">Create Blog</button>
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

