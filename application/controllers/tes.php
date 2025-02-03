<?php

class tes extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load models and libraries
        $this->load->model('Model_App');  // Assuming Berita model is created
        $this->load->helper('common_helper');  // Assuming you have a helper for CommonFunction methods
    }

    public function index()
    {
        

        $this->load->view('tes');
    }
}
