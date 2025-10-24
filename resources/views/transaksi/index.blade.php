    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-dark text-white"> Transaksi</div>
                    <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Add</a>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tanggal Transaksi</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Nama pembeli</th>
                        <!-- <th scope="col">Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @php $id = 1; @endphp
                        @foreach ($transaksi as $data)
                        <tr>
                        <td scope="row">{{$id++}}</td>
                        <td>{{$data->tanggal_transaksi}}</td>
                        <td>{{$data->jumlah}}</td>
                        <td>{{$data->total_harga}}</td>
                        <td>{{$data->barang->name_barang}}</td>
                        <td>{{$data->pembeli->name_pembeli}}</td>
                        
                        <td>
                            <a href="{{ route('transaksi.edit', $data->id)}}" class="btn btn-success d-flex flex-column">Edit</a>
                            <a href="{{ route('transaksi.show', $data->id)}}" class="btn btn-warning d-flex flex-column">Show</a>
                            <form action="{{ route('transaksi.show', $data->id)}}" method="POST" class="d-flex flex-column">
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
