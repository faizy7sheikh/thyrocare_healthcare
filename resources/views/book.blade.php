<!DOCTYPE html>
<html>
<head>
  <title>Book a Test</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .cart-icon {
      position: fixed;
      top: 80px;
      right: 20px;
      font-size: 24px;
      color: #000;
    }
    
    .checkout-btn {
      margin-top: 20px;
    }
    
    .package-card {
      margin-bottom: 20px;
    }
    
    .package-image {
      width: 100%;
      height: auto;
    }
    
    .cart-container {
      position: fixed;
      top: 80px;
      right: 20px;
      width: 300px;
      margin-top: 28px;
    }
    .bookatest-logo{
      margin-top: 108px;
    }
  </style>
</head>
<body>
<header>
        @include('layouts.header')
</header>
<div class="container">
  <div class="bookatest-logo">
  <div class="row">
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-4">
          <div class="package-card">
            <img src="{{ asset('package/3.jpg') }}" alt="Basic Health Package" class="package-image">
            <h5>Basic Health Package</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="btn btn-primary">View</a>
            <a href="{{route('form')}}" class="btn btn-success">Book</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="package-card">
            <img src="{{ asset('package/1.jpg') }}" alt="Male Health Package" class="package-image">
            <h5>Male Health Package</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="btn btn-primary">View</a>
            <a href="#" class="btn btn-success">Book</a>
          </div>
        </div>
        <div class="col-md-4">
            <div class="package-card">
              <img src="{{ asset('package/2.jpg') }}" alt="Basic Health Package" class="package-image">
              <h5>Basic Health Package</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <a href="#" class="btn btn-primary">View</a>
              <a href="#" class="btn btn-success">Book</a>
            </div>
        </div>
        
      </div>

     

      {{-- another --}}
      <div class="row">
        <div class="col-md-4">
          <div class="package-card">
            <img src="{{ asset('package/4.jpg') }}" alt="Basic Health Package" class="package-image">
            <h5>Basic Health Package</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="btn btn-primary">View</a>
            <a href="#" class="btn btn-success">Book</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="package-card">
            <img src="{{ asset('package/3.jpg') }}" alt="Male Health Package" class="package-image">
            <h5>Male Health Package</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="btn btn-primary">View</a>
            <a href="#" class="btn btn-success">Book</a>
          </div>
        </div>
        <div class="col-md-4">
            <div class="package-card">
              <img src="{{ asset('package/3.jpg') }}" alt="Basic Health Package" class="package-image">
              <h5>Basic Health Package</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <a href="#" class="btn btn-primary">View</a>
              <a href="#" class="btn btn-success">Book</a>
            </div>
        </div>
      </div>

      {{-- another --}}

      <div class="row">
        <div class="col-md-4">
          <div class="package-card">
            <img src="{{ asset('package/4.jpg') }}" alt="Basic Health Package" class="package-image">
            <h5>Basic Health Package</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="btn btn-primary">View</a>
            <a href="#" class="btn btn-success">Book</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="package-card">
            <img src="{{ asset('package/3.jpg') }}" alt="Male Health Package" class="package-image">
            <h5>Male Health Package</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="btn btn-primary">View</a>
            <a href="#" class="btn btn-success">Book</a>
          </div>
        </div>
        <div class="col-md-4">
            <div class="package-card">
              <img src="{{ asset('package/3.jpg') }}" alt="Basic Health Package" class="package-image">
              <h5>Basic Health Package</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <a href="#" class="btn btn-primary">View</a>
              <a href="#" class="btn btn-success">Book</a>
            </div>
        </div>
      </div>
      
      
      <!-- Add more package cards here -->
      
    </div>
    <div class="col-md-4">
      <div class="cart-container">
        <div class="card">
          <div class="card-header">
            Cart
          </div>
          <div class="card-body">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">Search</button>
              </div>
            </div>
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Lipid Profile
                <span class="badge badge-primary">1</span>
              </li>
              <!-- Add more cart items here -->
            </ul>
            <p>Total: $0</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-primary checkout-btn">Checkout</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
