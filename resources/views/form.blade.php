<style>
    .container {
        margin-top: 120px;
    }

    .container h3 {
        color: blue;
        text-align: center;
    }

    .container h5 {
        color: gainsboro;
        text-align: center;
    }

    .form-check {
        margin-right: 20px;
    }

    .form-group {
        justify-content: center;
        text-align: center;
        gap: 10px;
    }

    .form-wrapper-area {
        display: flex;
        flex-direction: row;
        gap: -100px;
    }
</style>

<header>
    @include('layouts.header')
</header>

<div class="container">
    <h3>Book Your Test Now</h3>
    <h5>Fill out the form</h5>
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="pin" placeholder="Enter Pin Code" required>
            </div>
            <div class="form-group col-md-6">
                <input type="name" class="form-control" id="name" placeholder="Enter Name" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="mobileno" placeholder="Enter Mobile No" required>
            </div>
            <div class="form-group col-md-6">
                <input type="email" class="form-control" id="email" placeholder="Email" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="age" placeholder="Age" required>
            </div>
            <div class="form-group col-md-6">
                <select class="custom-select">
                    <option selected>Gender</option>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                    <option value="tg">TansGender</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" id="address" rows="3" placeholder="Address" required></textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <select class="form-control" id="package">
                    <option>Package 1</option>
                    <option>Package 2</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <input type="number" class="form-control" id="count" placeholder="1">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="date" class="form-control" id="date" placeholder="Select Appointment Date">
            </div>
            <div class="form-group col-md-6">
                <select class="form-control" id="slot" aria-placeholder="Select Slot">
                    <option>Slot 1</option>
                    <option>Slot 2</option>
                    <option>Slot 3</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Addition Rs. 75 for printed Reports
                </label>
            </div>
        </div>
        <div class="form-group  form-wrapper-area">
            <span> Reach Me On : </span>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="whatsapp" value="whatsapp">
                <label class="form-check-label" for="whatsapp">Whatsapp</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="call" value="call">
                <label class="form-check-label" for="call">Call</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="email" value="email">
                <label class="form-check-label" for="email">Email</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="sms" value="sms">
                <label class="form-check-label" for="sms">SMS</label>
            </div>
        </div>
        <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
    </form>
</div>