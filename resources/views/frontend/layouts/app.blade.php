<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thyrocare</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <style>
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            background-color: #f8f9fa;
            z-index: 100;
            padding: 10px;
        }

        .header img {
            max-width: 100%;
            height: auto;
        }

        .between-header form {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin-left: 10px;
        }

        .between-header form .input-group {
            margin-top: 10px;
        }

        .right-side-header {
            margin-top: 10px;
            margin-right: 10px;
        }


        .navbar ul {
            list-style: none;
            display: flex;
            justify-content: center;
            padding: 0;
            margin: 0;
        }

        .navbar ul li {
            padding: 10px;
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
            }

            .between-header form {
                margin-top: 10px;
                width: 100%;
            }

            .between-header form .input-group {
                margin-top: 10px;
                width: 100%;
            }

            .right-side-header {
                margin-top: 10px;
                margin-right: 0;
            }

            .navbar ul {
                flex-direction: column;
                align-items: center;
            }
        }

        /* another style */
        .background-row {
            height: 550px;
            background-image: url("{{ asset('hero_banner.jpg') }}");
            background-size: cover;
            background-position: center;
        }

        .content-col {
            color: #ffffff;
            padding: 20px;
        }

        .diseases-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }

        .diseases-container button {
            background-color: transparent;
            border: none;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .request-call-button {
            margin-top: 20px;
        }
        
        /* button rounded */
        .rounded-button {
            border-radius: 50px;
            border: 2px solid white;
            color: white;
            background-color: transparent;
            transition: background-color 0.3s, color 0.3s;
            }

            .rounded-button:hover {
            background-color: white;
            color: black;
            }

            /* card */
            .card-row {
            margin-left: 20px;
            margin-right: 20px;
            }
            .card {
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
                margin-top: -60px;
            }

            /* slick slider */
            .slider {
                    width: 100%;
                    margin: 0;
                    padding: 0;
                    overflow: hidden;
                }

                .slide {
                    padding: 0 10px; /* Adjust the spacing between slides */
                    text-align: center;
                }

                .slide img {
                    width: 100%;
                    height: auto;
                }

                .slide-content {
                    position: absolute;
                    bottom: 20px;
                    left: 0;
                    right: 0;
                    color: #fff;
                    text-align: center;
                }

                .slide-content h3 {
                    font-size: 24px;
                    margin-bottom: 10px;
                }

                .slide-content p {
                    font-size: 16px;
                    margin-bottom: 0;
                }

                .slick-prev,
                .slick-next {
                    position: absolute;
                    top: 50%;
                    transform: translateY(-50%);
                    background-color: rgba(0, 0, 0, 0.5);
                    color: #fff;
                    border-radius: 50%;
                    width: 40px;
                    height: 40px;
                    line-height: 40px;
                    text-align: center;
                    cursor: pointer;
                    z-index: 1;
                }

                .slick-prev {
                    left: 10px;
                }

                .slick-next {
                    right: 10px;
                }


                /* sidebar css start */
                .sidebar-slider {
                    position: fixed;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                    background-color: rgba(0, 0, 0, 0.5);
                    z-index: 999;
                    display: none;
                    }

                    .sidebar-content {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    width: 80%;
                    max-width: 400px;
                    background-color: #fff;
                    padding: 20px;
                    transform: translateX(100%);
                    transition: transform 0.3s ease-in-out;
                    }

                    .sidebar-slider.open {
                    display: block;
                    }

                    .sidebar-slider.open .sidebar-content {
                    transform: translateX(0);
                    }

                    .dismiss-cross {
                    position: absolute;
                    top: 10px;
                    right: 10px;
                    border: none;
                    background: none;
                    font-size: 20px;
                    cursor: pointer;
                    }

                    h2 {
                    margin-bottom: 20px;
                    }

                    .file-input {
                    margin-bottom: 10px;
                    }

                    .submit-button {
                    padding: 10px 20px;
                    background-color: #007bff;
                    color: #fff;
                    border: none;
                    cursor: pointer;
                    }

                    .error-message {
                    margin-top: 10px;
                    color: red;
                    }

                    .sidebar-content {
                    /* ... */
                    transition: transform 0.3s ease;
                    }
                /* end of sidebar css */
    </style>
</head>

<body>
    <div class="container-fluid">

        <div class="row">
            <div class="header">
                <div class="left-side-header">
                    <img src="{{ asset('images/logo.png') }}" alt="logo">
                </div>
                <div class="between-header">
                    <form>
                        <div class="input-group">
                            <select class="selectpicker form-control" id="selectpicker" data-live-search="true">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                            </select>
                            <input type="text" class="form-control" id="search" placeholder="Search Tests, Packages">
                        </div>
                    </form>
                </div>
                <div class="right-side-header">
                    {{-- <select class="form-control form-control-sm">
                        <option>login</option>
                    </select> --}}
                    <button class="open-sidebar-button" onclick="openSidebar()">login</button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 navbar">
                <div class="">
                    <ul>
                        <li><a href="#">Book a Test</a></li>
                        <li><a href="#">Labs Near Me</a></li>
                        <li><a href="#">Become a Thyrocare Partner</a></li>
                        <li><a href="#">My Offers</a></li>
                        <li><a href="#">My Orders</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- content --}}
    <div class="container-fluid">
        <div class="row background-row">
            <div class="col-6 content-col">
                <!-- First column content -->
            </div>
            <div class="col-6 content-col">
                <!-- Second column content -->
                <div class="row">
                    <div class="col-12">
                        <h3>Looking For</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2>Lab Test at your comfort of your home</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="button" class="btn btn-outline-primary rounded-button">Primary</button>
                        <button type="button" class="btn btn-outline-primary rounded-button">Primary</button>
                        <button type="button" class="btn btn-outline-primary rounded-button">Primary</button>
                        <button type="button" class="btn btn-outline-primary rounded-button">Primary</button>
                        <button type="button" class="btn btn-outline-primary rounded-button">Primary</button>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>The best of doctors, technology and care you deserve now available for you at your doorstep.</h5>
                    </div>
                </div>
                <div class="row request-call-button">
                    <div class="col-12">
                        <button class="btn btn-primary">Request Call</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- card option for overflow --}}
    <div class="row justify-content-center card-row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-4">
                  <img src="{{ asset('one.png') }}" alt="Icon" class="card-icon" width="100" height="100">
                </div>
                <div class="col-8">
                  <h5 class="card-title">Quality &amp; Trust Assured</h5>
                  <p class="card-subtitle">99.9% Accurate Reports</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-4">
                  <img src="{{ asset('one.png') }}" alt="Icon" class="card-icon" width="100" height="100">
                </div>
                <div class="col-8">
                  <h5 class="card-title">‘On-time’ Mantra</h5>
                  <p class="card-subtitle">Report on-time, Home Collection in Less than 60 Mins</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-4">
                  <img src="{{ asset('one.png') }}" alt="Icon" class="card-icon" width="100" height="100">
                </div>
                <div class="col-8">
                  <h5 class="card-title">Affordability</h5>
                  <p class="card-subtitle">700+ Tests &amp; Profiles at Budget-friendly Rates</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      {{-- slick slider start --}}
      <div class="slider " style="margin-top:40px">
        <div class="slide">
          <img src="{{ asset('slider1.jpeg') }}" alt="Slide 1">
          <div class="slide-content">
            <h3>Slide 1 Title</h3>
            <p>Slide 1 Subtitle</p>
          </div>
        </div>
        <div class="slide">
          <img src="{{ asset('slider1.jpeg') }}" alt="Slide 2">
          <div class="slide-content">
            <h3>Slide 2 Title</h3>
            <p>Slide 2 Subtitle</p>
          </div>
        </div>
        <div class="slide">
          <img src="{{ asset('slider1.jpeg') }}" alt="Slide 3">
          <div class="slide-content">
            <h3>Slide 3 Title</h3>
            <p>Slide 3 Subtitle</p>
          </div>
        </div>
        <div class="slide">
          <img src="{{ asset('slider1.jpeg') }}" alt="Slide 3">
          <div class="slide-content">
            <h3>Slide 3 Title</h3>
            <p>Slide 3 Subtitle</p>
          </div>
        </div>
        <div class="slide">
          <img src="{{ asset('slider1.jpeg') }}" alt="Slide 3">
          <div class="slide-content">
            <h3>Slide 3 Title</h3>
            <p>Slide 3 Subtitle</p>
          </div>
        </div>
        <!-- Add more slides here -->
      </div>
      

      {{-- end of slick slider --}}

      {{-- start of package --}}
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <h2>Top Booked Profiles</h2>
            <!-- Add your content for the top booked profiles here -->
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <h5>Making preventive healthcare and diagnostic services more accessible and affordable to you</h5>
            <p>Our quality helps us provide you the best. Check out our top booked profiles now.</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <button type="button" class="btn btn-outline-primary rounded-button text-black">Primary</button>
            <button type="button" class="btn btn-outline-primary rounded-button text-black">Primary</button>
            <button type="button" class="btn btn-outline-primary rounded-button text-black">Primary</button>
            <button type="button" class="btn btn-outline-primary rounded-button text-black">Primary</button>
          </div>
        </div>
        
        {{-- slic inside --}}
        <div class="slick-slider slider mt-5">
            <div class="col-sm-3 slide">
              <div class="card">
                <!-- Card content here -->
                <div class="card-body">
                    <h5 class="card-title">Arogyam XI With Utsh</h5>
                    <p class="card-text">145 Tests include</p>
                    <ul>
                      <li>Iron Deficiency</li>
                      <li>Liver</li>
                      <li>Complete Hemogram</li>
                    </ul>
                    <div class="footer-card-1">
                      <hr>
                      <div class="price-book-container">
                        <span class="price">Rs.6999</span>
                        <a href="#" id="book-btn-1" class="btn btn-primary">Book</a>
                      </div>
                    </div>
                  </div>

              </div>
            </div>
            
            <div class="col-sm-3 slide">
              <div class="card">
                <!-- Card content here -->
                <div class="card-body">
                    <h5 class="card-title">Arogyam XI With Utsh</h5>
                    <p class="card-text">145 Tests include</p>
                    <ul>
                      <li>Iron Deficiency</li>
                      <li>Liver</li>
                      <li>Complete Hemogram</li>
                    </ul>
                    <div class="footer-card-1">
                      <hr>
                      <div class="price-book-container">
                        <span class="price">Rs.6999</span>
                        <a href="#" id="book-btn-1" class="btn btn-primary">Book</a>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            
            <div class="col-sm-3 slide">
              <div class="card">
                <!-- Card content here -->
                <div class="card-body">
                    <h5 class="card-title">Arogyam XI With Utsh</h5>
                    <p class="card-text">145 Tests include</p>
                    <ul>
                      <li>Iron Deficiency</li>
                      <li>Liver</li>
                      <li>Complete Hemogram</li>
                    </ul>
                    <div class="footer-card-1">
                      <hr>
                      <div class="price-book-container">
                        <span class="price">Rs.6999</span>
                        <a href="#" id="book-btn-1" class="btn btn-primary">Book</a>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            
            <div class="col-sm-3 slide">
              <div class="card">
                <!-- Card content here -->
                <div class="card-body">
                    <h5 class="card-title">Arogyam XI With Utsh</h5>
                    <p class="card-text">145 Tests include</p>
                    <ul>
                      <li>Iron Deficiency</li>
                      <li>Liver</li>
                      <li>Complete Hemogram</li>
                    </ul>
                    <div class="footer-card-1">
                      <hr>
                      <div class="price-book-container">
                        <span class="price">Rs.6999</span>
                        <a href="#" id="book-btn-1" class="btn btn-primary">Book</a>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
    
        
        {{-- end of slider --}}
        
      </div>
      
      {{-- end of package --}}



      {{-- sidebar start --}}
      {{-- <div class="sidebar-slider">
        <div class="sidebar-content">
          <button class="dismiss-cross" onclick="closeSidebar()">×</button>
          <h2>Login</h2>
          <form>
            <div class="mb-3">
              <label for="inputNumber" class="form-label">Enter number</label>
              <input type="text" class="form-control" id="inputNumber" placeholder="Enter number">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <div class="error-message">Error message goes here</div>
        </div>
      </div> --}}
      
      {{-- sidebar end --}}

      {{-- verify otp screen start --}}
      {{-- <div class="sidebar-slider">
        <div class="sidebar-content">
          <button class="dismiss-cross" onclick="closeSidebar()">×</button>
          <h2>OTP Verification</h2>
          <p>Enter OTP sent to +91-8250135043</p>
          <a href="#" class="change-number">Change Number</a>
          <form>
            <div class="mb-3">
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control otp-digit" maxlength="1">
                </div>
                <div class="col">
                  <input type="text" class="form-control otp-digit" maxlength="1">
                </div>
                <div class="col">
                  <input type="text" class="form-control otp-digit" maxlength="1">
                </div>
                <div class="col">
                  <input type="text" class="form-control otp-digit" maxlength="1">
                </div>
              </div>
            </div>
            <div class="resend-otp">
              <p>Didn't receive OTP?</p>
             
              <a href="#" class="resend-link">Resend OTP</a>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <div class="error-message">Error message goes here</div>
        </div>
      </div> --}}
      
      {{-- end of verification screen --}}
      

      {{-- siebar for location or service --}}
      <div class="sidebar-slider">
        <div class="sidebar-content">
          <button class="dismiss-cross" onclick="closeSidebar()">×</button>
          <h2>Select Location</h2>
          <form>
            <div class="mb-3">
              <label for="inputPincode" class="form-label">Enter Pincode</label>
              <input type="text" class="form-control" id="inputPincode" placeholder="Enter Pincode">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
          </form>
          <div class="error-message">Error message goes here</div>
        </div>
      </div>
      
      {{-- end of location service sidebar --}}


      {{-- footer start --}}
