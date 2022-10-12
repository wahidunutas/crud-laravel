@extends('siswa.template')

@section('content')
    <h1>Create Data</h1>
    <a href="/crud" class="btn btn-primary btn-sm">Kembali</a>
    <form action="/crud" method="post">
        @csrf
        <div class="mb-3">
            <div class="row">
                <div class="col">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="col">
                    <label for="">Kelas</label>
                    <input type="text" class="form-control" name="kelas">
                </div>
                <div class="col">
                    <label for="">Nis</label>
                    <input type="text" class="form-control" name="nis">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="">Jenis Kelamin</label>
            <select name="jk" id="" class="form-control">
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir">
                </div>
                <div class="col">
                    <label for="">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="">Alamat</label>
            <textarea name="alamat" class="form-control" cols="30" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label for="">Hobi</label>
            <input type="text" class="form-control" name="hobi">
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
    </form>
@endsection