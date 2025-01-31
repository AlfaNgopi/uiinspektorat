<?php


class Download extends CI_Controller
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
        $page = (int) $this->input->get('page');
        $page = (!empty($page) && is_numeric($page) && $page > 0) ? $page : 1; // Default to page 1

        $dari = ($page - 1) * 30; // Correct OFFSET calculation

        $downloads = $this->Model_App->view_ordering('download', 'id_download', 'DESC');

        $downloads = set_numbering($downloads);
        
        $downloads = array_slice($downloads, $dari, 30);

        // dd($downloads);


        $menus = get_menu2();
        $beritasidebar = get_sidebarBerita();

        $data = [
            'page' => 'Halaman',
            'downloads' => $downloads,
            'menus' => $menus,
            'beritasidebar' => $beritasidebar
        ];



        $data2['content'] = $this->load->view('alfas/pages/download', $data, TRUE);

        $this->load->view('alfas/main', $data2);
    }
}
