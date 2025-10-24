@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Murid</div>
                <div class="card-body">
                <form action="{{ route('murid.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama lengkap">
                        @error('nama_lengkap')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Jenis kelamin</label><br>
                        <input type="radio" name="jenis_kelamin" value="Laki_laki">Laki-Laki<br>
                        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                        @error('jenis_kelamin')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Tanggal lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                        @error('tanggal_lahir')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Tempat lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                        @error('tempat_lahir')
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
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        @error('email')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Id Kelas</label>
                        <select name="id_kelas" id="" class="form-control">
                        @foreach($kelas as $data)
                        <option value="{{ $data->id}}">{{ $data->name_kelas}}</option>
                        @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
