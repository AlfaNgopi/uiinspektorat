<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritasController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\GambarController;
use App\Http\Controllers\HubungiController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\VideoController;

Route::get('/', [BerandaController::class, 'index'])->name('beranda');


Route::get('/berita', [BeritasController::class, 'beritas'])->name('berita');
Route::get('/berita/{title}', [PageController::class, 'berita'])->name('berita');
Route::get('/berita/kategori/{kategori}', [BeritasController::class, 'beritabykategori'])->name('berita.kategori');
Route::get('/berita/cari/cari', [BeritasController::class, 'beritabycari'])->name('berita.cari');


Route::get('/document/{title}', [DocumentController::class, 'document'])->name('document');

Route::get('/download', [DownloadController::class, 'index'])->name('download');

Route::get('/hubungi', [HubungiController::class, 'hubungi'])->name('hubungi');

Route::get('/videos', [VideoController::class, 'videos'])->name('videos');
Route::get('/videos/{title}', [VideoController::class, 'video'])->name('video');

Route::get('/gallerys/', [GambarController::class, 'gallerys'])->name('gallerys');
Route::get('/gallerys/{title}', [GambarController::class, 'gambar'])->name('gallery');

Route::get('/survey', [SurveyController::class, 'index'])->name('survey');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/actionlogin', [AuthController::class, 'actionLogin'])->name('actionLogin');


Route::get('/admin/Dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/admin/Berita', [AdminController::class, 'berita'])->name('admin.berita');
Route::get('/admin/Berita/Tambah', [AdminController::class, 'tambahberita'])->name('admin.berita.tambah');
Route::post('/admin/Berita/Tambah2', [AdminController::class, 'actionTambahBerita'])->name('actionTambahBerita');


