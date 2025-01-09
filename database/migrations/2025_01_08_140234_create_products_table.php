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

            // Column kategori_obat
            $table->enum('kategori_obat', [
                'Infeksi',
                'Saluran Pernapasan',
                'Kardiovaskular',
                'Pencernaan',
                'Metabolik',
                'Sistem Saraf',
                'Autoimun',
                'Kulit',
                'Mental atau Psikologis',
                'Kanker',
            ])->nullable();

            // Column keterangan_obat
            $table->text('keterangan_obat')->nullable();

            // Column deskripsi_obat
            $table->text('deskripsi_obat')->nullable();

            // Column indikasi_obat
            $table->string('indikasi_obat')->nullable();

            // Column komposisi_obat
            $table->string('komposisi_obat')->nullable();

            // Column dosis_obat
            $table->string('dosis_obat')->nullable();

            // Column penggunaan_obat
            $table->text('penggunaan_obat')->nullable();

            // Column efek_samping
            $table->string('efek_samping')->nullable();

            // Column kontraindikasi
            $table->string('kontraindikasi')->nullable();
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
