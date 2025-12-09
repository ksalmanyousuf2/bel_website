<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GlobalPartner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GlobalPartnerController extends Controller
{
    public function index()
    {
        $partners = GlobalPartner::orderBy('order')->get();
        return view('admin.global-partners.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.global-partners.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('global-partners', 'public');
        }

        GlobalPartner::create($validated);

        return redirect()->route('admin.global-partners.index')->with('success', 'Global Partner created successfully.');
    }

    public function show(GlobalPartner $globalPartner)
    {
        return view('admin.global-partners.show', compact('globalPartner'));
    }

    public function edit(GlobalPartner $globalPartner)
    {
        return view('admin.global-partners.edit', compact('globalPartner'));
    }

    public function update(Request $request, GlobalPartner $globalPartner)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('logo')) {
            if ($globalPartner->logo) {
                Storage::disk('public')->delete($globalPartner->logo);
            }
            $validated['logo'] = $request->file('logo')->store('global-partners', 'public');
        }

        $globalPartner->update($validated);

        return redirect()->route('admin.global-partners.index')->with('success', 'Global Partner updated successfully.');
    }

    public function destroy(GlobalPartner $globalPartner)
    {
        if ($globalPartner->logo) {
            Storage::disk('public')->delete($globalPartner->logo);
        }
        $globalPartner->delete();

        return redirect()->route('admin.global-partners.index')->with('success', 'Global Partner deleted successfully.');
    }
}
