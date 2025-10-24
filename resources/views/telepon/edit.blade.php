@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Telepon</div>
                <div class="card-body">
                <form action="{{ route('telepon.update', $datatelepon->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Nomor</label>
                        <input type="text" class="form-control" name="nomor" value="{{ $datatelepon->nomor}}">
                    @error('nomor')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Nama Pengguna</label>
                        <select name="id_pengguna" id="" class="form-control">
                        @foreach($datapengguna as $data)
                        <option value="{{ $data->id}}" {{ $data->id == $datatelepon->id_pengguna ? 'selected' : ''}}>{{ $data->name}}</option>
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
