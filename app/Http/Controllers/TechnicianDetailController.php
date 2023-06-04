<?php

namespace App\Http\Controllers;

use App\TechnicianDetail;
use Illuminate\Http\Request;

class TechnicianDetailController extends Controller
{
    public function index()
    {
        $technicians = TechnicianDetail::all();
        return view('backend.staff.index', compact('technicians'));
    }

    public function create()
    {
        return view('backend.staff.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:technician_details',
            // Add validation rules for other fields
        ]);

        TechnicianDetail::create($validatedData);

        return redirect()->route('technicians.index')->with('success', 'Technician created successfully.');
    }

    public function show(TechnicianDetail $technician)
    {
        return view('backend.staff.show', compact('technician'));
    }

    public function edit(TechnicianDetail $technician)
    {
        return view('backend.staff.edit', compact('technician'));
    }

    public function update(Request $request, TechnicianDetail $technician)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:technician_details,email,' . $technician->id,
            // Add validation rules for other fields
        ]);

        $technician->update($validatedData);

        return redirect()->route('technicians.index')->with('success', 'Technician updated successfully.');
    }

    public function destroy(TechnicianDetail $technician)
    {
        $technician->delete();

        return redirect()->route('technicians.index')->with('success', 'Technician deleted successfully.');
    }
}

