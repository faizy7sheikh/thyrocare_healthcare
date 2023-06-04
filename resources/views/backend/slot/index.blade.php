<!-- resources/views/available_slots/index.blade.php -->

@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="page-header">
            <h3 class="page-title">List Available Slots</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Slots</a></li>
                <li class="breadcrumb-item active" aria-current="page">List Available Slots</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="float-right">
                    <a href="{{ route('available_slots.create') }}" class="btn btn-primary mb-3 float-right">Create Slot</a>
                </div>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>No. of Patience</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($slots as $slot)
                        <tr>
                            <td>{{ $slot->date }}</td>
                            <td>{{ $slot->start_time }}</td>
                            <td>{{ $slot->end_time }}</td>
                            <td>{{ $slot->no_of_patience }}</td>
                            <td>{{ $slot->status }}</td>
                            <td>
                                <a href="{{ route('available_slots.edit', $slot) }}" class="btn btn-secondary btn-sm">Edit</a>
                                <form action="{{ route('available_slots.destroy', $slot) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this slot?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No slots found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
