@extends('layouts.admin')

@section('title', 'FAQs - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">FAQs</h1>
    <a href="{{ route('admin.faqs.create') }}" class="btn btn-primary">Add New FAQ</a>
</div>

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Question</th>
                <th>Category</th>
                <th>Order</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($faqs as $faq)
            <tr>
                <td>{{ Str::limit($faq->question, 60) }}</td>
                <td>{{ $faq->category ?? '-' }}</td>
                <td>{{ $faq->order }}</td>
                <td>
                    @if($faq->is_active)
                    <span class="badge bg-success">Active</span>
                    @else
                    <span class="badge bg-secondary">Inactive</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.faqs.edit', $faq) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('admin.faqs.destroy', $faq) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this FAQ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No FAQs found. <a href="{{ route('admin.faqs.create') }}">Create your first FAQ</a></td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

