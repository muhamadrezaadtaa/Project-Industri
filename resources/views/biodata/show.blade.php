@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Show Data Biodata</div>
                <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    
                    <div class="mb-3">
                        <label>Nama lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" value="{{ $biodatas->nama_lengkap}}" disabled>
                    </div>
                    <div class="mb-3">
                        <label>Jenis kelamin</label>
                        <input type="text" class="form-control" name="jenis_kelamin" value="{{ $biodatas->jenis_kelamin}}" disabled>
                        <input type="radio" name="jenis_kelamin" value=Laki-Laki>Laki-Laki<br><input type="radio" name=jenis_kelamin value=Perempuan>Perempuan
                    </div>
                    <div class="mb-3">
                        <label>Tanggal lahir</label>
                        <input type="text" class="form-control" name="tanggal_lahir" value="{{ $biodatas->tanggal_lahir}}" disabled>
                    </div>
                    <div class="mb-3">
                        <label>Tempat lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" value="{{ $biodatas->tempat_lahir}}" disabled>
                    </div>
                    <div class="mb-3">
                        <label>Agama</label>
                        <input type="text" class="form-control" name="agama" value="{{ $biodatas->agama}}" disabled>
                        <input type="radio" name="agama" value="Islam">Islam<br>
                        <input type="radio" name="agama" value="Kristen">Kristen<br>
                        <input type="radio" name="agama" value="Budha">Budha<br>
                        <input type="radio" name="agama" value="Hindu">Hindu<br>
                    </div>
                    <div class="mb-3">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat" value="{{ $biodatas->alamat}}" disabled></textarea>
                        <!-- <input type="text" class="form-control" name="alamat" value="{{ $biodatas->alamat}}" disabled> -->
                    </div>
                    <div class="mb-3">
                        <label>Telepon</label>
                        <input type="string" class="form-control" name="telepon" value="{{ $biodatas->telepon}}" disabled>
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="{{ $biodatas->email}}" disabled>
                    </div>
                    <div class="mb-3">
                        <img src="{{ asset('images/' . $biodatas->cover) }}" width="100">
                    </div>
                    <a href="{{ route('biodata.index')}}" class="btn btn-primary">Back</a>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
