@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Transaksi</div>
                <div class="card-body">
                <form action="{{ route('transaksi.update', $transaksi->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Tanggal Transaksi</label>
                        <input type="date" class="form-control" name="tanggal_transaksi" placeholder="Tanggal Transaksi" value="{{$transaksi->tanggal_transaksi}}">
                        @error('tanggal_transaksi')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Jumlah</label>
                        <input type="number" class="form-control" name="jumlah" placeholder="Jumlah" value="{{$transaksi->jumlah}}">
                        @error('tanggal_lahir')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Total</label>
                        <input type="number" class="form-control" name="total_harga" placeholder="Total Harga" value="{{$transaksi->total_harga}}">
                        @error('total_harga')
                            <small style="color:red;">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <select name="id_barang" id="" class="form-control">
                        @foreach($barang as $data)
                        <option value="{{ $data->id}}" {{ $data->id == $transaksi->id_barang ? 'selected' : ''}}>{{ $data->name_barang}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Pembeli</label>
                        <select name="id_pembeli" id="" class="form-control">
                        @foreach($pembeli as $data)
                        <option value="{{ $data->id}}" {{ $data->id == $transaksi->id_pembeli ? 'selected' : ''}}>{{ $data->name_pembeli}}</option>
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
