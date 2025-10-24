@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Murid</div>
                <div class="card-body">
                <form action="{{ route('murid.update', $murid->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama lengkap" value="{{$murid->nama_lengkap}}">
                        @error('nama_lengkap')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label><br>
                            <!-- <input type="radio" name="jenis_kelamin" value="laki-laki" id="" {{ $murid->jenis_kelamin == 'laki-laki' ? 'checked' : '' }}>Laki Laki <br>
                            <input type="radio" name="jenis_kelamin" value="Perempuan" id="" {{ $murid->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>Perempuan -->
                            <div>
                                <input type="radio" id="Laki-laki" name="jenis_kelamin" value="Laki-laki" {{ $murid->jenis_kelamin == 'Laki_laki' ? 'checked' : '' }}>
                                <label for="laki">Laki-laki</label>
                                
                                <input type="radio" id="Perempuan" name="jenis_kelamin" value="Perempuan" {{ $murid->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>
                                <label for="perempuan">Perempuan</label>
                            </div>
                        @error('jenis_kelamin')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Tanggal lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{$murid->tanggal_lahir}}">
                        @error('tanggal_lahir')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Tempat lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" value="{{$murid->tempat_lahir}}">
                        @error('tempat_lahir')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Agama</label>
                            <select class="form-select" name="agama" value="{{$murid->agama}}">
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
                        <textarea name="alamat" class="form-control" placeholder="Alamat">{{$murid->alamat}}</textarea>
                        @error('alamat')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{$murid->email}}">
                        @error('email')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Id Kelas</label>
                        <select name="id_kelas" id="" class="form-control">
                        @foreach($kelas as $data)
                        <option value="{{ $data->id}}" {{ $data->id == $murid->id_kelas ? 'selected' : ''}}>{{ $data->name_kelas}}</option>
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