<!-- Remove the container if you want to extend the Footer to full width. -->
<footer class="bg-dark text-white mt-2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h6 class="text-uppercase">Company name</h6>
          <hr class="bg-primary mt-0 mb-4" style="height: 2px;">
          <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="col-md-2">
          <h6 class="text-uppercase">Products</h6>
          <hr class="bg-primary mt-0 mb-4" style="height: 2px;">
          <p><a href="#" class="text-white">MDBootstrap</a></p>
          <p><a href="#" class="text-white">MDWordPress</a></p>
          <p><a href="#" class="text-white">BrandFlow</a></p>
          <p><a href="#" class="text-white">Bootstrap Angular</a></p>
        </div>
        <div class="col-md-3">
          <h6 class="text-uppercase">Useful links</h6>
          <hr class="bg-primary mt-0 mb-4" style="height: 2px;">
          <p><a href="#" class="text-white">Your Account</a></p>
          <p><a href="#" class="text-white">Become an Affiliate</a></p>
          <p><a href="#" class="text-white">Shipping Rates</a></p>
          <p><a href="#" class="text-white">Help</a></p>
        </div>
        <div class="col-md-4">
          <h6 class="text-uppercase">Contact</h6>
          <hr class="bg-primary mt-0 mb-4" style="height: 2px;">
          <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
          <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
          <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
        </div>
      </div>
    </div>
    
    <div class="bg-dark ">
      <div class="container text-center">
        <span class="text-white">© 2023 Company. All Rights Reserved.</span>
      </div>
    </div>
  </footer>
  
      {{-- footer end --}}
      {{-- javascript for slick slider --}}
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
            $(document).ready(function() {
            $('.slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev">&#8249;</button>',
            nextArrow: '<button type="button" class="slick-next">&#8250;</button>',
            centerMode: true,
            centerPadding: '0',
            responsive: [
                {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
                }
            ]
            });

           
        });
       
        function openSidebar() {
            const sidebarSlider = document.querySelector('.sidebar-slider');
            const sidebarContent = document.querySelector('.sidebar-content');
            
            sidebarSlider.style.display = 'flex';
            setTimeout(function() {
                sidebarContent.style.transform = 'translateX(0)';
            }, 10);
            }

            function closeSidebar() {
            const sidebarSlider = document.querySelector('.sidebar-slider');
            const sidebarContent = document.querySelector('.sidebar-content');
            
            sidebarContent.style.transform = 'translateX(100%)';
            setTimeout(function() {
                sidebarSlider.style.display = 'none';
            }, 300);
            }
    </script>
      {{-- end of slick js --}}
      
</body>

</html>
