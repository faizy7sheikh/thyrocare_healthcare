<!-- resources/views/available_slots/create.blade.php -->

@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="page-header">
            <h3 class="page-title">Create Slot</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Slots</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Slot </li>
                </ol>
            </nav>
        </div>      
        <div class="row">
            <form action="{{ route('available_slots.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="start_time">Start Time</label>
                    <input type="time" name="start_time" id="start_time" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="end_time">End Time</label>
                    <input type="time" name="end_time" id="end_time" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="no_of_patience">No. of Patience</label>
                    <input type="number" name="no_of_patience" id="no_of_patience" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ route('available_slots.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
