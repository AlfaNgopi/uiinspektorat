<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function berita($title)
    {

        

        $beritas = Berita::all();

        

        

        $berita = null;
        foreach ($beritas as $b) {
            if (strtolower(str_replace(' ', '-', $b['title'])) == $title) {
                $berita = $b;
                
                break;
            }
        }

       

        if ($berita == null) {
            dd($berita);
            return view('/',);
        }

        $beritasidebar = CommonFunction::beritasSidebar();
        $menus = CommonFunction::getMenu();



        return view(
            'pages/page',
            [
                "page" => "Berita",
                "menus" => $menus,
                "berita" => $berita,
                "beritasidebar" => $beritasidebar
                
            ]
        );
    }
}
