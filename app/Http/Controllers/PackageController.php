<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::orderBy('order')->paginate(5);
        return view('backend.packages.index', compact('packages'));
    }

    public function create()
    {
        return view('backend.packages.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'required|integer',
            'description' => 'nullable',
            'discount' => 'nullable|integer',
            'status' => 'required|in:active,inactive',
        ]);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $validatedData['image'] = $imagePath;
        }

        Package::create($validatedData);

        return redirect()->route('packages.index')
            ->with('success', 'Package created successfully.');
    }

    public function edit(Package $package)
    {
        return view('backend.packages.edit', compact('package'));
    }

    public function update(Request $request, Package $package)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'required|integer',
            'description' => 'nullable',
            'discount' => 'nullable|integer',
            'status' => 'required|in:active,inactive',
        ]);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $validatedData['image'] = $imagePath;
        }

        $package->update($validatedData);

        return redirect()->route('packages.index')
            ->with('success', 'Package updated successfully.');
    }

    public function destroy(Package $package)
    {
        $package->delete();

        return redirect()->route('packages.index')
            ->with('success', 'Package deleted successfully.');
    }
}
