<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        // Get all active FAQs, grouped by category
        $faqs = Faq::where('is_active', true)
            ->orderBy('order')
            ->orderBy('category')
            ->orderBy('question')
            ->get()
            ->groupBy('category');

        return view('faqs.index', compact('faqs'));
    }
}

