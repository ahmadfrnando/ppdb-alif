<?php

use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ZonasicekController;
use App\Http\Controllers\ZonasiController;
use Illuminate\Support\Facades\Route;
use App\Exports\PendaftaranExport;
use App\Http\Controllers\GalleryController;
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
Route::get('/article', function () {
    return view('article', [
        'title' => 'Article',
        'favicon'=> asset('images/logo-triwuri.png')
    ]);
});
Route::get('/pengumuman', function () {
    return view('pengumuman', [
        'title' => 'Pengumuman',
        'favicon'=> asset('images/logo-triwuri.png')
    ]);
});
Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact', 
        'favicon'=> asset('images/logo-triwuri.png')
    ]);
});
Route::get('/article-detail', function () {
    return view('article-detail', [
        'title' => 'Article', 
        'favicon'=> asset('images/logo-triwuri.png')
    ]);
});
Route::get('/pengumuman-detail', function () {
    return view('pengumuman-detail', [
        'title' => 'Pengumuman', 
        'favicon'=> asset('images/logo-triwuri.png')
    ]);
});

Route::get('/test', function () {
    return view('pendaftaran-pdf');});
// Route::get('/select-location', function () {
//     return view('select-location');
// })->name('select-location');

// Route::post('/proses-zonasi', [ZonasiController::class, 'prosesZonasi'])->name('proses-zonasi');

Route::get('/zonasi', [ZonasicekController::class, 'showForm'])->name('zonasi.form');
Route::post('/zonasi/proses', [ZonasicekController::class, 'prosesZonasi'])->name('zonasi.proses');

Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
Route::get('/pendaftaran/export', function (\Illuminate\Http\Request $request) {
    $bulanMulai = $request->input('bulan_mulai');
    $bulanAkhir = $request->input('bulan_akhir');

    return Excel::download(new PendaftaranExport($bulanMulai, $bulanAkhir), 'pendaftaran.xlsx');
})->name('pendaftaran.export');