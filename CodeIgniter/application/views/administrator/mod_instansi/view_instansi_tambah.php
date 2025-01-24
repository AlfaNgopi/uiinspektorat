<?php 
    echo "
              <div class='card card-info'>
                <div class='card-header with-border'>
                  <h3 class='card-title'>Tambah Instansi</h3>
                </div>
              <div class='card-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/tambah_instansi',$attributes); 
          echo "
                  <table class='table table-sm table-borderless'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                        <tr><th width='120px' scope='row'>Nama Instansi</th>    <td><input type='text' class='form-control' name='a' style='text-transform:uppercase' required></td>
                        </tr>
                        <tr><th scope='row'>Kode Token</th>
                            <td><input type='text' class='form-control' name='b' required></td>
                        </tr>
                        <tr><th width='120px' scope='row'>Tanggal Expired Token</th>
                            <td><input type='date' class='form-control' name='c' required></td>
                        </tr>
                        <tr><th width='120px' scope='row'>Status</th>
                            <td><input type='radio' name='d' value='aktif' checked> Aktif &nbsp;
                                <input type='radio' name='d' value='non_aktif'>Non Aktif
                            </td>
                        </tr>
                  </tbody>
                  </table>
              
              <div class='card-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='".base_url().$this->uri->segment(1)."/instansi'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div>";
            echo form_close();
