@extends('layouts.app')

@section('content')

<h2 class="mb-4">Dashboard Sistem Informasi Koperasi</h2>

<div class="row">

    <div class="col-md-3">

        <div class="card bg-primary text-white">

            <div class="card-body">

                <h5>Jumlah Anggota</h5>

                <h2>{{ $jumlahAnggota }}</h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card bg-success text-white">

            <div class="card-body">

                <h5>Total Simpanan</h5>

                <h2>Rp {{ number_format($totalSimpanan,0,',','.') }}</h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card bg-warning text-white">

            <div class="card-body">

                <h5>Total Pinjaman</h5>

                <h2>Rp {{ number_format($totalPinjaman,0,',','.') }}</h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card bg-danger text-white">

            <div class="card-body">

                <h5>Total Angsuran</h5>

                <h2>Rp {{ number_format($totalAngsuran,0,',','.') }}</h2>

            </div>

        </div>

    </div>

</div>

@endsection