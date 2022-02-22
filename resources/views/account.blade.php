@include('layouts.header')
@extends('layouts.mobilesidebar')
@extends('layouts.footer')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/9838783293.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('icofont/icofont.min.css')}}">
    
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/theme.css') }}">
    <title>Account page</title>
</head>
<body>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('login-home')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Account</li>
  </ol>
</nav>



<div class="my-account py-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">My Account</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-3 d-none d-lg-block">
                    <div class="user-sidebar">
                        <ul class="">
                           
                            <li>
                               <a href="{{url('spin')}}"><i class="icofont-spinner-alt-3 px-2"></i>Spin Now</a>
                            </li>
                            <li class="active">
                               <a href="{{url('/user-account')}}"><i class="icofont-ui-user px-2"></i>My account</a>
                            </li>
                            <li>
                               <a href="#"><i class="icofont-credit-card px-2"></i>Add Credit</a>
                            </li>
                            <li >
                               <a href="{{url('/user-history')}}"><i class="icofont-history px-2"></i>Markup History</a>
                            </li>
                            <li>
                               <a href="{{url('/logout')}}"><i class="icofont-sign-out px-2"></i>Log Out</a>
                            </li>
                        </ul>
                    </div>
            </div>
            <div class="col-lg-9 col-12">
                <div class="our-balance mt-5 w-100 d-flex justify-content-between align-items-center">
                    <span class="" onclick="showmenu()"><i class="icofont-navigation-menu d-block d-lg-none"></i></span>
                    <p class="text-lg-right">Balance: <span class="mx-2">0.10$</span></p>
                </div>
                <div class="our-spins mt-3">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="profile-edit d-md-flex align-items-center">
                                <div class="pic-edit">
                                    <img src="{{ asset('/image/user-pic.jpg')}}" alt= "user-pic"/>
                                    <i class="icofont-ui-add addmore-img " onclick={document.getElementById("user-pic").click()}>
                                        <input type="file" hidden id="user-pic"/>
                                    </i>
                                </div>
                                <div class="about-profile-setting">
                                    <h4 class="m-0">Profile Setting</h4>
                                    <p class="m-0">Accepting file type .png. less than 1MB</p>
                                    <button class="upload-profile my-2">Upload</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <div class="form-group">
                                <label >First Name</label>
                                <input type="text" class="form-control" value="John ">
                            </div>
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <div class="form-group">
                                <label>last Name</label>
                                <input type="text" class="form-control"  value="Smith">
                            </div>
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <div class="form-group">
                                <label >User Name</label>
                                <input type="text" class="form-control" value="John571 ">
                            </div>
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control"  value="abc@xyz.com">
                            </div>
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <div class="form-group">
                                <label >New Password</label>
                                <input type="passowrd" class="form-control" placeholder="New Password">

                            </div>
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <div class="form-group">
                                <label >Confirm Password</label>
                                <input type="passowrd" class="form-control" placeholder="Confirm Password">

                            </div>
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <input type="submit" class="w-100 form-control submit-account" value="update">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
        function showmenu(){
            var menu = document.getElementById("mobile-sidebar").style;
            if(menu.left === ""){
                menu.left = 0 + "px";
            }
            else if(menu.left === "-250px"){
                menu.left = 0 + "px";
            }
            else{
                menu.left = -250 + "px";
            }
        }
        
    </script>
</body>
</html>