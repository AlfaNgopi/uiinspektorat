<?php

class BerandaController extends CI_Controller {

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
        $beritas = $this->Model_app->view('berita')->result_array(); // Fetch data

        // Get the last 8 berita
        $beritas = array_slice($beritas, -8);

        // Filter redaksi berita
        $beritaredaksis = array_filter($beritas, function ($berita) {
            return $berita['is_redaksi'] == true;
        });

        // Get the first 3 redaksi berita
        $beritaredaksis = array_slice($beritaredaksis, -6);
        $beritaredaksis1 = array_slice($beritaredaksis, 0, 3);
        $beritaredaksis2 = array_slice($beritaredaksis, 3, 3);

        // Get the menu
        $menus = get_menu();  // Assuming get_menu is a helper function

        // Load the view and pass data
        $data = [
            'beritas' => $beritas,
            'menus' => $menus,
            'beritaredaksis1' => $beritaredaksis1,
            'beritaredaksis2' => $beritaredaksis2
        ];

        $this->load->view('pages/beranda', $data);
    }
}
