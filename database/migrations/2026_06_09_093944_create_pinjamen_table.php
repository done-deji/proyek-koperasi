<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('pinjamans', function (Blueprint $table) {

        $table->id();

        $table->foreignId('anggota_id')
              ->constrained()
              ->onDelete('cascade');

        $table->date('tanggal_pinjaman');
        $table->double('jumlah_pinjaman');
        $table->integer('lama_angsuran');

        $table->timestamps();
    });
}
};
