<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\TestimoniController;

Route::redirect('/', '/beranda');

Route::get('/beranda', fn() => view('index'))->name('beranda');

Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang-kami');

Route::get('/paket', fn() => view('paket'))->name('paket');

Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni');

Route::get('/galeri', fn() => view('galeri'))->name('galeri');