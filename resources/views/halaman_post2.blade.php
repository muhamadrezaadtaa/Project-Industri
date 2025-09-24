<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Data Post</h2>
         <table border="1">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Content</th>
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