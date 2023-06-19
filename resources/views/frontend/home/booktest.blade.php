<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Document</title>
    <style>
        .cart {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            height: 300px;
        }

        .cart-header {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .cart-title {
            margin-left: 5px;
        }

        .cart-body {
            height: 200px;
            margin-bottom: 10px;
        }

        .cart-footer {
            text-align: right;
        }

        .total-price {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .checkout-btn {
            margin-top: 10px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 5px;
        }

        .cart-item-name {
            flex: 1;
        }

        .cart-item-remove {
            background-color: #f8d7da;
            color: #721c24;
            border-radius: 10px;
            border: none;
            padding: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    @if (count($packages) > 0)
                        <!-- Display package details -->
                        @foreach ($packages as $package)
                            <h2>{{ $package->package_name }}</h2>
                            <p>Total Test Types: {{ $package->total_test_types }}</p>
                            <p>Test Names:</p>
                            <ul>
                                {{-- @foreach (explode(',', $package->test_names) as $testName)
                                    <li>{{ $testName }}</li>
                                @endforeach --}}
                            </ul>
                            <p>Test Descriptions:</p>
                            <ul>
                                @foreach (explode(',', $package->test_descriptions) as $testDescription)
                                    <li>{{ $testDescription }}</li>
                                @endforeach
                            </ul>
                        @endforeach
                    @else
                        <p>No packages available.</p>
                    @endif
                </div>
            </div>
            <div class="col-sm-4">
                <div class="cart">
                    <div class="cart-header">
                        <span class="cart-title">Shopping Cart</span>
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="cart-body">
                        <div id="cart-items"></div>
                    </div>
                    <div class="cart-footer">
                        <div id="total-price" class="total-price">Total Price: Rs. 0</div>
                        <a href="#" class="btn btn-primary checkout-btn">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>