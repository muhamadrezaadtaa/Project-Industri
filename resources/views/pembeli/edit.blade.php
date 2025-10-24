@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Pembeli</div>
                <div class="card-body">
                <form action="{{ route('pembeli.update', $pembeli->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Nama Pembeli</label>
                        <input type="text" class="form-control" name="name_pembeli" value="{{ $pembeli->name_pembeli}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label><br>
                            <div>
                                <input type="radio" id="Laki-laki" name="jenis_kelamin" value="Laki-laki" {{ $pembeli->jenis_kelamin == 'Laki_laki' ? 'checked' : '' }}>
                                <label for="laki">Laki-laki</label>
                                
                                <input type="radio" id="Perempuan" name="jenis_kelamin" value="Perempuan" {{ $pembeli->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>
                                <label for="perempuan">Perempuan</label>
                            </div>
                    </div>
                    <div class="mb-3">
                        <label>Telepon</label>
                        <input type="text" class="form-control" name="telepon" value="{{ $pembeli->telepon}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
