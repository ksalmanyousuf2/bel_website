<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class IndustrialCommercialController extends Controller
{
    public function index()
    {
        $companies = Company::where('is_active', true)
            ->orderBy('order')
            ->orderBy('type')
            ->get();
        
        $testimonials = Testimonial::where('is_active', true)
            ->whereNotNull('image')
            ->orderBy('order')
            ->get();
        
            // dd($testimonials);
        return view('industrial-commercial', compact('companies', 'testimonials'));
    }
    public function business()
    { 
        $companies = Company::where('is_active', true)
            ->orderBy('order')
            ->orderBy('type')
            ->get();
        
        $testimonials = Testimonial::where('is_active', true)
            ->whereNotNull('image')
            ->orderBy('order')
            ->get();
        
        return view('industrial-business', compact('companies', 'testimonials'));
    }

    public function indexIndustrial()
    {
        $companies = Company::where('is_active', true)
            ->orderBy('order')
            ->orderBy('type')
            ->get();
        
        $testimonials = Testimonial::where('is_active', true)
            ->whereNotNull('image')
            ->orderBy('order')
            ->get();
        
        return view('industrial-business', compact('companies', 'testimonials'));
    }
}
