<?php

namespace App\Http\Controllers;

use App\Models\Angsuran;
use App\Models\Pinjaman;
use Illuminate\Http\Request;

class AngsuranController extends Controller
{
    public function index()
    {
        $angsurans = Angsuran::with('pinjaman.anggota')->latest()->get();

        return view('angsuran.index', compact('angsurans'));
    }

    public function create()
    {
        $pinjamans = Pinjaman::with('anggota')->get();

        return view('angsuran.create', compact('pinjamans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pinjaman_id' => 'required',
            'tanggal_bayar' => 'required',
            'jumlah_bayar' => 'required'
        ]);

        Angsuran::create($request->all());

        return redirect()->route('angsuran.index')
            ->with('success', 'Data angsuran berhasil ditambahkan');
    }

    public function edit(Angsuran $angsuran)
    {
        $pinjamans = Pinjaman::with('anggota')->get();

        return view('angsuran.edit', compact('angsuran', 'pinjamans'));
    }

    public function update(Request $request, Angsuran $angsuran)
    {
        $request->validate([
            'pinjaman_id' => 'required',
            'tanggal_bayar' => 'required',
            'jumlah_bayar' => 'required'
        ]);

        $angsuran->update($request->all());

        return redirect()->route('angsuran.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Angsuran $angsuran)
    {
        $angsuran->delete();

        return redirect()->route('angsuran.index')
            ->with('success', 'Data berhasil dihapus');
    }
}