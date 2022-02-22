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
    <title>Contact us</title>
</head>
<body>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('home2')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contact us</li>
  </ol>
</nav>

<div class="contact-us">
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1 class="px-5">Contact us</h1>
                <p class="px-5">
                Proin Gravida Nibh Vel Velit Auctor Aliquet. Aenean Sollicitudin, 
                Lorem Quis Bibendum Auctor, Nisi Elit Consequat Ipsum, Nec Sagittis 
                Sem Nibh Id Elit.
                </p>
            </div>
        </div>
        <div class="row py-4">
            <div class="col-7">
                <h3>Drop Us a Message</h3>
                <form class="py-4">
                    <div class="row py-2">
                        <div class="col">
                        <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="col">
                        <input type="email" class="form-control" placeholder="Your email" required>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col">
                        <input type="text" class="form-control" placeholder="Subject" required>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Your Message"></textarea>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col">
                            <button class="submit-formbtn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="col-5">
                <div class="conatc-info">
                    <h3>CONTACT INFO</h3>
                    <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non 
                        mauris vitae erat consequat auctor eu in elit. Class aptent taciti 
                        sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                    </p>
                    <ul>
                        <li class="d-flex align-items-center my-3">
                        <i class="icofont-location-pin p-2"></i>
                            <p>13/2 Elizabeth St, Melbourne VIC 3000, pakistan</p>
                        </li>
                        <li class="d-flex align-items-center my-3">
                        <i class="icofont-phone p-2"></i>
                            <p> +92 123 456 789</p>
                        </li>
                        <li class="d-flex align-items-center my-3">
                        <i class="icofont-ui-message p-2"></i>
                            <p>abcuser@xyz.com</p>
                        </li>
                        <li class="d-flex align-items-center my-3">
                        <i class="icofont-web p-2"></i>
                            <p>www.xyz.com</p>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="contact-map">
    <div class="container-fluid p-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54415.301320469494!2d74.35517046540528!3d31.52535927214375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391905a115593fa5%3A0x18ecc12af8614cc6!2sDeSOM%20(Services%20Club)!5e0!3m2!1sen!2s!4v1645186174704!5m2!1sen!2s" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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