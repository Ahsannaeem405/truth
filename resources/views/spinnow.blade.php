@include('layouts.header')
@extends('layouts.mobilesidebar')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- font-awesome -->
    
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
            width: 500px;
            height: 500px;
            top: -25px;
            left: 45%;
            transform: translate(-50%, 0);
            position: relative;
        }
        #chart svg{
            position: absolute;
            left: 82px;
            top: 66px;
        }
        .spin-img{
            position: absolute;
            width:400px;
            height:auto;
            z-index: -10;
            left: 50%;
            transform: translateX(-42%);
            top: 75px;
        }
        @media screen and (max-width:700px){
            .spin-img{
            width:280px;
            height:auto;
        }
        #chart svg{
            position: absolute;
            left: 3px;
            top: 58px;
        }
        }
        /* #chart:after{
            position: absolute;
            width: 480px;
            height: 480px;
            content: "";
            background-color: rgba(0,0,0,0.1);
            top: 20px;
            left: -10px;
            z-index: 100;
            border-radius: 250px;
            border: 15px solid green;
        } */
        #question {
            position: absolute;
            width: 90px;
            height: 90px;
            top: 61px;
            left: 50%;
            transform: translate(-30%, 0);
        }
        @media screen and (max-width:700px){
            #chart {
            width: 280px;
            height: 280px;
        }

        #question {
            top: 35px;
            left: 53%;
        }

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
    margin-top: 110px;
    box-shadow: 0px 0px 15px rgb(0 0 0 / 50%);
    border-radius: 8px;
    height: 275px !important;
}
@media screen and (max-width:768px) {
    .user-sidebar {
    height: auto;
}
}

    </style>
        <style>
        *{
            padding:0px;
            margin:0px;
        }
        ul {
            list-style: none;
        }

        input[type=radio] {
            height: 20px;
            width: 20px;
            vertical-align: middle;
        }
        .login-body{
            width:100%;
            height:100vh;
            background-color: #EFEFEF;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            background-image: linear-gradient( rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url("https://images.pexels.com/photos/7079776/pexels-photo-7079776.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
        }
        .login-section{
            height: auto;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.5);
            border-radius: 8px;
            background: rgb(0,0,0);
            background: linear-gradient(4deg, rgba(0,0,0,0.8995973389355743) 0%, rgba(0,133,155,1) 100%);
        }
        .login-section label{
            color: white;
        }
        .login-section .or{
            color: #fff;
        }
        .modal-content{
            background-color: transparent;
            border: none;
        }
        .modal-header{
            border-bottom: none;
        }
        .modal-header .close{
            color: #fff;
        }
        .modal-header button{
            box-shadow: none;
        }
        .brand-logo{
            /* width: 70%;
            height: 250px; */
        }
        button{
            box-shadow: 0px 0px 8px rgba(0,0,0,0.5);
        }
        /* .brand-logo img{
            width: 100%;
            height: 100%;
        } */
        .brand-logo h1{
            font-size: 62px
        }
        .googleBtn{
            background: #CD201F;
            border: none;
            outline: none;
            border-radius: 5px;
            color:#fff;
        }
        .facebookBtn{
            background: #1877F2;
            border: none;
            outline: none;
            border-radius: 5px;
            color:#fff;
        }

        
/* Shared */
.loginBtn {
  box-sizing: border-box;
  position: relative;
  /* width: 13em;  - apply for fixed size */
  padding:6px;
  margin: 0.2em;
  border: none;
  white-space: nowrap;
  border-radius: 0.3em;
  font-size: 16px;
  color: #FFF;
}
.loginBtn i{
    font-size:24px;
}
/* .loginBtn:before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  top: 0;
  left: 0;
  width: 34px;
  height: 100%;
  border-radius: 0.3em 0px 0px 0.3em;
} */
.loginBtn:focus {
  outline: none;
}
.loginBtn:active {
  box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
}


