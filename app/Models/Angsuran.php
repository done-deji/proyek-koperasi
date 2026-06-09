<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Angsuran extends Model
{
    protected $fillable = [
        'pinjaman_id',
        'tanggal_bayar',
        'jumlah_bayar'
    ];

    public function pinjaman()
    {
        return $this->belongsTo(Pinjaman::class);
    }
}