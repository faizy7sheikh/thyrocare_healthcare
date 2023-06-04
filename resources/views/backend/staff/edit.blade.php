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

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('technicians.update', $technician) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $technician->name }}" required>
                            @error('name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $technician->email }}" required>
                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" value="{{ $technician->phone }}">
                            @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control" value="{{ $technician->address }}">
                            @error('address')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="specialization">Specialization</label>
                            <input type="text" name="specialization" id="specialization" class="form-control" value="{{ $technician->specialization }}">
                            @error('specialization')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="workplace">Workplace</label>
                            <input type="text" name="workplace" id="workplace" class="form-control" value="{{ $technician->workplace }}">
                            @error('workplace')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="experience">Experience</label>
                            <input type="number" name="experience" id="experience" class="form-control" value="{{ $technician->experience }}">
                            @error('experience')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="qualification">Qualification</label>
                            <input type="text" name="qualification" id="qualification" class="form-control" value="{{ $technician->qualification }}">
                            @error('qualification')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="service_area">Service Area</label>
                            <input type="text" name="service_area" id="service_area" class="form-control" value="{{ $technician->service_area }}">
                            @error('service_area')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="active" {{ $technician->status == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ $technician->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                            @error('status')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group ">
                            <label for="available">Available</label>
                            <div class="form-check">
                                <input type="checkbox" name="available" id="available" class="form-check-input" {{ $technician->available ? 'checked' : '' }}>
                                <label for="available" class="form-check-label">Yes</label>
                                @error('available')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('technicians.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
