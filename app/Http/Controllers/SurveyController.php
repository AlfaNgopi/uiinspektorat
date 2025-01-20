<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index()
    {

        $beritasidebar = CommonFunction::beritasSidebar();

        return view(
            'pages/survey',

            [
                'page' => 'Survey',
                'beritasidebar' => $beritasidebar,
            ]
        );
    }
}
