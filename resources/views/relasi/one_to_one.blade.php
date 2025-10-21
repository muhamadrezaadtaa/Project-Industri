@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4">Relasi one to one (Mahasiswa - Wali)</h3>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Nama Wali</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswas as $data)
            <tr>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->nim }}</td>
                <td>{{ $data->wali->nama ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection