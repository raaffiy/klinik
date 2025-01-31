<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'gambar_event',        // dokumentasi 1
        'gambar_event_2',      // dokumentasi 2 
        'gambar_event_3',      // dokumentasi 3
        
        'nama_event',           // nama event
        'penyelenggara',        // penyelenggara event
        'tanggal_event',        // tanggal & waktu event dilakukan
        'lokasi_event',         // lokasi event dilaksanakan
        'deskripsi_event',      // deskripsi event & tujuan event
        'susunan_acara',        // susunan acara / agenda acara
    ];

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($model) {
            $fields = ['gambar_event', 'gambar_event_2', 'gambar_event_3'];
            foreach ($fields as $field) {
                if ($model->isDirty($field) && ($model->getOriginal($field) !== null)) {
                    Storage::disk('public')->delete($model->getOriginal($field));
                }
            }
        });

        static::deleting(function ($model) {
            $fields = ['gambar_event', 'gambar_event_2', 'gambar_event_3'];
            foreach ($fields as $field) {
                if ($model->$field) {
                    Storage::disk('public')->delete($model->$field);
                }
            }
        });
    }
}
