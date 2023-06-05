<!-- resources/views/technicians/index.blade.php -->

@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="page-header">
            <h3 class="page-title">List Technician</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Technician</a></li>
                <li class="breadcrumb-item active" aria-current="page">List Technician</li>
                </ol>
            </nav>
        </div>
        <a href="{{ route('technicians.create') }}" class="btn btn-primary mb-3">Create Technician</a>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($technicians as $technician)
                        <tr>
                            <td>{{ $technician->name }}</td>
                            <td>{{ $technician->email }}</td>
                            <td>{{ $technician->phone }}</td>
                            <td>{{ $technician->address }}</td>
                            <td>
                                <a href="{{ route('technicians.show', $technician) }}" class="btn btn-primary btn-sm">View</a>
                                <a href="{{ route('technicians.edit', $technician) }}" class="btn btn-secondary btn-sm">Edit</a>
                                <form action="{{ route('technicians.destroy', $technician) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this technician?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No technicians found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
