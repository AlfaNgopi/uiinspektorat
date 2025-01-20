<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeritasController extends Controller
{
    public function beritas()
    {

        $path = storage_path('app/beritas.json');
        if (!file_exists($path)) {
            abort(404, 'File not found');
        }

        $json = file_get_contents($path);
        $beritas = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            abort(500, 'Error decoding JSON');
        }

        $mainberitas = array_slice($beritas, -10);


        $beritasidebar = CommonFunction::beritasSidebar();

        return view(
            'pages/beritas',

            [
                'page' => 'Berita',
                'beritas' => $mainberitas,
                'beritasidebar' => $beritasidebar,
            ]
        );
    }

    public function beritabykategori($kategori)
    {

        $path = storage_path('app/beritas.json');
        if (!file_exists($path)) {
            abort(404, 'File not found');
        }

        $json = file_get_contents($path);
        $beritas = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            abort(500, 'Error decoding JSON');
        }

        $beritas = array_filter($beritas, function ($berita) use ($kategori) {
            return $berita['category'] == $kategori;
        });

        $beritas = array_slice($beritas, -10);

        return view(
            'pages/beritas',

            [
                'mainberitas' => $beritas
            ]
        );
    }

    public function beritabycari(Request $request)
    {

        $path = storage_path('app/beritas.json');
        if (!file_exists($path)) {
            abort(404, 'File not found');
        }

        $json = file_get_contents($path);
        $beritas = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            abort(500, 'Error decoding JSON');
        }

        $keyword = $request->input('keyword');

        $beritas = array_filter($beritas, function ($berita) use ($keyword) {
            return strpos(strtolower($berita['title']), strtolower($keyword)) !== false;
        });

        $beritas = array_slice($beritas, -10);

        $beritasidebar = CommonFunction::beritasSidebar();

        return view(
            'pages/beritas',


            [
                'page' => 'Berita',
                'mainberitas' => $beritas,
                'beritasidebar' => $beritasidebar,
            ]
        );
    }
}
