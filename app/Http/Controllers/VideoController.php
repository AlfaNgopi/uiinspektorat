<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function videos()
    {

        // $path = storage_path('app/videos.json');
        // if (!file_exists($path)) {
        //     abort(404, 'File not found');
        // }

        // $json = file_get_contents($path);
        // $videos = json_decode($json, true);

        // if (json_last_error() !== JSON_ERROR_NONE) {
        //     abort(500, 'Error decoding JSON');
        // }

        // $mainvideos = array_slice($videos, -10);

        $beritasidebar = CommonFunction::beritasSidebar();
        $menus = CommonFunction::getMenu();

        return view(
            'pages/videos',

            [
                'page' => 'Videos',
                'menus' => $menus,
                // 'videos' => $mainvideos,
                'beritasidebar' => $beritasidebar,
            ]
        );
    }

    public function video($title)
    {

        $path = storage_path('app/videos.json');
        if (!file_exists($path)) {
            abort(404, 'File not found');
        }

        $json = file_get_contents($path);
        $videos = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            abort(500, 'Error decoding JSON');
        }

        $video = null;
        foreach ($videos as $b) {
            if (strtolower(str_replace(' ', '-', $b['title'])) == $title) {
                $video = $b;

                break;
            }
        }

        if ($video == null) {
            return view('pages/404', ["title" => "404 Not Found"]);
        }

        $beritasidebar = CommonFunction::beritasSidebar();
        $menus = CommonFunction::getMenu();

        return view(
            'pages/video',
            [
                "page" => "Video",
                "menus" => $menus,
                "video" => $video,
                "beritasidebar" => $beritasidebar
            ]
        );
    }
}
