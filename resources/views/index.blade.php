@extends('siswa.template')

@section('content')    
    <h1 class="text-center">Crud Sederhana Laravel</h1>
    <a href="crud/create" class="btn btn-primary btn-sm mb-2 mt-4">Tambah Data</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>NIS</th>
                <th>JK</th>
                <th>aksi</th>
            </tr>
        </thead>
        @foreach ($siswas as $key => $siswa)
            <tbody>
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$siswa->nama}}</td>
                    <td>{{$siswa->kelas}}</td>
                    <td>{{$siswa->nis}}</td>
                    <td>{{$siswa->jk}}</td>
                    <td>
                        <a href="/crud/{{$siswa->id}}" class="btn btn-primary btn-sm">Detail</a>
                        <a href="/crud/{{$siswa->id}}/edit" class="btn btn-info btn-sm text-white">Edit</a>
                        <form action="/crud/{{$siswa->id}}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
@endsection