<?php

class Beranda_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load models and libraries
        $this->load->model('Model_App');  // Assuming Berita model is created
        $this->load->helper('common_helper');  // Assuming you have a helper for CommonFunction methods
    }

    public function index()
    {
        // Get all berita
        $beritas = $this->Model_App->view_where_desc_limit('berita', ['aktif' => 'Y'], 'id_berita', 8)->result_array(); // Fetch data

        
                

        $beritaredaksis = $this->Model_App->view_where_desc_limit('berita', ['aktif' => 'Y', 'headline' => 'Y'], 'id_berita', 6)->result_array(); // Fetch data

        $beritas = get_sinopsis($beritas);
        $beritaredaksis = get_sinopsis($beritaredaksis);

        
        $beritaredaksis1 = array_slice($beritaredaksis, 0, 3);
        $beritaredaksis2 = array_slice($beritaredaksis, 3, 3);

        $carouselImages = $this->Model_App->view('iklanatas')->result_array(); // Fetch data
        $carouselImagess = [];

        foreach ($carouselImages as $key => $value) {
            $carouselImagess[] = $value['gambar'];
        }

        // Get the menu
        $menus = get_menu2();  // Assuming get_menu is a helper function

        // dd($menus);

        // Load the view and pass data
        $data = [
            'beritas' => $beritas,
            'menus' => $menus,
            'carouselImages' => $carouselImagess,
            'beritaredaksis1' => $beritaredaksis1,
            'beritaredaksis2' => $beritaredaksis2
        ];
        $data2['content'] = $this->load->view('alfas/pages/beranda', $data, TRUE);
        $data2['menus'] = $menus;
        $data2['identitas'] = get_identitas();

        $this->load->view('alfas/main', $data2);
    }
}
