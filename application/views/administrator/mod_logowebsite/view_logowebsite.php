 
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Ganti Logo Website</h3>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <table id="example" class="table table-sm table-borderless">
                    <tbody>
                  <?php 
                    $attributes = array('class'=>'form-horizontal','role'=>'form');
                    echo form_open_multipart($this->uri->segment(1).'/logowebsite',$attributes); 
                    $no = 1;
                    foreach ($record->result_array() as $row){
                    echo "<input type='hidden' name='id' value='$row[id_logo]'>
                          <tr><td width=120px>Logo Terpasang</td><td style='background:#e3e3e3'><a href=''><img width='100%' src='".base_url()."asset/logo/$row[gambar]'></a></td></tr>
                          <tr><td>Ganti Logo</td><td><a href=''><input type='file' name='logo' class='form-control'><small><i>*Max Upload <b style='color:red'>2 MB<b>, Size <b style='color:red'> 573 x 103 px</b></i></small></td></tr>";
                      $no++;
                    }
                    echo "<tr><td></td><td><div class='card-footer'>
                            <button type='submit' name='submit' class='btn btn-info'>Update</button>
                            <a href='".base_url().$this->uri->segment(1)."/logowebsite'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                          </div></td></tr>";
                    echo form_close();
                  ?>
                  </tbody>
                </table>
              </div>
              </div>