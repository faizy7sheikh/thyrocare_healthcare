<!-- resources/views/technicians/edit.blade.php -->

@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="page-header">
            <h3 class="page-title">Edit Technician</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Technician</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Technician</li>
                </ol>
            </nav>
        </div>
      
        <div class="row">
            <form action="{{ route('technicians.update', $technician) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $technician->name }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $technician->email }}" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="{{ $technician->phone }}">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{ $technician->address }}">
                </div>
                <div class="form-group">
                    <label for="specialization">Specialization</label>
                    <input type="text" name="specialization" id="specialization" class="form-control" value="{{ $technician->specialization }}">
                </div>
                <div class="form-group">
                    <label for="workplace">Workplace</label>
                    <input type="text" name="workplace" id="workplace" class="form-control" value="{{ $technician->workplace }}">
                </div>
                <div class="form-group">
                    <label for="experience">Experience</label>
                    <input type="number" name="experience" id="experience" class="form-control" value="{{ $technician->experience }}">
                </div>
                <div class="form-group">
                    <label for="qualification">Qualification</label>
                    <input type="text" name="qualification" id="qualification" class="form-control" value="{{ $technician->qualification }}">
                </div>
                <div class="form-group">
                    <label for="service_area">Service Area</label>
                    <input type="text" name="service_area" id="service_area" class="form-control" value="{{ $technician->service_area }}">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="active" {{ $technician->status == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ $technician->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="available">Available</label>
                    <div class="form-check">
                        <input type="checkbox" name="available" id="available" class="form-check-input" {{ $technician->available ? 'checked' : '' }}>
                        <label for="available" class="form-check-label">Yes</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('technicians.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
