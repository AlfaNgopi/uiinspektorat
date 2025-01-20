<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function document($title)
    {

        $path = storage_path('app/document.json');
        if (!file_exists($path)) {
            abort(404, 'File not found');
        }

        $json = file_get_contents($path);
        $documents = json_decode($json, true);

        $document = null;
        foreach ($documents as $b) {
            if (strtolower(str_replace(' ', '-', $b['title'])) == $title) {
                $document = $b;

                break;
            }
        }




        if ($document == null) {
            return view('document/404', ["title" => "404 Not Found"]);
        }

        $context = $document['text'];

        // Format bold (**text** to <b>text</b>)
        $formatted = preg_replace('/\*\*(.*?)\*\*/', '<b>$1</b>', $context);

        // Format italics (*text* to <i>text</i>)
        $formatted = preg_replace('/\*(.*?)\*/', '<i>$1</i>', $formatted);

        // Convert multiple empty lines (\n\n) to <br>
        $formatted = preg_replace('/(\r?\n){2,}/', '<br>', $formatted);

        // Convert single newlines (\n) to <br>
        $formatted = nl2br($formatted);


        $beritasidebar = CommonFunction::beritasSidebar();



        return view(
            'pages/pages_nocomment',
            [

                'page' => 'Document',
                'document' => $document,
                'formatted' => $formatted,
                'beritasidebar' => $beritasidebar
            ]
        );
    }
}
