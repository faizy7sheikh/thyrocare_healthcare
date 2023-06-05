@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="page-header">
            <h3 class="page-title">Order Details</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Order</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Order Details</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-6">
                <p><strong>Order Date:</strong> {{ $order->order_date }}</p>
                <p><strong>Order Number:</strong> {{ $order->order_number }}</p>
                <p><strong>Payment Mode:</strong> {{ $order->payment_mode }}</p>
                <p><strong>Preference Date and Time:</strong> {{ $order->preference_date_time }}</p>
                <p><strong>Rate:</strong> {{ $order->rate }}</p>
                <p><strong>Beneficiary Name:</strong> {{ $order->beneficiary_name }}</p>
                <p><strong>Test Details:</strong> {{ $order->test_details }}</p>
                <p><strong>Mobile Number:</strong> {{ $order->mobile_number }}</p>
                <p><strong>Email:</strong> {{ $order->email }}</p>
                <p><strong>Address:</strong> {{ $order->address }}</p>
                <p><strong>Status:</strong> {{ $order->status }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="float-right">
                    <a href="{{ route('orders.index') }}" class="btn btn-primary">Back to Order List</a>
                </div>
            </div>
        </div>
    </div>
@endsection
