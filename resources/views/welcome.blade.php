
@extends('layouts.app')

@section('content')
  {{-- another --}}
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ul>
  
    <!-- Slides -->
    <div class="carousel-inner slider-container">
      <!-- Slide 1 - Map of India -->
      <div class="carousel-item active h-25">
        <img src="{{ asset('slider/1.jpg') }}" height="500" alt="Map of India" class="d-block w-100 slider-image">
        <div class="carousel-caption">
          <h3>People We Serve Throughout India</h3>
        </div>
      </div>
  
      <!-- Slide 2 - Phlebotomist with Bike and Home Collection Kit/Bag -->
      <div class="carousel-item">
        <img src="{{ asset('slider/2.jpg') }}" height="500" alt="Phlebotomist with Bike" class="d-block w-100 slider-image">
        <div class="carousel-caption">
          <h3>People We Work With</h3>
        </div>
      </div>
    </div>
  
    <!-- Controls -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  {{-- our work flow --}}
  <div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mb-4">Our Workflow</h2>
        </div>
    </div>

    <div class="row workflow-section">
        <!-- Card 1 - Book Your Test Online -->
        <div class="col-md-4">
            <div class="card workflow-card">
                <div class="card-body">
                    <h5 class="card-title">Book Your Test Online</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>

        <!-- Card 2 - Get Genuine MRP & Genuine Discount -->
        <div class="col-md-4">
            <div class="card workflow-card">
                <div class="card-body">
                    <h5 class="card-title">Get Genuine MRP & Genuine Discount</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>

        <!-- Card 3 - 100% Safe & Hygienic -->
        <div class="col-md-4">
            <div class="card workflow-card">
                <div class="card-body">
                    <h5 class="card-title">100% Safe & Hygienic</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4 workflow-section">
        <!-- Card 4 - Home Sample Pick Up -->
        <div class="col-md-4">
            <div class="card workflow-card">
                <div class="card-body">
                    <h5 class="card-title">Home Sample Pick Up</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>

        <!-- Card 5 - We Process in NABL and ISO Certified Labs -->
        <div class="col-md-4">
            <div class="card workflow-card">
                <div class="card-body">
                    <h5 class="card-title">We Process in NABL and ISO Certified Labs</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>

        <!-- Card 6 - View Your Reports Online -->
        <div class="col-md-4">
            <div class="card workflow-card">
                <div class="card-body">
                    <h5 class="card-title">View Your Reports Online</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>

  {{-- package --}}
  <div class="container mt-4">
    <div class="row">
      <div class="col-12">
        <h3 class="text-center mb-4">Most Booked Packages</h3>
      </div>
    </div>
    
    <div class="row">
      <!-- Female Health Package -->
      <div class="col-md-6 col-lg-3">
        <div class="card">
          <img src="{{ asset('package/1.jpg') }}" alt="Female Health Package" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Female Health Package</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
      
      <!-- Senior Citizen Female Package -->
      <div class="col-md-6 col-lg-3">
        <div class="card">
          <img src="{{ asset('package/2.jpg') }}" alt="Senior Citizen Female Package" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Senior Citizen Female Package</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
      
      <!-- Male Health Package -->
      <div class="col-md-6 col-lg-3">
        <div class="card">
          <img src="{{ asset('package/3.jpg') }}" alt="Male Health Package" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Male Health Package</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
      
      <!-- Senior Citizen Male Package -->
      <div class="col-md-6 col-lg-3">
        <div class="card">
          <img src="{{ asset('package/4.jpg') }}" alt="Senior Citizen Male Package" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Senior Citizen Male Package</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection  
{{-- footer start --}}

