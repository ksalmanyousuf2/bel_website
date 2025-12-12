<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class CleaningServicesController extends Controller
{
    public function index()
    {
        // Fetch popular/active projects for the carousel
        $projects = Project::where('is_active', true)
            ->with('images')
            ->orderBy('order')
            ->limit(10) // Limit to 10 projects for carousel
            ->get();
        
        return view('cleaning-services', compact('projects'));
    }
}

