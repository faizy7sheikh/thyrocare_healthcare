@extends('backend.layouts.app')

@section('content')
<div class="page-header">
    <h3 class="page-title">Edit Package</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Package</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Edit Package</li>
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
            <form action="{{ route('packages.update', $package) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $package->name }}" required>
                            @error('name')
                                 <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price" value="{{ $package->price }}">
                            @error('price')
                                 <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control-file" id="image">
                        </div>
                        @if ($package->image)
                            <div class="form-group">
                                <img src="{{ asset('storage/' . $package->image) }}" alt="Package Image" width="100">
                            </div>
                        @endif
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="order">Order</label>
                            <input type="number" name="order" class="form-control @error('order') is-invalid @enderror" id="order" value="{{ $package->order }}" required>
                            @error('order')
                                 <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description">{{ $package->description }}</textarea>
                            @error('description')
                                 <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="discount">Discount</label>
                            <input type="number" name="discount" class="form-control @error('discount') is-invalid @enderror" id="discount" value="{{ $package->discount }}">
                            @error('discount')
                                 <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control @error('status') is-invalid @enderror" id="status" required>
                                <option value="active" {{ $package->status === 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ $package->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                            @error('status')
                                 <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>        
@endsection
