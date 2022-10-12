@extends('siswa.template')

@section('content')
    <h1>Detail Siswa</h1>
    <a href="/crud" class="btn btn-primary btn-sm mb-2">Kembali</a>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Nama</th>
                    <td>{{$siswa->nama}}</td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>{{$siswa->kelas}}</td>
                </tr>
                <tr>
                    <th>Nis</th>
                    <td>{{$siswa->nis}}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>
                        @if ($siswa->jk == 'L')
                            {{'Laki-Laki'}}
                        @elseif($siswa->jk == 'P')
                            {{'Perempuan'}}
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Tempat / Tanggal Lahir</th>
                    <td>{{$siswa->tempat_lahir}} / {{ \Carbon\Carbon::parse($siswa->tanggal_lahir)->format('d-m-Y')}}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{$siswa->alamat}}</td>
                </tr>
                <tr>
                    <th>Hobi</th>
                    <td>{{$siswa->hobi}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection