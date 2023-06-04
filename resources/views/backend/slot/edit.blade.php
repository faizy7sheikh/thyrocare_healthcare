<!-- resources/views/available_slots/edit.blade.php -->

@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="page-header">
            <h3 class="page-title">Edit Slot</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Slots</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Slot </li>
                </ol>
            </nav>
        </div>  
        <div class="row">
            <form action="{{ route('available_slots.update', $slot) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" class="form-control" value="{{ $slot->date }}" required>
                </div>
                <div class="form-group">
                    <label for="start_time">Start Time</label>
                    <input type="time" name="start_time" id="start_time" class="form-control" value="{{ $slot->start_time }}" required>
                </div>
                <div class="form-group">
                    <label for="end_time">End Time</label>
                    <input type="time" name="end_time" id="end_time" class="form-control" value="{{ $slot->end_time }}" required>
                </div>
                <div class="form-group">
                    <label for="no_of_patience">No. of Patience</label>
                    <input type="number" name="no_of_patience" id="no_of_patience" class="form-control" value="{{ $slot->no_of_patience }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('available_slots.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
