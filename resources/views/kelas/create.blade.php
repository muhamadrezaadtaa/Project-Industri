@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Add Data Kelas</div>
                <div class="card-body">
                <form action="{{ route('kelas.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>Nama Kelas</label>
                        <input type="text" class="form-control" name="name_kelas" placeholder="Nama_kelas">
                        @error('name_kelas')
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
