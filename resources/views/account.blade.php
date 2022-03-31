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

.our-spins {
    padding: 19px 25px 16px !important;
}
.user-profile-page{
    box-shadow:0px 10px 15px rgba(0,0,0,0.5);
    border-radius:15px;
    padding:15px
}
</style>
</head>

<body>

    <div class="my-account py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Your Profile</h2>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class=" col-12 col-lg-10">
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
                            <div class="row user-profile-page">

                                <div class="col-12 mb-3">
                                    <div class="profile-edit d-md-flex align-items-center">
                                        <div class="pic-edit">

                                            @if (Auth::user()->image != null)
                                                <img src="{{ asset('/uploads/' . Auth::user()->image) }}" name="imag"
                                                    id="my_image" alt="user-pic" />
                                                <i class="icofont-ui-add addmore-img upload">
                                                @else
                                                {{-- <i class="fa fa-user"></i> --}}
                                                    <img src="{{ asset('/image/avatar.png') }}" name="imag"
                                                        id="my_image" alt="user-pic" />
                                                    <i class="icofont-ui-add addmore-img upload">
                                            @endif


                                            <input type="file" hidden id="user-pic" />
                                            </i>




                                        </div>


                                    <div class="about-profile-setting">
                                        <h4 class="m-0 mt-3">Profile Setting</h4>
                                        <!-- <button type="button" class="upload-profile my-2 upload">Upload</button> -->
                                    </div>
                                </div>

                                <div class="img1">
                                    <input type="file" onchange="readURL(this)" style="display: none" name="picture"
                                        class="imgg" id="">

                                </div>
                                <div class="row">


                                <div class="col-md-6 col-12 mt-2">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" value="{{ Auth::user()->f_name }}" name="f_name"
                                            placeholder="Enter First Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="form-group">
                                        <label>last Name</label>
                                        <input type="text" value="{{ Auth::user()->l_name }}" name="l_name"
                                            placeholder="Enter Last Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="form-group">
                                        <label>User Name</label>
                                        <input type="text" value="{{ Auth::user()->username }}" name="username"
                                            class="form-control" name="user_name" placeholder="Enter User Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" value="{{ Auth::user()->email }}"
                                            name="email" placeholder="Enter Email ">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="form-group">
                                        <label> Password</label>
                                        <input type="passowrd" name="password" class="form-control"
                                            placeholder="Password">

                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mt-2">
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="passowrd" name="new_password" class="form-control"
                                            placeholder="New Password">

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


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
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
