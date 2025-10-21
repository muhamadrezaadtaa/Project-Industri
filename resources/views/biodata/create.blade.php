@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Data Post</div>
                <div class="card-body">
                <form action="{{ route('biodata.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>Nama lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama lengkap">
                        @error('nama_lengkap')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Jenis kelamin</label>
                        <input type="radio" class="form-control" name="jenis_kelamin" placeholder="Jenis kelamin">
                        <input type="radio" name="jenis_kelamin" value=Laki-Laki>Laki-Laki<br><input type="radio" name=jenis_kelamin value=Perempuan>Perempuan
                        @error('jenis_kelamin')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Tanggal_lahir </label>
                        <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal lahir">
                        @error('tanggal lahir')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Tempat_lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat lahir">
                        @error('tempat lahir')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Agama</label>
                            <select class="form-select" name="agama">
                                <option value="" selected disabled>Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>       
                        @error('agama')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat" ></textarea>
                        @error('alamat')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Telepon</label>
                        <input type="string" class="form-control" name="telepon" placeholder="Telepon">
                        @error('telepon')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        @error('email')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Cover</label>
                        <input type="file" class="form-control" name="cover" placeholder="Cover">
                        @error('cover')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
