@extends('layouts.app')

@section('content')

<h2>Data Simpanan</h2>

<a href="{{ route('simpanan.create') }}" class="btn btn-primary mb-3">
    Tambah Simpanan
</a>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered">

    <thead>
        <tr>
            <th>No</th>
            <th>Nama Anggota</th>
            <th>Tanggal</th>
            <th>Jenis Simpanan</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

        @foreach($simpanans as $simpanan)

        <tr>

            <td>{{ $loop->iteration }}</td>
            <td>{{ $simpanan->anggota->nama }}</td>
            <td>{{ $simpanan->tanggal }}</td>
            <td>{{ $simpanan->jenis_simpanan }}</td>
            <td>Rp {{ number_format($simpanan->jumlah,0,',','.') }}</td>

            <td>

                <a href="{{ route('simpanan.edit',$simpanan->id) }}" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('simpanan.destroy',$simpanan->id) }}" method="POST" style="display:inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Hapus
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

@endsection