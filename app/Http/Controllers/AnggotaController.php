<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    // Menampilkan semua data anggota
    public function index(Request $request)
{
    $keyword = $request->search;

    $anggotas = Anggota::where('nama','like',"%$keyword%")
                    ->orWhere('id_anggota','like',"%$keyword%")
                    ->latest()
                    ->get();

    return view('anggota.index', compact('anggotas'));
}

    // Menyimpan data anggota
    public function store(Request $request)
    {
        $request->validate([
            'id_anggota' => 'required|unique:anggotas,id_anggota',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        Anggota::create($request->all());

        return redirect()->route('anggota.index')
            ->with('success', 'Data anggota berhasil ditambahkan');
    }

    // Menampilkan form edit
    public function edit(Anggota $anggotum)
    {
        return view('anggota.edit', [
            'anggota' => $anggotum
        ]);
    }

    // Update data
    public function update(Request $request, Anggota $anggotum)
    {
        $request->validate([
            'id_anggota' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        $anggotum->update($request->all());

        return redirect()->route('anggota.index')
            ->with('success', 'Data anggota berhasil diupdate');
    }

    // Hapus data
    public function destroy(Anggota $anggotum)
    {
        $anggotum->delete();

        return redirect()->route('anggota.index')
            ->with('success', 'Data anggota berhasil dihapus');
    }
}