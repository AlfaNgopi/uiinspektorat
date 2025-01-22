<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {
        $sidebar = CommonFunction::getAdminSidebar();

        return view('adminpages.dashboard',
            [
                'pagename' => 'Dashboard',
                'subpagename' => 'Dashboard',
                'menu' => $sidebar
            ]
        );
    }

    public function berita()
    {

        $sidebar = CommonFunction::getAdminSidebar();
        return view('adminpages.berita',
            [
                'pagename' => 'Modul Berita',
                'subpagename' => 'Berita',
                'menu' => $sidebar
            ]
        );
    }
}
