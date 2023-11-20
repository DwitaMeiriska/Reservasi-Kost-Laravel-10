<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kost extends Model
{
    protected $fillable = [
        'kategori_id',
        'nama_kamar',
        'harga_kamar',
        'ukuran_kamar',
        'deskripsi',
        'gambar',
        'status',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
