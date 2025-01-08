<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [

        // informasi umum 
        'nama_obat',                // nama obat & jenis obat & bentuk obat
        'gambar_obat',              // gambar obat
        'kategori_obat',            // penyakit yang dikategorikan oleh obat tersebut
        'keterangan_obat',          // keterangan_obat
        'deskripsi_obat',           // deskripsi obat

        // spesifikasi obat
        'indikasi_obat',            // Deskripsi tentang kondisi atau penyakit yang dapat diobati dengan obat ini
        'komposisi_obat',           // Kandungan bahan aktif dan takaran setiap bahan
        'dosis_obat',               // Jumlah atau takaran tertentu dari obat yang harus diberikan, biasanya berdasarkan usia atau berat badan
        'penggunaan_obat',          // Petunjuk penggunaan obat, seperti sebelum/sesudah makan, atau berapa kali sehari
        'efek_samping',             // Potensi efek samping yang mungkin terjadi pada pasien dan menjelaskan tentang larangan makan-makanan yang tidak diperbolehkan
        'kontraindikasi',           // Situasi atau kondisi yang membuat obat tidak boleh digunakan, misalnya pada wanita hamil atau pasien dengan penyakit tertentu

    ];


    // menganti gambar dengan yang baru
    protected static function boot()
    {
        parent::boot();
        static::updating(function ($model) {
            if ($model->isDirty('gambar_obat') && ($model->getOriginal('gambar_obat') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('gambar_obat'));
            }
        });
    }

    // Accessor untuk memfilter tag HTML 
    public function getDeskripsiObatAttribute($value)
    {
        return strip_tags($value);
    }
    public function getIndikasiObatAttribute($value)
    {
        return strip_tags($value);
    }
    public function getKomposisiObatAttribute($value)
    {
        return strip_tags($value);
    }
    public function getDosisObatAttribute($value)
    {
        return strip_tags($value);
    }
    public function getPenggunaanObatAttribute($value)
    {
        return strip_tags($value);
    }
    public function getEfekSampingAttribute($value)
    {
        return strip_tags($value);
    }
    public function getKontraindikasiAttribute($value)
    {
        return strip_tags($value);
    }
}
