@extends('layouts.app')

@section('content')

<h2>Data Angsuran</h2>

<a href="{{ route('angsuran.create') }}" class="btn btn-primary mb-3">
    Tambah Angsuran
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
            <th>Tanggal Bayar</th>
            <th>Jumlah Bayar</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

    @foreach($angsurans as $angsuran)

    <tr>

        <td>{{ $loop->iteration }}</td>

        <td>{{ $angsuran->pinjaman->anggota->nama }}</td>

        <td>{{ $angsuran->tanggal_bayar }}</td>

        <td>
            Rp {{ number_format($angsuran->jumlah_bayar,0,',','.') }}
        </td>

        <td>

            <a href="{{ route('angsuran.edit',$angsuran->id) }}" class="btn btn-warning btn-sm">
                Edit
            </a>

            <form action="{{ route('angsuran.destroy',$angsuran->id) }}" method="POST" style="display:inline">

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