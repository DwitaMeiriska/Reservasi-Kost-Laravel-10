<?php

namespace App\Models;

use App\Models\Kost;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    // Menambahkan properti fillable
    protected $fillable = ['kategori', 'keterangan'];

    // Metode untuk mendefinisikan relasi one-to-many ke model Kost
    public function kosts()
    {
        return $this->hasMany(Kost::class, 'id_kategori','id');
    }
}
