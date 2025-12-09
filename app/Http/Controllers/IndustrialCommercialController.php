<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class IndustrialCommercialController extends Controller
{
    public function index()
    {
        $companies = Company::where('is_active', true)
            ->orderBy('order')
            ->orderBy('type')
            ->get();
        
        return view('industrial-commercial', compact('companies'));
    }
    public function business()
    { 
        $companies = Company::where('is_active', true)
            ->orderBy('order')
            ->orderBy('type')
            ->get();
        
        return view('industrial-business', compact('companies'));
    }

    public function indexIndustrial()
    {
        $companies = Company::where('is_active', true)
            ->orderBy('order')
            ->orderBy('type')
            ->get();
        
        return view('industrial-business', compact('companies'));
    }
}
