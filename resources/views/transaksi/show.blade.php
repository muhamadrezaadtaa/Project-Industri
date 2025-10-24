@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Show Data Transaksi</div>
                <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    
                    <div class="mb-3">
                        <label>Tanggal Transaksi</label>
                        <input type="date" class="form-control" name="tanggal_transaksi" placeholder="Tanggal Transaksi" value="{{$transaksi->tanggal_transaksi}}">
                    </div>
                    <div class="mb-3">
                        <label>Jumlah</label><br>
                        <input type="number" class="form-control" name="jumlah" disabled value="{{$transaksi->jumlah}}">
                    </div>
                    <div class="mb-3">
                        <label>Total Harga</label>
                        <input type="number" class="form-control" name="total_harga" disabled value="{{$transaksi->total_harga}}">
                    </div>
                    <div class="mb-3">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" name="id_barang" value="{{ $transaksi->barang->name_barang}}" disabled>
                    </div>
                    <a href="{{ route('transaksi.index')}}" class="btn btn-primary">Back</a>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
