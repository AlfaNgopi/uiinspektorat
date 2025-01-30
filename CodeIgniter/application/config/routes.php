<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route = array(
    'default_controller' => 'main',
    'main' => 'main',
    'administrator' => 'Administrator',
    'agenda' => 'agenda',
    'albums' => 'albums',
    'berita' => '',
    'download' => 'download',
    'halaman' => 'halaman',
    'hubungi' => 'hubungi',
    'kategori' => 'kategori',
    'konsultasi' => 'konsultasi',
    'kontributor' => 'kontributor',
    'playlist' => 'playlist',
    'polling' => 'polling',
    'tag' => 'tag',
    'survey' => 'survey',
);

$route['default_controller'] = 'beranda_controller';

$route['berita/browse']         = 'alfas/berita/browse';
$route['berita/browse/cari']    = 'alfas/berita/browsebycari';
$route['berita/browse/(:any)']  = 'alfas/berita/browsebykategori/$1';

$route['berita/detail/(:any)']  = 'alfas/berita/detail/$1';

$route['album']                 = 'alfas/albums/index';
$route['album/(:any)/(:any)']   = 'alfas/albums/detail/$1/$2';

// $route['berita/kategori/(:any)'] = 'beritas_controller/beritabykategori/$1';
// $route['berita/cari/cari'] = 'beritas_controller/beritabycari';

// $route['document/(:any)'] = 'document_controller/document/$1';

// $route['download'] = 'download_controller/index';

// $route['hubungi'] = 'hubungi_controller/hubungi';

// $route['videos'] = 'video_controller/videos';
// $route['videos/(:any)'] = 'video_controller/video/$1';

// $route['gallerys'] = 'gambar_controller/gallerys';
// $route['gallerys/(:any)'] = 'gambar_controller/gambar/$1';

// $route['survey'] = 'survey_controller/index';

// $route['(:any)'] = 'news/$1/$2';
// $route['404_override'] = '';
// $route['translate_uri_dashes'] = FALSE;
