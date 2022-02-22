@include('layouts.header')
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
    <li class="breadcrumb-item"><a href="{{url('home2')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Account</li>
  </ol>
</nav>

<div id="mobile-sidebar" class="d-block d-lg-none">
                    <div class="user-sidebar">      
                        <ul class="">     
                            <li>
                               <a href="#"><i class="icofont-spinner-alt-3 px-2"></i>Spin Now</a>
                            </li>
                            <li class="active">
                               <a href="#"><i class="icofont-ui-user px-2"></i>My account</a>
                            </li>
                            <li>
                               <a href="#"><i class="icofont-credit-card px-2"></i>Add Credit</a>
                            </li>
                            <li >
                               <a href="#"><i class="icofont-history px-2"></i>Markup History</a>
                            </li>
                            <li>
                               <a href="#"><i class="icofont-sign-out px-2"></i>Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>

<div class="my-account py-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">My Account</h2>
            </div>
        </div>
        <div class="row">
            <div  class="col-3 d-none d-lg-block">
                    <div class="user-sidebar">
                        <ul class="">
                           
                            <li>
                               <a href="#"><i class="icofont-spinner-alt-3 px-2"></i>Spin Now</a>
                            </li>
                            <li>
                               <a href="#"><i class="icofont-ui-user px-2"></i>My account</a>
                            </li>
                            <li>
                               <a href="#"><i class="icofont-credit-card px-2"></i>Add Credit</a>
                            </li>
                            <li class="active">
                               <a href="#"><i class="icofont-history px-2"></i>Markup History</a>
                            </li>
                            <li>
                               <a href="#"><i class="icofont-sign-out px-2"></i>Log Out</a>
                            </li>
                        </ul>
                    </div>
            </div>
            <div class="col-9">
                <div class="our-balance mt-5 w-100 d-flex justify-content-between align-items-center">
                    <span class="" onclick={showmenu()}><i class="icofont-navigation-menu d-block d-lg-none"></i></span>
                    <p class="text-lg-right">Balance: <span class="mx-2">0.10$</span></p>
                </div>
                <div class="our-spins mt-3">
                    <div class="row">
                        <div class="col-4 mb-3">
                            <div class="card our-spain-card text-center">
                                <img class="card-img-top mx-auto" src="{{asset('/image/spinner-card.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Risk:
                                            <span class="font-weight-bold text-dark">10.0$</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Spin:
                                            <span class="font-weight-bold text-dark">10%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="card our-spain-card text-center">
                                <img class="card-img-top mx-auto" src="{{asset('/image/spinner-card.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Risk:
                                            <span class="font-weight-bold text-dark">10.0$</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Spin:
                                            <span class="font-weight-bold text-dark">10%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="card our-spain-card text-center">
                                <img class="card-img-top mx-auto" src="{{asset('/image/spinner-card.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Risk:
                                            <span class="font-weight-bold text-dark">10.0$</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Spin:
                                            <span class="font-weight-bold text-dark">10%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="card our-spain-card text-center">
                                <img class="card-img-top mx-auto" src="{{asset('/image/spinner-card.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Risk:
                                            <span class="font-weight-bold text-dark">10.0$</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Spin:
                                            <span class="font-weight-bold text-dark">10%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="card our-spain-card text-center">
                                <img class="card-img-top mx-auto" src="{{asset('/image/spinner-card.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Risk:
                                            <span class="font-weight-bold text-dark">10.0$</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Spin:
                                            <span class="font-weight-bold text-dark">10%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
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