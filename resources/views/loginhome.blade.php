@include('layouts.loginheader')
@extends('layouts.footer')

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
    <title>Home page</title>
</head>

<body>
<section class="hero-section">
  <div class="container">
    <div class="row"> 
      <div class="col-12">
        <div class="hero-details text-center">
          <h2>We help people in need</h2>
          <h3>around the world</h3>
          <button class="hero-btn">Get Start</button>
        </div>
      </div>
    </div>
    <div>
</section>
<section class="howitwork my-5">
  <div class="container">
    <div class="row">
        <div class="col-12">
          <h3> How It Works</h3>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-6 col-md-3">
          <div class="howitworks-icons mt-4 text-center ">
            <img src="{{ asset('/image/icon1.png')}}"/>
            <i class="icofont-ui-user"></i>
          </div>
          <p class="text-center mt-3">Create an account</p>
        </div>
        <div class="col-6 col-md-3">
          <div class="howitworks-icons mt-4 text-center">
            <img src="{{ asset('/image/icon_2.png')}}"/>
            <i class="icofont-pay"></i>
          </div>
          <p class="text-center mt-3">Add Credit</p>
        </div>
        <div class="col-6 col-md-3">
            <div class="howitworks-icons mt-4 text-center">
              <img src="{{ asset('/image/icon_3.png')}}"/>
              <i class="icofont-navigation"></i>
            </div>
            <p class="text-center mt-3">Select Risk</p>
        </div>
        <div class="col-6 col-md-3">
          <div class="howitworks-icons mt-4 text-center">
            <img src="{{ asset('/image/icon_4.png')}}"/>
            <i class="icofont-dart"></i>
          </div>
          <p class="text-center mt-3">Spin</p>
        </div>
    </div>
  </div>
</section>
<section class="our-team py-5">
    <div class="container">
      <div class="row d-flex justify-content-center py-3">
        <div class="col-lg-10 col-12 text-center">
          <h3>
          We are Awesome Volounteer Team
          </h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
             Corporis fugit commodi eaque quo quos nobis natus at pariatur 
             accusamus placeat, inventore sequi, vero ratione veniam velit
              nisi distinctio ex ipsam?</p>
              <button class="join-usbtn mt-4">Join Us Now!</button>
        </div>
      </div>
    </div>
</section>

<section class="whatwedo">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8 col-md-12 col-12 d-flex justify-content-center align-items-center">
        <div class="px-1 px-ld-5 mx-1 mx-md-5 py-5">
          <div>
          <h6>What we Did</h6>
          <h3>Our Projects</h3>
          <p>Sharksucker sea toad candiru rocket danio tilefish stingray 
            deepwater stingray Sacramento splittail, Canthigaster rostrata.
            Midshipman dartfish Modoc sucker, yellowtai</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12  p-0">
        <div class="our-project">
            <img src="{{ asset('/image/projects1.jpg')}}"/>
            <div class="project-details">
              <span style="background-color: green">Education</span>
              <h3>Help for Children of the East</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Nam mollitia dicta maxime officia doloribus quod illum iusto </p>
            </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12  p-0">
        <div class="our-project">
            <img src="{{ asset('/image/projects2.jpg')}}"/>
            <div class="project-details">
              <span  style="background-color: #49C2DF">Water Delivery</span>
              <h3>Help for Children of the East</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Nam mollitia dicta maxime officia doloribus quod illum iusto </p>
            </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12  p-0">
        <div class="our-project">
            <img src="{{ asset('/image/projects3.jpg')}}"/>
            <div class="project-details">
              <span  style="background-color:#F8AC3A;">Food</span>
              <h3>Help for Children of the East</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Nam mollitia dicta maxime officia doloribus quod illum iusto </p>
            </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12 p-0">
        <div class="our-project">
            <img src="{{ asset('/image/projects4.jpg')}}"/>
            <div class="project-details">
              <span style="background-color: #F36F8F">Education</span>
              <h3>Help for Children of the East</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Nam mollitia dicta maxime officia doloribus quod illum iusto </p>
            </div>
        </div>
      </div>
      
    </div>
  </div>
</section>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>