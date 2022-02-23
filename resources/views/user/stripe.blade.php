@include('layouts.header')
@extends('layouts.mobilesidebar')
@extends('layouts.footer')
<style>
.hide{
display: none;
}


</style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/9838783293.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('icofont/icofont.min.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins:wght@400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/css/theme.css') }}">

    <title>Stripe page</title>


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('login-home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Credit</li>
        </ol>
    </nav>



    <div class="my-account py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Stripe Payment</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-3 d-none d-lg-block">
                    <div class="user-sidebar" style="margin-top: 71px;">
                        <ul class="">

                            <li>
                                <a href="{{ url('spin') }}"><i class="icofont-spinner-alt-3 px-2"></i>Spin Now</a>
                            </li>
                            <li class="">
                                <a href="{{ url('/user-account') }}"><i class="icofont-ui-user px-2"></i>My account</a>
                            </li>
                            <li class="active">
                                <a href="{{ url('add/credit') }}"><i class="icofont-credit-card px-2"></i>Add Credit</a>
                            </li>
                            <li>
                                <a href="{{ url('/user-history') }}"><i class="icofont-history px-2"></i>Markup
                                    History</a>
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}"><i class="icofont-sign-out px-2"></i>Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9 col-12" style="margin-top: 57px;">

                    <div class="our-spins mt-3">
                        <div class="row">
                            <div class="col-12 col-md-offset-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row text-center">
                                            <h3 class="panel-heading">Payment Details</h3>
                                        </div>
                                    </div>
                                    <div class="panel-body">

                                        @if (Session::has('success'))
                                            <div class="alert alert-success text-center">
                                                <a href="#" class="close" data-dismiss="alert"
                                                    aria-label="close">×</a>
                                                <p>{{ Session::get('success') }}</p>
                                            </div>
                                        @endif



                                        <form role="form" action="{{ route('stripe.payment') }}" method="post"
                                            class="validation" data-cc-on-file="false"
                                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                                            @csrf

                                            <div class='form-row '>
                                                <div class='col-12 form-group  required'>
                                                    <label class='control-label'>Enter Amount</label>
                                                    <input type="text" name="amount" class='form-control' type='text'>
                                                </div>
                                            </div>


                                            <div class='form-row row'>
                                                <div class='col-12 form-group required'>
                                                    <label class='control-label'>Name on Card</label> <input
                                                        class='form-control' size='4' type='text'>
                                                </div>
                                            </div>

                                            <div class='form-row row'>
                                                <div class='col-12 form-group card required'>
                                                    <label class='control-label'>Card Number</label> <input
                                                        autocomplete='off' class='form-control card-num' size='20'
                                                        type='text'>
                                                </div>
                                            </div>

                                            <div class='form-row row'>
                                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                    <label class='control-label'>CVC</label>
                                                    <input autocomplete='off' class='form-control card-cvc'
                                                        placeholder='e.g 415' size='4' type='text'>
                                                </div>
                                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                    <label class='control-label'>Expiration Month</label> <input
                                                        class='form-control card-expiry-month' placeholder='MM' size='2'
                                                        type='text'>
                                                </div>
                                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                    <label class='control-label'>Expiration Year</label> <input
                                                        class='form-control card-expiry-year' placeholder='YYYY'
                                                        size='4' type='text'>
                                                </div>
                                            </div>

                                            <div class='form-row row'>
                                                <div class='col-md-12 hide error form-group' @if(Session::has('fail'))) style="display: block;" @endif >
                                                    <div class='alert-danger alert'>  @if (Session::has('fail')) {{ Session::get('fail') }} @endif
                                                    </div>


                                                </div>
                                            </div>

                                                        <div class=" d-flex justify-content-end">
                                                            <button class=" col-2 btn btn-danger btn-lg " type="submit">Pay
                                                                Now </button>


                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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



    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script type="text/javascript">
        $(function() {
            var $form = $(".validation");
            $('form.validation').bind('submit', function(e) {
                var $form = $(".validation"),
                    inputVal = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputVal),
                    $errorStatus = $form.find('div.error'),
                    valid = true;
                $errorStatus.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorStatus.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-num').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeHandleResponse);
                }

            });

            function stripeHandleResponse(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    var token = response['id'];
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    </script>

