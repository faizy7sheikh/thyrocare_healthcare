@extends('frontend.layouts.app')
@section('content')

    <div class="container">
        <div class="book">
            <ul>
                <li><a href="#">Home ></a></li>
                <li><a href="#">Book a Test</a></li>
            </ul>
        </div>
        <div class="main-content">
            <div class="col-sm-2">
                <strong>Filter by</strong>
                <p>Test Type</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Single Test (125)
                    </label>
                </div>
                <hr>

                <p>Fasting Type</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Fasting
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        No Fatsing
                    </label>
                </div>
                <hr>

                <p>Price</p>

                <label for="price-range">Price Range:</label>
                <input type="range" id="price-range" name="price" min="0" max="100" step="10">
                <hr>
            </div>
            <div class="title-wrapper">
                <strong>Browse Tests/Packages</strong>

                <div class="all-content-wrapper">
                    <div class="col-sm-3">

                        <div class="card">
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
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Food Intolerance Profile</h5>
                                <p class="card-text">218 Tests include</p>
                                <ul>
                                    <li>Dairy</li>
                                    <li>Fish</li>
                                    <li>Fruits</li>
                                </ul>
                                <div class="footer-card-2">
                                    <hr>
                                    <div class="price-book-container">
                                        <span class="price">Rs.10000</span>
                                        <a href="#" class="btn btn-primary">Book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tb - Whole Genome Squencing</h5>
                                <p class="card-text">18 Tests include</p>
                                <ul>
                                    <li>Others</li>

                                </ul>
                                <div class="footer-card-22">
                                    <hr>
                                    <div class="price-book-container">
                                        <span class="price">Rs.8000</span>
                                        <a href="#" class="btn btn-primary">Book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <!-- Book Form -->
    <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Request Callback</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputName">Enter Your Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone Number</label>
                            <input type="text" class="form-control" id="phoneNumber" placeholder="XXXXXXXXXX">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-success btn-lg" id="proceedBtn">Proceed</button>
                        </div>
                        <div class="form-group">
                            <p>
                                By clicking continue, you agree to our <a href="#">Privacy Policy</a> and <a href="#">Terms and Conditions</a>.
                            </p>
                            <p><span class="note">Note:</span> I allow Thyrocare to call/WhatsApp/Mail/SMS.</p>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- otp verification -->
    <div class="modal" tabindex="-1" role="dialog" id="otpModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Request Callback</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="otp">Enter OTP Sent to +91-7282073879</label>
                            <p><a href="#" id="changeNumberLink">Change Number ?</a></p>
                            <!-- <input type="number" class="form-control" id="otp" placeholder="Enter OTP" maxlength="4" min="0" max="9999"> -->
                            <div class="container height-100 d-flex justify-content-center align-items-center">
                                <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2"> <input class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" /> </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <p>Not Received OTP ? <a href="#">Resend OTP</a></p>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary btn-lg" id="SubmitBtn">Submit</button>
                        </div>
                        <div class="form-group">
                            <p>
                                By clicking continue, you agree to our <a href="#">Privacy Policy</a> and <a href="#">Terms and Conditions</a>.
                            </p>
                            <p><span class="note">Note:</span> I allow Thyrocare to call/WhatsApp/Mail/SMS.</p>

                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <!--JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- JavaScript -->
    <script>
        var modal = document.querySelector(".modal");
        var otpModal = document.querySelector("#otpModal");
        var proceedBtn = document.getElementById("proceedBtn");
        var submitBtn = document.getElementById("SubmitBtn");
        var changeNumberLink = document.getElementById("changeNumberLink");

        // Get the button that opens the modal
        var bookButton = document.getElementById("book-btn-1");
        var closeModalBtn = document.querySelectorAll(".modal .close");

        // Function to open the modal
        function openModal() {
            modal.style.display = "block";
        }

        // Function to close the modal
        function closeModal() {
            modal.style.display = "none";
        }

        // Function to open OTP modal
        function openOTPModal() {
            modal.style.display = "none";
            otpModal.style.display = "block";
        }

        function changeNumber() {
            otpModal.style.display = "none";
            openModal();
        }

        // Event listener for the "Book" button and close button
        bookButton.addEventListener("click", openModal);

        // Event listeners for the "Proceed" button, close button, and OTP modal close buttons
        proceedBtn.addEventListener("click", openOTPModal);
        submitBtn.addEventListener("click", closeModal);
        changeNumberLink.addEventListener("click", changeNumber);
        closeModalBtn.forEach(function(btn) {
            btn.addEventListener("click", closeModal);
        });
    </script>


</body>

</html>
@endsection