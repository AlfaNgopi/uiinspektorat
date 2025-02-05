<?php

function get_identitas() 
{
    $ci = &get_instance();
    $identitas = $ci->db->query("SELECT * FROM identitas")->row_array();

    $links = $ci->db->query("SELECT * FROM banner")->result_array();

    $identitas['links'] = $links;

    return $identitas;
}

function get_menu2()
{
    $ci = &get_instance();
    $menu = $ci->db->query("SELECT * FROM menu WHERE aktif = 'Ya' AND position = 'bottom' ORDER BY urutan ASC")->result_array();

    // dd($menu);

    $menu = buildMenuTree($menu);

    // dd($menu);


    return $menu;
}

function buildMenuTree($menuItems, $parentId = 0)
{
    $branch = [];
    foreach ($menuItems as $menu) {
        if ($menu['id_parent'] == $parentId) {
            $children = buildMenuTree($menuItems, $menu['id_menu']);
            if (!empty($children)) {
                $menu['children'] = $children;
            }
            $branch[] = $menu;
        }
    }
    return $branch;
}

function get_sidebarBerita()
{
    $ci = &get_instance();
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
    $ci = &get_instance();
    foreach ($beritas as $key => $berita) {
        $kategori = $ci->db->query("SELECT * FROM kategori WHERE id_kategori = " . $berita['id_kategori'])->row_array();
        $beritas[$key]['kategori_name'] = $kategori['nama_kategori'];
    }

    return $beritas;
}

function get_gbr_count($albums)
{
    $ci = &get_instance();
    foreach ($albums as $key => $album) {
        $gbr_count = $ci->db->query("SELECT COUNT(id_gallery) as gbr_count FROM gallery WHERE id_album = " . $album['id_album'])->row_array();
        $albums[$key]['gbr_count'] = $gbr_count['gbr_count'];
    }

    return $albums;
}

function get_first_img($albums)
{
    $ci = &get_instance();
    foreach ($albums as $key => $album) {
        $first_img = $ci->db->query("SELECT * FROM gallery WHERE id_album = " . $album['id_album'] . " ORDER BY id_gallery ASC LIMIT 1")->row_array();

        $albums[$key]['first_img'] = $first_img['gallery_seo'];
    }

    return $albums;
}

function get_embed_urls($videos)
{
    foreach ($videos as $key => $video) {
        if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $video['youtube'], $match)) {
            $url = "https://www.youtube-nocookie.com/embed/" . $match[1];
        } else {
            $url = $video['youtube'];
        }
        $videos[$key]['embed_url'] = $url;
    }

    return $videos;
}

function get_embed_url($video)
{
    if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $video['youtube'], $match)) {
        $url = "https://www.youtube.com/embed/" . $match[1];
    } else {
        $url = $video['youtube'];
    }

    $video['embed_url'] = $url;

    return $video;
}

function get_uploader_name($videos)
{
    $ci = &get_instance();
    foreach ($videos as $key => $video) {
        $playlist = $ci->db->query("SELECT * FROM playlist WHERE id_playlist = " . $video['id_playlist'])->row_array();
        $videos[$key]['username'] = $playlist['username'];
    }

    return $videos;
}

function get_playlist_name($videos)
{
    $ci = &get_instance();
    foreach ($videos as $key => $video) {
        $playlist = $ci->db->query("SELECT * FROM playlist WHERE id_playlist = " . $video['id_playlist'])->row_array();
        $videos[$key]['playlist_name'] = $playlist['jdl_playlist'];
    }

    return $videos;
}

function set_numbering($downloads, $initnumber = 1)
{
    $numbering = $initnumber;
    foreach ($downloads as $key => $download) {
        $downloads[$key]['numbering'] = $numbering;
        $numbering++;
    }

    return $downloads;
}

function dd(...$vars)
{
    echo '<pre>';
    foreach ($vars as $var) {
        print_r($var); // You can also use var_dump($var);
    }
    echo '</pre>';
    exit; // Stops execution
}
