<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

    protected $fillable = ['rating', 'ulasan', 'nama', 'email', 'kost_id'];

    // Relasi dengan model Kost
    public function kost()
    {
        return $this->belongsTo(Kost::class);
    }
}
