<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GambarController extends Controller
{
    public function gallerys()
    {

        $beritasidebar = CommonFunction::beritasSidebar();
        $menus = CommonFunction::getMenu();

        return view(
            'pages/gallerys',

            [
                'page' => 'Gallerys',
                'menus' => $menus,
                'beritasidebar' => $beritasidebar,
            ]
        );
    }

    public function gambar($title)
    {

        $beritasidebar = CommonFunction::beritasSidebar();
        $menus = CommonFunction::getMenu();

        return view(
            'pages/gambar',

            [
                'page' => 'Gallery',
                'menus' => $menus,
                'beritasidebar' => $beritasidebar,
            ]
        );
    }
}
