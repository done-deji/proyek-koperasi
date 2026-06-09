<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    protected $table = 'pinjamans';

    protected $fillable = [
        'anggota_id',
        'tanggal_pinjaman',
        'jumlah_pinjaman',
        'lama_angsuran'
    ];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }
}