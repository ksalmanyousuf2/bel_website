@extends('layouts.admin')

@section('title', 'Create Job - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Job</h1>
    <a href="{{ route('admin.careers.index') }}" class="btn btn-secondary">Back</a>
</div>

<form action="{{ route('admin.careers.store') }}" method="POST" novalidate>
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
    
    <div class="row">
        <div class="col-md-8">
            <div class="mb-3">
                <label for="title" class="form-label">Job Title *</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}" placeholder="Auto-generated from title">
                <small class="form-text text-muted">Leave empty to auto-generate from title</small>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Job Description *</label>
                <textarea class="form-control" id="description" name="description" rows="8">{{ old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="requirements" class="form-label">Requirements</label>
                <textarea class="form-control" id="requirements" name="requirements" rows="6">{{ old('requirements') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="responsibilities" class="form-label">Responsibilities</label>
                <textarea class="form-control" id="responsibilities" name="responsibilities" rows="6">{{ old('responsibilities') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="benefits" class="form-label">Benefits</label>
                <textarea class="form-control" id="benefits" name="benefits" rows="6">{{ old('benefits') }}</textarea>
                <small class="form-text text-muted">List the benefits and perks offered with this position</small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="type" class="form-label">Job Type *</label>
                <select class="form-select" id="type" name="type" required>
                    <option value="full-time" {{ old('type') == 'full-time' ? 'selected' : '' }}>Full Time</option>
                    <option value="part-time" {{ old('type') == 'part-time' ? 'selected' : '' }}>Part Time</option>
                    <option value="contract" {{ old('type') == 'contract' ? 'selected' : '' }}>Contract</option>
                    <option value="internship" {{ old('type') == 'internship' ? 'selected' : '' }}>Internship</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}" placeholder="e.g., Islamabad, Pakistan">
            </div>
            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <input type="text" class="form-control" id="department" name="department" value="{{ old('department') }}" placeholder="e.g., Engineering, Sales">
            </div>
            <div class="mb-3">
                <label for="salary_range" class="form-label">Salary Range</label>
                <input type="text" class="form-control" id="salary_range" name="salary_range" value="{{ old('salary_range') }}" placeholder="e.g., $50,000 - $70,000">
            </div>
            <div class="mb-3">
                <label for="application_deadline" class="form-label">Application Deadline</label>
                <input type="date" class="form-control" id="application_deadline" name="application_deadline" value="{{ old('application_deadline') }}">
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">Active (Visible on website)</label>
                </div>
            </div>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Create Job</button>
</form>
@endsection

@push('scripts')
<script>
    let descriptionEditor, requirementsEditor, responsibilitiesEditor, benefitsEditor;
    
    ClassicEditor
        .create(document.querySelector('#description'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'insertTable', '|', 'undo', 'redo']
        })
        .then(instance => {
            descriptionEditor = instance;
        })
        .catch(error => {
            console.error(error);
        });
    
    ClassicEditor
        .create(document.querySelector('#requirements'), {
            toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'undo', 'redo']
        })
        .then(instance => {
            requirementsEditor = instance;
        })
        .catch(error => {
            console.error(error);
        });
    
    ClassicEditor
        .create(document.querySelector('#responsibilities'), {
            toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'undo', 'redo']
        })
        .then(instance => {
            responsibilitiesEditor = instance;
        })
        .catch(error => {
            console.error(error);
        });
    
    ClassicEditor
        .create(document.querySelector('#benefits'), {
            toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'undo', 'redo']
        })
        .then(instance => {
            benefitsEditor = instance;
        })
        .catch(error => {
            console.error(error);
        });
    
    // Sync CKEditor with textarea before form submission
    document.querySelector('form').addEventListener('submit', function(e) {
        // Sync all editors first
        if (descriptionEditor) {
            descriptionEditor.updateSourceElement();
        }
        if (requirementsEditor) {
            requirementsEditor.updateSourceElement();
        }
        if (responsibilitiesEditor) {
            responsibilitiesEditor.updateSourceElement();
        }
        if (benefitsEditor) {
            benefitsEditor.updateSourceElement();
        }
        
        // Validate description
        if (descriptionEditor) {
            const content = descriptionEditor.getData().trim();
            if (!content) {
                e.preventDefault();
                alert('Please enter job description.');
                descriptionEditor.focus();
                return false;
            }
        }
    });
</script>
@endpush

