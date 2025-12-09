@extends('layouts.admin')

@section('title', 'Solutions - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Solutions</h1>
    <a href="{{ route('admin.solutions.create') }}" class="btn btn-primary">Add New Solution</a>
</div>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Order</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($solutions as $solution)
            <tr>
                <td>{{ $solution->title }}</td>
                <td>
                    @if($solution->image)
                    <img src="{{ asset('storage/' . $solution->image) }}" alt="{{ $solution->title }}" style="width: 50px; height: 50px; object-fit: cover;">
                    @else
                    <span class="text-muted">No image</span>
                    @endif
                </td>
                <td>{{ $solution->order }}</td>
                <td>
                    @if($solution->is_active)
                    <span class="badge bg-success">Active</span>
                    @else
                    <span class="badge bg-secondary">Inactive</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.solutions.edit', $solution) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('admin.solutions.destroy', $solution) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No solutions found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

