<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Berita_kategori;
use App\Models\DataInstansi;
use App\Models\Download;
use App\Models\Gallery;
use App\Models\Gambar;
use App\Models\Komentar;
use App\Models\Playlist;
use App\Models\Sensor_Komentar;
use App\Models\Video;
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

        $items = Berita::all()->toArray();
        $columns = array_keys($items[0]);

        $columns = array_diff($columns, ['subtitle', 'category', 'img_caption', 'is_redaksi','author_id', 'context', 'created_at', 'updated_at']);

        return view(
            'adminpages.common',
            [
                'pagename' => 'Modul Berita',
                'subpagename' => 'Berita',
                'routetambah' => 'admin.berita.tambah',
                'menu' => $sidebar,
                'items' => $items,
                'columns' => $columns
            ]
        );
    }

    public function tambahBerita()
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
            Session()->flash('success', 'Berita berhasil ditambahkan');
            return redirect()->back();
        
    }

    public function editBerita($id)
    {
        // dd($id);
        $berita = Berita::find($id);


        $menu = CommonFunction::getAdminSidebar();

        return view('adminpages.edit_berita', 
        [
            'pagename' => 'Modul Berita',
            'subpagename' => 'Berita',
            'menu' => $menu,
            'berita' => $berita
        ]);
    }

    public function actionEditBerita(Request $request)
    {
        $storeData = $request->all();

        $validate = Validator::make($storeData, [
            'title' => 'required|max:255',
            'context' => 'required',
            'category' => 'required',
            'is_redaksi' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        if ($validate->fails()) {
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

        Berita::find($storeData['id'])->update($storeData);
        Session()->flash('success', 'Berita berhasil diubah');
        return redirect()->back();
    }

    public function kategoriBerita()
    {
        $sidebar = CommonFunction::getAdminSidebar();

        $items = Berita_kategori::all()->toArray();

        $columns = array_keys($items[0]);
        $columns = array_diff($columns, ['created_at', 'updated_at']);


        return view(
            'adminpages.common',
            [
                'pagename' => 'Modul Berita',
                'subpagename' => 'Kategori Berita',
                'menu' => $sidebar,
                'routetambah' => 'admin.kategori-berita.tambah',
                'items' => $items,
                'columns' => $columns
            ]
        );
    }
    public function tambahKategoriBerita()
    {
        $sidebar = CommonFunction::getAdminSidebar();

        $kategori = Berita_kategori::all()->toArray();

        $formfields = [
            [
                'formname' => 'Nama',
                'name' => 'name',
                'type' => 'string',
                'value' => ''
            ],
            [
                'formname' => 'Status',
                'name' => 'active',
                'type' => 'radio',
                'value' => ''
            ],
            
        ];

        return view(
            'adminpages.commonform',
            [
                'pagename' => 'Modul Berita',
                'subpagename' => 'Kategori Berita',
                'formname' => 'Tambah Kategori Berita',
                'formactionroute' => 'actionTambahKategoriBerita',
                'formfields' => $formfields,

                'menu' => $sidebar
            ]
        );
    }


    public static function actionTambahKategoriBerita(Request $request)
    {
        $storeData = $request->all();

        $validate = Validator::make($storeData, [
            'name' => 'required|max:255',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        Berita_kategori::create($storeData);
        Session()->flash('success', 'Kategori Berita berhasil ditambahkan');
        return redirect()->back();
    }

    public function editKategoriBerita($id)
    {
        $kategori = Berita_kategori::find($id);

        $menu = CommonFunction::getAdminSidebar();

        return view('adminpages.edit_kategori_berita', 
        [
            'pagename' => 'Modul Berita',
            'subpagename' => 'Kategori Berita',
            'menu' => $menu,
            'kategori' => $kategori
        ]);
    }

    public function video(){
        $sidebar = CommonFunction::getAdminSidebar();

        $items = Video::all()->toArray();
        $columns = array_keys($items[0]);

        $columns = array_diff($columns, ['created_at', 'updated_at']);

        return view(
            'adminpages.common',
            [
                'pagename' => 'Modul Video',
                'subpagename' => 'Video',
                'menu' => $sidebar,
                'items' => $items,
                'columns' => $columns
            ]
        );
    }

    public function playlistVideo(){
        $sidebar = CommonFunction::getAdminSidebar();

        $items = Playlist::all()->toArray();
        $columns = array_keys($items[0]);

        $columns = array_diff($columns, ['created_at', 'updated_at', 'author_id']);

        return view(
            'adminpages.common',
            [
                'pagename' => 'Modul Video',
                'subpagename' => 'Playlist Video',
                'menu' => $sidebar,
                'items' => $items,
                'columns' => $columns
            ]
        );
    }

    public function galeri(){
        $sidebar = CommonFunction::getAdminSidebar();

        $items = Gallery::all()->toArray();
        $columns = array_keys($items[0]);

        $columns = array_diff($columns, ['created_at', 'updated_at', 'author_id']);

        return view(
            'adminpages.common',
            [
                'pagename' => 'Modul Gambar',
                'subpagename' => 'Galeri',
                'menu' => $sidebar,
                'items' => $items,
                'columns' => $columns
            ]
        );
    }

    public function gambar(){
        $sidebar = CommonFunction::getAdminSidebar();

        $items = Gambar::all()->toArray();
        $columns = array_keys($items[0]);

        $columns = array_diff($columns, ['created_at', 'updated_at', 'author_id']);

        return view(
            'adminpages.common',
            [
                'pagename' => 'Modul Gambar',
                'subpagename' => 'Gambar',
                'menu' => $sidebar,
                'items' => $items,
                'columns' => $columns
            ]
        );
    }

    public function dataInstansi(){
        $sidebar = CommonFunction::getAdminSidebar();

        $items = DataInstansi::all()->toArray();
        $columns = array_keys($items[0]);
        $columns = array_diff($columns, ['created_at', 'updated_at']);

        return view(
            'adminpages.common',
            [
                'pagename' => 'Data Instansi',
                'subpagename' => 'Data Instansi',
                'menu' => $sidebar,
                'items' => $items,
                'columns' => $columns
            ]
        );
    }

    public function komentar(){
        $sidebar = CommonFunction::getAdminSidebar();

        $items = Komentar::all()->toArray();
        $columns = array_keys($items[0]);
        $columns = array_diff($columns, ['created_at', 'updated_at']);

        return view(
            'adminpages.common',
            [
                'pagename' => 'Komentar',
                'subpagename' => 'Komentar',
                'menu' => $sidebar,
                'items' => $items,
                'columns' => $columns
            ]
        );
    }

    public function sensorKomentar(){
        $sidebar = CommonFunction::getAdminSidebar();

        $items = Sensor_Komentar::all()->toArray();
        $columns = array_keys($items[0]);
        $columns = array_diff($columns, ['created_at', 'updated_at']);

        return view(
            'adminpages.common',
            [
                'pagename' => 'Sensor Komentar',
                'subpagename' => 'Sensor Komentar',
                'menu' => $sidebar,
                'items' => $items,
                'columns' => $columns
            ]
        );
    }

    public function downloadArea(){
        $sidebar = CommonFunction::getAdminSidebar();

        $items = Download::all()->toArray();
        $columns = array_keys($items[0]);
        $columns = array_diff($columns, ['created_at', 'updated_at']);

        return view(
            'adminpages.common',
            [
                'pagename' => 'Download Area',
                'subpagename' => 'Download Area',
                'menu' => $sidebar,
                'items' => $items,
                'columns' => $columns
            ]
        );
    }

    public function identitasWebsite(){
        $sidebar = CommonFunction::getAdminSidebar();

        $formfields = [
            [
                'formname' => 'Nama Website',
                'name' => 'website_name',
                'type' => 'string',
                'value' => 'Website Name'
            ],
            [
                'formname' => 'Deskripsi Website',
                'name' => 'website_description',
                'type' => 'string',
                'value' => 'Website Description'
            ],
            [
                'formname' => 'Alamat Website',
                'name' => 'website_address',
                'type' => 'string',
                'value' => 'Website Address'
            ],
            [
                'formname' => 'Email Website',
                'name' => 'website_email',
                'type' => 'string',
                'value' => 'Website Email'
            ],
            [
                'formname' => 'Telepon Website',
                'name' => 'website_phone',
                'type' => 'string',
                'value' => 'Website Phone'
            ]
            
        ];

        return view(
            'adminpages.commonform',
            [
                'pagename' => 'Identitas Website',
                'subpagename' => 'Identitas Website',
                'menu' => $sidebar,
                'formname' => 'Identitas Website',
                'formactionroute' => 'actionEditIdentitasWebsite',
                'formfields' => $formfields
            ]
        );
    }


}
