<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HubungiController extends Controller
{
    public function hubungi()
    {

        $beritasidebar = CommonFunction::beritasSidebar();

        return view('pages/hubungi', 
        [
            "page" => "Hubungi",
            "beritasidebar" => $beritasidebar
        ]);
    }
}
