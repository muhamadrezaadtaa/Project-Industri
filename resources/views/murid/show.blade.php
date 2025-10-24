@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Show Data Murid</div>
                <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    
                    <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama lengkap" value="{{$murid->nama_lengkap}}">
                    </div>
                    <div class="mb-3">
                        <label>Jenis kelamin</label><br>
                        <input type="text" class="form-control" name="jenis_kelamin" disabled value="{{$murid->jenis_kelamin}}">
                    </div>
                    <div class="mb-3">
                        <label>Tanggal lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{$murid->tanggal_lahir}}">
                    </div>
                    <div class="mb-3">
                        <label>Tempat lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" value="{{$murid->tempat_lahir}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Agama</label>
                        <input type="text" name="agama" class="form-control" disabled value="{{$murid->agama}}">      
                    </div>
                    <div class="mb-3">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat" >{{$murid->alamat}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{$murid->email}}">
                    </div>
                    <div class="mb-3">
                        <label>Nama Kelas</label>
                        <input type="text" class="form-control" name="id_kelas" value="{{ $murid->kelas->name_kelas}}" disabled>
                    </div>
                    <a href="{{ route('murid.index')}}" class="btn btn-primary">Back</a>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
