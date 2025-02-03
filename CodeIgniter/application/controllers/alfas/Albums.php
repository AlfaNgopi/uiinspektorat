<?php


class Albums extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load models and libraries
        $this->load->model('Model_App');
        $this->load->helper('common_helper');
    }

    public function index()
    {
        $albums = $this->Model_App->view('album')->result_array();

        $albums = get_gbr_count($albums);
        $albums = get_first_img($albums);

        // dd($albums);

        $menus = get_menu2();
        $beritasidebar = get_sidebarBerita();

        $data = [
            'page' => 'Album',
            'albums' => $albums,
            'menus' => $menus,
            'beritasidebar' => $beritasidebar
        ];

        

        $data2['content'] = $this->load->view('alfas/pages/album', $data, TRUE);
        $data2['identitas'] = get_identitas();

        $this->load->view('alfas/main', $data2);


    }

    public function detail($album_seo, $gambar_seo)
    {


        $album = $this->Model_App->view_where('album', ['album_seo' => $album_seo])->row_array();
        $galleries = $this->Model_App->view_where('gallery', ['id_album' => $album['id_album']])->result_array();

        $gambar = $this->Model_App->view_where('gallery', ['gallery_seo' => $gambar_seo])->row_array();

        $menus = get_menu2();
        $beritasidebar = get_sidebarBerita();

        $data = [
            'page' => 'Album',
            'album' => $album,
            'gambars' => $galleries,
            'gambar' => $gambar,   
            'menus' => $menus,
            'beritasidebar' => $beritasidebar
        ];

        $data2['content'] = $this->load->view('alfas/pages/gambar', $data, TRUE);
        $data2['identitas'] = get_identitas();

        $this->load->view('alfas/main', $data2);
    }
}
