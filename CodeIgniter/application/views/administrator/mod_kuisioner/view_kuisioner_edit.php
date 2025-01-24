<?php 
    echo "
              <div class='card card-info'>
                <div class='card-header with-border'>
                  <h3 class='card-title'>Edit Pernyataan</h3>
                </div>
              <div class='card-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_kuisioner',$attributes); 
          echo "
                  <table class='table table-sm table-borderless'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_pertanyaan]'>
                    <tr><th width='120px' scope='row'>Tahun</th>
                        <td><select name='a' class='form-control' required><option value='' selected>- Pilih Tahun -</option>";
                            $years = range(2015, strftime("%Y", time())); 
                            foreach ($years as $year){
                                if($rows['tahun']==$year){
                                    echo" <option value= $year> $year</option>";
                                }else{
                                    echo" <option value= $year> $year</option>";
                                }
                            }
                    echo"</td>
                    </tr>
                    <tr><th scope='row'>Semester</th>
                        <td>"; if($rows['semester']==1){
                            echo" <input type='radio' name='b' value='1' checked> 1 &nbsp; <input type='radio' name='b' value='2'> 2";
                            }else{
                            echo" <input type='radio' name='b' value='1'> 1 &nbsp; <input type='radio' name='b' value='2' checked> 2 ";
                            }
                    echo"</td>
                    </tr>
                    <tr><th scope='row'>Pertanyaan</th>
                        <td><textarea id='editor1' class='form-control' name='c' style='height:260px' required>".$rows['pertanyaan']."</textarea>
                        </td>
                    </tr>
                    <tr><th scope='row'>Jawaban</th>
                        <td>"; if($rows['id_group_pilihan']==1){
                            echo"<input type='radio' name='d' value='1' checked> Pilihan &nbsp; <input type='radio' name='d' value='0'> Text";
                            }else{ 
                            echo" <input type='radio' name='d' value='1'> Pilihan &nbsp; <input type='radio' name='d' value='0' checked> Text";
                            }
                    echo"</td>
                    </tr>
                    <tr><th scope='row'>Status</th>
                        <td>"; if($rows['status']==aktif){
                            echo" <input type='radio' name='e' value='aktif' checked> Aktif &nbsp; <input type='radio' name='e' value='non_aktif'> Non Aktif";
                            }else{ 
                            echo" <input type='radio' name='e' value='aktif'> Aktif &nbsp;<input type='radio' name='e' value='non_aktif' checked> Non Aktif ";
                            } 
                    echo"</td>
                    </tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='card-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url().$this->uri->segment(1)."/kuisioner'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div>";
            echo form_close();
