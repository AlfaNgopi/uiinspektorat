<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;


class BerandaController extends Controller
{
    public function index()
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


        $beritas = CommonFunction::addLinks($beritas);


        $beritas = array_slice($beritas, -8);




        $beritaredaksis = array_filter($beritas, function ($berita) {
            return $berita['is_redaksi'] == true;
        });

        $beritaredaksis = array_slice($beritaredaksis, -6);
        $beritaredaksis1 = array_slice($beritaredaksis, 0, 3);
        $beritaredaksis2 = array_slice($beritaredaksis, 3, 3);


        $menus = CommonFunction::getMenu();



        return view(
            'pages/beranda',
            [
                'beritas' => $beritas,
                'menus' => $menus,
                'beritaredaksis1' => $beritaredaksis1,
                'beritaredaksis2' => $beritaredaksis2
            ]

        );
    }
}
