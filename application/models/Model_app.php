<?php 
class Model_app extends CI_model{
    public function view($table){
        return $this->db->get($table);
    }

    public function insert($table,$data){
        return $this->db->insert($table, $data);
    }

    public function edit($table, $data){
        return $this->db->get_where($table, $data);
    }
 
    public function update($table, $data, $where){
        return $this->db->update($table, $data, $where); 
    }

    public function delete($table, $where){
        return $this->db->delete($table, $where);
    }

    public function view_where($table,$data){
        $this->db->where($data);
        return $this->db->get($table);
    }

    public function view_where_desc_limit($table,$data,$order,$limit){
        $this->db->where($data);
        $this->db->order_by($order,'DESC');
        $this->db->limit($limit);
        return $this->db->get($table);
    }

    public function view_desc_limit($table,$order,$limit){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($order,'DESC');
        $this->db->limit($limit);
        return $this->db->get();
    }

    public function view_ordering_limit($table,$order,$ordering,$dari,$baris){
        $this->db->select('*');
        $this->db->order_by($order,$ordering);
        $this->db->limit($dari, $baris);
        return $this->db->get($table);
    }
    
    public function view_ordering($table,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }

    public function view_where_ordering($table,$data,$order,$ordering){
        $this->db->where($data);
        $this->db->order_by($order,$ordering);
        $query = $this->db->get($table);
        return $query->result_array();
    }
    public function view_where_ordering_limit($table,$data,$order,$ordering,$dari,$baris){
        $this->db->where($data);
        $this->db->order_by($order,$ordering);
        $this->db->limit($dari, $baris);
        $query = $this->db->get($table);
        return $query->result_array();
    }

    public function view_join_one($table1,$table2,$field,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }

    public function view_join_where($table1,$table2,$field,$where,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->where($where);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }

    function umenu_akses($link,$id){
        return $this->db->query("SELECT * FROM modul,users_modul WHERE modul.id_modul=users_modul.id_modul AND users_modul.id_session='$id' AND modul.link='$link'")->num_rows();
    }

    public function cek_login($username,$password,$table){
        return $this->db->query("SELECT * FROM $table where username='".$this->db->escape_str($username)."' AND password='".$this->db->escape_str($password)."' AND blokir='N'");
    }
    
     public function cek_urut($urut,$table){
        return $this->db->query("SELECT $urut FROM $table");
    }

    function grafik_kunjungan(){
        return $this->db->query("SELECT count(*) as jumlah, tanggal FROM statistik GROUP BY tanggal ORDER BY tanggal DESC LIMIT 10");
    }

    function kategori_populer($limit){
        return $this->db->query("SELECT * FROM (SELECT a.*, b.jum_dibaca FROM
                                    (SELECT * FROM kategori) as a left join
                                    (SELECT id_kategori, sum(dibaca) as jum_dibaca FROM berita GROUP BY id_kategori) as b on a.id_kategori=b.id_kategori) as c 
                                        where c.aktif='Y' ORDER BY c.jum_dibaca DESC LIMIT $limit");
    }
    
    function grafik_responden_jk(){
        return $this->db->query("SELECT count(*) as jumlah, jenis_kelamin FROM survey_responden GROUP BY jenis_kelamin ORDER BY jenis_kelamin DESC LIMIT 10");
    }
    
    function grafik_responden_instansi(){
        return $this->db->query("SELECT count(*) as jumlah, instansi.instansi FROM survey_responden JOIN instansi_token ON survey_responden.id_instansi_token=instansi_token.id_token JOIN instansi ON instansi_token.id_inst=instansi.id_inst GROUP BY id_instansi_token ORDER BY id_instansi_token DESC LIMIT 10");
    }
    function responden_jns_pertanyaan(){
        return $this->db->query("SELECT count(*) as jumlah, id_pertanyaan, survey_pilihan.pilihan FROM survey_jawaban LEFT JOIN survey_pilihan ON survey_jawaban.id_pilihan=survey_pilihan.id_pilihan WHERE survey_pilihan.id_group_pilihan=1 GROUP BY id_pertanyaan ORDER BY id_pertanyaan DESC LIMIT 10");
    }
}