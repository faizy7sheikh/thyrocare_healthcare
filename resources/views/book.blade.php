<!DOCTYPE html>
<html>
<head>
  <title>Book a Test</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
    .rupee-symbol {
      font-size: 16px;
      font-weight: bold;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .test-text {
      background-color: rgba(0, 0, 0, 0.5);
      color: #fff;
      padding: 5px;
      border-radius: 5px;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
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
          <div class="card-header d-flex justify-content-between align-items-center">
            <div>Cart</div>
            <div>
              <span id="cartItemCount" class="badge badge-primary">0</span>
              <i class="fas fa-shopping-cart"></i>
            </div>
          </div>
          <div class="card-body">
            <div class="input-group mb-3">
              <input type="text" id="searchInput"  class="form-control" placeholder="Search Test Names">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">Search</button>
              </div>
            </div>
            <ul id="testResults" class="list-group">
              <!-- Test list items will be dynamically populated here -->
            </ul>
            
              
              <textarea id="selectedTests" rows="4" readonly></textarea>
            
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

{{-- anoher block levelr --}}
<div class="container mt-4">
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col">
              <h5>Package Name 1</h5>
            </div>
            
          </div>
          <div class="row bg-primary">
            <div class="col-12 text-center">
              <p><span class="rupee-symbol">&#8377;</span> 1200</p>
            </div>
            <div class="col-12 text-center">
              <p class="test-text">10 Test</p>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="accordion" id="accordionExample1">
            <div class="card">
              <div class="card-header" id="headingOne1">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                    Test Name 1
                  </button>
                </h2>
              </div>
              <div id="collapseOne1" class="collapse" aria-labelledby="headingOne1" data-parent="#accordionExample1">
                <div class="card-body">
                  <ul>
                    <li>Test Description 1</li>
                    <li>Test Description 2</li>
                    <li>Test Description 3</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <button class="btn btn-primary btn-block">Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col">
              <h5>Package Name 2</h5>
            </div>
            <div class="col">
              <h5 class="text-right">Price: $99</h5>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p>Total Tests: 10</p>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="accordion" id="accordionExample2">
            <div class="card">
              <div class="card-header" id="headingOne2">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                    Test Name 1
                  </button>
                </h2>
              </div>
              <div id="collapseOne2" class="collapse" aria-labelledby="headingOne2" data-parent="#accordionExample2">
                <div class="card-body">
                  <ul>
                    <li>Test Description 1</li>
                    <li>Test Description 2</li>
                    <li>Test Description 3</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <button class="btn btn-primary btn-block">Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col">
              <h5>Package Name 3</h5>
            </div>
            <div class="col">
              <h5 class="text-right">Price: $99</h5>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p>Total Tests: 10</p>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="accordion" id="accordionExample3">
            <div class="card">
              <div class="card-header" id="headingOne3">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                    Test Name 1
                  </button>
                </h2>
              </div>
              <div id="collapseOne3" class="collapse" aria-labelledby="headingOne3" data-parent="#accordionExample3">
                <div class="card-body">
                  <ul>
                    <li>Test Description 1</li>
                    <li>Test Description 2</li>
                    <li>Test Description 3</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <button class="btn btn-primary btn-block">Add to Cart</button>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- end --}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
{{-- <script src="https://kit.fontawesome.com/a076d05399.js" ></script> --}}

<script>
  $(document).ready(function(){
    
    $('#searchInput').on('keyup', function(event) {
      let searchQuery = $(this).val();
      console.log(searchQuery);
      searchTests(searchQuery);
  // if (event.keyCode === 13) { // Check if Enter key is pressed
  //   alert("hello");
   
  // }
  });

  // Function to search tests from the backend API
  function searchTests(query) {
    $.ajax({
      url: '/api/tests', // Replace with your backend API endpoint for searching tests
      method: 'GET',
      data: { query: query },
      success: function(response) {
        // Handle the API response and display the test results
        displayTestResults(response.tests);
      },
      error: function(error) {
        console.log(error);
      }
    });
  }

  // Function to display the test results
  function displayTestResults(tests) {
    // Clear the previous search results
    $('#testResults').empty();
    console.log("display method");
    // Iterate over the tests and display them
    $.each(tests, function(index, test) {
      let listItem = $('<li>').addClass('list-group-item d-flex justify-content-between align-items-center');

    // Create the left side element for the test name
    let testNameElement = $('<span>').text(test.name);

    // Create the right side element for the price and test count
    let testInfoElement = $('<span>').addClass('text-right');
    let priceElement = $('<span>').addClass('mr-2').text('Price: $' + test.price);
    let countElement = $('<span>').addClass('badge badge-primary').text(test.count + ' Test(s)');

    // Append the elements to the list item
    testInfoElement.append(priceElement, countElement);
    listItem.append(testNameElement, testInfoElement);

    // Append the list item to the test results list
    $('#testResults').append(listItem);
    });
    $('#testResults').css('max-height', '200px').css('overflow-y', 'auto');
  }

  // Event listener for selecting a test from the results
  $(document).on('click', '#testResults li', function() {
    let listItem = $(this);
    let testName = listItem.text();
    let testPrice = listItem.data('price');

    // Remove the selected list item from the results
    listItem.remove();

    // Call the API to process the selected test
    $.ajax({
      url: "{{ route('cart.add') }}", // Replace with your backend API endpoint
      method: 'POST',
      data: { name: testName, price: testPrice },
      success: function(response) {
        // Handle the API response

        // Add the selected test to the cart or perform any other action
        addToCart(testName, testPrice);
      },
      error: function(error) {
        console.log(error);
      }
    });
  });

  // Function to add a test to the cart
  function addToCart(testName, testPrice) {
    let cartItem = $('<div class="cart-item">');
    let removeIcon = $('<i class="fas fa-times remove-icon"></i>');
    let itemDetails = $('<span>').text(testName + ' ($' + testPrice + ')');
    itemDetails.append(removeIcon);
    cartItem.append(itemDetails);

    // Add the cart item to the selected tests textarea
    $('#selectedTests').append(cartItem);

    // Update the cart count
    let cartItemCount = $('.cart-item').length;
    $('#cartItemCount').text(cartItemCount);
  }

  // Event listener for removing a test from the cart
  $(document).on('click', '.remove-icon', function() {
    $(this).closest('.cart-item').remove();

    // Update the cart count
    let cartItemCount = $('.cart-item').length;
    $('#cartItemCount').text(cartItemCount);
  });
  });
</script>
</body>
</html>
