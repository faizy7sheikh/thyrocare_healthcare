<?php 
namespace App\Http\Controllers;

use App\ServiceAvailableArea;
use Illuminate\Http\Request;

class ServiceAreaController extends Controller
{
    public function index()
    {
        $serviceAreas = ServiceAvailableArea::all();
        return view('backend.service.index', compact('serviceAreas'));
    }

    public function create()
    {
        return view('backend.service.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pincode' => 'required|digits:6',
            'status' => 'required|in:active,inactive',
        ]);

        ServiceAvailableArea::create($validatedData);

        return redirect()->route('service-areas.index')
            ->with('success', 'Service area added successfully.');
    }

    public function edit(ServiceAvailableArea $serviceArea)
    {
        return view('backend.service.edit', compact('serviceArea'));
    }

    public function update(Request $request, ServiceAvailableArea $serviceArea)
    {
        $validatedData = $request->validate([
            'pincode' => 'required|digits:6|unique:service_available_areas',
            'status' => 'required|in:active,inactive',
        ]);

        $serviceArea->update($validatedData);

        return redirect()->route('service-areas.index')
            ->with('success', 'Service area updated successfully.');
    }
}
