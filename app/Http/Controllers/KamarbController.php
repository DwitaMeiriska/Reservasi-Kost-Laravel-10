<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Kost;
use Illuminate\Http\Request;

class KostController extends Controller
{
    public function indexB(){
        $kost = DB::select("SELECT * FROM kosts WHERE kategori_id = 2");
        return view('kamarb.kamarb', compact('kost'));
    }
}
