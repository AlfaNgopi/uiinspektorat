<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Model_App');  
        $this->load->helper('common_helper');  
    }

    public function submit() {
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
            'id_berita' => $id_berita,
            'nama_komentar' => $name,
            'email' => $email,
            'isi_komentar' => $comment,
            'tgl' => date('Y-m-d'),
            'jam_komentar' => date('H:i:s'),
            'aktif' => 'Y'
        ];

        // dd($data);
        $this->Model_App->insert('komentar', $data);

        // Set success message and redirect
        $this->session->set_flashdata('success', 'Comment posted successfully!');
        redirect($_SERVER['HTTP_REFERER']);
    }
}
