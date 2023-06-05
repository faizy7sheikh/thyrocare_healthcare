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
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('technicians.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" required>
                            @error('name')
                                 <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required>
                            @error('email')
                                 <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control">
                            @error('phone')
                                 <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control">
                            @error('address')
                                 <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="specialization">Specialization</label>
                            <input type="text" name="specialization" id="specialization" class="form-control">
                            @error('specialization')
                                 <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="workplace">Workplace</label>
                            <input type="text" name="workplace" id="workplace" class="form-control">
                            @error('workplace')
                                 <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="experience">Experience</label>
                            <input type="number" name="experience" id="experience" class="form-control">
                            @error('experience')
                                 <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="qualification">Qualification</label>
                            <input type="text" name="qualification" id="qualification" class="form-control">
                            @error('qualification')
                                 <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="service_area">Service Area</label>
                            <input type="text" name="service_area" id="service_area" class="form-control">
                            @error('service_area')
                                 <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                            @error('status')
                                 <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="available">Available</label>
                        <div class="form-check">
                            <input type="checkbox" name="available" id="available" class="form-check-input">
                            <label for="available" class="form-check-label">Yes</label>
                            @error('available')
                                 <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
