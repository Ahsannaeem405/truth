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
    Charity History
@endsection

@section('title')
Charity History
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
                                                    <th>Amount</th>
                                                    <th>Percent Age</th>
                                                    <th>Charity Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $count=1; @endphp
                                                @foreach ($history as $history)
                                               <tr>
                                                   <td>
                                                       {{ $count++}}
                                                   </td>
                                                   <td>
                                                        {{$history->User->f_name}}
                                                   </td>
                                                   <td>
                                                    ${{$history->amount}}
                                               </td>
                                               <td>
                                                {{$history->percent}}%
                                           </td>

                                       <td>
                                        {{$history->created_at}}
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
