<?php


class Halaman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load models and libraries
        $this->load->model('Model_App');
        $this->load->helper('common_helper');
    }

    public function detail($judul_seo)
    {
        $halaman = $this->Model_App->view_where('halamanstatis', ['judul_seo' => $judul_seo])->row_array();

        if ($halaman == null) {
            
            return view('/');
        }
        

        $menus = get_menu2();
        $beritasidebar = get_sidebarBerita();

        $data = [
            'page' => 'Halaman',
            'halaman' => $halaman,
            'menus' => $menus,
            'beritasidebar' => $beritasidebar
        ];

        

        $data2['content'] = $this->load->view('alfas/pages/halaman', $data, TRUE);

        $this->load->view('alfas/main', $data2);


    }

    
}
