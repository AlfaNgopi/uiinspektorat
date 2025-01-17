<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PageController;

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/berita/{title}', [PageController::class, 'berita'])->name('berita');



