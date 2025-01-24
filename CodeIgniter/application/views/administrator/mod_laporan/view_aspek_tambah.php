<?php 
    echo "
              <div class='card card-info'>
                <div class='card-header with-border'>
                  <h3 class='card-title'>Tambah Aspek</h3>
                </div>
              <div class='card-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/tambah_aspek',$attributes); 
          echo "
                  <table class='table table-sm table-borderless'>
                    <tbody>
                      <tr><th scope='row'>No. Urut</th>   <td><input type='number' class='form-control' name='a'></td></tr>
                      <tr><th scope='row'>Nama Aspek</th>  <td><input type='text' class='form-control' name='b'></td></tr>
                    </tbody>
                  </table>
              
              <div class='card-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='".base_url().$this->uri->segment(1)."/aspek'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div>";
            echo form_close();
