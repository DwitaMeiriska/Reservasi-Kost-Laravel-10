<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Kost;

class ManajemanDataKostController extends Controller
{
    // Menampilkan daftar kost
    public function index()
    {
        $kosts = Kost::all();
        return view('admin.manajeman_data_kost.index', compact('kosts'));
    }

    // Menampilkan form untuk membuat kost baru
    public function create()
    {
        $kategoris = Kategori::all();
        echo $kategoris;
        return view('admin.manajeman_data_kost.create', compact('kategoris'));
    }

    // Menyimpan kost baru ke database
    public function store(Request $request)
    {
        // Validasi request
        $request->validate([
            'kategori_id' => 'required|exists:kategoris,id',
            'nama_kamar' => 'required|string',
            'harga_kamar' => 'required|integer',
            'ukuran_kamar' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image',
            'status' => 'required|in:Tersedia,Tidak Tersedia',
        ]);

        // Proses upload gambar
        $path = $request->file('gambar')->store('public/kosts');

        // Membuat kost baru
        $kost = new Kost;
        $kost->kategori_id = $request->kategori_id;
        $kost->nama_kamar = $request->nama_kamar;
        $kost->harga_kamar = $request->harga_kamar;
        $kost->ukuran_kamar = $request->ukuran_kamar;
        $kost->deskripsi = $request->deskripsi;
        $kost->gambar = $path;
        $kost->status = $request->status;
        $kost->save();

        return redirect()->route('manajeman_data_kost.index')->with('success', 'Kost berhasil ditambahkan.');
    }

    // Menampilkan detail kost tertentu
    public function show($id)
    {
        $kost = Kost::findOrFail($id);
        return view('admin.manajeman_data_kost.show', compact('kost'));
    }

    // Menampilkan form untuk mengedit kost tertentu
    public function edit($id)
    {
        $kost = Kost::findOrFail($id);
        $kategoris = Kategori::all();
        return view('admin.manajeman_data_kost.edit', compact('kost', 'kategoris'));
    }

    // Memperbarui kost tertentu di database
    public function update(Request $request, $id)
    {
        // Validasi request
        $request->validate([
            'kategori_id' => 'required|exists:kategoris,id',
            'nama_kamar' => 'required|string',
            'harga_kamar' => 'required|integer',
            'ukuran_kamar' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'sometimes|image',
            'status' => 'required|in:Tersedia,Tidak Tersedia',
        ]);

        $kost = Kost::findOrFail($id);

        // Jika gambar baru di-upload, proses dan perbarui path
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('public/kosts');
            $kost->gambar = $path;
        }

        $kost->kategori_id = $request->kategori_id;
        $kost->nama_kamar = $request->nama_kamar;
        $kost->harga_kamar = $request->harga_kamar;
        $kost->ukuran_kamar = $request->ukuran_kamar;
        $kost->deskripsi = $request->deskripsi;
        $kost->status = $request->status;
        $kost->save();

        return redirect()->route('manajeman_data_kost.index')->with('success', 'Kost berhasil diperbarui.');
    }

    // Menghapus kost tertentu dari database
    public function destroy($id)
    {
        $kost = Kost::findOrFail($id);
        $kost->delete();
        return redirect()->route('manajeman_data_kost.index')->with('success', 'Kost berhasil dihapus.');
    }
}
