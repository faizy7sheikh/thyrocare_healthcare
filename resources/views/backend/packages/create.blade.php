@extends('backend.layouts.app')

@section('content')

<div class="page-header">
    <h3 class="page-title">Add Package</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Package</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Add Package </li>
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

<div class="row justify-content-center">
    <div class="col-lg-6">
        <form action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                        @error('name')
                             <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price">
                        @error('price')
                         <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control-file" id="image">
                        @error('image')
                         <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="order">Order</label>
                        <input type="number" name="order" class="form-control" id="order" required>
                        @error('order')
                         <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description"></textarea>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="discount">Discount</label>
                        <input type="number" name="discount" class="form-control" id="discount">
                        @error('discount')
                         <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control" id="status" required>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                        @error('status')
                         <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>

@endsection
