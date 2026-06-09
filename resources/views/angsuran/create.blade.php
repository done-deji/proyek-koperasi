@extends('layouts.app')

@section('content')

<h2>Tambah Angsuran</h2>

<form action="{{ route('angsuran.store') }}" method="POST">

    @csrf

    <div class="mb-3">

        <label>Pinjaman</label>

        <select name="pinjaman_id" class="form-control">

            @foreach($pinjamans as $pinjaman)

                <option value="{{ $pinjaman->id }}">

                    {{ $pinjaman->anggota->nama }} -
                    Rp {{ number_format($pinjaman->jumlah_pinjaman,0,',','.') }}

                </option>

            @endforeach

        </select>

    </div>

    <div class="mb-3">

        <label>Tanggal Bayar</label>

        <input type="date" name="tanggal_bayar" class="form-control">

    </div>

    <div class="mb-3">

        <label>Jumlah Bayar</label>

        <input type="number" name="jumlah_bayar" class="form-control">

    </div>

    <button type="submit" class="btn btn-primary">

        Simpan

    </button>

    <a href="{{ route('angsuran.index') }}" class="btn btn-secondary">

        Kembali

    </a>

</form>

@endsection