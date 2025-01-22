<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class CommonFunction extends Controller
{
    public static function getMenu(){
        // $path = storage_path('app/navbar.json');
        // if (!file_exists($path)) {
        //     abort(404, 'File not found');
        // }

        // $json = file_get_contents($path);
        // $menus = json_decode($json, true);
        

        // if (json_last_error() !== JSON_ERROR_NONE) {
        //     abort(500, 'Error decoding JSON');
        // }

        $menu = MenuItem::with('children')->whereNull('parent_id')->get();

        // dd($menu);
        

        return $menu;
    }


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

    public static function getAdminSidebar(){
        $path = storage_path('app/adminsidebar.json');
        if (!file_exists($path)) {
            abort(404, 'File not found');
        }

        $json = file_get_contents($path);
        $sidebars = json_decode($json, true);

        

        return $sidebars;
    }

    public static function getKategori()
    {
        $path = storage_path('app/beritakategoris.json');
        if (!file_exists($path)) {
            abort(404, 'File not found');
        }

        $json = file_get_contents($path);

        $kategoris = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            abort(500, 'Error decoding JSON');
        }

        return $kategoris;
    }

    public static function addLinks($items){
        foreach ($items as &$item) {
            $item['link'] = strtolower(str_replace(' ', '-', $item['title']));
        }
        return $items;
        
    }
}
