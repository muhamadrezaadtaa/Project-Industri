<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Data Siswa</h1>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Nama Lengkap</td>
            <td>Jenis Kelamin</td>
            <td>Tanggal Lahir</td>
            <td>Kelas</td>
        </tr>
        @foreach ($siswa as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->nama_lengkap}}</td>
            <td>{{$data->jenis_kelamin}}</td>
            <td>{{$data->tanggal_lahir}}</td>
            <td>{{$data->kelas}}</td>
        </tr>
        @endforeach
    </table>
    </center>
</body>
</html>