<?php 
    echo "
              <div class='card card-info'>
                <div class='card-header with-border'>
                  <h3 class='card-title'>Tambah Penyataan</h3>
                </div>
              <div class='card-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/tambah_kuisioner',$attributes); 
          echo "
                  <table class='table table-sm table-borderless'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                        <tr><th width='120px' scope='row'>Tahun</th>
                            <td><select name='a' class='form-control' required><option value='' selected>- Pilih Tahun -</option>";
                                $years = range(2015, strftime("%Y", time())); 
                                foreach ($years as $year){
                                    echo" <option value= $year> $year</option>";
                                }
                    echo"  </td>
                        </tr>
                        <tr><th width='120px' scope='row'>Semester</th>
                            <td><input type='radio' name='b' value='1' checked> 1 &nbsp;
                                <input type='radio' name='b' value='2'> 2
                        </td>
                        </tr>
                        <tr><th width='120px' scope='row'>Pertanyaan</th>
                            <td><textarea id='editor1' class='form-control' name='c' style='height:260px' required></textarea></td>
                        </tr>
                        <tr><th width='120px' scope='row'>Jawaban</th>
                            <td><input type='radio' name='d' value='0'> Text &nbsp;
                                <input type='radio' name='d' value='1' checked> Pilihan
                            </td>
                        </tr>
                        <tr><th width='120px' scope='row'>Status</th>
                            <td><input type='radio' name='e' value='aktif' checked> Aktif &nbsp;
                                <input type='radio' name='e' value='non_aktif'> Non Aktif
                            </td>
                        </tr>
                  </tbody>
                  </table>
              
              <div class='card-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='".base_url().$this->uri->segment(1)."/kuisioner'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div>";
            echo form_close();
