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
<link rel="stylesheet" href="{{ asset('/css/theme.css') }}">
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"> --}}
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>


<title>Markup History</title>
</head>

<body>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home2') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Markup History</li>
        </ol>
    </nav>


    <div class="my-account py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Markup History</h2>


                    {{-- @dd($char) --}}
                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
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
                            <a href="{{ url('user/user-account') }}" style="text-decoration: none; ">
                                <li>
                                    <i class="icofont-ui-user px-2"></i>My account
                                </li>
                            </a>
                            <a href="{{ url('user/add/credit') }}" style="text-decoration: none;">
                                <li>
                                    <i class="icofont-credit-card px-2"></i>Add Credit
                                </li>
                            </a>
                            <a href="{{ url('user/user-history') }}" style="text-decoration: none; ">
                                <li class="active text-white">
                                    <i class="icofont-history px-2"></i>Markup History
                                </li>
                            </a>
                            <a href="{{ url('/logout') }}" style="text-decoration: none; ">
                                <li>
                                    <i class="icofont-sign-out px-2"></i>Log Out
                                </li>
                            </a>
                        </ul>

                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="our-balance mt-5 w-100 d-flex justify-content-between align-items-center">

                        <!-- <span class="" onclick={showmenu()}><i
                                class="icofont-navigation-menu d-block d-lg-none"></i></span> -->
                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#exampleModalLong">
                            Add Donation
                        </button> --}}


                        <p class="text-lg-right">Balance: <span class="mx-2">
                                @if (isset(Auth::user()->coin))
                                    ${{ Auth::user()->coin }}
                                @else
                                    $0
                                @endif
                            </span></p>


                    </div>
                    <div class="our-spins mt-3">
                        <div class="row">
                            @if (isset($char) && count($char) > 0)
                                @foreach ($char as $chars)
                                    {{-- @dd($chars->User) --}}
                                    <div class="col-lg-4 col-md-6 col-12 mb-3">
                                        <div class="card our-spain-card text-center">
                                            <img class="card-img-top mx-auto"
                                                src="{{ asset('/image/spinner-card.png') }}" alt="Card image cap">
                                            <div class="card-body">
                                                <ul class="list-group">
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                        Charity: &nbsp;&nbsp;
                                                        <span
                                                            class="font-weight-bold text-dark">{{ $chars->User->username }}</span>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                        Risk:
                                                        <span
                                                            class="font-weight-bold text-dark">{{ $chars->amount }}$</span>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                        Spin:
                                                        <span
                                                            class="font-weight-bold text-dark">{{ $chars->percent }}%</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-12">



                                    <div class="jumbotron jumbotron-fluid bg-white">
                                        <div class="container">
                                            <h4 class="text-center">No Charity Available</h4>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Donation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('user/add/donation') }}" method="POST">
                    @csrf

                    <div class="modal-body">



                        <label for="">
                            Select Charity
                        </label>
                        <select name="charity" class="form-control" id="">

                            @foreach ($user as $users)
                                <option value="{{ $users->id }}">{{ $users->username }}</option>
                            @endforeach
                        </select>
                        <br>
                        <label for=""> Enter Amount</label>
                        <input type="number" name="amount" placeholder="Enter Amount" class="form-control" name=""
                            id="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Donate">
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

<?php
$amount = Session::get('amount');
$username = Session::get('username');
$total_percent = Session::get('total_percent');



?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

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

    @if (Session::has('success'))
        <script>

            Swal.fire({
                icon: 'success',
                title: 'Congratulations!',
                text: "You successfully added this amount $<?php echo $total_percent?> to this <?php echo $username?>",
                showConfirmButton: true,
                // timer: 2000
            })
        </script>
    @endif
