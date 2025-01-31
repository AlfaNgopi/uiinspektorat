<?php


class Video extends CI_Controller
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
        $playlists = $this->Model_App->view('playlist')->result_array();

        $available_playlists = [];

        foreach ($playlists as $playlist) {
            if ($playlist['aktif'] == 'Y') {
                $available_playlists[] = $playlist['id_playlist'];
            }
        }

        $this->db->where_in('id_playlist', $available_playlists);
        $videos = $this->Model_App->view_desc_limit('video', 'id_video', '8')->result_array();

        $videos = get_uploader_name($videos);
        $videos = get_embed_urls($videos);
        $videos = get_playlist_name($videos);
        // dd($videos);

        $menus = get_menu2();
        $beritasidebar = get_sidebarBerita();

        $data = [
            'page' => 'Video',
            'videos' => $videos,
            'menus' => $menus,
            'beritasidebar' => $beritasidebar
        ];

        

        $data2['content'] = $this->load->view('alfas/pages/playlist', $data, TRUE);

        $this->load->view('alfas/main', $data2);


    }

    public function detail($video_seo)
    {

        $video = $this->Model_App->view_where('video', ['video_seo' => $video_seo])->row_array();


        $videos = $this->Model_App->view_where('video', ['id_playlist' => $video['id_playlist']], '8')->result_array();

        $videos = get_uploader_name($videos);
        $videos = get_embed_urls($videos);

        $video = get_embed_url($video);
        $video = get_playlist_name([$video])[0];

        // dd($videos);
        

        $menus = get_menu2();
        $beritasidebar = get_sidebarBerita();

        $data = [
            'page' => 'Video',
            'videos' => $videos,
            'video' => $video,   
            'menus' => $menus,
            'beritasidebar' => $beritasidebar
        ];

        $data2['content'] = $this->load->view('alfas/pages/video', $data, TRUE);

        $this->load->view('alfas/main', $data2);
    }
}
