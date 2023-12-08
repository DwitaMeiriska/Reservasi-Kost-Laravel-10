<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KamarbController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ManajemanDataKostController;
use App\Http\Controllers\ManajemanDataTransaksiController;
use App\Http\Controllers\ManajemanPortofolioController;
use App\Http\Controllers\UlasanAdminController;

// INI REGISTER USER use App\Http\Controllers\PesanKostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route Admin
Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:admin'])->group(function () {
        // Route Admin Dashboard
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');

        // CRUD Routes for ManajemanDataKost
        Route::prefix('admin/manajeman_data_kost')->name('manajeman_data_kost.')->group(function () {
            Route::get('/', [ManajemanDataKostController::class, 'index'])->name('index');
            Route::get('/create', [ManajemanDataKostController::class, 'create'])->name('create');
            Route::post('/', [ManajemanDataKostController::class, 'store'])->name('store');
            Route::get('/{kost}', [ManajemanDataKostController::class, 'show'])->name('show');
            Route::get('/{kost}/edit', [ManajemanDataKostController::class, 'edit'])->name('edit');
            Route::put('/{kost}', [ManajemanDataKostController::class, 'update'])->name('update');
            Route::delete('/{kost}', [ManajemanDataKostController::class, 'destroy'])->name('destroy');
        });

        // CRUD Routes for ManajemanDataTransaksi
        Route::prefix('admin/manajeman_data_transaksi')->name('manajeman_data_transaksi.')->group(function () {
            Route::get('/transaksi', [ManajemanDataTransaksiController::class, 'index'])->name('index');
            Route::put('/transaksi/terima/{id}', [ManajemanDataTransaksiController::class, 'terima'])->name('terima');
            Route::put('/transaksi/tolak/{id}', [ManajemanDataTransaksiController::class, 'tolak'])->name('tolak');
            Route::delete('/transaksi/{id}', [ManajemanDataTransaksiController::class, 'destroy'])->name('destroy');
        });

        // CRUD Routes for Kategori
        Route::prefix('admin/kategori')->name('kategori.')->group(function () {
            Route::get('/', [KategoriController::class, 'index'])->name('index');
            Route::get('/create', [KategoriController::class, 'create'])->name('create');
            Route::post('/', [KategoriController::class, 'store'])->name('store');
            Route::get('/{kategori}', [KategoriController::class, 'show'])->name('show');
            Route::get('/{kategori}/edit', [KategoriController::class, 'edit'])->name('edit');
            Route::put('/{kategori}', [KategoriController::class, 'update'])->name('update');
            Route::delete('/{kategori}', [KategoriController::class, 'destroy'])->name('destroy');
        });

        //CRUD Route Portofolio
        Route::resource('admin/portofolio', ManajemanPortofolioController::class)
        ->names([
            'index'   => 'manajeman_portofolio.index',
            'create'  => 'manajeman_portofolio.create',
            'store'   => 'manajeman_portofolio.store',
            'show'    => 'manajeman_portofolio.show',
            'edit'    => 'manajeman_portofolio.edit',
            'update'  => 'manajeman_portofolio.update',
            'destroy' => 'manajeman_portofolio.destroy',
        ]);
        Route::prefix('admin/ulasan')->name('ulasan.')->group(function () {
            Route::get('/', [UlasanAdminController::class, 'index'])->name('index');
            Route::post('/', [UlasanAdminController::class, 'store'])->name('store');
            Route::get('/{ulasan}', [UlasanAdminController::class, 'show'])->name('show'); // Jika Anda ingin menampilkan detail ulasan
            Route::put('/{ulasan}', [UlasanAdminController::class, 'update'])->name('update');
            Route::delete('/{ulasan}', [UlasanAdminController::class, 'destroy'])->name('destroy');
        });
    });
});


// Route user
Route::middleware('auth')->group(function () {
    Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index')->middleware('role:user');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show')->middleware('role:user');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update')->middleware('role:user');
});

Route::resource('/', LandingController::class);
Route::resource('/about', AboutController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/portofolio', PortofolioController::class);

Route::get('/kost', [KostController::class, 'indexA']);
Route::get('/kamarb', [KostController::class, 'indexB']);
Route::get('/pesanan/{id}', [KostController::class, 'show'])->name('show');
Route::get('/show/{id}', [PesananController::class, 'pemesanan'])->name('show');
Route::get('/pembayaran/{id}', [PesananController::class, 'pembayaran'])->name('pembayaran');

Route::get('/riwayat_transaksi',[PesananController::class, 'transaksi'])->name ('riwayat_transaksi.index');
// Route::get('/pembayaran/sukses',[PesananController::class, 'sukses'])->name ('pembayaran.sukses');
Route::post('/buktiTransaki/{id}',[PesananController::class, 'buktiTransaksi'])->name ('pembayaran.sukses');
Route::post('/ulasan', [UlasanController::class, 'store'])->name('ulasan.store');
Route::post('/pembayaran', [PesananController::class, 'store'])->name('pembayaran.store');
