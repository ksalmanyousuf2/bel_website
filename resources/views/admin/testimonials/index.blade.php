@extends('layouts.admin')

@section('title', 'Testimonials - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Testimonials</h1>
    <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">Add New Testimonial</a>
</div>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Company</th>
                <th>Rating</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($testimonials as $testimonial)
            <tr>
                <td>{{ $testimonial->name }}</td>
                <td>{{ $testimonial->company ?? '-' }}</td>
                <td>{{ str_repeat('★', $testimonial->rating) }}</td>
                <td>
                    @if($testimonial->is_active)
                    <span class="badge bg-success">Active</span>
                    @else
                    <span class="badge bg-secondary">Inactive</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No testimonials found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

