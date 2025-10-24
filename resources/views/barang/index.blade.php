    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-dark text-white">Barang</div>
                    <a href="{{ route('barang.create') }}" class="btn btn-primary">Add</a>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Merek</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $id = 1; @endphp
                        @foreach ($barang as $data)
                        <tr>
                        <td>{{$id++}}</td>
                        <td>{{$data->name_barang}}</td>
                        <td>{{$data->merek}}</td>
                        <td>{{$data->harga}}</td>
                        <td>{{$data->stok}}</td>
                        <td>
                            <a href="{{ route('barang.edit', $data->id)}}" class="btn btn-success d-flex flex-column">Edit</a>
                            <a href="{{ route('barang.show', $data->id)}}" class="btn btn-warning d-flex flex-column">Show</a>
                            <form action="{{ route('barang.show', $data->id)}}" method="POST" class="d-flex flex-column">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Delete</button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
