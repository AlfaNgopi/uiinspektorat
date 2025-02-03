<?php


class Polling extends CI_Controller
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

        $polling = $this->Model_App->view_where('poling', ['status' => 'jawaban', 'aktif' => 'Y'])->result_array();



        if ($polling == null) {
            
            return view('/');
        }

        $jawabans = [];
        $total = array_sum(array_column($polling, 'rating'));
        $i = 0;
        foreach ($polling as $key => $value) {
            $jawabans[$i]['jawaban'] = $value['pilihan'];
            $jawabans[$i]['jumlah'] = $value['rating'];
            $jawabans[$i]['persen'] = round(($value['rating'] / $total) * 100, 2) . '%';
            $jawabans[$i]['color'] = '#' . substr(md5(rand()), 0, 6);
            $jawabans[$i]['width'] = round(($value['rating'] / $total) * 100, 2) . '%';
            $i++;
        }
        

        $menus = get_menu2();
        $beritasidebar = get_sidebarBerita();

        $data = [
            'page' => 'Polling',
            'jawabans' => $jawabans,
            'total' => $total,
            'menus' => $menus,
            'beritasidebar' => $beritasidebar
        ];

        

        $data2['content'] = $this->load->view('alfas/pages/polling', $data, TRUE);
        $data2['identitas'] = get_identitas();

        $this->load->view('alfas/main', $data2);


    }

    
}
