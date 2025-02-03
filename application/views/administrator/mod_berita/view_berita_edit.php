<?php 
echo "<div class='card'>
    <div class='card-header with-border'>
      <h3 class='card-title'>Edit Berita Terpilih</h3>
    </div>
  <div class='card-body'>";
  $attributes = array('class'=>'form-horizontal','role'=>'form');
  echo form_open_multipart($this->uri->segment(1).'/edit_listberita',$attributes); 
echo "<table class='table table-sm table-borderless'>
      <tbody>
        <input type='hidden' name='id' value='".html_escape($rows['id_berita'])."'>
        <tr><th width='120px' scope='row'>Judul</th>    <td><input type='text' class='form-control' name='b' value='".html_escape($rows['judul'])."' required></td></tr>
        <tr><th scope='row'>Sub Judul</th>              <td><input type='text' class='form-control' name='c' value='".html_escape($rows['sub_judul'])."'></td></tr>
        <tr><th scope='row'>Video Youtube</th>          <td><input type='text' class='form-control' name='d' value='".html_escape($rows['youtube'])."' placeholder='Contoh link: https://www.youtube.com/embed/xbuEmoRWQHU'></td></tr>
        <tr><th scope='row'>Kategori</th>               <td><select name='a' class='form-control' required>";
                                                                foreach ($record as $row){
                                                                    if (html_escape($rows['id_kategori']) == html_escape($row['id_kategori'])){
                                                                      echo "<option value='".html_escape($row['id_kategori'])."' selected>".html_escape($row['nama_kategori'])."</option>";
                                                                    }else{
                                                                      echo "<option value='".html_escape($row['id_kategori'])."'>".html_escape($row[nama_kategori])."</option>";
                                                                    }
                                                                }
        echo "</td></tr>
        <tr><th scope='row'>Headline</th>               <td>"; if (html_escape($rows['headline'])=='Y'){ echo "<input type='radio' name='e' value='Y' checked> Ya &nbsp; <input type='radio' name='e' value='N'> Tidak"; }else{ echo "<input type='radio' name='e' value='Y'> Ya &nbsp; <input type='radio' name='e' value='N' checked> Tidak"; } echo "</td></tr>
        <tr><th scope='row'>Pilihan </th>        <td>"; if (html_escape($rows['aktif'])=='Y'){ echo "<input type='radio' name='f' value='Y' checked> Ya &nbsp; <input type='radio' name='f' value='N'> Tidak"; }else{ echo "<input type='radio' name='f' value='Y'> Ya &nbsp; <input type='radio' name='f' value='N' checked> Tidak"; } echo "</td></tr>
        <tr><th scope='row'>Berita Utama</th>           <td>"; if (html_escape($rows['utama'])=='Y'){ echo "<input type='radio' name='g' value='Y' checked> Ya &nbsp; <input type='radio' name='g' value='N'> Tidak"; }else{ echo "<input type='radio' name='g' value='Y'> Ya &nbsp; <input type='radio' name='g' value='N' checked> Tidak"; } echo "</td></tr>
        <tr><th scope='row'>Isi Berita</th>             <td><textarea id='editor1' class='form-control' name='h' style='height:260px' required>".html_escape($rows['isi_berita'])."</textarea></td></tr>
        <tr><th scope='row'>Ganti Gambar</th>                 <td><input type='file' class='form-control' name='k'><small><i>* max Upload <b style= 'color:red'>3MB</b></i></small> &nbsp;";
                                                                   if (html_escape($rows['gambar']) != ''){ echo "<i style='color:red'>Lihat Gambar Saat ini : </i><a target='_BLANK' href='".base_url()."asset/foto_berita/".html_escape($rows['gambar'])."'>".html_escape($rows['gambar'])."</a>"; } echo "</td></tr>
        <tr><th scope='row'>Ket. Gambar</th>            <td><input type='text' class='form-control' name='i' value='".html_escape($rows['keterangan_gambar'])."'></td></tr>
        <tr><th scope='row'>Tag</th>                    <td><div class='checkbox-scroll'>";
                                                                $_arrNilai = explode(',', html_escape($rows['tag']));
                                                                foreach ($tag as $tag){
                                                                    $_ck = (array_search(html_escape($tag['tag_seo']), html_escape($_arrNilai)) === false)? '' : 'checked';
                                                                    echo "<span style='display:block;'><input type=checkbox value='".html_escape($tag['tag_seo'])."' name=j[] $_ck> ".html_escape($tag['nama_tag'])." &nbsp; &nbsp; &nbsp; </span>";
                                                                }
        echo "</div></td></tr>
        <tr><th scope='row'>Waktu Posting</th>              <td><input type='text' id='datetimepicker1' data-date-format='YYYY-MM-DD HH:mm:ss' class='form-control' name='waktu' value='".html_escape($rows['tanggal'])." ".html_escape($rows['jam'])."'></td></tr>
      </tbody>
      </table>
  
  <div class='card-footer'>
        <button type='submit' name='submit' class='btn btn-info'>Update</button>
        <a href='".base_url().$this->uri->segment(1)."/listberita'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
  </div>
</div></div>";
echo form_close();
?>



