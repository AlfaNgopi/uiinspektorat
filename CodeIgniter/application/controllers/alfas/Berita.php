<?php

class Berita extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load models and libraries
        $this->load->model('Model_App');  
        $this->load->helper('common_helper');  
    }

    public function detail($title)
    {

        
        $berita = $this->Model_App->view_where('berita', ['judul_seo' => $title])->row_array();


        if ($berita == null) {
            dd($berita);
            return view('/',);
        }
        // Get the menu
        $menus = get_menu2(); 
        $beritasidebar = get_sidebarBerita();

        // Load the view and pass data
        $data = [
            'page' => 'Berita',
            'berita' => $berita,
            'menus' => $menus,
            'beritasidebar' => $beritasidebar
            
        ];
        $data2['content'] = $this->load->view('alfas/pages/detailberita', $data, TRUE);

        $this->load->view('alfas/main', $data2);
    }

    public function browse() {

        $beritas = $this->Model_App->view_ordering_limit('berita', 'id_berita', 'DESC', 0, 10)->result_array();

        $kategoris = $this->Model_App->view('kategori')->result_array();

        $beritas = get_sinopsis($beritas);
        $beritas = get_kategori($beritas);


        $menus = get_menu2(); 
        $beritasidebar = get_sidebarBerita();

        $data = [
            'page' => 'Berita',
            'beritas' => $beritas,
            'menus' => $menus,
            'beritasidebar' => $beritasidebar,
            'kategoris' => $kategoris,
            'currentKategori' => 'all',
        ];
        $data2['content'] = $this->load->view('alfas/pages/browseberita', $data, TRUE);

        $this->load->view('alfas/main', $data2);
    }

    public function browseByKategori($kategori) {

        $kategoris = $this->Model_App->view('kategori')->result_array();

        if ($kategori == 'all') {
            $this->db->order_by('id', 'DESC');
            $this->db->limit(10);
            $beritas = $this->Model_App->view('berita')->result_array();
        } else {
            $currentKategori = array_filter($kategoris, function($k) use ($kategori) {
                return $k['kategori_seo'] == $kategori;
            });
            $currentKategori = reset($currentKategori);

            $this->db->order_by('id_berita', 'DESC');
            $this->db->limit(10);
            $beritas = $this->Model_App->view_where('berita', ['id_kategori' => $currentKategori['id_kategori']])->result_array();
        }

        $beritas = get_sinopsis($beritas);
        $beritas = get_kategori($beritas);


        $menus = get_menu2(); 
        $beritasidebar = get_sidebarBerita();

        $data = [
            'page' => 'Berita',
            'beritas' => $beritas,
            'menus' => $menus,
            'beritasidebar' => $beritasidebar,
            'kategoris' => $kategoris,
            'currentKategori' => $currentKategori['id_kategori'],
        ];
        $data2['content'] = $this->load->view('alfas/pages/browseberita', $data, TRUE);

        $this->load->view('alfas/main', $data2);
    }

    public function browseByCari() {

        $keyword = $this->input->get('keyword');

        $kategoris = $this->Model_App->view('kategori')->result_array();

        $this->db->like('judul', $keyword);
        $this->db->or_like('isi_berita', $keyword);
        $this->db->order_by('id_berita', 'DESC');
        $this->db->limit(10);
        $beritas = $this->Model_App->view('berita')->result_array();

        

        $beritas = get_sinopsis($beritas);
        $beritas = get_kategori($beritas);

        $menus = get_menu2(); 
        $beritasidebar = get_sidebarBerita();

        $data = [
            'page' => 'Berita',
            'beritas' => $beritas,
            'menus' => $menus,
            'beritasidebar' => $beritasidebar,
            'kategoris' => $kategoris,
            'currentKategori' => 0,
        ];
        $data2['content'] = $this->load->view('alfas/pages/browseberita', $data, TRUE);

        $this->load->view('alfas/main', $data2);
    }
}
