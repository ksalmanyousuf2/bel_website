@extends('layouts.admin')

@section('title', 'Dashboard - Beacon Energy CMS')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>

<div class="row g-4">
    <div class="col-md-4">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-subtitle mb-2">Solutions</h6>
                        <h2 class="card-title">{{ $stats['solutions'] }}</h2>
                    </div>
                    <i class="fas fa-lightbulb fa-3x opacity-50"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-white bg-success">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-subtitle mb-2">Blogs</h6>
                        <h2 class="card-title">{{ $stats['blogs'] }}</h2>
                    </div>
                    <i class="fas fa-blog fa-3x opacity-50"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-white bg-info">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-subtitle mb-2">Testimonials</h6>
                        <h2 class="card-title">{{ $stats['testimonials'] }}</h2>
                    </div>
                    <i class="fas fa-quote-left fa-3x opacity-50"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-white bg-warning">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-subtitle mb-2">Projects</h6>
                        <h2 class="card-title">{{ $stats['projects'] }}</h2>
                    </div>
                    <i class="fas fa-project-diagram fa-3x opacity-50"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-white bg-danger">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-subtitle mb-2">Events</h6>
                        <h2 class="card-title">{{ $stats['events'] }}</h2>
                    </div>
                    <i class="fas fa-calendar-alt fa-3x opacity-50"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

