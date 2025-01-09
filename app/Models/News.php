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
        'gambar_berita_2',
        'kategori_berita',
        'tags_berita',
        'penulis_berita',
        'isi_berita',
    ];

    protected $casts = [
        'tags_berita' => 'array',
    ];

    public function getIsiBeritaAttribute($value)
    {
        return strip_tags($value);
    }

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($model) {
            if ($model->isDirty('gambar_berita') && $model->getOriginal('gambar_berita')) {
                Storage::disk('public')->delete($model->getOriginal('gambar_berita'));
            }
            if ($model->isDirty('gambar_berita_2') && $model->getOriginal('gambar_berita_2')) {
                Storage::disk('public')->delete($model->getOriginal('gambar_berita_2'));
            }
        });

        static::deleting(function ($model) {
            if ($model->gambar_berita) {
                Storage::disk('public')->delete($model->gambar_berita);
            }
            if ($model->gambar_berita_2) {
                Storage::disk('public')->delete($model->gambar_berita_2);
            }
        });
    }
}
