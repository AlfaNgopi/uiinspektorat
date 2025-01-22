<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function dashboard()
    {
        $sidebar = CommonFunction::getAdminSidebar();

        return view(
            'adminpages.dashboard',
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
        return view(
            'adminpages.berita',
            [
                'pagename' => 'Modul Berita',
                'subpagename' => 'Berita',
                'menu' => $sidebar
            ]
        );
    }

    public function tambahberita()
    {



        $sidebar = CommonFunction::getAdminSidebar();
        return view(
            'adminpages.add_berita',
            [
                'pagename' => 'Modul Berita',
                'subpagename' => 'Tambah Berita',
                'menu' => $sidebar
            ]
        );
    }

    public function actionTambahBerita(Request $request)
    {
        
            $storeData = $request->all();



            $validate = Validator::make($storeData, [
                'title' => 'required|max:255',
                'context' => 'required',
                'category' => 'required',
                'is_redaksi' => 'required',
                'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);

            if ($validate->fails()) {

                dd($validate->errors());
                return redirect()->back()->withErrors($validate)->withInput();
            }

            if ($request->hasFile('img')) {
                $image = $request->file('img');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $path = $image->storeAs('/images', $imageName); // Save to 'storage/app/public/images'
                $storeData['img'] = 'storage/images/' . $imageName; // Store relative path for access
            }

            $user = Auth::user();

            $storeData['author_id'] = $user->id;
            

            

            Berita::create($storeData);
            Session()->flash('success', 'Produk berhasil ditambahkan');
            return redirect()->back();
        
    }
}
