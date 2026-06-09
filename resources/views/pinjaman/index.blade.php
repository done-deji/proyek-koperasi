@extends('layouts.app')

@section('content')

<h2>Data Pinjaman</h2>

<a href="{{ route('pinjaman.create') }}" class="btn btn-primary mb-3">
    Tambah Pinjaman
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
            <th>Tanggal Pinjaman</th>
            <th>Jumlah Pinjaman</th>
            <th>Lama Angsuran</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

    @foreach($pinjamans as $pinjaman)

        <tr>

            <td>{{ $loop->iteration }}</td>
            <td>{{ $pinjaman->anggota->nama }}</td>
            <td>{{ $pinjaman->tanggal_pinjaman }}</td>
            <td>Rp {{ number_format($pinjaman->jumlah_pinjaman,0,',','.') }}</td>
            <td>{{ $pinjaman->lama_angsuran }} Bulan</td>

            <td>

                <a href="{{ route('pinjaman.edit',$pinjaman->id) }}" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('pinjaman.destroy',$pinjaman->id) }}" method="POST" style="display:inline">

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