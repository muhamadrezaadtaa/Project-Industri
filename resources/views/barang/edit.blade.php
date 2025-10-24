@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Barang</div>
                <div class="card-body">
                <form action="{{ route('barang.update', $barang->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" name="name_barang" value="{{ $barang->name_barang}}">
                    </div>
                    <div class="mb-3">
                        <label>Merek</label>
                        <input type="text" class="form-control" name="merek" value="{{ $barang->merek}}">
                    </div>
                    <div class="mb-3">
                        <label>Harga</label>
                        <input type="text" class="form-control" name="harga" value="{{ $barang->harga}}">
                    </div>
                    <div class="mb-3">
                        <label>Stok</label>
                        <input type="integer" class="form-control" name="stok" value="{{ $barang->stok}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
