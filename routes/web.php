<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes - Portofolio Tema Laut
|--------------------------------------------------------------------------
|
| Di file ini Anda memetakan semua URL/route untuk website portofolio Anda.
|
*/

// Halaman Utama Portofolio
Route::get('/', [PortfolioController::class, 'index'])->name('home');

// Route Interaktif: Mengirim Pesan dari Form Kontak
Route::post('/kontak', [PortfolioController::class, 'kirimPesan'])->name('kontak.kirim');

// Route Interaktif: Unduh Berkas CV
Route::get('/download-cv', [PortfolioController::class, 'downloadCv'])->name('cv.download');