 <?php 
    echo "
              <div class='card card-info'>
                <div class='card-header with-border'>
                  <h3 class='card-title'>Update Deskripsi Awal Kuisioner</h3>
                </div>
              <div class='card-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/update_deskripsi',$attributes); 
          echo "
                  <table class='table table-sm table-borderless'>
                  <tbody>
                    <input type='hidden' name='id' value='$record[id_deskripsi]'>
                    <tr><th width='120px' scope='row'>Deskripsi</th>
                        <td><textarea id='editor1' class='form-control' name='des' style='height:260px' required> $record[deskripsi] </textarea></td>
                    </tr>
        
                  </tbody>
                  </table>
                </div>
              
              <div class='card-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url().$this->uri->segment(1)."/kuisioner'><button type='button' class='btn btn-default pull-right'>Back</button></a>
                    
                  </div>
            </div></div>";
            echo form_close();
