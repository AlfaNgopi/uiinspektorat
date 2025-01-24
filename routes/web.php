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

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/admin/berita', [AdminController::class, 'berita'])->name('admin.berita');
Route::get('/admin/berita/tambah', [AdminController::class, 'tambahBerita'])->name('admin.berita.tambah');
Route::post('/admin/berita/actiontambahberita', [AdminController::class, 'actionTambahBerita'])->name('actionTambahBerita');
Route::get('/admin/berita/edit/{id}', [AdminController::class, 'editBerita'])->name('admin.berita.edit');
Route::post('/admin/berita/actioneditberita', [AdminController::class, 'actionEditBerita'])->name('actionEditBerita');

Route::get('/admin/identitas-website', [AdminController::class, 'identitasWebsite'])->name('admin.identitas-website');
Route::post('/admin/identitas-website/actionedit', [AdminController::class, 'actionEditIdentitasWebsite'])->name('actionEditIdentitasWebsite');

Route::get('/admin/menu-website', [AdminController::class, 'menuWebsite'])->name('admin.menu-website');
Route::get('/admin/halaman-baru', [AdminController::class, 'halamanBaru'])->name('admin.halaman-baru');

Route::get('/admin/kategori-berita', [AdminController::class, 'kategoriBerita'])->name('admin.kategori-berita');
Route::get('/admin/kategori-berita/tambah', [AdminController::class, 'tambahKategoriBerita'])->name('admin.kategori-berita.tambah');
Route::post('/admin/kategori-berita/actiontambah', [AdminController::class, 'actionTambahKategoriBerita'])->name('actionTambahKategoriBerita');

Route::get('/admin/playlist-video', [AdminController::class, 'playlistVideo'])->name('admin.playlist-video');


Route::get('/admin/video', [AdminController::class, 'video'])->name('admin.video');
Route::get('/admin/video/tambah', [AdminController::class, 'tambahVideo'])->name('admin.video.tambah');
Route::post('/admin/video/actiontambah', [AdminController::class, 'actionTambahVideo'])->name('actionTambahVideo');

Route::get('/admin/galeri', [AdminController::class, 'galeri'])->name('admin.galeri');
Route::get('/admin/gambar', [AdminController::class, 'gambar'])->name('admin.gambar');

Route::get('/admin/data-instansi', [AdminController::class, 'dataInstansi'])->name('admin.data-instansi');
Route::get('/admin/kuisioner', [AdminController::class, 'kuisioner'])->name('admin.kuisioner');
Route::get('/admin/hasil-laporan', [AdminController::class, 'hasilLaporan'])->name('admin.hasil-laporan');

Route::get('/admin/komentar', [AdminController::class, 'komentar'])->name('admin.komentar');
Route::get('/admin/sensor-komentar', [AdminController::class, 'sensorKomentar'])->name('admin.sensor-komentar');

Route::get('/admin/carousel', [AdminController::class, 'carousel'])->name('admin.carousel');
Route::get('/admin/jejak-pendapat', [AdminController::class, 'jejakPendapat'])->name('admin.jejak-pendapat');
Route::get('/admin/download-area', [AdminController::class, 'downloadArea'])->name('admin.download-area');
Route::get('/admin/link-aduan', [AdminController::class, 'linkAduan'])->name('admin.link-aduan');


