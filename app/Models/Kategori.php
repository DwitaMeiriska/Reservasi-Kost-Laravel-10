<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public function Kategori() 
    {
        return $this->hasMany('App\Kategori','id_kategori', 'id');
    }
}