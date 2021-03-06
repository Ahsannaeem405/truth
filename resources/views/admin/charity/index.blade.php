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

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
        .loader{
            position: absolute;
    width: 100%;
    height: 100%;
    background: #2196F3;
    z-index: 1;
        }
        .loaderp{
            position: absolute;
            width: 100%;
    height: 100%;
        }

        .loaderr{
            position: absolute;
    top: 50%;
    left: 50%;
        }
    </style>
@endsection


@section('heading')
    Charity List
@endsection

@section('title')
    Charity List
@endsection

@section('content')


    <div class="col-12">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <a href="{{ url('admin/add/charity') }}">
                    <button class="btn btn-outline-primary mb-2"><i class="fa fa-plus"></i> Add Charity</button>
                </a>
            </div>
            <div class="col-md-6">
                @php
                    $PriorityStatus=App\Models\PriorityStatus::first();
                @endphp
                <div class=" d-flex justify-content-end align-items-center">
                    <small class="ml-5">Random</small>
                    <label class="switch" style="    margin-left: 31px;">

                        <input name="round" id="roundP" type="checkbox"  @if($PriorityStatus->status == 'on') checked @endif>
                        <span class="slider round"></span>
                    </label>
                    <small class="ml-2">Priority</small>

                </div>
            </div>
        </div>

        

    </div>


    <main>
        <div class="content-body">
            <section id="column-selectors">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">

                            </div>

                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table class="table table-striped dataex-html5-selectors">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Email</th>
                                                    <th>phone</th>
                                                    <th>Address</th>
                                                    <th>Balance</th>
                                                    <th>Created Date</th>
                                                    <th>Status</th>
                                                    <th>
                                                        PayNow
                                                    </th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $count=1;
                                                
                                                @endphp
                                        
                                                @foreach ($charity as $char)
                                               
                                                    <tr>
                                                        <td>{{ $count++ }}</td>
                                                        <td>
                                                            {{ $char->username }}<br>
                                                            {{ $char->email }}</td>
                                                        <td>{{ $char->phone }}</td>
                                                        <td>{{ $char->address }}</td>
                                                        <td>{{ floatval($char->coin) }}</td>
                                                        <td>{{ $char->created_at }}</td>
                                                        <td>
                                                            @if ($char->status == null)
                                                               <span class="text-danger"> {{ 'Random' }}</span>
                                                            @else
                                                            <span class="text-success"> {{ $char->status }}</span>
                                                            @endif
                                                        </td>
                                                        <td>

                                                            <a
                                                            href="{{ url('admin/charity/send/' . $char->id . '') }}">
                                                            <button class="btn btn-primary" value="">
                                                                PayNow

                                                            </button>
                                                            {{-- <i style="color: green" class="fa fa-money"></i> --}}

                                                        </a>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                <a href="" style="text-decoration: none; ">
                                                                    <li class="nav-item dropdown">
                                                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Action</a>
                                                                        <div class="dropdown-menu">
                                                                        <a class="dropdown-item"  href="{{ url('admin/charity/edit/' . $char->id . '') }}"> <i style="color: blue" class="fa fa-edit"></i> Edit</a>
                                                                        <a class="dropdown-item"  onclick="return confirm('Are you sure you want to delete this item?');"
                                                                        href="{{ url('admin/charity/delete/' . $char->id . '') }}"> <i style="color: red" class="fa fa-trash"></i> Delete</a>
                                                                        @if ($char->status == null)
                                                                        <a class="dropdown-item"  href="{{ url("admin/status/$char->id") }}">   <i style="color: green" class="fas fa-check"></i> Priorities</a>
                                                                            @endif
                                                                        </div>
                                                                    </li>
                                                            </ul>
                                                            </a>
{{--                                                          
                                                            <a class=""
                                                                onclick="return confirm('Are you sure you want to delete this item?');"
                                                                href="{{ url('admin/charity/delete/' . $charity->id . '') }}">
                                                                <i style="color: red" class="fa fa-trash"></i></a>


                                                            <a
                                                                href="{{ url('admin/charity/edit/' . $charity->id . '') }}">
                                                                <i style="color: blue" class="fa fa-edit"></i></a>



                                                            <a href="{{ url("admin/status/$charity->id") }}">
                                                                <i class="fas fa-check"></i>
                                                            </a> --}}
                                                        </td>

                                                    </tr>
                                                @endforeach


                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            var status = 'on';

            // alert(status);
            $.ajax({
                type: "GET",
                url: "{{ url('change_stauts') }}?id=" + status,
                success: function(res) {



                }
            });

            $("#roundP").change(function() {
                if ($(this).prop("checked") == true) {
                    var status = 'on';

                } else {
                    var status = 'off';
                }

                // alert(status);
                $.ajax({
                    type: "GET",
                    url: "{{ url('change_stauts') }}?id=" + status,
                    success: function(res) {


                    }
                });





            });
        });
    </script>
@endsection
