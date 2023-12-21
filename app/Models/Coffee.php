<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Coffee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'short_description',
        'long_description',
        'category',
        'temperature',
        'price',
        'image_product',
    ];

    // menganti gambar dengan yang baru
    protected static function boot()
    {
        parent::boot();
        static::updating(function ($model) {
            if ($model->isDirty('image_product') && ($model->getOriginal('image_product') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('image_product'));
            }
        });
    }
}
