<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasan;

class UlasanController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'ulasan' => 'required|string',
            'nama' => 'required|string',
            'email' => 'required|email',
            'kost_id' => 'required|exists:kosts,id',
        ]);

        // Simpan ulasan ke dalam database
        Ulasan::create([
            'rating' => $request->rating,
            'ulasan' => $request->ulasan,
            'nama' => $request->nama,
            'email' => $request->email,
            'kost_id' => $request->kost_id,
        ]);

        return redirect()->back()->with('success', 'Ulasan berhasil dikirim!');
    }
}
