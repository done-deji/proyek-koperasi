@extends('layouts.app')

@section('content')

<h2>Tambah Anggota</h2>

<form action="{{ route('anggota.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label>ID Anggota</label>
        <input type="text" name="id_anggota" class="form-control">
    </div>

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control">
    </div>

    <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>No Telepon</label>
        <input type="text" name="no_telp" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">
        Simpan
    </button>

    <a href="{{ route('anggota.index') }}" class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection