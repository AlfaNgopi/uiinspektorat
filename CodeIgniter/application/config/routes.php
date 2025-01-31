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

$route['default_controller']     = 'beranda_controller';
$route['main']                   = 'beranda_controller';
 
$route['berita/browse']          = 'alfas/berita/browse';
$route['berita/browse/cari']     = 'alfas/berita/browsebycari';
$route['berita/browse/(:any)']   = 'alfas/berita/browsebykategori/$1';

$route['berita/detail/(:any)']   = 'alfas/berita/detail/$1';

$route['halaman/detail/(:any)']  = 'alfas/halaman/detail/$1';

$route['albums']                 = 'alfas/albums/index';
$route['albums/(:any)/(:any)']   = 'alfas/albums/detail/$1/$2';


$route['download']               = 'alfas/download/index';

$route['hubungi']                = 'alfas/hubungi/index';

$route['videos']                 = 'alfas/video/index';
$route['videos/(:any)']          = 'alfas/video/detail/$1';

// $route['gallerys'] = 'gambar_controller/gallerys';
// $route['gallerys/(:any)'] = 'gambar_controller/gambar/$1';

// $route['survey'] = 'survey_controller/index';

// $route['(:any)'] = 'news/$1/$2';
// $route['404_override'] = '';
// $route['translate_uri_dashes'] = FALSE;
