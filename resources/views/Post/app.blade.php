<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h3 style="text-align: center">Admin</h3>

    <div style="text-align: center">
    <a class="btn btn-default" href="{{route('posts.create')}}" style="width: 30ch;color: #ec971f">>> Create Movie <<</a>
    <a class="btn btn-default" href="{{route('room.create')}}" style="width: 30ch;color: #2e6da4">>> Create Room <<</a>
    </div>


    <div class="container" style="color:red;font-size: 130%">
        @yield('content')
    </div>
<div>
    @yield('footer')
</div>




</body>
</html>