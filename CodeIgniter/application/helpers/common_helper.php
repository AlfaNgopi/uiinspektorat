<?php
    function get_menu()
    {
        $ci = & get_instance();
        $menu = $ci->db->query("SELECT * FROM menu")->result_array();



        return $menu;
    }

    function get_sidebarBerita()
    {
        $ci = & get_instance();
        $sidebarBerita = $ci->db->query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 6")->result_array();

        $sidebarBerita = get_kategori($sidebarBerita);

        return $sidebarBerita;
    }

    function get_sinopsis($beritas)
    {
        
        foreach ($beritas as $key => $berita) {
            $isi_berita = strip_tags($berita['isi_berita']);
            $isi = substr($isi_berita, 0, 220);
            $isi = substr($isi_berita, 0, strrpos($isi, " "));
            $beritas[$key]['sinopsis'] = $isi;
        }

        

        return $beritas;
    }

    

    function get_kategori($beritas)
    {
        $ci = & get_instance();
        foreach ($beritas as $key => $berita) {
            $kategori = $ci->db->query("SELECT * FROM kategori WHERE id_kategori = " . $berita['id_kategori'])->row_array();
            $beritas[$key]['kategori_name'] = $kategori['nama_kategori'];
        }

        return $beritas;
    }

    function get_gbr_count($albums)
    {
        $ci = & get_instance();
        foreach ($albums as $key => $album) {
            $gbr_count = $ci->db->query("SELECT COUNT(id_gallery) as gbr_count FROM gallery WHERE id_album = " . $album['id_album'])->row_array();
            $albums[$key]['gbr_count'] = $gbr_count['gbr_count'];
        }

        return $albums;
    }

    function get_first_img($albums)
    {
        $ci = & get_instance();
        foreach ($albums as $key => $album) {
            $first_img = $ci->db->query("SELECT * FROM gallery WHERE id_album = " . $album['id_album'] . " ORDER BY id_gallery ASC LIMIT 1")->row_array();
            
            $albums[$key]['first_img'] = $first_img['gallery_seo'];
        }

        return $albums;
    }

    function dd(...$vars) {
        echo '<pre>';
        foreach ($vars as $var) {
            print_r($var); // You can also use var_dump($var);
        }
        echo '</pre>';
        exit; // Stops execution
    }