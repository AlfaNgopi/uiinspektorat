<?php 
    echo "
              <div class='card card-info'>
                <div class='card-header with-border'>
                  <h3 class='card-title'>Edit Instansi</h3>
                </div>
              <div class='card-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_instansi',$attributes); 
          echo "
                  <table class='table table-sm table-borderless'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_inst]'>
                    <tr><th width='120px' scope='row'>Nama Instansi</th>
                        <td><input type='text' class='form-control' name='a' value='$des[instansi]' disabled></td>
                    </tr>
                    <tr><th scope='row'>Kode Token</th>                       <td><input type='text' class='form-control' name='b'        value='$rows[token]' required></td>
                    </tr>
                    <tr><th scope='row'>Tanggal Expired Token</th>              <td><input type='date' class='form-control' name='c' value ='$rows[batas_token]' required></td></tr>
                    <tr><th scope='row'>Status</th>
                        <td>";
                        if ($rows['status']==aktif){ 
                            echo "<input type='radio' name='d' value='aktif' checked> Aktif &nbsp; <input type='radio' name='d' value='non_aktif'> Non Aktif"; 
                        }else{ echo "<input type='radio' name='d' value='aktif'> Aktif &nbsp; <input type='radio' name='d' value='non_aktif' checked> Non Aktif"; 
                        } echo "
                        </td>
                    </tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='card-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url().$this->uri->segment(1)."/instansi'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div>";
            echo form_close();
