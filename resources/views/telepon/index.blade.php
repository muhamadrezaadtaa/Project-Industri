    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-dark text-white"> Telepon</div>
                    <a href="{{ route('telepon.create') }}" class="btn btn-primary">Add</a>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nomor</th>
                        <th scope="col">Nama Pengguna</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $id = 1; @endphp
                        @foreach ($datatelepon as $data)
                        <tr>
                        <td scope="row">{{$id++}}</td>
                        <td>{{$data->nomor}}</td>
                        <td>{{$data->pengguna->name}}</td>
                        
                        <td>
                            <a href="{{ route('telepon.edit', $data->id)}}" class="btn btn-success d-flex flex-column">Edit</a>
                            <a href="{{ route('telepon.show', $data->id)}}" class="btn btn-warning d-flex flex-column">Show</a>
                            <form action="{{ route('telepon.show', $data->id)}}" method="POST" class="d-flex flex-column">
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
