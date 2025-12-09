<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->get('category', 'both');
        
        $query = Project::where('is_active', true)
            ->with('images');
        
        // Filter by category if not 'both'
        if ($category !== 'both') {
            $query->where('type', $category);
        }
        
        $projects = $query->orderBy('order')
            ->get();

        return view('projects.index', compact('projects', 'category'));
    }

    public function show($id)
    {
        $project = Project::where('id', $id)
            ->where('is_active', true)
            ->with('images')
            ->firstOrFail();

        $relatedProjects = Project::where('is_active', true)
            ->where('id', '!=', $project->id)
            ->orderBy('order')
            ->limit(3)
            ->get();

        return view('projects.show', compact('project', 'relatedProjects'));
    }
}
