@extends('layouts.admin')

@section('title', 'Events - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Events</h1>
    <a href="{{ route('admin.events.create') }}" class="btn btn-primary">Add New Event</a>
</div>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Event Date</th>
                <th>Location</th>
                <th>Published</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($events as $event)
            <tr>
                <td>{{ $event->title }}</td>
                <td>{{ $event->event_date->format('M d, Y') }}</td>
                <td>{{ $event->location ?? '-' }}</td>
                <td>
                    @if($event->is_published)
                    <span class="badge bg-success">Published</span>
                    @else
                    <span class="badge bg-secondary">Draft</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.events.edit', $event) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('admin.events.destroy', $event) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No events found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

