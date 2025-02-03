<?php


class Survey extends CI_Controller
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
        // $tokenInstansis = $this->Model_App->view('instansi_token')->result_array();

        
        

        $menus = get_menu2();
        $beritasidebar = get_sidebarBerita();


        $vals = array(
            'word'	 => 'Random word',
            'img_path'	 => './captcha/',
            'img_url'	 => base_url().'captcha/',
            'font_path' => './asset/Tahoma.ttf',
            'font_size'     => 17,
            'img_width'	 => '150',
            'img_height' => 45,
            'border' => 0, 
            'word_length'   => 5,
            'expiration' => 7200
        );

        $cap = create_captcha($vals);
        $this->session->set_userdata('mycaptcha', $cap['word']);

        $data = [
            'page' => 'Halaman',
            'captcha' => $cap['image'],
            'menus' => $menus,
            'beritasidebar' => $beritasidebar
        ];        


        $data2['content'] = $this->load->view('alfas/pages/survey', $data, TRUE);
        $data2['identitas'] = get_identitas();

        $this->load->view('alfas/main', $data2);


    }

    
}
