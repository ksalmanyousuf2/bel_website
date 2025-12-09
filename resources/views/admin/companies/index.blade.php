@extends('layouts.admin')

@section('title', 'Companies - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Companies</h1>
    <a href="{{ route('admin.companies.create') }}" class="btn btn-primary">Add New Company</a>
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
                <th>Type</th>
                <th>Name</th>
                <th>Logo</th>
                <th>Order</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($companies as $company)
            <tr>
                <td>
                    <span class="badge bg-{{ $company->type === 'commercial' ? 'info' : 'primary' }}">
                        {{ ucfirst($company->type) }}
                    </span>
                </td>
                <td>{{ $company->name }}</td>
                <td>
                    @if($company->logo)
                    <img src="{{ asset('storage/' . $company->logo) }}" alt="{{ $company->name }}" style="width: 80px; height: 50px; object-fit: contain;">
                    @else
                    <span class="text-muted">No logo</span>
                    @endif
                </td>
                <td>{{ $company->order }}</td>
                <td>
                    @if($company->is_active)
                    <span class="badge bg-success">Active</span>
                    @else
                    <span class="badge bg-secondary">Inactive</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.companies.edit', $company) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('admin.companies.destroy', $company) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">No companies found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

