<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .bg-hero-banner-moblie {
      /* Replace with your image URL */
      background-image: url('https://guardian.ng/wp-content/uploads/2016/11/doctor-banner.jpg');
    }

    .min-h-hero-sm {
      /* Replace with your image URL */
      background-image: url('https://guardian.ng/wp-content/uploads/2016/11/doctor-banner.jpg');
    }
  </style>
</head>

<body>
  

  <nav class="navbar navbar-expand-lg sticky-top bg-tcNeutral-0">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/">
        <img src="https://web-assets.thyrocare.com/thyrocare-consumer/_next/images/logo.svg?w=384&amp;q=75" alt="thyrocare logo" width="148" height="56">
      </a>
      <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#pincodePanel" aria-controls="pincodePanel">
        Check pincode
        <svg width="5" height="7" viewBox="0 0 5 7" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-2">
          <path d="M1 6.5L4 3.5L1 0.5" stroke="#4F585E" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/book-a-test">Book a test</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/location">Labs Near Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/franchisee/register">Become a Thyrocare Partner</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/offer">My Offers</a>
          </li>
        </ul>
      </div>
      <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#loginPanel" aria-controls="loginPanel">Login</button>
    </div>
  </nav>
  <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenu">
    <div class="offcanvas-header">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></.
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <a href="/about-us" class="text-tcNeutral-900">About Us</a>
          </li>
          <li class="list-group-item">
            <a href="/contact" class="text-tcNeutral-900">Contact</a>
          </li>
          <li class="list-group-item">
            <a href="/faq" class="text-tcNeutral-900">FAQ</a>
          </li>
          <li class="list-group-item">
            <a href="/terms" class="text-tcNeutral-900">Terms of Use</a>
          </li>
          <li class="list-group-item">
            <a href="/privacy" class="text-tcNeutral-900">Privacy Policy</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="loginPanel" aria-labelledby="loginPanel">
      <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <!-- Your login panel content goes here -->
      </div>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="pincodePanel" aria-labelledby="pincodePanel">
      <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <!-- Your pincode panel content goes here -->
      </div>
    </div>
        

  <!-- Your remaining HTML code here -->

  {{-- remaining --}}
  <div class="relative min-h-hero-sm bg-hero-banner-moblie bg-cover bg-center bg-no-repeat sm:min-h-hero sm:bg-hero-banner">
    <div class="mx-auto px-4 sm:max-w-6xl">
      <div class="relative ml-auto mr-5 flex h-full max-w-3xl flex-col gap-2 pb-18 pt-10 sm:gap-5">
        <h1 class="text-2xl font-bold text-white sm:text-5xl">
          <div class="mb-5 hidden text-3xl font-semibold opacity-75 sm:block">Looking for</div>
          <span class="sm:hidden">Looking for </span>Lab Tests at the Comfort of Your Home?
        </h1>
        <h2 class="text-sm font-medium text-white sm:hidden">
          The best of doctors, technology and care you deserve now available for you at your doorstep.
        </h2>
        <div class="hidden flex-wrap gap-4 sm:flex">
          <a href="/disease/diabetes">
            <button type="button" class="px-3 py-2 rounded-full border inline-block cursor-pointer transition-colors text-sm font-semibold hover:bg-white hover:text-tcBrand-webGrey border-white text-white">Diabetes</button>
          </a>
          <a href="/disease/covid">
            <button type="button" class="px-3 py-2 rounded-full border inline-block cursor-pointer transition-colors text-sm font-semibold hover:bg-white hover:text-tcBrand-webGrey border-white text-white">COVID</button>
          </a>
          <a href="/disease/fever">
            <button type="button" class="px-3 py-2 rounded-full border inline-block cursor-pointer transition-colors text-sm font-semibold hover:bg-white hover:text-tcBrand-webGrey border-white text-white">Fever</button>
          </a>
          <a href="/disease/cancer">
            <button type="button" class="px-3 py-2 rounded-full border inline-block cursor-pointer transition-colors text-sm font-semibold hover:bg-white hover:text-tcBrand-webGrey border-white text-white">Cancer</button>
          </a>
          <a href="/disease/heart-diseases">
            <button type="button" class="px-3 py-2 rounded-full border inline-block cursor-pointer transition-colors text-sm font-semibold hover:bg-white hover:text-tcBrand-webGrey border-white text-white">Heart</button>
          </a>
          <a href="/disease/stds">
            <button type="button" class="px-3 py-2 rounded-full border inline-block cursor-pointer transition-colors text-sm font-semibold hover:bg-white hover:text-tcBrand-webGrey border-white text-white">STDs</button>
          </a>
        </div>
        <div class="my-6 flex flex-wrap gap-x-2 gap-y-3.5 sm:hidden">
          <a href="/disease/diabetes">
            <button type="button" class="px-3 py-2 rounded-full border inline-block cursor-pointer transition-colors text-sm font-semibold hover:bg-white hover:text-tcBrand-webGrey border-white text-white">Diabetes</button>
          </a>
          <a href="/disease/covid">
            <button type="button" class="px-3 py-2 rounded-full border inline-block cursor-pointer transition-colors text-sm font-semibold hover:bg-white hover:text-tcBrand-webGrey border-white text-white">COVID</button>
          </a>
          <a href="/disease/fever">
            <button type="button" class="px-3 py-2 rounded-full border inline-block cursor-pointer transition-colors text-sm font-semibold hover:bg-white hover:text-tcBrand-webGrey border-white text-white">Fever</button>
          </a>
          <a href="/disease/cancer">
            <button type="button" class="px-3 py-2 rounded-full border inline-block cursor-pointer transition-colors text-sm font-semibold hover:bg-white hover:text-tcBrand-webGrey border-white text-white">Cancer</button>
          </a>
          <a href="/disease/heart-diseases">
            <button type="button" class="px-3 py-2 rounded-full border inline-block cursor-pointer transition-colors text-sm font-semibold hover:bg-white hover:text-tcBrand-webGrey border-white text-white">Heart</button>
          </a>
          <a href="/disease/stds">
            <button type="button" class="px-3 py-2 rounded-full border inline-block cursor-pointer transition-colors text-sm font-semibold hover:bg-white hover:text-tcBrand-webGrey border-white text-white">STDs</button>
          </a>
        </div>
      </div>
    </div>
  </div>


  {{-- moto of company start --}}

  <div class="container">
    <div class="row justify-content-between">
      <div class="col-auto">
        <div class="border-gray-350 flex h-25 w-25 flex-col items-center gap-3 rounded-xl border bg-white px-2 py-3 sm:h-33 sm:w-93 sm:flex-row sm:p-4">
          <div class="h-8 w-8 flex-none rounded-xl sm:h-16 sm:w-16 sm:bg-gray-150">
            <img alt="icon" srcset="https://web-assets.thyrocare.com/thyrocare-consumer/_next/images/cardImages/one.svg?w=32&amp;q=75 1x, https://web-assets.thyrocare.com/thyrocare-consumer/_next/images/cardImages/one.svg?w=64&amp;q=75 2x" src="https://web-assets.thyrocare.com/thyrocare-consumer/_next/images/cardImages/one.svg?w=64&amp;q=75" width="32" height="32" decoding="async" data-nimg="1" class="m-0 mx-auto sm:mt-4" loading="lazy" style="color: transparent;">
          </div>
          <div class="flex flex-col gap-2">
            <p class="text-center text-xs font-medium text-tcNeutral-50 sm:text-left sm:text-xl">Quality &amp; Trust assured</p>
            <p class="hidden font-medium text-tcNeutral-40 sm:block">99.9% Accurate Reports</p>
          </div>
        </div>
      </div>
      <div class="col-auto">
        <div class="border-gray-350 flex h-25 w-25 flex-col items-center gap-3 rounded-xl border bg-white px-2 py-3 sm:h-33 sm:w-93 sm:flex-row sm:p-4" style="margin-left: 8px; margin-right: 8px;">
          <div class="h-8 w-8 flex-none rounded-xl sm:h-16 sm:w-16 sm:bg-gray-150">
            <img alt="icon" srcset="https://web-assets.thyrocare.com/thyrocare-consumer/_next/images/cardImages/two.svg?w=32&amp;q=75 1x, https://web-assets.thyrocare.com/thyrocare-consumer/_next/images/cardImages/two.svg?w=64&amp;q=75 2x" src="https://web-assets.thyrocare.com/thyrocare-consumer/_next/images/cardImages/two.svg?w=64&amp;q=75" width="32" height="32" decoding="async" data-nimg="1" class="m-0 mx-auto sm:mt-4" loading="lazy" style="color: transparent;">
          </div>
          <div class="flex flex-col gap-2">
            <p class="text-center text-xs font-medium text-tcNeutral-50 sm:text-left sm:text-xl">‘On-time’ Mantra</p>
            <p class="hidden font-medium text-tcNeutral-40 sm:block">Report on-time, Home Collection in Less than 60 Mins</p>
          </div>
        </div>
      </div>
      <div class="col-auto">
        <div class="border-gray-350 flex h-25 w-25 flex-col items-center gap-3 rounded-xl border bg-white px-2 py-3 sm:h-33 sm:w-93 sm:flex-row sm:p-4">
          <div class="h-8 w-8 flex-none rounded-xl sm:h-16 sm:w-16 sm:bg-gray-150">
            <img alt="icon" srcset="https://web-assets.thyrocare.com/thyrocare-consumer/_next/images/cardImages/three.svg?w=32&amp;q=75 1x, https://web-assets.thyrocare.com/thyrocare-consumer/_next/images/cardImages/three.svg?w=64&amp;q=75 2x" src="https://web-assets.thyrocare.com/thyrocare-consumer/_next/images/cardImages/three.svg?w=64&amp;q=75" width="32" height="32" decoding="async" data-nimg="1" class="m-0 mx-auto sm:mt-4" loading="lazy" style="color: transparent;">
          </div>
          <div class="flex flex-col gap-2">
            <p class="text-center text-xs font-medium text-tcNeutral-50 sm:text-left sm:text-xl">Affordability</p>
            <p class="hidden font-medium text-tcNeutral-40 sm:block">700+ Tests &amp; Profiles at Budget-friendly Rates</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  
  {{-- moto of company end --}}



  {{-- STATRT OF SLIDER --}}
  <div class="hidden px-5 sm:block">
    <div class="slider-container" style="position: relative;">
      <div aria-live="polite" aria-atomic="true" tabindex="-1" style="position: absolute; width: 1px; height: 1px; overflow: hidden; padding: 0px; margin: -1px; clip: rect(0px, 0px, 0px, 0px); white-space: nowrap; border: 0px;">
        Slide 1 of 5
      </div>
      <div style="align-items: center; justify-content: flex-start; position: absolute; display: flex; z-index: 1; inset: 0px; pointer-events: none;">
        <div class="slider-control-centerleft" style="pointer-events: auto;">
          <span class="-ml-3.5 -mb-2 hidden origin-center rotate-180 sm:inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 18 18" class="h-8 w-8">
              <rect width="18" height="18" fill="#2F446B" rx="9"></rect>
              <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13l4-4-4-4"></path>
            </svg>
          </span>
        </div>
      </div>
      <div style="align-items: center; justify-content: flex-end; position: absolute; display: flex; z-index: 1; inset: 0px; pointer-events: none;">
        <div class="slider-control-centerright" style="pointer-events: auto;">
          <span class="-mr-3.5 hidden sm:inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 18 18" class="h-8 w-8">
              <rect width="18" height="18" fill="#2F446B" rx="9"></rect>
              <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13l4-4-4-4"></path>
            </svg>
          </span>
        </div>
      </div>
      <div style="align-items: flex-end; justify-content: center; position: absolute; display: flex; z-index: 1; inset: 0px; pointer-events: none;">
        <div class="slider-control-bottomcenter" style="pointer-events: auto;">
          <span></span>
        </div>
      </div>
      <div class="slider-frame hidden sm:block" aria-label="carousel-slider" role="region" tabindex="-1" style="overflow: hidden; width: 100%; position: relative; outline: none; height: auto; transition: height 300ms ease-in-out 0s; will-change: height; user-select: none;">
        <div class="slider-list" style="width: 681.25%; transform: translateX(-10.4167%);">
          <div class="slider-list-item px-2 flex-shrink-0 w-full sm:w-1/2 lg:w-1/4" style="flex: 0 0 auto; width: 25%; padding-right: 0.5rem; padding-left: 0.5rem;">
            <div class="slider-slide h-48 bg-gray-100 rounded-md overflow-hidden shadow" style="width: 100%;">
              <img src="image1.jpg" alt="Image 1" class="object-cover h-full w-full">
            </div>
          </div>
          <div class="slider-list-item px-2 flex-shrink-0 w-full sm:w-1/2 lg:w-1/4" style="flex: 0 0 auto; width: 25%; padding-right: 0.5rem; padding-left: 0.5rem;">
            <div class="slider-slide h-48 bg-gray-100 rounded-md overflow-hidden shadow" style="width: 100%;">
              <img src="image2.jpg" alt="Image 2" class="object-cover h-full w-full">
            </div>
          </div>
          <div class="slider-list-item px-2 flex-shrink-0 w-full sm:w-1/2 lg:w-1/4" style="flex: 0 0 auto; width: 25%; padding-right: 0.5rem; padding-left: 0.5rem;">
            <div class="slider-slide h-48 bg-gray-100 rounded-md overflow-hidden shadow" style="width: 100%;">
              <img src="image3.jpg" alt="Image 3" class="object-cover h-full w-full">
            </div>
          </div>
          <div class="slider-list-item px-2 flex-shrink-0 w-full sm:w-1/2 lg:w-1/4" style="flex: 0 0 auto; width: 25%; padding-right: 0.5rem; padding-left: 0.5rem;">
            <div class="slider-slide h-48 bg-gray-100 rounded-md overflow-hidden shadow" style="width: 100%;">
              <img src="image4.jpg" alt="Image 4" class="object-cover h-full w-full">
            </div>
          </div>
          <div class="slider-list-item px-2 flex-shrink-0 w-full sm:w-1/2 lg:w-1/4" style="flex: 0 0 auto; width: 25%; padding-right: 0.5rem; padding-left: 0.5rem;">
            <div class="slider-slide h-48 bg-gray-100 rounded-md overflow-hidden shadow" style="width: 100%;">
              <img src="image5.jpg" alt="Image 5" class="object-cover h-full w-full">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- END OF SLIDER --}}


  {{-- top booke section 1 --}}
  <div class="mx-auto mb-2 flex flex-col max-w-4.5xl items-center gap-2 px-5.5 pt-11 sm:pt-22">
    <h2 class="text-tcH2Mb font-semibold text-tcNeutral-50 sm:text-tcH2">Top booked Profiles</h2>
    <p class="text-center text-sm font-normal text-tcNeutral-40 sm:text-base sm:font-medium">Making preventive healthcare and diagnostic services more accessible and affordable to you. Our quality helps us provide you the best. Check out our top booked profiles now.</p>
    <div class="mx-auto mt-3.5 mb-6 h-1 w-9 rounded bg-gray-400 sm:mb-9"></div>
  </div>
  
  {{-- top booked section 1 end  --}}

  {{-- section 2 start --}}
  <ul class="hidden flex-wrap justify-center gap-4 sm:flex" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <button type="button" class="inline-block cursor-pointer rounded-full border px-3 py-2 text-xs font-normal transition-colors hover:border-tcMsg-info hover:text-tcMsg-info border-tcMsg-info text-tcMsg-info">
        Popular Tests
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button type="button" class="inline-block cursor-pointer rounded-full border px-3 py-2 text-xs font-normal transition-colors hover:border-tcMsg-info hover:text-tcMsg-info border-tcNeutral-50 text-tcNeutral-50">
        Men's Health
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button type="button" class="inline-block cursor-pointer rounded-full border px-3 py-2 text-xs font-normal transition-colors hover:border-tcMsg-info hover:text-tcMsg-info border-tcNeutral-50 text-tcNeutral-50">
        Women's Health
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button type="button" class="inline-block cursor-pointer rounded-full border px-3 py-2 text-xs font-normal transition-colors hover:border-tcMsg-info hover:text-tcMsg-info border-tcNeutral-50 text-tcNeutral-50">
        Fever Profile
      </button>
    </li>
  </ul>
  
  {{-- section 2 end --}}


  {{-- packagae section start --}}
  <div class="min-h-63 w-71 rounded-md border border-gray-250 bg-white max-[425px]:w-full">
    <a href="/profile/aarogyam-xl-with-utsh">
      <div class="cursor-pointer p-5 pb-0">
        <div class="flex h-12 justify-between">
          <p class="two-line-ellipsis font-bold capitalize">aarogyam xl with utsh</p>
          <div>
            <span class="rounded-full transition-transform hover:scale-105">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 18 18" class="">
                <rect width="18" height="18" fill="#2F446B" rx="9"></rect>
                <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13l4-4-4-4"></path>
              </svg>
            </span>
          </div>
        </div>
        <div class="h-28">
          <p class="pt-1.25 text-sm font-normal text-tcNeutral-50">145 Tests includes</p>
          <ul class="list-inside list-disc">
            <li><p class="inline-block text-ellipsis whitespace-nowrap text-sm font-normal capitalize">iron deficiency</p></li>
            <li><p class="inline-block text-ellipsis whitespace-nowrap text-sm font-normal capitalize">liver</p></li>
            <li><p class="inline-block text-ellipsis whitespace-nowrap text-sm font-normal capitalize">complete hemogram</p></li>
          </ul>
        </div>
      </div>
    </a>
    <div class="flex h-18 items-center justify-between border-t px-5">
      <div>
        <p class="text-base font-bold">₹6999</p>
      </div>
      <div class="hidden md:block">
        <!-- Request Callback Modal -->
        <!-- ... -->
      </div>
      <div class="block md:hidden">
        <!-- Request Callback Modal (Mobile) -->
        <!-- ... -->
      </div>
      <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="dark" class="cursor-pointer rounded font-semibold transition-shadow hover:shadow-md bg-tcNeutral-0 border-tcNeutral-50 border text-tcNeutral-50 py-1 px-4 text-sm" data-bs-toggle="modal" data-bs-target="#requestCallbackModal-P1534">
        Book
      </button>
    </div>
  </div>
  
  {{-- package section end --}}



  {{-- modal login --}}
  <div class="modal fade" id="requestCallbackModal" tabindex="-1" aria-labelledby="requestCallbackModalTitle" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-gray-700 font-semibold" id="requestCallbackModalTitle">Request Callback</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="px-6 py-4">
            <p class="mb-2">Enter your Name</p>
            <div class="flex w-full items-center rounded border border-gray-300 focus:border-blue-500 my-2">
              <input type="text" placeholder="Full Name" class="w-full rounded border px-3 py-2 text-sm focus:border-blue-500 focus:outline-none focus:ring-0" required="" minlength="3" maxlength="100" value="">
            </div>
            <p class="mb-2">Phone Number</p>
            <div class="flex w-full items-center rounded border border-gray-300 focus:border-blue-500 mb-4">
              <input type="tel" placeholder="XXXXXXXXXX" maxlength="10" pattern="[0-9]{1,10}" class="w-full border px-3 py-2 text-sm focus:border-blue-500 focus:outline-none focus:ring-0 rounded" required="" value="">
            </div>
            <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="w-56 flex h-10 cursor-pointer items-center justify-evenly rounded bg-blue-500 px-4.5 py-2 text-white font-bold transition-shadow hover:shadow-md disabled:cursor-not-allowed disabled:bg-gray-300 disabled:text-gray-500" disabled="">
              <span>PROCEED</span>
            </button>
          </div>
          <div class="px-6 text-gray-700">
            <p class="mr-4 font-normal">By clicking continue, you agree with our <a href="/privacy-policy" class="text-blue-500">Privacy Policy</a> and <a href="/terms/service" class="text-blue-500">Terms &amp; conditions</a></p>
            <div style="padding-top: 12px;">
              <span class="text-blue-500">Note</span> : I allow Thyrocare to Call/ Whatsapp/ Mail/ SMS
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- end of modal login --}}



  {{-- verify otp screen --}}
  <div class="modal fade" id="otpVerifyModal" tabindex="-1" aria-labelledby="requestCallbackModalTitle" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content pointer-events-auto relative flex w-full flex-col border-none bg-gray-100 bg-clip-padding text-current shadow-lg outline-none">
        <div class="modal-header flex flex-shrink-0 items-center justify-between border-b border-gray-300 p-4">
          <h5 class="text-gray-700 font-semibold" id="requestCallbackModalTitle">Request Callback</h5>
          <button type="button" class="btn-close box-content h-4 w-4 rounded-none border-none p-1 text-gray-500 opacity-50 hover:text-gray-500 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body relative p-4">
          <div id="otpVerify-TEST-D-DIMER" class="p-6 text-left text-gray-700">
            <p>Enter OTP sent to +91-8250135043</p>
            <span class="cursor-pointer text-blue-500 font-medium">Change Number?</span>
            <div id="otp" class="mt-5 flex flex-row gap-x-7 text-center">
              <div style="display: flex;">
                <div style="display: flex; align-items: center;">
                  <input aria-label="Please enter verification code. Digit 1" class="otp-input otp-input-error" type="tel" autocomplete="off" value="" style="width: 1em; text-align: center; padding: 0px;">
                  <span>&nbsp;&nbsp;</span>
                </div>
                <div style="display: flex; align-items: center;">
                  <input aria-label="Digit 2" class="otp-input otp-input-error" type="tel" autocomplete="off" value="" style="width: 1em; text-align: center; padding: 0px;">
                  <span>&nbsp;&nbsp;</span>
                </div>
                <div style="display: flex; align-items: center;">
                  <input aria-label="Digit 3" class="otp-input otp-input-error" type="tel" autocomplete="off" value="" style="width: 1em; text-align: center; padding: 0px;">
                  <span>&nbsp;&nbsp;</span>
                </div>
                <div style="display: flex; align-items: center;">
                  <input aria-label="Digit 4" class="otp-input otp-input-error" type="tel" autocomplete="off" value="" style="width: 1em; text-align: center; padding: 0px;">
                </div>
              </div>
            </div>
            <span class="mt-1 block text-gray-700 font-normal">OTP must be 4 digits</span>
            <p class="mr-4 pb-3 pt-4 text-xs font-medium">Not Received OTP ? <span class="cursor-pointer text-blue-500">Resend OTP </span></p>
            <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="w-56 flex h-10 cursor-pointer items-center justify-evenly rounded bg-blue-500 px-4.5 py-2 text-white font-bold transition-shadow hover:shadow-md disabled:cursor-not-allowed disabled:bg-gray-300 disabled:text-gray-500" disabled="">
              <span>SUBMIT</span>
            </button>
          </div>
          <div class="px-6 text-gray-700">
            <p class="mr-4 font-normal">By clicking continue, you agree with our <a href="/privacy-policy" class="text-blue-500">Privacy Policy</a> and <a href="/terms/service" class="text-blue-500">Terms &amp; conditions</a></p>
            <div style="padding-top: 12px;">
              <span class="text-blue-500">Note</span> : I allow Thyrocare to Call/ Whatsapp/ Mail/ SMS
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- end of verify otp screen --}}
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  
  {{-- end of remaining --}}

</body>

</html>
