@extends('layouts.main')

@section('users')
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

        .iconss{
            font-size: 16px;
            color:#7367F0;
            margin-left: 1px;
        }
    </style>
@endsection


@section('heading')
    User List
@endsection

@section('title')
    User List
@endsection

@section('content')

<?php
$role = Auth::user()->role;

?>
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
                                                    <th>Balance</th>
                                                    <th>Created Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $count=1; @endphp
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td>{{ $count++ }}</td>
                                                        <td>{{ $user->f_name . ' ' . $user->l_name }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->username }}</td>
                                                        <td>{{ $user->coin }}</td>
                                                        <td>{{ $user->created_at }}</td>
                                                        <td>
                                                            <ul>
                                                                <a href="" style="text-decoration: none; ">
                                                                    <li class="nav-item dropdown">
                                                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Action</a>
                                                                        <div class="dropdown-menu">
                                                                        <a class="dropdown-item"  data-toggle="modal" data-target="#Modal{{$user->id }}"> <i style="color: blue" class="fa fa-edit"></i> Edit</a>
                                                                        <a class="dropdown-item"  onclick="return confirm('Are you sure you want to delete this item?');"
                                                                        href="{{ url('admin/user/delete/' . $user->id . '') }}"> <i style="color: red" class="fa fa-trash"></i> Delete</a>
                                                                        <a class="dropdown-item" href="{{url("$role/view/detail/$user->id")}}" >   <i style="color: green" class="fa fa-eye iconss"></i> View</a>
             
                                                                        </div>
                                                                    </li>
                                                            </ul>
                                                            {{-- <a onclick="return confirm('Are you sure you want to delete this item?');"
                                                                href="{{ url('admin/user/delete/' . $user->id . '') }}"
                                                                class="iconss"> <i style="color: red"
                                                                    class="fa fa-trash"></i></a>

                                                            <i data-toggle="modal" data-target="#Modal{{$user->id }}"
                                                                class="fa fa-plus iconss"
                                                              ></i>
                                                                <a href="{{url("$role/view/detail/$user->id")}}">

                                                                <i class="fa fa-eye iconss" ></i>
                                                            </a> --}}

                                                        </td>
                                                    </tr>

                                                    <div class="modal fade" id="Modal{{$user->id }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Add
                                                                        Credit</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="{{url("$role/add/credit")}}" method="POST">
                                                                    @csrf
                                                                <div class="modal-body">
                                                                    <label for=""
                                                                        style="    font-size: 14px; margin-bottom:6px">Enter
                                                                        Amount</label>
                                                                        <input type="hidden" name="id" value="{{$user->id}}">
                                                                    <input type="number" required class="form-control " name="amount" id="">

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary"> Add</button>

                                                                    </button>

                                                                </div>

                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
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
