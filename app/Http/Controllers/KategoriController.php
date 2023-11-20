<?php

namespace App\Http\Controllers;

use App\Kategori as AppKategori;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    // Menampilkan daftar kategori
    public function index()
    {
        $kategoris = AppKategori::all();
        return view('admin.kategori.index', compact('kategoris'));
    }

    // Menampilkan form untuk membuat kategori baru
    public function create()
    {
        return view('admin.kategori.create');
    }

    // Menyimpan kategori baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|string',
            'keterangan' => 'required|string'
        ]);

        AppKategori::create($request->all());
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit kategori
    public function edit(AppKategori $kategori)
    {
        return view('admin.kategori.edit', compact('kategori'));
    }

    // Memperbarui kategori di database
    public function update(Request $request, AppKategori $kategori)
    {
        $request->validate([
            'kategori' => 'required|string',
            'keterangan' => 'required|string'
        ]);

        $kategori->update($request->all());
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    // Menghapus kategori dari database
    public function destroy(AppKategori $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
