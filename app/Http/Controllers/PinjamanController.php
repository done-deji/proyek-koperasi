<?php

namespace App\Http\Controllers;

use App\Models\Pinjaman;
use App\Models\Anggota;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    public function index()
    {
        $pinjamans = Pinjaman::with('anggota')->latest()->get();

        return view('pinjaman.index', compact('pinjamans'));
    }

    public function create()
    {
        $anggotas = Anggota::all();

        return view('pinjaman.create', compact('anggotas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'anggota_id' => 'required',
            'tanggal_pinjaman' => 'required',
            'jumlah_pinjaman' => 'required',
            'lama_angsuran' => 'required',
        ]);

        Pinjaman::create($request->all());

        return redirect()->route('pinjaman.index')
            ->with('success', 'Data pinjaman berhasil ditambahkan');
    }

    public function edit(Pinjaman $pinjaman)
    {
        $anggotas = Anggota::all();

        return view('pinjaman.edit', compact('pinjaman', 'anggotas'));
    }

    public function update(Request $request, Pinjaman $pinjaman)
    {
        $request->validate([
            'anggota_id' => 'required',
            'tanggal_pinjaman' => 'required',
            'jumlah_pinjaman' => 'required',
            'lama_angsuran' => 'required',
        ]);

        $pinjaman->update($request->all());

        return redirect()->route('pinjaman.index')
            ->with('success', 'Data pinjaman berhasil diupdate');
    }

    public function destroy(Pinjaman $pinjaman)
    {
        $pinjaman->delete();

        return redirect()->route('pinjaman.index')
            ->with('success', 'Data pinjaman berhasil dihapus');
    }
}