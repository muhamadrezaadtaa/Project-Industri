    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-dark text-white"> Murid</div>
                    <a href="{{ route('murid.create') }}" class="btn btn-primary">Add</a>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama lengkap</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tanggal lahir</th>
                        <th scope="col">Tempat lahir</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nama Kelas</th>
                        <!-- <th scope="col">Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @php $id = 1; @endphp
                        @foreach ($murid as $data)
                        <tr>
                        <td scope="row">{{$id++}}</td>
                        <td>{{$data->nama_lengkap}}</td>
                        <td>{{$data->jenis_kelamin}}</td>
                        <td>{{$data->tanggal_lahir}}</td>
                        <td>{{$data->tempat_lahir}}</td>
                        <td>{{$data->agama}}</td>
                        <td>{{$data->alamat}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->kelas->name_kelas}}</td>
                        
                        <td>
                            <a href="{{ route('murid.edit', $data->id)}}" class="btn btn-success d-flex flex-column">Edit</a>
                            <a href="{{ route('murid.show', $data->id)}}" class="btn btn-warning d-flex flex-column">Show</a>
                            <form action="{{ route('murid.show', $data->id)}}" method="POST" class="d-flex flex-column">
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
