<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help & Charity</title>
    <script src="https://kit.fontawesome.com/9838783293.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('icofont/icofont.min.css') }}">
  

</head>

<body>

    <nav class="navbar navbar-expand-lg pr-3">

        <a style="width: 100px; mt-auto" class="navbar-brand" href="#">
            <img src="{{ asset('/image/logo.png') }}" style="padding-top:13px;" alt="logo" class="img-fluid" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="icofont-navigation-menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @auth
                <ul class="navbar-nav first-nav-bar">
                    <!-- <li class="nav-item">
                        <a href="{{ url("user/dashboard") }}"><button type="button" class="btn btn-success">Play
                                Now</button></a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user/spin') }}"><i class="fa fa-home" aria-hidden="true"></i></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}">About Us</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">Contact us</a>
                    </li> -->

                    <!-- <li class="nav-item d-block ">
                        <a class="nav-link" href="{{ url('user/spin') }}">Spin Now</a>
                    </li> -->
                    <!-- <li class="nav-item d-block">
                        <a class="nav-link" href="{{ url('user/user-account') }}">My account</a>
                    </li> -->
                    <!-- <li class="nav-item d-block">
                        <a class="nav-link"  href="{{ url('user/add/credit') }}">Add Credit</a>
                    </li> -->
                    <li class="nav-item d-block">
                        <a class="nav-link" href="{{ url('user/user-history') }}"><i class="fa fa-history" aria-hidden="true"></i></a>
                    </li>
                    <!-- <li class="nav-item d-block">
                        <a href="{{ url("user/dashboard") }}"><button type="button" class="btn btn-play">Play
                                Now</button></a>
                    </li> -->

                </ul>
                <div class="dropdown pro-dropdown ml-auto">
                <a class="nav-link" style="background-color: #0a95a4; color: white;" href="{{ url('logout') }}"><i class="icofont-logout"></i> </a>
                    <!-- <div class="pro-icon" style="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                    </div> -->
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <!--<a class="nav-link" href="{{ url('user/add/credit_info') }}">Card Info</a>
                        <a class="nav-link" href="{{ url('user/user-account') }}">My account</a>-->
                        <!-- <a class="nav-link" href="{{ url('logout') }}"><i class="icofont-logout"></i> Logout</a> -->
                    </div> 
                </div>
                <ul class="navbar-nav ml-auto second-nav-bar d-none">
                    <li class="nav-item">
                        
                    </li>
                </ul>
            @endauth
            @guest
                <ul class="navbar-nav first-nav-bar ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}"><i class="fa-solid fa-house-chimney"></i></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}">About Us</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">Contact us</a>
                    </li> -->
                </ul>
                <ul class="navbar-nav ml-auto second-nav-bar">
                    <li class="nav-item">
                        <a class="nav-link login-link" href="{{ url('login') }}"> <i class="fa-solid fa-arrow-right-to-bracket"></i> </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link register-link" href="{{ url('signup') }}"><i
                                class="fa-solid fa-arrow-right-from-bracket mx-2"></i>Sign Up</a>
                    </li> -->
                    <!-- <li class="nav-item">
          <a class="nav-link profile-link" href="#">
          <i class="fa fa-user" aria-hidden="true"></i>
          </a>
        </li> -->
                </ul>
            @endguest
        </div>
    </nav>

</body>

</html>
