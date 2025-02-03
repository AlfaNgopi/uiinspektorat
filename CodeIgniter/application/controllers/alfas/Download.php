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

        $downloads = $this->Model_App->view_where_ordering_limit('download', [], 'id_download', 'DESC', 30, $dari);

        // dd($downloads);

        $downloads = set_numbering($downloads);
        
        // dd($downloads);


        $menus = get_menu2();
        $beritasidebar = get_sidebarBerita();

        $data = [
            'page' => 'Halaman',
            'downloads' => $downloads,
            'currentpage' => $page,
            'menus' => $menus,
            'beritasidebar' => $beritasidebar
        ];

        



        $data2['content'] = $this->load->view('alfas/pages/download', $data, TRUE);
        $data2['identitas'] = get_identitas();

        $this->load->view('alfas/main', $data2);
    }

    public function downloadaction($id_download)
    {
        $download = $this->Model_App->view_where('download', ['id_download' => $id_download])->row_array();

        if ($download == null) {
            
            return view('/');
        }
        

        

        // Update the page view count
        $download['hits'] = $download['hits'] + 1;
        $this->Model_App->update('download', $download, ['id_download' => $download['id_download']]);

        // Redirect to the download URL
        redirect(base_url('asset/files/'.$download['nama_file']));
    }
        
}
