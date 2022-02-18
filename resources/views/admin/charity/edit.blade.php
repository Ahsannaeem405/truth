@extends('layouts.main')


@section('charity')
    active
@endsection
@section('css')

    <style>

        ul {
            list-style: none;
        }

        input[type=radio] {
            height: 20px;
            width: 20px;
            vertical-align: middle;
        }

    </style>



@endsection


@section('heading')
    Edit Charity
@endsection

@section('title')
    Edit Charity
@endsection

@section('content')

    <section id="validation">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{url("admin/charity/update/$charity->id")}}" method="post" >

                                @csrf


                                <div class="row">




                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastName3">
                                               Charity Name
                                            </label>
                                            <input value="{{$charity->username}}" type="text" class="form-control " required id="lastName3" name="username">
                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress5">
                                                Email
                                            </label>
                                            <input value="{{$charity->email}}" type="email" class="form-control "  required id="emailAddress5" name="email">
                                            @if($errors->has('email'))
                                                <span style="color: red">
                                        <strong>{{$errors->first('email')}}</strong>
                                    </span>
                                            @endif

                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress67">
                                                phone
                                            </label>
                                            <input type="number" value="{{$charity->phone}}" class="form-control " required id="emailAddress67" name="phone">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress67">
                                                address
                                            </label>
                                            <input value="{{$charity->address}}" type="text" class="form-control " required id="emailAddress67" name="address">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress67">
                                                Stripe Public Key
                                            </label>
                                            <input type="text" class="form-control " value="{{$charity->stripePublic}}" required
                                                   id="emailAddress67" name="stripePublic">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress67">
                                                Stripe Secret Key
                                            </label>
                                            <input type="text" class="form-control " value="{{$charity->stripeSecret}}" required
                                                   id="emailAddress67" name="stripeSecret">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="emailAddress67">
                                                About
                                            </label>
                                            <textarea   class="form-control " required id="emailAddress67" name="about">{{$charity->about}}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 ">

                                        <button style="float: right" class="btn btn-primary" type="submit">update</button>

                                    </div>

                                </div>




                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

