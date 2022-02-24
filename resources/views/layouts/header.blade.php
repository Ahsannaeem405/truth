<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg ">

        <a class="navbar-brand" href="#">
            <img src="{{ asset('/image/logo.png') }}" alt="logo" class="img-fluid" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="icofont-navigation-menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @auth
                <ul class="navbar-nav first-nav-bar mx-auto">
                    <!-- <li class="nav-item">
                        <a href="{{ url("user/dashboard") }}"><button type="button" class="btn btn-success">Play
                                Now</button></a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">Contact us</a>
                    </li>
                    
                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link" href="{{ url('user/spin') }}">Spin Now</a>
                    </li>
                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link" href="{{ url('user/user-account') }}">My account</a>
                    </li>
                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link"  href="{{ url('user/add/credit') }}">Add Credit</a>
                    </li>
                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link" href="{{ url('user/user-history') }}">Markup History</a>
                    </li>
                    <li class="nav-item d-block d-lg-none">
                        <a href="{{ url("user/dashboard") }}"><button type="button" class="btn btn-play">Play
                                Now</button></a>
                    </li>

                </ul>
                <ul class="navbar-nav ml-auto second-nav-bar">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('logout') }}">
                        <i class="icofont-logout"></i>  Logout
                        </a>
                    </li>
                </ul>
            @endauth
            @guest
                <ul class="navbar-nav first-nav-bar mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">Contact us</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto second-nav-bar">
                    <li class="nav-item">
                        <a class="nav-link login-link" href="{{ url('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link register-link" href="{{ url('signup') }}"><i
                                class="fa-solid fa-arrow-right-from-bracket mx-2"></i>Sign Up</a>
                    </li>
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
