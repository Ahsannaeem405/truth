@include('layouts.header')
@extends('layouts.mobilesidebar')
@extends('layouts.footer')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- font-awesome -->
<script src="https://kit.fontawesome.com/9838783293.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('icofont/icofont.min.css') }}">

<!-- Google fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

<link rel="stylesheet" href="{{ asset('/css/theme.css') }}">
<title>Account page</title>
</head>
<style>
    .user-sidebar ul li {
    font-size: 18px;
    padding: 15px 2px !important;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    color: #4a4c70;
    height: 60px;

}
.dropdown-menu{
    position: absolute;
    transform: translate3d(25px, 58px, 0px);
    top: -2px !important;
    left: -2px !important;
    width: -webkit-fill-available !important;

}
</style>
<body>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('login-home') }}">Home</a></li>
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
                            <a href="{{ url('user/spin') }}" class="text-white"
                                style="text-decoration: none; color:white">
                                <li>
                                    <i class="icofont-spinner-alt-3 px-2"></i>Spin Now
                                </li>
                            </a>
                           
                            <a href="" style="text-decoration: none; ">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Settings</a>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('user/user-account') }}">My account</a>
                                    <a class="dropdown-item" href="{{ url('user/add/credit_info') }}">Card Info</a>
                                    <a class="dropdown-item" href="{{ url('user/add/credit') }}">Add Credit</a>
                                    <a class="dropdown-item" href="{{ url('user/user-history') }}">Game History</a>
                                    <a class="dropdown-item" href="{{ url('/logout') }}">Log Out</a>
                                    </div>
                                </li>
                            </a>
                         
                        </ul>



                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="our-balance mt-5 w-100 d-flex justify-content-end align-items-center">
                        <!-- <span class="" onclick="showmenu()"><i
                                class="icofont-navigation-menu d-block d-lg-none"></i></span> -->
                        <p class="text-lg-right">Balance: <span class="mx-2">
                                @if (isset(Auth::user()->coin))
                                ${{ Auth::user()->coin }}
                                @else
                                $0
                                @endif
                            </span></p>
                    </div>
                    <div class="our-spins mt-3">
                        <form method="POST" action="{{ url('user/edit/profile') }}" enctype="multipart/form-data">
                            @csrf
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif

                            @if (session()->has('fail'))
                                <div class="alert alert-danger">
                                    {{ session()->get('fail') }}
                                </div>
                            @endif
                            <div class="row">

                                <div class="col-12 mb-3">
                                    <div class="profile-edit d-md-flex align-items-center">
                                      

                                        <h4>Card Info</h4>

                                  
                                </div>

                                <div class="row">


                                        <input type="hidden" value="{{ Auth::user()->f_name }}" name="f_name"
                                            placeholder="Enter First Name" class="form-control">
                               
                                        <input type="hidden" value="{{ Auth::user()->l_name }}" name="l_name"
                                            placeholder="Enter Last Name" class="form-control">
                             
                                        <input type="hidden" value="{{ Auth::user()->username }}" name="username"
                                            class="form-control" name="user_name" placeholder="Enter User Name">
                                    
                                        <input type="hidden" class="form-control" value="{{ Auth::user()->email }}"
                                            name="email" placeholder="Enter Email ">
                                    
                                <div class="col-md-6 col-12 mt-2">
                                    <div class='form-group '>
                                        <label class='control-label'>Name on Card</label> 
                                        <input  class='form-control' name="card_name" value="{{ Auth::user()->card_name }}" size='4' type='text'>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12 mt-2">
                                    <div class='form-group '>
                                        <label class='control-label'>Card Number</label>
                                         <input autocomplete='off' name="card_number"  value="{{ Auth::user()->card_number }}" class='form-control card-num' size='20'
                                            type='text'>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 mt-2">
                            <div class="row">
                                        
                                <div class="col-md-6 col-12 mt-2">
                                    <div class='form-group '>
                                        <label class='control-label'>CVC</label>
                                        <input autocomplete='off' name="card_cvc"  value="{{ Auth::user()->card_cvc }}" class='form-control card-cvc'
                                            placeholder='e.g 415' size='4' type='text'>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class='form-group '>
                                        <label class='control-label'>Expiration Month</label> 
                                        <input  class='form-control card-expiry-month'  value="{{ Auth::user()->card_expir_month }}" name="card_expir_month" placeholder='MM' size='2'
                                            type='text'>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6 col-12 mt-2">
                                <div class='form-group '>
                                        <label class='control-label'>Expiration Year</label> 
                                        <input class='form-control card-expiry-year'  value="{{ Auth::user()->card_expir_year }}" name="card_expir_year" placeholder='YYYY'
                                            size='4' type='text'>
                                    </div>
                                </div>
                              

                                <div class="col-12 col-12 mt-2 text-center">
                                    <input  type="submit" class="w-50 form-control text-center submit-account m-auto" value="update">
                                </div>
                            </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

<br>

<div id="payment-request-button">
    <!-- A Stripe Element will be inserted here. -->
  
  </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
<script src="https://js.stripe.com/v3/"></script>

<script>
var stripe = Stripe('pk_test_51Kh9uAFBFsCMdULhjZvuXtEvn03Dc8oBpZS9VEZf3ZEym3JBm6F8owLE8nzc4o1p7tT2FSqyYjyrpPKgBmU3f4lC00yFeVGFJa', {
  apiVersion: "2020-08-27",
});

var paymentRequest = stripe.paymentRequest({
  country: 'US',
  currency: 'usd',
  total: {
    label: 'Demo total',
    amount: 1099,
  },
  requestPayerName: true,
  requestPayerEmail: true,
});

    var elements = stripe.elements();
var prButton = elements.create('paymentRequestButton', {
  paymentRequest: paymentRequest,
});

// Check the availability of the Payment Request API first.
paymentRequest.canMakePayment().then(function(result) {
  if (result) {
    prButton.mount('#payment-request-button');
  } else {
    document.getElementById('payment-request-button').style.display = 'none';
  }
});
</script>
    <script>
        function showmenu() {
            var menu = document.getElementById("mobile-sidebar").style;
            if (menu.left === "") {
                menu.left = 0 + "px";
            } else if (menu.left === "-250px") {
                menu.left = 0 + "px";
            } else {
                menu.left = -250 + "px";
            }
        }
    </script>

    <script>
        $(".upload").click(function() {
            $(".imgg").click();
        });
    </script>

    <script>
        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#my_image')
                        .attr('src', e.target.result)
                        .width(68)
                        .height(69);
                };



                reader.readAsDataURL(input.files[0]);

            }
        }
    </script>
