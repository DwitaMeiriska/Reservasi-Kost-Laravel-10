<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ulasan extends Model
{
    use HasFactory;

    protected $fillable = ['rating', 'ulasan', 'nama', 'email', 'kost_id'];

    // Relasi dengan model Kost
    public function kost()
    {
        return $this->belongsTo(Kost::class);
    }

    public static function countRatings()
    {
        return Ulasan::select('rating', DB::raw('count(*) as count'))
                      ->groupBy('rating')
                      ->orderBy('rating', 'desc')
                      ->get()
                      ->keyBy('rating'); // Ini akan membuat array dengan key sebagai rating dan value sebagai jumlahnya
    }
}
