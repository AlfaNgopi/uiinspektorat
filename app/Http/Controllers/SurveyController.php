<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index()
    {

        $beritasidebar = CommonFunction::beritasSidebar();
        $menus = CommonFunction::getMenu();

        return view(
            'pages/survey',

            [
                'page' => 'Survey',
                'menus' => $menus,
                'beritasidebar' => $beritasidebar,
            ]
        );
    }
}
