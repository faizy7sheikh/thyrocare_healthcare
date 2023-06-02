<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Default height for small devices */
    .header-wrapper-area{
      position:fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 108px;
      z-index: 105;
      background-color: #fff;
    }
    .slider-container {
      width: 100%;
      height: 400px;
      overflow: hidden;
    }
    
    .slider-image {
      width: 100%;
      height: auto;
    }
  </style>
</head>
<body>

  <div class="container-fluid">
    <div class="header-wrapper-area">
    <!-- Top Row -->
    <div class="row">
      <div class="col-12 ">
        <img src="{{ asset('logo.png') }}" height="50" width="50" alt="Logo" class="img-fluid">
      </div>
    </div>
    
    <!-- Navigation Row -->
    <div class="row bg-primary">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-dark ">
          <a class="navbar-brand" href="#">Company Name</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('book-test') }}">Book a Test</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
            </ul>
            <span class="navbar-text mr-3">
              Call: 8250135043
            </span>
          </div>
        </nav>
      </div>
    </div>
    </div>
  </div>