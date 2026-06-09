@extends('layouts.app')

@section('content')

<h2>Tambah Simpanan</h2>

<form action="{{ route('simpanan.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label>Anggota</label>

        <select name="anggota_id" class="form-control">

            @foreach($anggotas as $anggota)

                <option value="{{ $anggota->id }}">
                    {{ $anggota->nama }}
                </option>

            @endforeach

        </select>

    </div>

    <div class="mb-3">

        <label>Tanggal</label>

        <input type="date" name="tanggal" class="form-control">

    </div>

    <div class="mb-3">

        <label>Jenis Simpanan</label>

        <input type="text" name="jenis_simpanan" class="form-control">

    </div>

    <div class="mb-3">

        <label>Jumlah</label>

        <input type="number" name="jumlah" class="form-control">

    </div>

    <button class="btn btn-primary">

        Simpan

    </button>

    <a href="{{ route('simpanan.index') }}" class="btn btn-secondary">

        Kembali

    </a>

</form>

@endsection