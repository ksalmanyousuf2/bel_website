<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class ReflexController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::where('is_active', true)
            ->whereNotNull('image')
            ->orderBy('order')
            ->get();
        
        return view('reflex', compact('testimonials'));
    }
}

