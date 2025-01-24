<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Survey extends CI_Controller
{
    public function index()
    {
        $config['base_url'] = base_url().'survey/index/';
        $data['title'] = 'Survey';
        $data['description'] = 'Silahkan Mengisi Form Dibawah ini';
        $data['keywords'] = 'survey, kuisioner, responder, kritik, saran, pesan';
        $this->load->helper('captcha');
        $vals = array(
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
        $data['image'] = $cap['image'];
        $this->session->set_userdata('mycaptcha', $cap['word']);
        $this->template->load(template().'/template', template().'/survey-token', $data);
    }
    
    public function berhasil()
    {
        $config['base_url'] = base_url().'survey/index/';
        $data['title'] = 'Survey';
        $data['description'] = 'Silahkan Mengisi Form Dibawah ini';
        $data['keywords'] = 'survey, kuisioner, responder, kritik, saran, pesan';
        $this->load->helper('captcha');
        $vals = array(
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
        $data['image'] = $cap['image'];
        $this->session->set_userdata('mycaptcha', $cap['word']);
        $this->template->load(template().'/template', template().'/survey-berhasil', $data);
    }
    public function responden()
    {
        if ($this->session->userdata('cek-token')==true) {
            $data['title'] = 'Data Responder';
            $data['description'] = description();
            $data['keywords'] = keywords();
            $data['id_token'] = $this->session->userdata('data-token');
            $where = ['id_instansi_token' => $data['id_token']];
            $qcek_token = $this->model_utama->cek_responden($where);
            $jumdata = $qcek_token->num_rows();
            if ($jumdata > 0) {
                $data['responden'] = $qcek_token->row_array();
            } else {
                $data['responden'] = "";
            }
            $this->template->load(template().'/template', template().'/survey-responden', $data);
        } else {
            redirect('survey');
        }
    }
    
    public function kuesioner()
    {
        if ($this->session->userdata('cek-responden')==true) {
            $data['title'] = 'Kuisioner';
            $data['description'] = description();
            $data['keywords'] = keywords();
            $data['id_token'] = $this->session->userdata('data-token');
            $data['pertanyaan'] = $this->model_utama->view_where('survey_pertanyaan', ['status' => 'aktif', 'id_group_pilihan !=' => null])->result_array();
            $data['pertanyaan_text_input'] = $this->model_utama->view_where('survey_pertanyaan', ['status' => 'aktif', 'id_group_pilihan' => null])->result_array();
            $data['pilihan'] = $this->model_utama->view_ordering('survey_pilihan', 'urutan asc')->result_array();
            $this->template->load(template().'/template', template().'/survey-kuesioner', $data);
        } else {
            redirect('survey/responden');
        }
    }
    /*-----------------------------------------------*/
    public function prosesKuesioner()
    {
        if (isset($_POST['submit'])) {
            $responden = $this->input->post('responden', true);
            $pilihan = $this->input->post('pilihan', true);
            $tanya = $this->input->post('tanya', true);
            foreach ($pilihan as $id_tanya => $id_pilihan) {
                $data = [
                    'id_pertanyaan'=> $id_tanya,
                    'id_pilihan' => $id_pilihan,
                    'id_responden' => $responden,
                    'value' => null,
                ];
                $this->prosesInputKuesioner($data);
            }
            foreach ($tanya as $id_tanya => $value) {
                $data = [
                    'id_pertanyaan'=> $id_tanya,
                    'id_pilihan' => null,
                    'id_responden' => $responden,
                    'value' => $value,
                ];
                $this->prosesInputKuesioner($data);
            }
            $this->session->set_flashdata('message', 'Terima kasih telah bersedia mengisi kuesioner.');
            redirect('survey/berhasil');
        }
    }

    private function prosesInputKuesioner($data)
    {
        $where = ['id_pertanyaan' => $data['id_pertanyaan'], 'id_responden' => $data['id_responden']];
        $qcek_jawaban = $this->model_utama->cek_jawaban($where);
        $jum_jawaban = $qcek_jawaban->num_rows();
        if ($jum_jawaban>0) {
            if ($this->model_utama->update('survey_jawaban', $data, $where)) {
                $this->session->set_flashdata('message', 'INPUT BERHASIL');
            // redirect('survey/berhasil');
            } else {
                /* tidak bisa input database */
                $this->session->set_flashdata('message', 'Ada Permasalahan Pada Basis Data, Silahkan Coba Beberapa saat Kembali');
                redirect('survey');
            }
        } else {
            if ($this->model_utama->insert('survey_jawaban', $data)) {
                $this->session->set_flashdata('message', 'INPUT BERHASIL');
            // redirect('survey/berhasil');
            } else {
                /* tidak bisa input database */
                $this->session->set_flashdata('message', 'Ada Permasalahan Pada Basis Data, Silahkan Coba Beberapa saat Kembali');
                redirect('survey');
            }
        }
    }

    public function prosesResponden()
    {
        if (isset($_POST['submit'])) {
            $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
            $this->form_validation->set_rules('jkel', 'Jenis Kelamin', 'required');
            $this->form_validation->set_rules('tanggallahir', 'Tanggal Lahir', 'required');
            $this->form_validation->set_rules('jenjang', 'Jenjang Pendidikan', 'required');
            if ($this->form_validation->run()) {
                $data = [
                    'id_instansi_token' => $this->input->post('token', true),
                    'nama' => $this->input->post('nama', true),
                    'email' => $this->input->post('email', true),
                    'jabatan' => $this->input->post('jabatan', true),
                    'jenis_kelamin' => $this->input->post('jkel', true),
                    'tanggal_lahir' => $this->input->post('tanggallahir', true),
                    'jenjang_pendidikan' => $this->input->post('jenjang', true),
                ];
                $where = ['id_instansi_token' => $data['id_instansi_token']];
                $qcek_responden = $this->model_utama->cek_responden($where);
                $jum_responden = $qcek_responden->num_rows();
                if ($jum_responden>0) {
                    if ($this->model_utama->update('survey_responden', $data, $where)) {
                        // $this->session->set_flashdata('message', 'Data Responden Telah Terbaharui');
                        $this->session->set_flashdata('cek-responden', true);
                        $this->session->set_flashdata('data-token', $data['id_instansi_token']);
                        redirect('survey/kuesioner');
                    } else {
                        /* tidak bisa input database */
                        $this->session->set_flashdata('message', 'Ada Permasalahan Pada Basis Data, Silahkan Coba Beberapa saat Kembali');
                        $this->session->set_flashdata('cek-token', true);
                        $this->session->set_flashdata('data-token', $this->input->post('token', true));
                    }
                } else {
                    if ($this->model_utama->insert('survey_responden', $data)) {
                        // $this->session->set_flashdata('message', 'Data Responden Telah Tersimpan');
                        $this->session->set_flashdata('cek-responden', true);
                        redirect('survey/kuesioner');
                    } else {
                        /* tidak bisa input database */
                        $this->session->set_flashdata('message', 'Ada Permasalahan Pada Basis Data, Silahkan Coba Beberapa saat Kembali');
                        $this->session->set_flashdata('cek-token', true);
                        $this->session->set_flashdata('data-token', $this->input->post('token', true));
                    }
                }
            } else {
                /* ada pesan error validasi */
                $this->session->set_flashdata('data-token', $this->input->post('token', true));
                $this->session->set_flashdata('cek-token', true);
                $this->responden();
            }
        } else {
            redirect('survey');
        }
    }
    public function prosesToken()
    {
        if (isset($_POST['submit'])) {
            if ($this->input->post() && (strtolower($this->input->post('security_code')) == strtolower($this->session->userdata('mycaptcha')))) {
                $time_now=date('Y-m-d');
                $token= $this->input->post('token', true);
                $cek=$this->model_utama->cek_token($token, 'instansi_token');
                $row_cek = $cek->row_array();
                $total = $cek->num_rows();
                if ($total > 0) {
                    if ($time_now <=$row_cek['batas_token']) {
                        // $data = [
                        // 	'token_log'=>$row_cek['id_inst'],
                        // 	'subjek'=>$_SERVER['REMOTE_ADDR']
                        // ];
                        // $this->session->set_userdata($data);
                        // $this->model_utama->insert('instansi',$data);
                        
                        $this->session->set_flashdata('data-token', $row_cek['id_token']);
                        $this->session->set_flashdata('cek-token', true);
                        redirect('survey/responden');
                    } else {
                        $this->session->set_flashdata('message', 'Token Expired!!');
                        redirect('survey');
                    }
                } else {
                    $this->session->set_flashdata('message', 'Token Salah!!');
                    redirect('survey');
                }
            } else {
                $this->session->set_flashdata('message', 'Security Code yang anda masukkan salah!');
                redirect('survey');
            }
        } else {
            redirect('survey');
        }
    }
}
