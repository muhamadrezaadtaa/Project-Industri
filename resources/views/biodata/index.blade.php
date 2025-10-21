@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-17">
            <div class="card">
                <div class="card-header bg-dark text-white"> Data Biodata</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                <a href="{{ route('biodata.create') }}" class="btn btn-primary d-flex flex-column">Add</a>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Email</th>
                    <th scope="col">Cover</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($biodatas as $dt)
                    <tr>
                    <td>{{$no++}}</td>
                    <td>{{$dt->nama_lengkap}}</td>
                    <td>{{$dt->jenis_kelamin}}</td>
                    <td>{{$dt->tanggal_lahir}}</td>
                    <td>{{$dt->tempat_lahir}}</td>
                    <td>{{$dt->agama}}</td>
                    <td>{{$dt->alamat}}</td>
                    <td>{{$dt->telepon}}</td>
                    <td>{{$dt->email}}</td>
                    <td><img src="{{ asset('images/' . $dt->cover) }}" width="100"></td>

                    <td>
                        <a href="{{ route('biodata.edit', $dt->id)}}" class="btn btn-success  d-flex flex-column">Edit</a>
                        <a href="{{ route('biodata.show', $dt->id)}}" class="btn btn-warning d-flex flex-column">Show</a>
                        <form action="{{ route('biodata.show', $dt->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Delete</button>
                        </form>
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
@endsection
