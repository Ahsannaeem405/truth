<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
            width: 710px;
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
    </style>

</head>
<body>
<main>
    <div class="login-body">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="login-section p-4">
                        <div class="brand-logo mx-auto">
                            <h1  class="text-center">Logo</h1>
                        </div>
                        <h2 class="text-center">Register Now!</h2>
                        <form method="post" action="{{route('register')}}">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type="text" name="f_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
                                        @if($errors->has('f_name'))

                                            <span style="color: red">
                                        <strong>{{$errors->first('f_name')}}</strong>
                                    </span>
                                        @endif

                                    </div>


                                </div>



                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Last Name</label>
                                        <input type="text" name="l_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name">

                                        @if($errors->has('l_name'))

                                            <span style="color: red">
                                        <strong>{{$errors->first('l_name')}}</strong>
                                    </span>
                                        @endif

                                    </div>


                                </div>


                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">User Name</label>
                                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User Name">

                                        @if($errors->has('username'))

                                            <span style="color: red">
                                        <strong>{{$errors->first('username')}}</strong>
                                    </span>
                                        @endif

                                    </div>


                                </div>


                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                                        @if($errors->has('email'))

                                            <span style="color: red">
                                        <strong>{{$errors->first('email')}}</strong>
                                    </span>
                                        @endif
                                   </div>

                                </div>



                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">

                                        @if($errors->has('password'))

                                            <span style="color: red">
                                        <strong>{{$errors->first('password')}}</strong>
                                    </span>
                                        @endif
                                    </div>

                                </div>



                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-50 my-3">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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








