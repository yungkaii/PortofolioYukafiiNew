<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// TEST VERCEL
Route::get('/test-vercel', function () {
    return 'VERCEL PHP WORKS';
});

// HALAMAN UTAMA
Route::get('/', [PortfolioController::class, 'index'])
    ->name('home');

// FORM KONTAK
Route::post('/kontak', [PortfolioController::class, 'kirimPesan'])
    ->name('kontak.kirim');

// DOWNLOAD CV
Route::get('/download-cv', [PortfolioController::class, 'downloadCv'])
    ->name('cv.download');