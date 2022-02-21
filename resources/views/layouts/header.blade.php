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
  <img src="{{ asset('/image/logo.png')}}" alt="logo" class="img-fluid"/>
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav first-nav-bar mx-auto">
  <li class="nav-item">
    <a class="nav-link" href="{{url('home2')}}">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('aboutus')}}">About Us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('contactus')}}">Contact us</a>
  </li>
  <!-- <li class="nav-item">
    <a class="nav-link" href="#">Acount</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Spiner</a>
  </li> -->
</ul>
<ul class="navbar-nav ml-auto second-nav-bar">
  <li class="nav-item">
    <a class="nav-link login-link" href="{{url('login1')}}">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link register-link" href="{{url('signup')}}"><i class="fa-solid fa-arrow-right-from-bracket mx-2"></i>Sign Up</a> 
  </li>
  <!-- <li class="nav-item">
    <a class="nav-link profile-link" href="#">
    <i class="fa fa-user" aria-hidden="true"></i>
    </a> 
  </li> -->
</ul>
</div>
</nav>

</body>
</html>