<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function berita($title)
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

        

        

        $berita = null;
        foreach ($beritas as $b) {
            if (strtolower(str_replace(' ', '-', $b['title'])) == $title) {
                $berita = $b;
                
                break;
            }
        }

       

        if ($berita == null) {
            return view('pages/404', ["title" => "404 Not Found"]);
        }

        $beritas = array_slice($beritas, -6);





        return view(
            'pages/page',
            [
                "title" => "Berita",
                "berita" => $berita,
                "beritas" => $beritas
            ]
        );
    }
}
