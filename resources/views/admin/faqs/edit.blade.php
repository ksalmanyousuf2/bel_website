@extends('layouts.admin')

@section('title', 'Edit FAQ - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit FAQ</h1>
    <a href="{{ route('admin.faqs.index') }}" class="btn btn-secondary">Back</a>
</div>

<form action="{{ route('admin.faqs.update', $faq) }}" method="POST">
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
    
    <div class="mb-3">
        <label for="question" class="form-label">Question *</label>
        <input type="text" class="form-control" id="question" name="question" value="{{ old('question', $faq->question) }}" required maxlength="500">
        <small class="form-text text-muted">Maximum 500 characters</small>
    </div>
    
    <div class="mb-3">
        <label for="answer" class="form-label">Answer *</label>
        <textarea class="form-control" id="answer" name="answer" rows="10">{{ old('answer', $faq->answer) }}</textarea>
    </div>
    
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <input type="text" class="form-control" id="category" name="category" value="{{ old('category', $faq->category) }}" placeholder="e.g., General, Products, Services">
        <small class="form-text text-muted">Optional: Group FAQs by category</small>
    </div>
    
    <div class="mb-3">
        <label for="order" class="form-label">Order</label>
        <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $faq->order) }}" min="0">
        <small class="form-text text-muted">Lower numbers appear first</small>
    </div>
    
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $faq->is_active) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_active">Active</label>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Update FAQ</button>
</form>
@endsection

@push('scripts')
<script>
    let editor;
    ClassicEditor
        .create(document.querySelector('#answer'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'blockQuote', 'insertTable', '|', 'undo', 'redo'],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' }
                ]
            }
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
            // Validate that answer is not empty
            const answer = editor.getData().trim();
            if (!answer) {
                e.preventDefault();
                alert('Please enter an answer.');
                editor.focus();
                return false;
            }
        }
    });
</script>
@endpush

