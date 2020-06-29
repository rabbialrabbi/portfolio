<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="msg_list">
        <div class="row msg_header">
            <div class="col-2 msg_home">
                <a href="/">Home</a>
            </div>
            <div class="col-10 msg-content">
                <h3>Message List</h3>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">S/N</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1 ?>
            @foreach($msg as $m)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$m->name}}</td>
                    <td>{{$m->email}}</td>
                    <td>{{$m->message}}</td>
                </tr>
                <?php $i++ ?>
            @endforeach

            </tbody>
        </table>

    </div>
</div>

</body>
</html>
