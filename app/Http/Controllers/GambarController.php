<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GambarController extends Controller
{
    public function gallerys()
    {

        $beritasidebar = CommonFunction::beritasSidebar();

        return view(
            'pages/gallerys',

            [
                'page' => 'Gallerys',
                'beritasidebar' => $beritasidebar,
            ]
        );
    }

    public function gambar($title)
    {

        $beritasidebar = CommonFunction::beritasSidebar();

        return view(
            'pages/gambar',

            [
                'page' => 'Gallery',
                'beritasidebar' => $beritasidebar,
            ]
        );
    }
}
