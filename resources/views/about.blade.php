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
    <title>Home page</title>
</head>
<body>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('home2')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">About us</li>
  </ol>
</nav>
<div class="aboutus py-5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-6">
                <div class="aboutus-pic p-4">
                    <img src="{{ asset('/image/aboutimg1.png')}}" class="img-fluid  p-5"/>
                </div>
            </div>
            <div class="col-6 py-3">
                    <h6> About us</h6>
                    <h2><b>Help is Our</b> Main Goal</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti 
                        soluta voluptatibus architecto ad perspiciatis impedit aliquam ipsa
                         tempore, voluptates nam dolore eligendi officiis, at, fugit quaerat
                          aspernatur quo explicabo sapiente!</p>
                          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti 
                        soluta voluptatibus architecto ad perspiciatis impedit aliquam ipsa
                         tempore, voluptates nam dolore eligendi officiis, at, fugit quaerat
                          aspernatur quo explicabo sapiente!</p>
                          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti 
                        soluta voluptatibus architecto ad perspiciatis impedit aliquam ipsa
                         tempore, voluptates nam dolore eligendi officiis, at, fugit quaerat
                          aspernatur quo explicabo sapiente!</p>
            </div>
        </div>
        <div class="our-mission">
            
        </div>
        <div class="our-mission py-4">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-6 py-3">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti 
                            soluta voluptatibus architecto ad perspiciatis impedit aliquam ipsa
                            tempore,</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti 
                            soluta voluptatibus architecto ad perspiciatis impedit aliquam ipsa
                            tempore, voluptates nam dolore eligendi officiis, at, fugit quaerat
                            aspernatur quo explicabo sapiente!</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti 
                            soluta voluptatibus architecto ad perspiciatis impedit aliquam ipsa
                            tempore, voluptates nam dolore eligendi officiis, at, fugit quaerat
                            aspernatur quo explicabo sapiente!</p>
                </div>
                <div class="col-6">
                    <div class="mission-pic p-4 text-center">
                        <i class="icofont-bullseye"></i>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</div>
<!-- <footer class="main-footer py-2 py-md-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-12 text-center">
              <div class="logo">
                <img src="{{ asset('/image/logo.png')}}" alt="footer-logo" class="img-fluid"/>
              </div>
              <div class="footer-socail-links my-3">
                <a href="#">
                  <div class="socail-link-div">
                  <i class="icofont-facebook p-2"></i>
                  </div>
                 </a>
                 <a href="#">
                  <div class="socail-link-div">
                  <i class="icofont-twitter p-2"></i>
                  </div>
                 </a>
                 <a href="#">
                  <div class="socail-link-div">
                  <i class="icofont-instagram p-2"></i>
                  </div>
                 </a>
                 <a href="#">
                  <div class="socail-link-div">
                  <i class="icofont-youtube-play p-2"></i>
                  </div>
                 </a>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 col-12">
            <div class="footer-contact mx-lg-5 mx-1 pt-2">
                <h3>Contact us</h3>
                <ul>
                  <li>Elliott Ave, Parkville VIC 3052, Melbourne Canada</li>
                  <li>Phone: +31 85 964 47 25</li>
                  <li>Email: support@helpo.org</li>
                </ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-12">
              <div class="usefull-links pt-2">
                    <h3>Useful Links</h3>
                    <ul>
                      <li>
                        <a href="">Home</a></li>
                        <li>
                        <a href="">About</a></li>
                        <li>
                        <a href="">Contact</a></li>
                        <li>
                        <a href="">Causes</a></li>
                    </ul>
              </div>
          </div>
        </div>
    </div>
</footer> -->



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>