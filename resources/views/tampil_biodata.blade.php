<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Biodata Siswa</h1>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Email</th>
        </tr>
        @foreach ($biodata as $a)
        <tr>
            <td>{{$a->id}}</td>
            <td>{{$a->nama_lengkap}}</td>
            <td>{{$a->jenis_kelamin}}</td>
            <td>{{$a->tanggal_lahir}}</td>
            <td>{{$a->tempat_lahir}}</td>
            <td>{{$a->agama}}</td>
            <td>{{$a->alamat}}</td>
            <td>{{$a->telepon}}</td>
            <td>{{$a->email}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>