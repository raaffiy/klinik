<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_obat',
        'gambar_obat',
        'gambar_obat_2',
        'kategori_obat',
        'keterangan_obat',
        'deskripsi_obat',
        'indikasi_obat',
        'komposisi_obat',
        'dosis_obat',
        'penggunaan_obat',
        'efek_samping',
        'kontraindikasi',
    ];

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($model) {
            $fields = ['gambar_obat', 'gambar_obat_2'];
            foreach ($fields as $field) {
                if ($model->isDirty($field) && ($model->getOriginal($field) !== null)) {
                    Storage::disk('public')->delete($model->getOriginal($field));
                }
            }
        });

        static::deleting(function ($model) {
            $fields = ['gambar_obat', 'gambar_obat_2'];
            foreach ($fields as $field) {
                if ($model->$field) {
                    Storage::disk('public')->delete($model->$field);
                }
            }
        });
    }
}