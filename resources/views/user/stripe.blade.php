@include('layouts.header')
@extends('layouts.mobilesidebar')
@extends('layouts.footer')
<style>
.hide{
display: none;
}
button.btn-circle{
    border-radius: 50%;
    width: 60px;
    height: 60px;
}

</style>
<style>
    .my-payment-method{
        border: 1px solid #404040;
        padding:10px;
    }
    .my-payment-method img{
        width: 35px;
    }
    .my-payment-method .input-group-prepend{
        flex: 1;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .input-risk{
            position: relative;
        }
        .input-risk span{
            position: absolute;
        left: 10px;
        top: 50%;
        font-size: 20px;
        transform: translateY(-50%);
        }
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
.user-sidebar {

    height: 461px !important;
}
.add-credit{
    box-shadow: 0px 10px 15px rgba(0,0,0,0.5);
    padding: 15px;
    border-radius: 8px;
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

    <div class="my-account py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Payment</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class=" col-xl-8 col-lg-10 col-12" style="margin-top: -36px;">
                <div class="our-balance mt-5 w-100 d-flex justify-content-end align-items-center">
                        <!-- <span class="" onclick="showmenu()"><i
                                class="icofont-navigation-menu d-block d-lg-none"></i></span> -->
                        <p class="text-lg-right">Balance: <span class="mx-2">
                                @if (isset(Auth::user()->coin))
                                ${{ Auth::user()->coin }} @else $0
                                @endif
                            </span></p>
                    </div>
                    <div class="our-spins mt-3">
                        <div class="row add-credit">
                            <div class="col-12 col-md-offset-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row text-center">
                                            <h3 class="panel-heading">Add Credit</h3>
                                        </div>
                                    </div>
                                    <div class="panel-body mt-3">
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
                                                        <div class="input-risk">
                                                        <input name="amount" value="" class='form-control amt pl-4' type='number'>
                                                        <span>$</span>
                                                </div>
                                                </div>
                                            </div>

                                            {{-- hidden card info --}}
                                            {{-- @dd(intval(Auth::user()->card_number)); --}}
                                            <input  class='form-control ' value="{{ Auth::user()->card_name }}"  size='4' type='hidden'>
                                            <input class='form-control card-num' value="{{ intval(Auth::user()->card_number) }}"   type='hidden'>
                                            <input  class='form-control card-cvc ' value="{{ Auth::user()->card_cvc }}" size='2'
                                            type='hidden'>
                                            <input autocomplete='off' value="{{ Auth::user()->card_expir_month }}" class='form-control card-expiry-month'
                                            placeholder='e.g 415' size='4' type='hidden'>
                                            <input autocomplete='off' value="{{ Auth::user()->card_expir_year }}" class='form-control card-expiry-year ' size='20'
                                            type='hidden'>
                                                
                                                <div class="col-md-12 col-sm-12 my-4 ">
                                                <div class="row mx-lg-5 mx-sm-5">
                                                    <div class="col-md-3 col-6 pt-1">
                                                        <button type="button" class="btn btn-primary btn-circle" amount="1">$1</button>
                                                    </div>
                                                    <div class="col-md-3 col-6 pt-1">
                                                        <button type="button" class="btn btn-primary btn-circle" amount="5">$5</button>
                                                    </div>
                                                    <div class="col-md-3 col-6 pt-1">
                                                        <button type="button" class="btn btn-primary btn-circle" amount="10">$10</button>
                                                    </div>
                                                    <div class="col-md-3 col-6 pt-1">
                                                        <button type="button" class="btn btn-primary btn-circle p-2" amount="100">$100</button>
                                                    </div>
                                                </div>
                                                </div>
                                            <div class='form-row row'>
                                                <div class='col-md-12 hide error form-group' @if(Session::has('fail'))) style="display: block;" @endif >
                                                    <div class='alert-danger alert'>  @if (Session::has('fail')) {{ Session::get('fail') }} @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 ">
                                                    <div class="input-group mt-3 d-flex align-items-center my-payment-method">
                                                        <input type="radio" class="" name="payment" 
                                                            aria-label="Amount (to the nearest dollar)">
                                                        <div class="input-group-prepend px-4">
                                                            <p class="mb-0">Apple payment method</p>
                                                            <i class="fa fa-apple" aria-hidden="true"></i>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-6 ">
                                                    <div class="input-group mt-3 d-flex align-items-center  my-payment-method">
                                                        <input type="radio" class="" name="payment" checked
                                                            aria-label="Amount (to the nearest dollar)">
                                                        <div class="input-group-prepend px-4">
                                                            <p class="mb-0">Credit Card payment method</p>
                                                            <i class="fa fa-credit-card" aria-hidden="true"></i>

                                                        </div>
                                                        
                                                    </div>
                                                </div>

                                            </div>

                                                        <div class=" d-flex justify-content-center my-5">
                                                            <button class=" col-lg-4 col-md-6 col-6 btn btn-danger btn-lg " type="submit">Add Credit </button>


                                            </div>

                                        </form>
                                        <div id="output" class="output">
                                            <div id="payment-request-button"></div>
                                            <p id="status" class="bg-warning"></p>
                                    
                                          </div>
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
    amount: document.getElementsByClassName('amt').value,
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

paymentRequest.on('paymentmethod', function(ev) {
  // Confirm the PaymentIntent without handling potential next actions (yet).
  stripe.confirmCardPayment(
    clientSecret,
    {payment_method: ev.paymentMethod.id},
    {handleActions: false}
  ).then(function(confirmResult) {
    if (confirmResult.error) {
      // Report to the browser that the payment failed, prompting it to
      // re-show the payment interface, or show an error message and close
      // the payment interface.
      ev.complete('fail');
    } else {
      // Report to the browser that the confirmation was successful, prompting
      // it to close the browser payment method collection interface.
      ev.complete('success');
      // Check if the PaymentIntent requires any actions and if so let Stripe.js
      // handle the flow. If using an API version older than "2019-02-11"
      // instead check for: `paymentIntent.status === "requires_source_action"`.
      if (confirmResult.paymentIntent.status === "requires_action") {
        // Let Stripe.js handle the rest of the payment flow.
        stripe.confirmCardPayment(clientSecret).then(function(result) {
          if (result.error) {
            // The payment failed -- ask your customer for a new payment method.
          } else {
            // The payment has succeeded.
          }
        });
      } else {
        // The payment has succeeded.
      }
    }
  });
});
elements.create('paymentRequestButton', {
  paymentRequest: paymentRequest,
  style: {
    paymentRequestButton: {
      type: 'default',
      // One of 'default', 'book', 'buy', or 'donate'
      // Defaults to 'default'

      theme: 'dark',
      // One of 'dark', 'light', or 'light-outline'
      // Defaults to 'dark'

      height: '64px'
      // Defaults to '40px'. The width is always '100%'.
    },
  },
});


// var stripe = Stripe('pk_test_51Kh9uAFBFsCMdULhjZvuXtEvn03Dc8oBpZS9VEZf3ZEym3JBm6F8owLE8nzc4o1p7tT2FSqyYjyrpPKgBmU3f4lC00yFeVGFJa', {
//   apiVersion: "2020-08-27",
//   stripeAccount: 'CONNECTED_STRIPE_ACCOUNT_ID',
// });
</script>
</body>
</html>


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
    <script>
        $(document).ready(function(){
            $('.btn-circle').click(function(){
                var amount =$(this).attr('amount');
                $('.amt').val(amount);
              
            });
        });
    </script>

