<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuktiTransaksi extends Model
{
    use HasFactory;

    protected $table ='buktiTransaksi';
    protected $fillable = ['kost_id', 'user_id', 'gambar'];

    // Dalam model Pesanan


}
