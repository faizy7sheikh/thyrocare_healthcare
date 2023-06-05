@extends('backend.layouts.app')

@section('content')
<div class="page-header">
    <h3 class="page-title">Lis Packages</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Package</a></li>
        <li class="breadcrumb-item active" aria-current="page">List Package </li>
        </ol>
    </nav>
</div>

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="row">
    <div class="col-12">
        <a href="{{ route('packages.create') }}" class="btn btn-success float-right">Add Package</a>

    </div>
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Order</th>
            <th>Description</th>
            <th>Discount</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($packages as $package)
        <tr>
            <td>{{ $package->name }}</td>
            <td>{{ $package->price }}</td>
            <td>{{ $package->order }}</td>
            <td>{{ $package->description }}</td>
            <td>{{ $package->discount }}</td>
            <td>{{ $package->status }}</td>
            <td>
                <a href="{{ route('packages.edit', $package) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('packages.destroy', $package) }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7">No packages available.</td>
        </tr>
        @endforelse
    </tbody>
</table>

</div>
<div class="d-flex justify-content-end mt-4" style="margin-right: 120px;">
    {{ $packages->links() }}
</div>

@endsection