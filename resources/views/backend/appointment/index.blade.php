@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="page-header">
            <h3 class="page-title">Order List</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Order List</li>
                </ol>
            </nav>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <form action="{{ route('orders.index') }}" method="GET" class="form-inline">
                    <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-primary ml-2">Search</button>
                </form>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{ route('orders.export') }}" class="btn btn-success">Download Excel</a>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Order Date</th>
                    <th>Order Number</th>
                    <th>Payment Mode</th>
                    <th>Preference Date and Time</th>
                    <th>Rate</th>
                    <th>Beneficiary Name</th>
                    <th>Test Details</th>
                    <th>Mobile Number</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->order_date }}</td>
                        <td>{{ $order->order_number }}</td>
                        <td>{{ $order->payment_mode }}</td>
                        <td>{{ $order->preference_date_time }}</td>
                        <td>{{ $order->rate }}</td>
                        <td>{{ $order->beneficiary_name }}</td>
                        <td>{{ $order->test_details }}</td>
                        <td>{{ $order->mobile_number }}</td>
                        <td>{{ $order->email }}</td>
                        <td>{{ $order->address }}</td>
                        <td>
                            <span class="badge {{ $order->status == 'pending' ? 'badge-warning' : ($order->status == 'completed' ? 'badge-success' : 'badge-info') }}">{{ $order->status }}</span>
                        </td>
                        <td>
                            <a href="{{ route('orders.show', $order) }}" class="btn btn-primary btn-sm">Show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="row justify-content-center">
            <div class="col-md-6">
                {{ $orders->links() }}
            </div>
        </div>
    </div>
@endsection
