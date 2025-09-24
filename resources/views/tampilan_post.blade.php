<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Data Post</h1>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Title</td>
            <td>Content</td>
        </tr>
        @foreach ($post as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->title}}</td>
            <td>{{$d->content}}</td>
        </tr>
        @endforeach
    </table>
    </center>
</body>
</html>