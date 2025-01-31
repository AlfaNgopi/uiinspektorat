<?php


class Hubungi extends CI_Controller
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
        $identitas = $this->Model_App->view('identitas')->row_array();

        // dd($identitas);



        $menus = get_menu2();
        $beritasidebar = get_sidebarBerita();

        $data = [
            'page' => 'Hubungi',
            'identitas' => $identitas,
            'menus' => $menus,
            'beritasidebar' => $beritasidebar
        ];

        

        $data2['content'] = $this->load->view('alfas/pages/hubungi', $data, TRUE);

        $this->load->view('alfas/main', $data2);


    }

    
}
