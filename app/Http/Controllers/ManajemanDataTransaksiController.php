<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Kost;


class ManajemanDataTransaksiController extends Controller
{
    // Menampilkan daftar pesanan
    public function index()
    {
        $pesanan = Pesanan::with('buktiTransaksi')->get();
        return view('admin.manajeman_data_transaksi.index', compact('pesanan'));

    }

    // Mengupdate status pesanan menjadi 'Sukses'
    public function terima($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->update(['status' => 'Sukses']);

        $idKost = $pesanan->kost_id;

        // Temukan dan perbarui status dari model 'Kost' yang terkait
        $statususer = Kost::findOrFail($idKost);
        $statususer->update(['status' => 'Tidak Tersedia']);

        return redirect()->route('manajeman_data_transaksi.index')->with('success', 'Pesanan diterima.');
    }

    // Mengupdate status pesanan menjadi 'Gagal'
    public function tolak($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->update(['status' => 'Gagal']);

        return redirect()->route('manajeman_data_transaksi.index')->with('error', 'Pesanan ditolak.');
    }

    // Menghapus pesanan
    public function destroy($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->delete();

        return redirect()->route('manajeman_data_transaksi.index')->with('success', 'Pesanan dihapus.');
    }
}
