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
    Charity List
@endsection

@section('title')
    Charity List
@endsection

@section('content')
    <a href="{{url('admin/add/charity')}}">
        <button class="btn btn-outline-primary mb-2"><i class="fa fa-plus"></i> Add Charity</button>
    </a>

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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>phone</th>
                                                <th>Address</th>
                                                <th>Balance</th>
                                                <th>Created Date</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $count=1; @endphp
                                            @foreach($charity as $charity)

                                                <tr>
                                                    <td>{{$count++}}</td>
                                                    <td>{{$charity->f_name.' '. $charity->l_name}}</td>
                                                    <td>{{$charity->email}}</td>
                                                    <td>{{$charity->username}}</td>
                                                    <td>{{$charity->phone}}</td>
                                                    <td>{{$charity->address}}</td>
                                                    <td>{{floatval($charity->coin)}}</td>
                                                    <td>{{$charity->created_at}}</td>
                                                    <td>

                                                        <a class="p-1" onclick="return confirm('Are you sure you want to delete this item?');"
                                                           href="{{url('admin/charity/delete/'.$charity->id.'')}}"> <i
                                                                style="color: red" class="fa fa-trash"></i></a>


                                                        <a class="p-1" href="{{url('admin/charity/edit/'.$charity->id.'')}}"> <i style="color: blue" class="fa fa-edit"></i></a>
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


@endsection

