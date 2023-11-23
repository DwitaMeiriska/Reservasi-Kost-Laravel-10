<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'pesanan'; // Mengonfirmasi nama tabel
    protected $guarded = ['id']; // Menjaga kolom ID dari mass assignment
    protected $dates = ['tgl_sewa'];



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kost()
    {
        return $this->belongsTo(Kost::class);
    }

    public function getTglSewaFormattedAttribute()
    {
        return $this->tgl_sewa->format('d-m-Y');
    }

    public function setHargaKostAttribute($value)
    {
        $this->attributes['harga_kost'] = str_replace(',', '', $value);
    }

}
