<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_berita',
        'gambar_berita',
        'kategori_berita',
        'tags_berita',
        'penulis_berita',
        'isi_berita',
    ];

    protected $casts = [
        'tags_berita' => 'array',
    ];

    // Accessor untuk memfilter tag HTML dari isi_berita
    public function getIsiBeritaAttribute($value)
    {
        return strip_tags($value);
    }

    // Menghapus gambar lama saat diperbarui
    protected static function boot()
    {
        parent::boot();
        static::updating(function ($model) {
            if ($model->isDirty('gambar_berita') && ($model->getOriginal('gambar_berita') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('gambar_berita'));
            }
        });
    }
}
