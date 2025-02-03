<?php


class Hubungi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load models and libraries
        $this->load->model('Model_App');
        $this->load->helper('common_helper');
        $this->load->helper('captcha');
    }

    public function index()
    {
        $identitas = $this->Model_App->view('identitas')->row_array();

        // dd($identitas);



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
            'page' => 'Hubungi',
            'identitas' => $identitas,
            'menus' => $menus,
            'beritasidebar' => $beritasidebar,
            'captcha' => $cap['image']
        ];

        

        $data2['content'] = $this->load->view('alfas/pages/hubungi', $data, TRUE);
        $data2['identitas'] = get_identitas();

        $this->load->view('alfas/main', $data2);


    }

    public function submit()
    {
        // Get form data
        $name = $this->input->post('name', TRUE);
        $email = $this->input->post('email', TRUE);
        $comment = $this->input->post('comment', TRUE);

        $id_berita = $this->input->post('id_berita', TRUE);

        // Validate inputs
        if (empty($name) || empty($email) || empty($comment)) {
            $this->session->set_flashdata('error', 'All fields are required!');
            redirect($_SERVER['HTTP_REFERER']);
        }

        // Save to database
        $data = [
            'nama' => $name,
            'email' => $email,
            'subjek' => $_SERVER['REMOTE_ADDR'],
            'pesan' => $comment,
            'tanggal' => date('Y-m-d'),
            'jam' => date('H:i:s'),
            'dibaca' => 'N'
        ];

        // dd($data);
        $this->Model_App->insert('hubungi', $data);

        // Set success message and redirect
        $this->session->set_flashdata('success', 'Comment posted successfully!');
        redirect($_SERVER['HTTP_REFERER']);
    }

    
}
