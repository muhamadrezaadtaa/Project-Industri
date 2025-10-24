    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-dark text-white">Pembeli</div>
                    <a href="{{ route('pembeli.create') }}" class="btn btn-primary">Add</a>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Pembeli</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $id = 1; @endphp
                        @foreach ($pembeli as $data)
                        <tr>
                        <td>{{$id++}}</td>
                        <td>{{$data->name_pembeli}}</td>
                        <td>{{$data->jenis_kelamin}}</td>
                        <td>{{$data->telepon}}</td>
                        <td>
                            <a href="{{ route('pembeli.edit', $data->id)}}" class="btn btn-success d-flex flex-column">Edit</a>
                            <a href="{{ route('pembeli.show', $data->id)}}" class="btn btn-warning d-flex flex-column">Show</a>
                            <form action="{{ route('pembeli.show', $data->id)}}" method="POST" class="d-flex flex-column">
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
