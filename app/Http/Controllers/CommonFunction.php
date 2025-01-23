<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Berita_kategori;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\User;
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
        $kategoris = Berita_kategori::all()->toArray();

        return $kategoris;
    }

    public static function addLinks($items){
        foreach ($items as &$item) {
            $item['link'] = strtolower(str_replace(' ', '-', $item['title']));
        }
        return $items;
        
    }

    public static function addKategoriName($items){
        $kategoris = Berita_kategori::all()->pluck('name', 'id');
        foreach ($items as &$item) {
            $item['kategori_name'] = $kategoris[$item['category']];
        }
        return $items;
    }

    public static function addAuthorName($items){
        $authors = User::all()->pluck('name', 'id');
        foreach ($items as &$item) {
            $item['author_name'] = $authors[$item['author_id']];
        }
        return $items;
    }

    public static function beritasSidebar()
    {
        $beritas = Berita::all()->toArray();
        $beritas = array_slice($beritas, -6);
        foreach ($beritas as &$berita) {
            $berita['link'] = strtolower(str_replace(' ', '-', $berita['title']));
        }

        $kategoris = Berita_kategori::all()->pluck('name', 'id');
        foreach ($beritas as &$berita) {
            $berita['kategori_name'] = $kategoris[$berita['category']];
        }

        return $beritas;
    }
}
