@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="page-header">
            <h3 class="page-title">Technician Details</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Technician</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Technician Details</li>
                </ol>
            </nav>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <p><strong>Name:</strong> {{ $technician->name }}</p>
                        <p><strong>Email:</strong> {{ $technician->email }}</p>
                        <p><strong>Phone:</strong> {{ $technician->phone }}</p>
                        <p><strong>Address:</strong> {{ $technician->address }}</p>
                        <p><strong>Specialization:</strong> {{ $technician->specialization }}</p>
                        <p><strong>Workplace:</strong> {{ $technician->workplace }}</p>
                        <p><strong>Experience:</strong> {{ $technician->experience }}</p>
                        <p><strong>Qualification:</strong> {{ $technician->qualification }}</p>
                        <p><strong>Service Area:</strong> {{ $technician->service_area }}</p>
                        <p><strong>Status:</strong> {{ $technician->status }}</p>
                        <p><strong>Availability:</strong> {{ $technician->available ? 'Yes' : 'No' }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('technicians.index') }}" class="btn btn-primary float-right">Back to Technicians</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
