@extends('layouts.admin')

@section('title', 'Blogs - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Blogs</h1>
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">Add New Blog</a>
</div>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Featured</th>
                <th>Published</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($blogs as $blog)
            <tr>
                <td>{{ $blog->title }}</td>
                <td>
                    @if($blog->is_featured)
                    <span class="badge bg-warning">Featured</span>
                    @endif
                </td>
                <td>
                    @if($blog->is_published)
                    <span class="badge bg-success">Published</span>
                    @else
                    <span class="badge bg-secondary">Draft</span>
                    @endif
                </td>
                <td>{{ $blog->published_at ? $blog->published_at->format('M d, Y') : '-' }}</td>
                <td>
                    <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No blogs found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

