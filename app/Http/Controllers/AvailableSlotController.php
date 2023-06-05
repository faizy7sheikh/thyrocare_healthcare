<?php

namespace App\Http\Controllers;

use App\AvailableSlot;
use Illuminate\Http\Request;

class AvailableSlotController extends Controller
{
    public function index()
    {
        $slots = AvailableSlot::all();

        return view('backend.slot.index', compact('slots'));
    }

    public function create()
    {
        return view('backend.slot.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
            'no_of_patience' => 'required|integer',
        ]);

        AvailableSlot::create($validatedData);

        return redirect()->route('available_slots.index')->with('success', 'Slot created successfully.');
    }

    public function edit(AvailableSlot $slot)
    {
        return view('backend.slot.edit', compact('slot'));
    }

    public function update(Request $request, AvailableSlot $slot)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
            'no_of_patience' => 'required|integer',
        ]);

        $slot->update($validatedData);

        return redirect()->route('backend.slot.index')->with('success', 'Slot updated successfully.');
    }

    public function destroy(AvailableSlot $slot)
    {
        $slot->delete();

        return redirect()->route('backend.slot.index')->with('success', 'Slot deleted successfully.');
    }
}

