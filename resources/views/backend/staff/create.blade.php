<!-- resources/views/technicians/create.blade.php -->

@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="page-header">
            <h3 class="page-title">Create Technician</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Technician</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Technician</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <form action="{{ route('technicians.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="specialization">Specialization</label>
                    <input type="text" name="specialization" id="specialization" class="form-control">
                </div>
                <div class="form-group">
                    <label for="workplace">Workplace</label>
                    <input type="text" name="workplace" id="workplace" class="form-control">
                </div>
                <div class="form-group">
                    <label for="experience">Experience</label>
                    <input type="number" name="experience" id="experience" class="form-control">
                </div>
                <div class="form-group">
                    <label for="qualification">Qualification</label>
                    <input type="text" name="qualification" id="qualification" class="form-control">
                </div>
                <div class="form-group">
                    <label for="service_area">Service Area</label>
                    <input type="text" name="service_area" id="service_area" class="form-control">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="available">Available</label>
                    <div class="form-check">
                        <input type="checkbox" name="available" id="available" class="form-check-input">
                        <label for="available" class="form-check-label">Yes</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
