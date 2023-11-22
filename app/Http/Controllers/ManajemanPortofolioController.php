<?php

namespace App\Http\Controllers;

use App\Models\portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManajemanPortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portofolios = portofolio::all();
        return view('admin.portofolio.index', compact('portofolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.portofolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'gambar' => 'required|image',
        ]);

        $path = $request->file('gambar')->store('public/portofolio');
        $path = str_replace('public/', '', $path);

        Portofolio::create(['gambar' => $path]);

        return redirect()->route('manajeman_portofolio.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Portofolio $portofolio)
    {
        return view('admin.portofolio.show', compact('portofolio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portofolio $portofolio)
    {
        return view('admin.portofolio.edit', compact('portofolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portofolio $portofolio)
    {
        $validatedData = $request->validate([
            'gambar' => 'image',
        ]);

        if ($request->hasFile('gambar')) {
            Storage::delete('public/' . $portofolio->gambar);
            $path = $request->file('gambar')->store('public/portofolio');
            $path = str_replace('public/', '', $path);
            $portofolio->update(['gambar' => $path]);
        }

        return redirect()->route('manajeman_portofolio.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portofolio $portofolio)
    {
        Storage::delete('public/' . $portofolio->gambar);
        $portofolio->delete();
        return redirect()->route('manajeman_portofolio.index');
    }
}
