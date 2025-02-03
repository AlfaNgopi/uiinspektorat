            
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Manajemen Pernyataan</h3>
                  <div class="card-tools">
                  <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url().$this->uri->segment(1); ?>/tambah_kuisioner'>Tambahkan Data</a>
                  </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                <div class="table-responsive">
                  <table id="example1" class="table table-sm table-striped">
                    <thead>
                      <tr>
                        <th style='width:40px'>No</th>
                        <th>Tahun</th>
                        <th>Semester</th>
                        <th>Pernyataan</th>
                        <th>Jawaban</th>
                        <th>Status</th>
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record as $row){
                    echo "<tr><td>$no</td>
                              <td>$row[tahun]</td>
                              <td>$row[semester]</td>
                              <td>$row[pertanyaan]</td>
                              <td>";
                                if($row["id_group_pilihan"]==1){
                                    echo "Pilihan";
                                }else{
                                    echo"Text";
                                };
                             echo "</td>
                              <td>";
                                if($row["status"]==aktif){
                                    echo "Aktif";
                                }else{
                                    echo "Non Aktif";
                                };
                                echo "</td>
                              <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url().$this->uri->segment(1)."/edit_kuisioner/$row[id_pertanyaan]'><span class='nav-icon fas fa-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url().$this->uri->segment(1)."/delete_kuisioner/$row[id_pertanyaan]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='nav-icon fas fa-trash-alt'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>
             </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Deskripsi Awal Kuisioner</h3>
                  <div class="card-tools">
                  <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url().$this->uri->segment(1); ?>/update_deskripsi'>Update Data</a>
                  </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <?php $tampil= $this->model_app->view('survey_deskripsi');
                            foreach ($tampil->result_array() as $row){
                    echo $row['deskripsi'] ; } ?>
                </div>
            </div>
                
              
             