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
        Schema::create('news', function (Blueprint $table) {
            $table->id();

            // Column nama_berita
            $table->string('nama_berita')->nullable();
            
            // Column gambar_berita
            $table->string('gambar_berita')->nullable();

            // Column gambar_berita_2
            $table->string('gambar_berita_2')->nullable();

            // Column kategori_berita & tags_berita
            $table->enum('kategori_berita', [
                'Kesehatan Umum', 
                'Gizi dan Nutrisi', 
                'Penyakit dan Pencegahan', 
                'Kesehatan Mental', 
                'Olahraga dan Kebugaran', 
                'Kesehatan Anak', 
                'Kesehatan Lansia',
            ])->nullable();

            // Column tags_berita
            $table->text('tags_berita')->nullable();

            // Column penulis_berita
            $table->string('penulis_berita')->nullable();

            // Column isi_berita
            $table->longText('isi_berita')->nullable();
            
            // Column isi_berita_2
            $table->longText('isi_berita_2')->nullable();

            // timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
