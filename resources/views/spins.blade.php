@include('layouts.header')
@extends('layouts.mobilesidebar')
@extends('layouts.footer')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/theme.css') }}">
    <title>Account page</title>
    <style>
        ul {
            list-style: none;
        }

        input[type=radio] {
            height: 20px;
            width: 20px;
            vertical-align: middle;
        }

        text {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 22px;
            pointer-events: none;
            color: white;
        }

        #chart {
            position: absolute;
            width: 500px;
            height: 500px;
            top: 25px;
            left: 50%;
            transform: translate(-50%, 0);
        }

        #question {
            position: absolute;
            width: 400px;
            height: 500px;
            top: 310px;
            left: 50%;
            transform: translate(-10%, 0);
        }

        #question h1 {
            font-size: 50px;
            font-weight: bold;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            position: absolute;
            padding: 0;
            margin: 0;
            top: 50%;
            -webkit-transform: translate(0, -50%);
            transform: translate(0, -50%);
        }

/* Absolute Center Spinner */
.loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: show;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
    background: radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0, .8));

  background: -webkit-radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0,.8));
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 150ms infinite linear;
  -moz-animation: spinner 150ms infinite linear;
  -ms-animation: spinner 150ms infinite linear;
  -o-animation: spinner 150ms infinite linear;
  animation: spinner 150ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}


    </style>
</head>

{{-- @dd($donateamount) --}}

