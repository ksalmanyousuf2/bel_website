<?php

namespace App\Http\Controllers;

use App\Models\GlobalPartner;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $globalPartners = GlobalPartner::where('is_active', true)
            ->orderBy('order')
            ->get();
            
        return view('about-us', compact('globalPartners'));
    }

    public function ourStory()
    {
        return view('our-story');
    }
}
