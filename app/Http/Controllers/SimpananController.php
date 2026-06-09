<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Simpanan;
use Illuminate\Http\Request;

class SimpananController extends Controller
{
    // Menampilkan data simpanan
    public function index()
    {
        $simpanans = Simpanan::with('anggota')->latest()->get();

        return view('simpanan.index', compact('simpanans'));
    }

    // Menampilkan form tambah
    public function create()
    {
        $anggotas = Anggota::all();

        return view('simpanan.create', compact('anggotas'));
    }

    // Menyimpan data
    public function store(Request $request)
    {
        $request->validate([
            'anggota_id' => 'required',
            'tanggal' => 'required',
            'jenis_simpanan' => 'required',
            'jumlah' => 'required'
        ]);

        Simpanan::create($request->all());

        return redirect()->route('simpanan.index')
            ->with('success', 'Data simpanan berhasil ditambahkan');
    }

    // Menampilkan form edit
    public function edit(Simpanan $simpanan)
    {
        $anggotas = Anggota::all();

        return view('simpanan.edit', compact('simpanan', 'anggotas'));
    }

    // Update data
    public function update(Request $request, Simpanan $simpanan)
    {
        $request->validate([
            'anggota_id' => 'required',
            'tanggal' => 'required',
            'jenis_simpanan' => 'required',
            'jumlah' => 'required'
        ]);

        $simpanan->update($request->all());

        return redirect()->route('simpanan.index')
            ->with('success', 'Data simpanan berhasil diupdate');
    }

    // Hapus data
    public function destroy(Simpanan $simpanan)
    {
        $simpanan->delete();

        return redirect()->route('simpanan.index')
            ->with('success', 'Data simpanan berhasil dihapus');
    }
}