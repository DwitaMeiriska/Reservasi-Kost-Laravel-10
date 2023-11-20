<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $enum = [
        'lama_sewa' => ['1 Bulan', '6 Bulan', '12 Bulan'],
    ];

    public static function isValidEnumValue($enum, $value)
    {
        return in_array($value, $enum);
    }
}
