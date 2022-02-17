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
    </style>

@endsection


@section('heading')
    User List
@endsection

@section('title')
    User List
@endsection

@section('content')



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
                                                <th>Created Date</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $count=1; @endphp
                                            @foreach($users as $user)

                                                <tr>
                                                    <td>{{$count++}}</td>
                                                    <td>{{$user->f_name.' '. $user->l_name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->username}}</td>
                                                    <td>{{$user->created_at}}</td>
                                                    <td>

                                                        <a onclick="return confirm('Are you sure you want to delete this item?');"
                                                           href="{{url('admin/user/delete/'.$user->id.'')}}"> <i
                                                                style="color: red" class="fa fa-trash"></i></a>
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