/* Facebook */
.loginBtn--facebook {
  background-color: #3B5999;
  cursor: pointer;

  /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
  text-shadow: 0 -1px 0 #354C8C;
}
.loginBtn--facebook:before {
  border-right: #364e92 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 5px 11px no-repeat, linear-gradient(to bottom, rgba(41, 62, 107, 1) 0%,rgba(41, 62, 107, 1) 100%);
}
.loginBtn--facebook:hover,
.loginBtn--facebook:focus {
  background-color: #5B7BD5;
  background-image: linear-gradient(#5B7BD5, #4864B1);
}


/* Google */
.loginBtn--google {
  /*font-family: "Roboto", Roboto, arial, sans-serif;*/
  background: #b13525;
  cursor: pointer;
}
.loginBtn--google:before {
  border-right: #BB3F30 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
}
.loginBtn--google:hover,
.loginBtn--google:focus {
  background: #E74B37;
}

.content {
  margin: 10px auto;
  width: 200px;
}

.or {
  text-align: center;
  font-size: 20px;
  background-image:linear-gradient(#fff,#fff),linear-gradient(#fff,#fff);
  background-size:40% 1px;
  background-position:center left,center right;
  background-repeat:no-repeat;
}
    </style>
</head>

{{-- @dd($donateamount) --}}

<body>

    <div class="my-account py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center spin-head">Spin <span>Now</span> </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div style="display: none" id="loading" class="">Loading&#8230;</div>
                    <div class="our-spins">
                        <div class="row justify-content-center">
                            <div class="errorr">
                            </div>
                            <div class="col-10 spinnn" style="">
                                <a href=""  data-toggle="modal" data-target="#exampleModal">
                                    <div id="chart">
                                        <img src="{{ asset('/image/spinner-card.png') }}" class="spin-img"/>
                                    </div>
                                </a>
                                {{-- <div id="question">
                                </div> --}}
                                <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="">
        <div class="login-section p-4">
            <div class="brand-logo mx-auto py-4">
                <h1  class="text-center text-white">Login</h1>
                <!-- <img src="https://image.scoopwhoop.com/w360/s3.scoopwhoop.com/anj/logos/300977194.jpg.webp" alt="logo" class="img-fluid"/> -->
            </div>

            <form method="post" action="{{route('login')}}">
                @csrf
                <!-- <div class="form-group my-2">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                    @if($errors->has('email'))

                        <span style="color: red">
                            <strong>{{$errors->first('email')}}</strong>
                        </span>
                    @endif

                </div>
                <div class="form-group my-2">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

               
                <div class="text-center">
                    <button type="submit" class="btn btn-primary w-100 py-2 my-3">Login</button>
                </div> -->
               
            <!-- </form>
            <div class="content my-2">
                <p class="or">or</p>
              </div> -->
            <div class="row mt-3">
                <div class="col-md-6">
                    <a href="{{ url('auth/facebook') }}">  <button class="loginBtn loginBtn--facebook w-100">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
              </button></a>
            </div>
            <div class="col-md-6">
                <a href="{{ url('auth/google') }}">  <button class="loginBtn loginBtn--google w-100">
                <i class="fa fa-google" aria-hidden="true"></i>
              </button></a>
            </div>
            </div>
        

        </div>
    </div>
      </div>
      
    </div>
  </div>
</div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script> --}}
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>  --}}

    <script>

        if(screen.width > 700){
            var padding = {
                top: 20,
                right: 40,
                bottom: 0,
                left: 0
            },
            w = 400 - padding.left - padding.right,
            h = 400 - padding.top - padding.bottom,
            r = Math.min(w, h) / 2,
            rotation = 0,
            oldrotation = 0,
            picked = 100000,
            oldpick = [],
            color = d3.scale.category20();
        }
        else {
            var padding = {
                top: 20,
                right: 40,
                bottom: 0,
                left: 0
            },
            w = 295 - padding.left - padding.right,
            h = 295 - padding.top - padding.bottom,
            r = Math.min(w, h) / 2,
            rotation = 0,
            oldrotation = 0,
            picked = 100000,
            oldpick = [],
            color = d3.scale.category20();
        }
         //category20c()
        //randomNumbers = getRandomNumbers();
        //http://osric.com/bingo-card-generator/?title=HTML+and+CSS+BINGO!&words=padding%2Cfont-family%2Ccolor%2Cfont-weight%2Cfont-size%2Cbackground-color%2Cnesting%2Cbottom%2Csans-serif%2Cperiod%2Cpound+sign%2C%EF%B9%A4body%EF%B9%A5%2C%EF%B9%A4ul%EF%B9%A5%2C%EF%B9%A4h1%EF%B9%A5%2Cmargin%2C%3C++%3E%2C{+}%2C%EF%B9%A4p%EF%B9%A5%2C%EF%B9%A4!DOCTYPE+html%EF%B9%A5%2C%EF%B9%A4head%EF%B9%A5%2Ccolon%2C%EF%B9%A4style%EF%B9%A5%2C.html%2CHTML%2CCSS%2CJavaScript%2Cborder&freespace=true&freespaceValue=Web+Design+Master&freespaceRandom=false&width=5&height=5&number=35#results
        var data = [{
                "label": "10%",
                "value": 1,
                "question": "10"
            }, // padding
            {
                "label": "20%",
                "value": 2,
                "question": "20"
            }, //font-family
            {
                "label": "30%",
                "value": 3,
                "question": "30"
            }, //color
            {
                "label": "40%",
                "value": 4,
                "question": "40"
            }, //font-weight
            {
                "label": "50%",
                "value": 5,
                "question": "50"
            }, //font-size
            {
                "label": "60%",
                "value": 6,
                "question": "60"
            }, //background-color
            {
                "label": "70%",
                "value": 7,
                "question": "70"
            }, //nesting
            {
                "label": "80%",
                "value": 8,
                "question": "80"
            }, //bottom
            {
                "label": "90%",
                "value": 9,
                "question": "90"
            }, //sans-serif
            {
                "label": "100%",
                "value": 10,
                "question": "100"
            }
        ];
        var svg = d3.select('#chart')
            .append("svg")
            .data([data])
            .attr("width", w + padding.left + padding.right)
            .attr("height", h + padding.top + padding.bottom);
            if (screen.width > 700){
                var container = svg.append("g")
            .attr("class", "chartholder")
            .attr("transform", "translate(" + (w / 1.8 + padding.left) + "," + (h / 2 + padding.top) + ")");

            }
            else {
                var container = svg.append("g")
            .attr("class", "chartholder")
            .attr("transform", "translate(" + (w / 1.6 + padding.left) + "," + (h / 2 + padding.top) + ")");

            }
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
            .attr("r", 40)
            .style({
                "fill": "white",
                "cursor": "pointer"
            });
        //spin text
        container.append("text")
            .attr("x", 0)
            .attr("y", 10)
            .attr("text-anchor", "middle")
            .text("SPIN")
            .style({
                "font-weight": "bold",
                "font-size": "22px"
            });

        // function rotTween(to) {
        //     var i = d3.interpolate(oldrotation % 360, rotation);
        //     return function(t) {
        //         return "rotate(" + i(t) + ")";
        //     };
        // }

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
                if( amount != ''){




                $.ajax({
                    type: "GET",
                    url: "{{url('/formSub')}}",
                    data: {
                        'charity': charity,
                        'amount': amount,
                    },


                    success: function(res) {

                       // alert(res.username);
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
            }
            else
            {
                alert('Please Enter Amount');
            }


            });

        });
    </script>
    <script>
        jQuery(function($){
  $(document).ajaxSend(function() {
    $("#overlay").fadeIn(300);???
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