<body>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home2') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Span</li>
        </ol>
    </nav>

    <div class="my-account py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Spinner</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-0 d-none d-lg-block">
                    <div class="user-sidebar">
                        <ul class="">
                            <a href="{{ url('user/spin') }}" class="text-white"
                                style="text-decoration: none; color:white">
                                <li class="active text-white">
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
                                <li>
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
                <div class="col-9">




                    <div style="display: none" id="loading" class="">Loading&#8230;</div>

                    <div class="our-balance mt-5 w-100 d-flex justify-content-between align-items-center">



                        <span class="" onclick={showmenu()}><i
                                class="icofont-navigation-menu d-block d-lg-none"></i></span>
                        {{-- @if (isset($char_name)) --}}
                        <div class="spinnn" style="display: none">



                            <form action="{{ url('user/add/percent') }}" method="POST">
                                @csrf

                                <label for="">
                                    <b>Charity Name :</b>
                                    <span class="char_name1"> </span>
                                    &nbsp; &nbsp;&nbsp;

                                    <b> Donation Amount
                                        : <span class="amount1"> </span> </b>

                                </label>
                                <input type="hidden" value="" name="percent" class="appspin char_name">
                                <input type="hidden" value="" class="char_id" name="charID">
                                <input type="hidden" value="" class="amount" name="amount">



                                <input type="submit" style="display: none" name="Sub" class="form_sub" id="">
                            </form>
                        </div>








                        {{-- @endif --}}


                        <p class="text-lg-right">Balance: <span class="mx-2">
                                @if (isset(Auth::user()->coin))
                                    ${{ Auth::user()->coin }}
                                @else
                                    $0
                                @endif
                            </span></p>
                    </div>
                    <div class="our-spins mt-3" style="height:650px">
                        <div class="row justify-content-center">

                            <div class="errorr">

                            </div>
                            <div class="col-12 spinnnD">

                                <div class="row text-center mb-2">
                                    <h3 class="panel-heading">Enter Risk Amount</h3>

                                </div>


                                @if (isset($user))
                                    <input type="hidden" value="{{ $user->id }}" name="charity" id="charity">
                                @endif
                                <br>
                                <label for=""> Enter Amount</label>
                                <input type="number" required name="amount" id="amount" placeholder="Enter Amount"
                                    class="form-control">

                                <div class="col-12" style="    margin-top: 17px;text-align: end;">
                                    <input style="width: 100px;" id="next" type="submit" class="btn btn-primary"
                                        value="Next">
                                </div>



                                {{-- </form> --}}

                            </div>

                            <div class="col-10 spinnn" style="display: none">
                                <div>
                                    <h3 class="text-center">Spinner</h3>
                                </div>
                                <div id="chart"></div>
                                <div id="question">
                                    <h1></h1>
                                </div>
                                <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script> --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script>
        var padding = {
                top: 20,
                right: 40,
                bottom: 0,
                left: 0
            },
            w = 500 - padding.left - padding.right,
            h = 500 - padding.top - padding.bottom,
            r = Math.min(w, h) / 2,
            rotation = 0,
            oldrotation = 0,
            picked = 100000,
            oldpick = [],
            color = d3.scale.category20(); //category20c()
        //randomNumbers = getRandomNumbers();
        //http://osric.com/bingo-card-generator/?title=HTML+and+CSS+BINGO!&words=padding%2Cfont-family%2Ccolor%2Cfont-weight%2Cfont-size%2Cbackground-color%2Cnesting%2Cbottom%2Csans-serif%2Cperiod%2Cpound+sign%2C%EF%B9%A4body%EF%B9%A5%2C%EF%B9%A4ul%EF%B9%A5%2C%EF%B9%A4h1%EF%B9%A5%2Cmargin%2C%3C++%3E%2C{+}%2C%EF%B9%A4p%EF%B9%A5%2C%EF%B9%A4!DOCTYPE+html%EF%B9%A5%2C%EF%B9%A4head%EF%B9%A5%2Ccolon%2C%EF%B9%A4style%EF%B9%A5%2C.html%2CHTML%2CCSS%2CJavaScript%2Cborder&freespace=true&freespaceValue=Web+Design+Master&freespaceRandom=false&width=5&height=5&number=35#results
        var data = [{
                "label": "10",
                "value": 1,
                "question": "10"
            }, // padding
            {
                "label": "20",
                "value": 2,
                "question": "20"
            }, //font-family
            {
                "label": "30",
                "value": 3,
                "question": "30"
            }, //color
            {
                "label": "40",
                "value": 4,
                "question": "40"
            }, //font-weight
            {
                "label": "50",
                "value": 5,
                "question": "50"
            }, //font-size
            {
                "label": "60",
                "value": 6,
                "question": "60"
            }, //background-color
            {
                "label": "70",
                "value": 7,
                "question": "70"
            }, //nesting
            {
                "label": "80",
                "value": 8,
                "question": "80"
            }, //bottom
            {
                "label": "90",
                "value": 9,
                "question": "90"
            }, //sans-serif
            {
                "label": "100",
                "value": 10,
                "question": "100"
            }
        ];
        var svg = d3.select('#chart')
            .append("svg")
            .data([data])
            .attr("width", w + padding.left + padding.right)
            .attr("height", h + padding.top + padding.bottom);
        var container = svg.append("g")
            .attr("class", "chartholder")
            .attr("transform", "translate(" + (w / 2 + padding.left) + "," + (h / 2 + padding.top) + ")");
        var vis = container
            .append("g");

        var pie = d3.layout.pie().sort(null).value(function(d) {
            return 1;
        });
        // declare an arc generator function
        var arc = d3.svg.arc().outerRadius(r);
        // select paths, use arc generator to draw
        var arcs = vis.selectAll("g.slice")
            .data(pie)
            .enter()
            .append("g")
            .attr("class", "slice");

        arcs.append("path")
            .attr("fill", function(d, i) {
                return color(i);
            })
            .attr("d", function(d) {
                return arc(d);
            });
        // add the text
        arcs.append("text").attr("transform", function(d) {
                d.innerRadius = 0;
                d.outerRadius = r;
                d.angle = (d.startAngle + d.endAngle) / 2;
                return "rotate(" + (d.angle * 180 / Math.PI - 90) + ")translate(" + (d.outerRadius - 10) + ")";
            })
            .attr("text-anchor", "end")
            .text(function(d, i) {
                return data[i].label;
            });
        container.on("click", spin);

        function spin(d) {

            container.on("click", null);
            //all slices have been seen, all done
            console.log("OldPick: " + oldpick.length, "Data length: " + data.length);
            if (oldpick.length == data.length) {
                console.log("done");
                container.on("click", null);
                return;
            }
            var ps = 360 / data.length,
                pieslice = Math.round(1440 / data.length),
                rng = Math.floor((Math.random() * 1440) + 360);

            rotation = (Math.round(rng / ps) * ps);

            picked = Math.round(data.length - (rotation % 360) / ps);
            picked = picked >= data.length ? (picked % data.length) : picked;
            if (oldpick.indexOf(picked) !== -1) {
                d3.select(this).call(spin);
                return;
            } else {
                oldpick.push(picked);
            }
            rotation += 90 - Math.round(ps / 2);
            vis.transition()
                .duration(3000)
                .attrTween("transform", rotTween)
                .each("end", function() {
                    //mark question as seen
                    d3.select(".slice:nth-child(" + (picked + 1) + ") path")
                    // .attr("fill", "#111");
                    //populate question
                    d3.select("#question h1")
                        .text(data[picked].question);
                    oldrotation = rotation;

                    /* Get the result value from object "data" */
                    console.log(data[picked].value)

                    $('.appspin').val(null);
                    $('.appspin').val(data[picked].value);



                    /* Comment the below line for restrict spin to sngle time */
                    container.on("click", spin);
                            $('#loading').css( 'display', 'block');

                        $('#loading').addClass( 'loading');


                    setTimeout(
                        function() {
                            $('.form_sub').click();

                        }, 1000);

                });
            // alert(data[picked].value);
        }

        //make arrow
        svg.append("g")
            .attr("transform", "translate(" + (w + padding.left + padding.right) + "," + ((h / 2) + padding.top) + ")")
            .append("path")
            .attr("d", "M-" + (r * .15) + ",0L0," + (r * .05) + "L0,-" + (r * .05) + "Z")
        // .style({"fill":"black"});
        //draw spin circle
        container.append("circle")
            .attr("cx", 0)
            .attr("cy", 0)
            .attr("r", 60)
            .style({
                "fill": "white",
                "cursor": "pointer"
            });
        //spin text
        container.append("text")
            .attr("x", 0)
            .attr("y", 15)
            .attr("text-anchor", "middle")
            .text("SPIN")
            .style({
                "font-weight": "bold",
                "font-size": "30px"
            });

        function rotTween(to) {
            var i = d3.interpolate(oldrotation % 360, rotation);
            return function(t) {
                return "rotate(" + i(t) + ")";
            };
        }

        function getRandomNumbers() {
            var array = new Uint16Array(1000);
            var scale = d3.scale.linear().range([360, 1440]).domain([0, 100000]);
            if (window.hasOwnProperty("crypto") && typeof window.crypto.getRandomValues === "function") {
                window.crypto.getRandomValues(array);
                console.log("works");
            } else {
                //no support for crypto, get crappy random numbers
                for (var i = 0; i < 1000; i++) {
                    array[i] = Math.floor(Math.random() * 100000) + 1;
                }
            }
            return array;
        }
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
        $(document).ready(function() {

            $('#next').click(function() {

                var amount = $('#amount').val();
                var charity = $('#charity').val();



                $.ajax({
                    type: "GET",
                    url: "{{url('/formSub')}}",
                    data: {
                        'charity': charity,
                        'amount': amount,
                    },


                    success: function(res) {
                        if (res.error == 'Your amount is less then your donation amount') {

                            $('.errorr').empty().append(" <div class='alert alert-danger'>" +
                                res.error + " </div>");

                        } else {


                            $('.errorr').empty();
                            $('.amount').empty().val(res.donateamount);
                            $('.char_id').empty().val(res.username);
                            $('.char_name1').empty().val(res.char_name);
                            $('.amount1').text(res.donateamount);
                            $('.char_name1').text(res.char_name);



                            $('.spinnn').css('display', 'block');
                            $('.spinnnD').css('display', 'none');
                        }


                    }
                });



            });

        });
    </script>
    <script>
        jQuery(function($){
  $(document).ajaxSend(function() {
    $("#overlay").fadeIn(300);　
  });

  $('#button1').click(function(){
    $.ajax({
      type: 'GET',
      success: function(data){
        console.log(data);
      }
    }).done(function() {
      setTimeout(function(){
        $("#overlay").fadeOut(300);
      },500);
    });
  });
});
    </script>
</body>

</html>
