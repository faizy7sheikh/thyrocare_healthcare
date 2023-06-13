<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thyrocare</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
   
    <div class="row">
        <div class="container">

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
                                <!-- </select> -->
                                <input type="text" class="form-control" id="search" placeholder="Search Tests, Packages">
                        </div>
                    </form>
                </div>
                <div class="right-side-header">
                    <select class="form-control form-control-sm">
                        <option>Hii,gmjhf</option>
                    </select>
                </div>
            </div>
    
        </div>
        <div class="navbar heading-titltes">
            <ul>
                <li><a href="#">Book a Test</a></li>
                <li><a href="#">Labs Near Me</a></li>
                <li><a href="#">Become a Thyrocare Partner</a></li>
                <li><a href="#">My Offers</a></li>
                <li><a href="#">My Orders</a></li>
            </ul>
        </div>
    </div>

@yield('content')

@extends('frontend.layouts.footer')