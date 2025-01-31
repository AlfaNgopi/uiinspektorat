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
        $beritas = $this->Model_App->view('berita')->result_array(); // Fetch data

        



        // Filter redaksi berita
        $beritaredaksis = array_filter($beritas, function ($berita) {
            return $berita['headline'] == 'Y';
        });

        

        // Get the last x berita
        $beritas = array_slice($beritas, -8);
        $beritaredaksis = array_slice($beritaredaksis, -6);


        $beritas = get_sinopsis($beritas);
        $beritaredaksis = get_sinopsis($beritaredaksis);

        
        $beritaredaksis1 = array_slice($beritaredaksis, 0, 3);
        $beritaredaksis2 = array_slice($beritaredaksis, 3, 3);

        // Get the menu
        $menus = get_menu2();  // Assuming get_menu is a helper function

        // dd($menus);

        // Load the view and pass data
        $data = [
            'beritas' => $beritas,
            'menus' => $menus,
            'beritaredaksis1' => $beritaredaksis1,
            'beritaredaksis2' => $beritaredaksis2
        ];
        $data2['content'] = $this->load->view('alfas/pages/beranda', $data, TRUE);
        $data2['menus'] = $menus;

        $this->load->view('alfas/main', $data2);
    }
}
