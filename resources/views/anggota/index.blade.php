@extends('layouts.app')

@section('content')

<h2>Data Anggota</h2>

<a href="{{ route('anggota.create') }}" class="btn btn-primary mb-3">
    Tambah Anggota
    
</a>
<form method="GET" action="{{ route('anggota.index') }}">

    <div class="row mb-3">

        <div class="col-md-4">

            <input
                type="text"
                name="search"
                class="form-control"
                placeholder="Cari nama atau ID anggota"
                value="{{ request('search') }}">

        </div>

        <div class="col-md-2">

            <button type="submit" class="btn btn-success">
                Cari
            </button>

        </div>

    </div>

</form>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered">

    <thead>
        <tr>
            <th>No</th>
            <th>ID Anggota</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

        @foreach($anggotas as $anggota)

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $anggota->id_anggota }}</td>
            <td>{{ $anggota->nama }}</td>
            <td>{{ $anggota->alamat }}</td>
            <td>{{ $anggota->no_telp }}</td>

            <td>

                <a href="{{ route('anggota.edit', $anggota->id) }}" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('anggota.destroy', $anggota->id) }}" method="POST" style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm">
                        Hapus
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

@endsection