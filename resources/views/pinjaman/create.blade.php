@extends('layouts.app')

@section('content')

<h2>Tambah Pinjaman</h2>

<form action="{{ route('pinjaman.store') }}" method="POST">

    @csrf

    <div class="mb-3">

        <label>Nama Anggota</label>

        <select name="anggota_id" class="form-control">

            @foreach($anggotas as $anggota)

                <option value="{{ $anggota->id }}">
                    {{ $anggota->nama }}
                </option>

            @endforeach

        </select>

    </div>

    <div class="mb-3">

        <label>Tanggal Pinjaman</label>

        <input type="date" name="tanggal_pinjaman" class="form-control">

    </div>

    <div class="mb-3">

        <label>Jumlah Pinjaman</label>

        <input type="number" name="jumlah_pinjaman" class="form-control">

    </div>

    <div class="mb-3">

        <label>Lama Angsuran (bulan)</label>

        <input type="number" name="lama_angsuran" class="form-control">

    </div>

    <button type="submit" class="btn btn-primary">
        Simpan
    </button>

    <a href="{{ route('pinjaman.index') }}" class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection