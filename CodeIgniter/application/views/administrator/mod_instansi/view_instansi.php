            
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Manajemen Instansi</h3>
                  <div class="card-tools">
                  <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url().$this->uri->segment(1); ?>/tambah_instansi'>Tambahkan Data</a>
                  </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                <div class="table-responsive">
                  <table id="example1" class="table table-sm table-striped">
                    <thead>
                      <tr>
                        <th style='width:40px'>No</th>
                        <th>Instansi</th>
                        <th>Batas Token</th>
                        <th style='width:70px'>Status</th>
                        <th style='width:40px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record as $row){
                    echo "<tr><td>$no</td>
                              <td>$row[instansi]</td>
                              <td>$row[batas_token]</td>
                              <td>"; 
                                if($row['status']==aktif){ echo "Aktif";} else {echo"Non Aktif";} echo"</td>
                              <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url().$this->uri->segment(1)."/edit_instansi/$row[id_inst]'><span class='nav-icon fas fa-edit'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div></div></div>