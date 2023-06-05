@extends('backend.layouts.app')

@section('content')
<div class="page-header">
    <h3 class="page-title">Add Service Area</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Service Area</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Service Area</li>
        </ol>
    </nav>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="d-flex justify-content-center">
    <div class="col-md-6">
        <div class="row">
            <form action="{{ route('service-areas.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="pincode">Pincode</label>
                    <input type="text" name="pincode" class="form-control @error('pincode') is-invalid @enderror" id="pincode" required>
                    @error('pincode')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control @error('status') is-invalid @enderror" id="status" required>
                        <option value="active" @if(old('status') === 'active') selected @endif>Active</option>
                        <option value="inactive" @if(old('status') === 'inactive') selected @endif>Inactive</option>
                    </select>
                    @error('status')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
