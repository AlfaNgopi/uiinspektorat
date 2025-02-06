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

        $komentars = $this->Model_App->view_where('komentar', ['id_berita' => $berita['id_berita'], 'aktif' => 'Y'])->result_array();
        $countComments = count($komentars);



        if ($berita == null) {
            dd($berita);
            $this->load->view('/');
        }
        // Get the menu
        $menus = get_menu2(); 
        $beritasidebar = get_sidebarBerita();
        $breakingnews = get_breakingnews();

        // Load the view and pass data
        $data = [
            'page' => 'Berita',
            'berita' => $berita,
            'komentars' => $komentars,
            'countComments' => $countComments,
            'menus' => $menus,
            'beritasidebar' => $beritasidebar,
            'breakingnews' => $breakingnews,
            
        ];
        $data2['content'] = $this->load->view('alfas/pages/detailberita', $data, TRUE);
        $data2['identitas'] = get_identitas();

        $berita['dibaca'] = $berita['dibaca'] + 1;

        $this->Model_App->update('berita', $berita, ['id_berita' => $berita['id_berita']]);

        $this->load->view('alfas/main', $data2);
    }

    public function browse() {

        $page = (int) $this->input->get('page');
        $page = (!empty($page) && is_numeric($page) && $page > 0) ? $page : 1; // Default to page 1

        $dari = ($page - 1) * 10; // Correct OFFSET calculation

        $beritas = $this->Model_App->view_where_ordering_limit('berita', ['status' => 'Y'], 'id_berita', 'DESC', 10, $dari);

        $kategoris = $this->Model_App->view_ordering('kategori', 'sidebar', 'ASC');

        $beritas = get_sinopsis($beritas);
        $beritas = get_kategori($beritas);


        $menus = get_menu2(); 
        $beritasidebar = get_sidebarBerita();
        $breakingnews = get_breakingnews();

        $data = [
            'page' => 'Berita',
            'beritas' => $beritas,
            'menus' => $menus,
            'currentpage' => $page,
            'beritasidebar' => $beritasidebar,
            'breakingnews' => $breakingnews,
            'kategoris' => $kategoris,
            'currentKategori' => 'all',
        ];

        $data2['content'] = $this->load->view('alfas/pages/browseberita', $data, TRUE);
        $data2['identitas'] = get_identitas();

        $this->load->view('alfas/main', $data2);
    }

    public function browseByKategori($kategori) {

        $page = (int) $this->input->get('page');
        $page = (!empty($page) && is_numeric($page) && $page > 0) ? $page : 1; // Default to page 1

        $dari = ($page - 1) * 10; // Correct OFFSET calculation

        $kategoris = $this->Model_App->view_ordering('kategori', 'sidebar', 'ASC');


        if ($kategori == 'all') {
            
            $beritas = $this->Model_App->view_where_ordering_limit('berita', ['status' => 'Y'], 'id_berita', 'DESC', 10, $dari);
        } else {
            $currentKategori = array_filter($kategoris, function($k) use ($kategori) {
                return $k['kategori_seo'] == $kategori;
            });
            $currentKategori = reset($currentKategori);
            $where = ['status' => 'Y', 'id_kategori' => $currentKategori['id_kategori']];
            $beritas = $this->Model_App->view_where_ordering_limit('berita', $where, 'id_berita', 'DESC', 10, $dari);
        }

        $beritas = get_sinopsis($beritas);
        $beritas = get_kategori($beritas);


        $menus = get_menu2(); 
        $beritasidebar = get_sidebarBerita();
        $breakingnews = get_breakingnews();

        $data = [
            'page' => 'Berita',
            'beritas' => $beritas,
            'menus' => $menus,
            'currentpage' => $page,
            'beritasidebar' => $beritasidebar,
            'breakingnews' => $breakingnews,
            'kategoris' => $kategoris,
            'currentKategori' => $currentKategori['id_kategori'],
        ];
        $data2['content'] = $this->load->view('alfas/pages/browseberita', $data, TRUE);
        $data2['identitas'] = get_identitas();

        $this->load->view('alfas/main', $data2);
    }

    public function browseByCari() {

        $page = (int) $this->input->get('page');
        $page = (!empty($page) && is_numeric($page) && $page > 0) ? $page : 1; // Default to page 1

        $dari = ($page - 1) * 10; // Correct OFFSET calculation

        $keyword = $this->input->get('keyword');

        $kategoris = $this->Model_App->view_ordering('kategori', 'sidebar', 'ASC');

        $this->db->like('judul', $keyword);
        $this->db->or_like('isi_berita', $keyword);
        $this->db->order_by('id_berita', 'DESC');
        $this->db->limit(10, $dari);
        $beritas = $this->Model_App->view('berita')->result_array();

        

        $beritas = get_sinopsis($beritas);
        $beritas = get_kategori($beritas);

        $menus = get_menu2(); 
        $beritasidebar = get_sidebarBerita();
        $breakingnews = get_breakingnews();

        $data = [
            'page' => 'Berita',
            'beritas' => $beritas,
            'menus' => $menus,
            'currentpage' => $page,
            'beritasidebar' => $beritasidebar,
            'breakingnews' => $breakingnews,
            'kategoris' => $kategoris,
            'currentKategori' => 0,
        ];
        $data2['content'] = $this->load->view('alfas/pages/browseberita', $data, TRUE);
        $data2['identitas'] = get_identitas();

        $this->load->view('alfas/main', $data2);
    }
}
