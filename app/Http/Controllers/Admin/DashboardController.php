<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use App\Models\Blog;
use App\Models\Testimonial;
use App\Models\Project;
use App\Models\Event;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'solutions' => Solution::count(),
            'blogs' => Blog::count(),
            'testimonials' => Testimonial::count(),
            'projects' => Project::count(),
            'events' => Event::count(),
            'companies' => \App\Models\Company::count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
