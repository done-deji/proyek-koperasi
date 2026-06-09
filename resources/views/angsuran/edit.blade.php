@extends('layouts.app')

@section('content')

<h2>Edit Angsuran</h2>

<form action="{{ route('angsuran.update',$angsuran->id) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label>Pinjaman</label>

        <select name="pinjaman_id" class="form-control">

            @foreach($pinjamans as $pinjaman)

                <option value="{{ $pinjaman->id }}"
                    {{ $angsuran->pinjaman_id == $pinjaman->id ? 'selected' : '' }}>

                    {{ $pinjaman->anggota->nama }} -
                    Rp {{ number_format($pinjaman->jumlah_pinjaman,0,',','.') }}

                </option>

            @endforeach

        </select>

    </div>

    <div class="mb-3">

        <label>Tanggal Bayar</label>

        <input type="date"
               name="tanggal_bayar"
               class="form-control"
               value="{{ $angsuran->tanggal_bayar }}">

    </div>

    <div class="mb-3">

        <label>Jumlah Bayar</label>

        <input type="number"
               name="jumlah_bayar"
               class="form-control"
               value="{{ $angsuran->jumlah_bayar }}">

    </div>

    <button type="submit" class="btn btn-primary">

        Update

    </button>

    <a href="{{ route('angsuran.index') }}" class="btn btn-secondary">

        Kembali

    </a>

</form>

@endsection