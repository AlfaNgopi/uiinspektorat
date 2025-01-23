<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;

class BeritasController extends Controller
{
    public function beritas()
    {
        $beritas = Berita::all()->toArray();


        // Paginate the beritas array
        // Paginator::useBootstrapFive();

        // Paginate the beritas array manually
        $perPage = 10;
        $currentPage = Paginator::resolveCurrentPage();
        $totalItems = count($beritas);
        $currentItems = array_slice($beritas, ($currentPage - 1) * $perPage, $perPage);

        $currentItems = CommonFunction::addLinks($currentItems);
        $currentItems = CommonFunction::addKategoriName($currentItems);
        $currentItems = CommonFunction::addAuthorName($currentItems);

        // Create pagination data
        $pagination = [
            'total' => $totalItems,
            'per_page' => $perPage,
            'current_page' => $currentPage,
            'last_page' => ceil($totalItems / $perPage),
            'from' => ($currentPage - 1) * $perPage + 1,
            'to' => min($totalItems, $currentPage * $perPage),
        ];

        $kategoris = CommonFunction::getKategori();
        $beritasidebar = CommonFunction::beritasSidebar();
        $menus = CommonFunction::getMenu();


        return view('pages/beritas', [
            'page' => 'Berita',
            'menus' => $menus,
            'beritas' => $currentItems,
            'kategoris' => $kategoris,
            'currentKategori' => 'All',
            'beritasidebar' => $beritasidebar,
            'pagination' => $pagination,
        ]);
    }

    public function beritabykategori($kategori)
    {

        $beritas = Berita::all()->toArray();

        // dd($beritas);

        $beritas = array_filter($beritas, function ($berita) use ($kategori) {
            return $berita['category'] == $kategori;
        });

        $perPage = 10;
        $currentPage = Paginator::resolveCurrentPage();
        $totalItems = count($beritas);
        $currentItems = array_slice($beritas, ($currentPage - 1) * $perPage, $perPage);

        $currentItems = CommonFunction::addLinks($currentItems);
        $currentItems = CommonFunction::addKategoriName($currentItems);
        $currentItems = CommonFunction::addAuthorName($currentItems);

        // Create pagination data
        $pagination = [
            'total' => $totalItems,
            'per_page' => $perPage,
            'current_page' => $currentPage,
            'last_page' => ceil($totalItems / $perPage),
            'from' => ($currentPage - 1) * $perPage + 1,
            'to' => min($totalItems, $currentPage * $perPage),
        ];

        $kategoris = CommonFunction::getKategori();
        $beritasidebar = CommonFunction::beritasSidebar();
        $menus = CommonFunction::getMenu();

        return view('pages/beritas', [
            'page' => 'Berita',
            'menus' => $menus,
            'beritas' => $currentItems,
            'kategoris' => $kategoris,
            'currentKategori' => $kategori,
            'beritasidebar' => $beritasidebar,
            'pagination' => $pagination,
        ]);
    }

    public function beritabycari(Request $request)
    {

        $beritas = Berita::all()->toArray();

        $keyword = $request->input('keyword');

        $beritas = array_filter($beritas, function ($berita) use ($keyword) {
            return strpos(strtolower($berita['title']), strtolower($keyword)) !== false;
        });

        $perPage = 10;
        $currentPage = Paginator::resolveCurrentPage();
        $totalItems = count($beritas);
        $currentItems = array_slice($beritas, ($currentPage - 1) * $perPage, $perPage);

        $currentItems = CommonFunction::addLinks($currentItems);
        $currentItems = CommonFunction::addKategoriName($currentItems);
        $currentItems = CommonFunction::addAuthorName($currentItems);

        // Create pagination data
        $pagination = [
            'total' => $totalItems,
            'per_page' => $perPage,
            'current_page' => $currentPage,
            'last_page' => ceil($totalItems / $perPage),
            'from' => ($currentPage - 1) * $perPage + 1,
            'to' => min($totalItems, $currentPage * $perPage),
        ];

        $kategoris = CommonFunction::getKategori();
        $beritasidebar = CommonFunction::beritasSidebar();
        $menus = CommonFunction::getMenu();

        return view('pages/beritas', 
        [
            'page' => 'Berita',
            'menus' => $menus,
            'beritas' => $currentItems,
            'kategoris' => $kategoris,
            'currentKategori' => 'All',
            'beritasidebar' => $beritasidebar,
            'pagination' => $pagination,
        ]);
    }
}
