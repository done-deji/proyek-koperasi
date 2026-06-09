@extends('layouts.app')

@section('content')

<h2>Edit Pinjaman</h2>

<form action="{{ route('pinjaman.update',$pinjaman->id) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label>Nama Anggota</label>

        <select name="anggota_id" class="form-control">

            @foreach($anggotas as $anggota)

                <option value="{{ $anggota->id }}"
                    {{ $pinjaman->anggota_id == $anggota->id ? 'selected' : '' }}>

                    {{ $anggota->nama }}

                </option>

            @endforeach

        </select>

    </div>

    <div class="mb-3">

        <label>Tanggal Pinjaman</label>

        <input type="date"
               name="tanggal_pinjaman"
               class="form-control"
               value="{{ $pinjaman->tanggal_pinjaman }}">

    </div>

    <div class="mb-3">

        <label>Jumlah Pinjaman</label>

        <input type="number"
               name="jumlah_pinjaman"
               class="form-control"
               value="{{ $pinjaman->jumlah_pinjaman }}">

    </div>

    <div class="mb-3">

        <label>Lama Angsuran</label>

        <input type="number"
               name="lama_angsuran"
               class="form-control"
               value="{{ $pinjaman->lama_angsuran }}">

    </div>

    <button type="submit" class="btn btn-primary">
        Update
    </button>

    <a href="{{ route('pinjaman.index') }}" class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection