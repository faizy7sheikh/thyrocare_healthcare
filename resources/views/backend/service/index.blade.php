@extends('backend.layouts.app')

@section('content')
<div class="page-header">
    <h3 class="page-title">List Service Area</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Service Area</a></li>
        <li class="breadcrumb-item active" aria-current="page">List Service Area </li>
        </ol>
    </nav>
</div>

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="row">
    <div class="row">
        <div class="col-12">
            <div class="float-right">
                <a href="{{ route('service-areas.create') }}" class="btn btn-primary mb-3 float-right">Add Service Area</a>

            </div>
        </div>
    </div>
<table class="table">
    <thead>
        <tr>
            <th>Pincode</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($serviceAreas as $area)
        <tr>
            <td>{{ $area->pincode }}</td>
            <td>{{ $area->status }}</td>
            <td>
                <a href="{{ route('service-areas.edit', $area) }}" class="btn btn-sm btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>


@endsection