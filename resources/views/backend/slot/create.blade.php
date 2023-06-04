@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="page-header">
            <h3 class="page-title">Create Slot</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Slots</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Slot</li>
                </ol>
            </nav>
        </div>      
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('available_slots.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="date">Date</label>
                            <input type="date" name="date" id="date" class="form-control @error('date') is-invalid @enderror" required>
                            @error('date')
                                 <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_of_patience">No. of Patience</label>
                            <input type="number" name="no_of_patience" id="no_of_patience" class="form-control @error('no_of_patience') is-invalid @enderror" required>
                            @error('no_of_patience')
                                 <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="start_time">Start Time</label>
                            <input type="time" name="start_time" id="start_time" class="form-control @error('start_time') is-invalid @enderror" required>
                            @error('start_time')
                                 <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="end_time">End Time</label>
                            <input type="time" name="end_time" id="end_time" class="form-control @error('end_time') is-invalid @enderror" required>
                            @error('end_time')
                                 <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="{{ route('available_slots.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
