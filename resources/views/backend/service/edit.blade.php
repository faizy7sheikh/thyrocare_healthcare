@extends('backend.layouts.app')

@section('content')
<div class="page-header">
    <h3 class="page-title">Edit Service Area</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Service Area</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Service Area </li>
        </ol>
    </nav>
</div>


{{-- @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif --}}

<div class="d-flex justify-content-center">
    <div class="col-md-6">
        <div class="row">
            <form action="{{ route('service-areas.update', $serviceArea) }}" method="POST">
                @csrf
                @method('PUT')
            
                <div class="form-group">
                    <label for="pincode">Pincode</label>
                    <input type="text" name="pincode" class="form-control" id="pincode" value="{{ $serviceArea->pincode }}" required>
                    @error('pincode')
                            <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control" id="status" required>
                        <option value="active" {{ $serviceArea->status === 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ $serviceArea->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>    

@endsection