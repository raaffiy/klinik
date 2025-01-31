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
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            
            // Column nama_lomba
            $table->string('nama_lomba')->nullable();
            
            // Column tanggal_lomba
            $table->string('tanggal_lomba')->nullable();
            
            // Column gambar_lomba
            $table->string('gambar_lomba')->nullable();

            // Column gambar_lomba_2
            $table->string('gambar_lomba_2')->nullable();

            // Column gambar_lomba_3
            $table->string('gambar_lomba_3')->nullable();


            // Column tingkat_lomba
            $table->enum('tingkat_lomba', [
                'Internasional',
                'Nasional',
                'Provinsi',
                'Kabupaten/Kota',
            ])->nullable();

            // Column lokasi_lomba
            $table->string('lokasi_lomba')->nullable();

            // Column deskripsi_lomba
            $table->longText('deskripsi_lomba')->nullable();

            // Column nama_peserta_lomba
            $table->longText('nama_peserta_lomba')->nullable();

            // Column kutipan_pesan
            $table->longText('kutipan_pesan')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};
