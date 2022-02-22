
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
        .custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
    .custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
</style>
</head>
<body>


<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="{{url('add/charity')}}" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a>
        <tr>
        <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>phone</th>
            <th>Address</th>
            <th>Balance</th>

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
                <td>

                <a  href="{{url('admin/charity/edit/'.$charity->id.'')}}"> <i style="color: blue" class="fa fa-edit"></i></a>
                <a  href="{{url('admin/charity/send/'.$charity->id.'')}}"> <i style="color: green" class="fa fa-money"></i></a>

                </td>
            </tr>

        @endforeach
            </tbody>
    </table>
    </div>
</div>

</body>
</html>