<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommonFunction extends Controller
{
    public static function beritasSidebar()
    {
        $path = storage_path('app/beritas.json');
        if (!file_exists($path)) {
            abort(404, 'File not found');
        }

        $json = file_get_contents($path);
        $beritas = json_decode($json, true);
        $beritas = array_slice($beritas, -6);
        foreach ($beritas as &$berita) {
            $berita['link'] = strtolower(str_replace(' ', '-', $berita['title']));
        }

        return $beritas;
    }
}
