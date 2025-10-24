@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Pembeli</div>
                <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    
                    <div class="mb-3">
                        <label>Nama Pembeli</label>
                        <input type="text" class="form-control" name="name_pembeli" value="{{ $pembeli->name_pembeli}}" disabled>
                    </div>
                    <div class="mb-3">
                        <label>Jenis kelamin</label><br>
                        <input type="text" class="form-control" name="jenis_kelamin" disabled value="{{$pembelie->jenis_kelamin}}">
                    </div>
                    <div class="mb-3">
                        <label>Telepon</label>
                        <input type="text" class="form-control" name="telepon" value="{{ $pembeli->telepon}}" disabled>
                    </div>
                    <a href="{{ route('pembeli.index')}}" class="btn btn-primary">Back</a>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
