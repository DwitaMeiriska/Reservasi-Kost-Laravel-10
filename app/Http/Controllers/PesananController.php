<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Kost;
use App\Models\Ulasan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('pesanan.pesanan');
    }

    public function pemesanan(Request $request, $id){
        $listkost = Kost::where('id', $id)->get();
        $nama_kamar = $request->get('nama_kamar');
        $harga_kamar = $request->get('harga_kamar');
        $kost_id = $request->get('id');
        $ulasans = Ulasan::where('kost_id', $id)
        ->orderByDesc('rating') // Urutkan berdasarkan rating terbaik
        ->take(3) // Ambil tiga ulasan
        ->get();

        return view('pesanan.pesanan', compact('listkost', 'nama_kamar', 'harga_kamar', 'ulasans'));

    }

    public function pembayaran(Request $request, $id){
        // $listkost = Kost::all();
        $listkost = Kost::where('id', $id)->get();
        $nama_kamar = $request->get('nama_kamar');
        $harga_kamar = $request->get('harga_kamar');
        $kost_id = $request->get('id');

        return view('pembayaran.pembayaran', compact('listkost', 'nama_kamar', 'harga_kamar', 'kost_id'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'nama_kost' => 'required|string',
            'harga_kost' => 'required|integer',
            'tgl_sewa' => 'required|date',
            'lama_sewa' => 'required|in:12 Bulan,6 Bulan,1 Bulan',
            'total_harga' => 'required|integer'
        ]);

        if ($validator->fails()){
            $errors = $validator->messages();
            foreach ($errors->all() as $errors){
                echo $errors;
            }
        }

        else{
            // $tgl_sewa = date("Y-m-d".strtotime($request->input('tgl_sewa')));

            $validatedData =  $validator->validate();

            $pesanan =  new Pesanan;
            $pesanan->kost_id = $request->input('kost_id');
            $pesanan->nama = $validatedData['nama'];
            $pesanan->nama_kost = $validatedData['nama_kost'];
            $pesanan->harga_kost = $validatedData['harga_kost'];
            $pesanan->lama_sewa = $validatedData['lama_sewa'];
            $pesanan->tgl_sewa = $validatedData['tgl_sewa'];
            $pesanan->total_harga = $validatedData['total_harga'];
            $pesanan->user_id = auth()->user()->id;
            $pesanan->status = $request->input('status') ?: "Menunggu Verifikasi";

            $pesanan->save();

            return redirect()->route('success');
        }
    }
    public function transaksi(){
        $userId = Auth::id();
        $pesanan = Pesanan::where('user_id', $userId)->get();
        return view('riwayat_transaksi.transaksi', compact('pesanan'));

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

    /**
     * Display the specified resource.
     */


     public function show($id)
     {
         // Gantilah ini dengan cara Anda mengambil data pesanan dari tabel "pesanan" berdasarkan ID
        //  $pesanan = Pesanan::find($id);

        //  if (!$pesanan) {
        //      // Handle jika data dengan ID yang diberikan tidak ditemukan
        //      return abort(404); // Tampilkan halaman 404 Not Found
        //  }

        //  return view('pesanan.pesanan', compact('pesanan'));
        // $listkost = Kost::all();
        // $nama_kamar = $request->get('nama_kamar');
        // $harga_kamar = $request->get('harga_kamar');
        // return view('pesanan.pesanan', compact('listkost', 'nama_kamar', 'harga_kamar'));
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
        //
    }
}
