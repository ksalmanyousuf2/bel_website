<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact_no' => 'nullable|string|max:255',
            'hear_about_us' => 'required|string|max:255',
            'customer_type' => 'required|string|max:255',
            'max_summer_bill' => 'required|string|max:255',
            'property_type' => 'required|string|max:255',
        ]);

        // Store the contact submission
        $contact = Contact::create($validated);

        // Optionally send email notification
        // You can uncomment and configure this if you want email notifications
        /*
        try {
            Mail::to(config('mail.from.address'))->send(new \App\Mail\ContactSubmission($contact));
        } catch (\Exception $e) {
            // Log error but don't fail the request
            \Log::error('Failed to send contact email: ' . $e->getMessage());
        }
        */

        return redirect()->route('contact')->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}

