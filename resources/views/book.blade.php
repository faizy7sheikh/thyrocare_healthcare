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
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Your Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Book a Test</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-shopping-cart"></i>
          <span class="badge badge-primary">0</span>
        </a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
  <h1>Book a Test</h1>
  
  <div class="row">
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-4">
          <div class="package-card">
            <img src="{{ asset('package/3.jpg') }}" alt="Basic Health Package" class="package-image">
            <h5>Basic Health Package</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="btn btn-primary">View</a>
            <a href="#" class="btn btn-success">Book</a>
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

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
