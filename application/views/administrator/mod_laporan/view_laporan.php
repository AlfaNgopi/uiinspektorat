<script type="text/javascript" src="<?php echo base_url(); ?>asset/admin/plugins/jQuery/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('#container').highcharts({
            data: {
                table: 'datatable'
            },
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: ''
                }
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                        'Ada ' + this.point.y + ' Orang';
                }
            }
        });
    });
</script>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                       <h3 class="card-title"><b>Presentase Responden Menurut Instansi</b></h3> 
                    </div><!-- /.card-header -->
                    <div class="card-body chat" id="chat-card">
                            <div id="container" style="min-width: 310px; height: 205px; margin: 0 auto"></div>
                            <table id="datatable" style='display:none'>
                                <thead><tr>
                                    <th></th>
                                    <th>Responden</th>
                                </tr></thead>
                                <tbody>
                            <?php 
                                $grafik = $this->model_app->grafik_responden_instansi();
                                foreach ($grafik->result_array() as $row){
                                echo "<tr>
                                <th>".$row['instansi']."</th>
                                <td>$row[jumlah]</td>
                                </tr>"; 
                                }
                            ?>
                                </tbody>
                            </table>
                            <!--div class="table-responsive">
                                <table id="example1" class="table table-sm table-striped">
                                    <thead>
                                        <tr>
                                            <th style='width:40px'>No</th>
                                            <th>No Urut</th>
                                            <th>Nama Aspek</th>
                                            <th style='width:70px'>Action</th>
                                      </tr>
                                    </thead>
                                </table>
                            </div-->
                        </div>
                </div>
            </div><br>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                       <h3 class="card-title"><b>Presentase Responden Menurut Jenis Pertanyaan</b></h3> 
                    </div><!-- /.card-header -->
                    <div class="card-body chat" id="chat-card">
                            <!--<div id="container" style="min-width: 310px; height: 205px; margin: 0 auto"></div>-->
                            <!--<table id="datatable" style='display:none'>-->
                            <!--    <thead><tr>-->
                            <!--        <th></th>-->
                            <!--        <th>Instansi</th>-->
                            <!--    </tr></thead>-->
                            <!--    <tbody>-->
                            <?php /*
                                $grafik = $this->model_app->grafik_responden_instansi();
                                foreach ($grafik->result_array() as $row){
                                echo "<tr>
                                <th>".$row['instansi']."</th>
                                <td>$row[jumlah]</td>
                                </tr>"; 
                                } */
                            ?>
                            <!--    </tbody>-->
                            <!--</table>-->
                            <div class="table-responsive">
                                <table id="example1" class="table table-sm table-striped">
                                    <thead>
                                        <tr>
                                            <th>Pertanyaan</th>
                                            <th>Sangat Setuju</th>
                                            <th>Setuju</th>
                                            <th>Netral</th>
                                            <th>Tdk Setuju</th>
                                            <th>Sangat Tdk Setuju</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                
            </div>
        </div>