<?php

use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ZonasicekController;
use App\Http\Controllers\ZonasiController;
use Illuminate\Support\Facades\Route;
use App\Exports\PendaftaranExport;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PengumumanController;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/', function () {
    return view('welcome', [
        'title' => 'Home',
        'favicon'=> asset('images/logo-triwuri.png')
    ]);
});
Route::get('/profil', function () {
    return view('profil', [
        'title' => 'Profil',
        'favicon'=> asset('images/logo-triwuri.png')
    ]);
});
Route::get('/gallery', [GalleryController::class, 'index']);

// 'title' => 'Gallery',
//         'favicon'=> asset('images/logo-triwuri.png')
Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::get('/article-detail/{id}', [ArticleController::class, 'detail'])->name('article.detail');

Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
Route::get('/pengumuman-detail/{id}', [PengumumanController::class, 'detail'])->name('pengumuman.detail');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/kirim', [ContactController::class, 'kirim'])->name('kirim');

// Route::get('/test', function () {
//     return view('pendaftaran-pdf');});
// Route::get('/select-location', function () {
//     return view('select-location');
// })->name('select-location');

// Route::post('/proses-zonasi', [ZonasiController::class, 'prosesZonasi'])->name('proses-zonasi');

Route::get('/zonasi', [ZonasicekController::class, 'showForm'])->name('zonasi.form');
Route::post('/zonasi/proses', [ZonasicekController::class, 'prosesZonasi'])->name('zonasi.proses');

Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
// Route::get('/pendaftaran/{id}', [PendaftaranController::class, 'mail'])->name('pendaftaran.mail');
Route::get('/pendaftaran/export', function (\Illuminate\Http\Request $request) {
    $bulanMulai = $request->input('bulan_mulai');
    $bulanAkhir = $request->input('bulan_akhir');

    return Excel::download(new PendaftaranExport($bulanMulai, $bulanAkhir), 'pendaftaran.xlsx');
})->name('pendaftaran.export');