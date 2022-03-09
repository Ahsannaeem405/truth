<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Document</title>
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
            width: 500px;
            height: auto;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.5);
            border-radius: 8px;
            background: rgb(0,0,0);
            background: linear-gradient(4deg, rgba(0,0,0,0.8995973389355743) 0%, rgba(0,133,155,1) 100%);

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
  margin: 0.2em;
  padding: 0 15px 0 46px;
  border: none;
  text-align: left;
  line-height: 34px;
  white-space: nowrap;
  border-radius: 0.2em;
  font-size: 16px;
  color: #FFF;
}
.loginBtn:before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  top: 0;
  left: 0;
  width: 34px;
  height: 100%;
}
.loginBtn:focus {
  outline: none;
}
.loginBtn:active {
  box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
}


/* Facebook */
.loginBtn--facebook {
  background-color: #4C69BA;
  background-image: linear-gradient(#4C69BA, #3B55A0);
  cursor: pointer;

  /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
  text-shadow: 0 -1px 0 #354C8C;
}
.loginBtn--facebook:before {
  border-right: #364e92 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
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
<body>
<main>
    <div class="login-body">
        <div class="login-section p-4">
            <div class="brand-logo mx-auto py-4">
                <h1  class="text-center">Logo</h1>
                <!-- <img src="https://image.scoopwhoop.com/w360/s3.scoopwhoop.com/anj/logos/300977194.jpg.webp" alt="logo" class="img-fluid"/> -->
            </div>

            <form method="post" action="{{route('login')}}">
                @csrf
                <div class="form-group my-2">
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
                </div>
               
            </form>
            <div class="content my-2">
                <p class="or">or</p>
              </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <a href="{{ url('auth/google') }}">  <button class="loginBtn loginBtn--facebook w-100">
                Login with Facebook
              </button></a>
            </div>
            <div class="col-md-6">
                <a href="{{ url('auth/facebook') }}">  <button class="loginBtn loginBtn--google w-100">
                Login with Google
              </button></a>
            </div>
            </div>
        

        </div>
    </div>
</main>

<!-- bootstrap JavaScrpt-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>








