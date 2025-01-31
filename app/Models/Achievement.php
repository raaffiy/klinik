<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Achievement extends Model
{
    use HasFactory;
    protected $fillable = [
        'gambar_lomba',        // dokumentasi 1
        'gambar_lomba_2',      // dokumentasi 2 
        'gambar_lomba_3',      // dokumentasi 3
        
        'nama_lomba',           // nama lomba dan penyelenggara
        'tanggal_lomba',        // tanggal lomba dilaksanakan
        'tingkat_lomba',        // lomba kota/provinsi/nasional
        'lokasi_lomba',         // lokasi lomba
        
        'deskripsi_lomba',      // deskripsi singkat
        'nama_peserta_lomba',   // peserta yang memenangkan lomba        
        'kutipan_pesan',        // kutipan atau pesan untuk pemenang
    ];

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($model) {
            $fields = ['gambar_lomba', 'gambar_lomba_2', 'gambar_lomba_3'];
            foreach ($fields as $field) {
                if ($model->isDirty($field) && ($model->getOriginal($field) !== null)) {
                    Storage::disk('public')->delete($model->getOriginal($field));
                }
            }
        });

        static::deleting(function ($model) {
            $fields = ['gambar_lomba', 'gambar_lomba_2', 'gambar_lomba_3'];
            foreach ($fields as $field) {
                if ($model->$field) {
                    Storage::disk('public')->delete($model->$field);
                }
            }
        });
    }
}
