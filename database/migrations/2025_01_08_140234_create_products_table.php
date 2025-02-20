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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            
            // Column nama_obat
            $table->string('nama_obat')->nullable();
            
            // Column gambar_obat
            $table->string('gambar_obat')->nullable();

            // Column gambar_obat_2
            $table->string('gambar_obat_2')->nullable();

            // Column kategori_obat
            $table->enum('kategori_obat', [
                'Anemia',
                'Demam',
                'Sakit kepala',
                'Asma',
                'Penyakit lambung',
            ])->nullable();

            // Column keterangan_obat
            $table->longText('keterangan_obat')->nullable();

            // Column deskripsi_obat
            $table->longText('deskripsi_obat')->nullable();

            // Column indikasi_obat
            $table->longText('indikasi_obat')->nullable();

            // Column komposisi_obat
            $table->longText('komposisi_obat')->nullable();

            // Column dosis_obat
            $table->longText('dosis_obat')->nullable();

            // Column penggunaan_obat
            $table->longText('penggunaan_obat')->nullable();

            // Column efek_samping
            $table->longText('efek_samping')->nullable();

            // Column kontraindikasi
            $table->longText('kontraindikasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
