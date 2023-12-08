<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use App\Models\Ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UlasanAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $allUlasans = Ulasan::all();
        $averageRating = $allUlasans->avg('rating') ?? 0;

        // Cek apakah ada filter rating yang diterima dari request
        $ratingFilter = $request->input('rating');

        // Jika ada filter rating, gunakan itu untuk memfilter ulasan
        if ($ratingFilter) {
        $ulasans = Ulasan::where('rating', $ratingFilter)->get();
        $averageRating = $ulasans->avg('rating') ?? 0;
        }
        else {
        $ulasans = Ulasan::all();
        $averageRating = $ulasans->count() > 0 ? $ulasans->avg('rating') : 0;
        }

        // Query untuk mendapatkan jumlah ulasan per rating
        $ratings = Ulasan::select('rating', DB::raw('count(*) as count'))
                      ->groupBy('rating')
                      ->orderBy('rating', 'desc')
                      ->get()
                      ->keyBy('rating');

    // Pastikan setiap nilai rating dari 1 hingga 5 memiliki entry di array
    for ($i = 1; $i <= 5; $i++) {
        if (!isset($ratings[$i])) {
            $ratings[$i] = (object) ['count' => 0];
        }
    }

    return view('admin.ulasan.index', compact('ulasans', 'averageRating', 'ratings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'ulasan' => 'required|string',
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            // 'kost_id' => 'required|exists:kosts,id', // Uncomment this if you have a Kost model
        ]);

        Ulasan::create($request->all());

        return redirect()->route('ulasan.index')->with('success', 'Ulasan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kost = Kost::findOrFail($id);
        $ratings = Ulasan::countRatings();
        $ulasans = $kost->ulasans; // Pastikan Anda telah mendefinisikan relasi 'ulasans' di model Kost

    return view('ulasan.index', compact('kost', 'ratings', 'ulasans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ulasan = Ulasan::findOrFail($id);
        $ulasan->delete();

        return redirect()->route('ulasan.index')->with('success', 'Ulasan berhasil dihapus');
    }
}
