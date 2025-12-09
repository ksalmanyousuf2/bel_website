@extends('layouts.admin')

@section('title', 'Global Partners - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Global Partners</h1>
    <a href="{{ route('admin.global-partners.create') }}" class="btn btn-primary">Add New Partner</a>
</div>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Logo</th>
                <th>Order</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($partners as $partner)
            <tr>
                <td>{{ $partner->name }}</td>
                <td>
                    @if($partner->logo)
                    <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}" style="width: 80px; height: 50px; object-fit: contain;">
                    @else
                    <span class="text-muted">No logo</span>
                    @endif
                </td>
                <td>{{ $partner->order }}</td>
                <td>
                    @if($partner->is_active)
                    <span class="badge bg-success">Active</span>
                    @else
                    <span class="badge bg-secondary">Inactive</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.global-partners.edit', $partner) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('admin.global-partners.destroy', $partner) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No global partners found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

