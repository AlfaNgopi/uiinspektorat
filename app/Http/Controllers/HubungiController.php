<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HubungiController extends Controller
{
    public function hubungi()
    {

        $beritasidebar = CommonFunction::beritasSidebar();
        $menus = CommonFunction::getMenu();

        return view('pages/hubungi', 
        [
            "page" => "Hubungi",
            "menus" => $menus,
            "beritasidebar" => $beritasidebar
        ]);
    }
}
