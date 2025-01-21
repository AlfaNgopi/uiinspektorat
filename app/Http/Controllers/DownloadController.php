<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index()
    {

        $path = storage_path('app/download.json');
        if (!file_exists($path)) {
            abort(404, 'File not found');
        }

        $json = file_get_contents($path);
        $downloads = json_decode($json, true);


        $beritasidebar = CommonFunction::beritasSidebar();
        $menus = CommonFunction::getMenu();



        


        return view('pages/download',
    
            [
                'page' => 'Download',
                'menus' => $menus,
                'downloads' => $downloads,
                'beritasidebar' => $beritasidebar,
                
            ]
        );
    }
}
