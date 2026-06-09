<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $fillable = [
        'id_anggota',
        'nama',
        'alamat',
        'no_telp',
    ];

    public function simpanans()
    {
        return $this->hasMany(Simpanan::class);
    }

    public function pinjamans()
    {
        return $this->hasMany(Pinjaman::class);
    }
}