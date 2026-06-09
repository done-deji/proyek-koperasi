<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Simpanan;
use App\Models\Pinjaman;
use App\Models\Angsuran;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahAnggota = Anggota::count();

        $totalSimpanan = Simpanan::sum('jumlah');

        $totalPinjaman = Pinjaman::sum('jumlah_pinjaman');

        $totalAngsuran = Angsuran::sum('jumlah_bayar');

        return view('dashboard', compact(
            'jumlahAnggota',
            'totalSimpanan',
            'totalPinjaman',
            'totalAngsuran'
        ));
    }
}