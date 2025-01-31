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
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            // Column nama_event
            $table->string('nama_event')->nullable();
            
            // Column penyelenggara
            $table->string('penyelenggara')->nullable();

            // Column tanggal_event
            $table->string('tanggal_event')->nullable();

            // Column lokasi_event
            $table->string('lokasi_event')->nullable();

            // Column deskripsi_event
            $table->longText('deskripsi_event')->nullable();

            // Column susunan_acara
            $table->longText('susunan_acara')->nullable();
            
            // Column gambar_event
            $table->string('gambar_event')->nullable();

            // Column gambar_event_2
            $table->string('gambar_event_2')->nullable();

            // Column gambar_event_3
            $table->string('gambar_event_3')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
