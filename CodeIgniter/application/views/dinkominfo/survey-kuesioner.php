<style>
    html, body {
        font-size:1em;
        font-style:Helvetica;
    }
</style>
<link type="text/css" rel="stylesheet"
    href="<?php echo base_url(); ?>template/<?php echo template(); ?>/background/<?php echo background(); ?>/table-style.css" />
<script type="text/javascript">
    document.getElementsByClassName("ctriklanatas")[0].style.display = 'none';
</script>

<div class="full-width" id="kontensurvey">
    <div class="block">
        <div class="block-title">
            <a href="<?php echo base_url(); ?>" class="right">Back to
                homepage</a>
            <h2>Survey Kepuasan Mitra Pengawasan Tahun <?php echo date("Y");?> Semester
                <?php
                if (date("m")<=06) {
                    echo "1";
                } else {
                    echo"2";
                } ?>
            </h2>
        </div>
        <div class="block-content">
            <div class="paragraph-row">
                <div class="column12">
                    <center>
                        <h3>Pengisian Kuesioner</h3>
                    </center>
                </div>
            </div>
            <div class="paragraph-row">
                <div class="column12" id="cusform" style="overflow-x:scroll;">
                    <?php $tampil= $this->model_utama->view('survey_deskripsi');
                            foreach ($tampil->result_array() as $row){
                    echo $row['deskripsi'] ; } ?>
                    <!--p>
                        Dalam rangka mendapatkan masukan untuk evaluasi kinerja Inspektorat Kabupaten Purworejo dalam
                        rangka percepatan penanganan COVID-19 selama Tahun 2020 Semester I, kami melakukan identifikasi
                        kebutuhan Mitra Pengawasan dan Survei Kepuasan Mitra Pengawasan Inspektorat Kabupaten Purworejo.
                        Sehubungan dengan hal tersebut, mohon bantuan Saudara untuk mengisi Survei Kepuasan Mitra
                        Pengawasan Tahun 2020 Semester I.</p>
                    <p>
                        Tidak terdapat jawaban yang dinilai baik atau buruk, benar atau salah. Hasil pengisian kuesioner
                        tidak berpengaruh terhadap kinerja Instansi Saudara dan karir Saudara di masa yang akan datang.
                        Maka dari itu, Saudara tidak perlu takut atau ragu-ragu dalam memberikan jawaban yang
                        sejujurnya.</p>
                    <p>
                        Artinya, semua jawaban yang diberikan oleh Saudara adalah benar, dan jawaban yang diminta adalah
                        sesuai kondisi yang dialami dan dirasakan Saudara selama ini.</p>
                    <p>
                        Data yang kami terima hanya untuk kepentingan perbaikan kinerja Inspektorat Kabupaten Purworejo
                        dan tidak dipublikasikan kepada masyarakat. Kami akan menjaga kerahasiaan Saudara.</p>
                    <p>
                        Setiap jawaban yang diberikan merupakan bantuan yang tidak ternilai harganya, atas perhatian dan
                        bantuannya, kami ucapkan terima kasih.
                    </p-->
                    <?php
                        if ($this->session->flashdata('message')) {
                            echo "<div style='width:70vw'>";
                            $this->utils->showAlert('info', $this->session->flashdata('message'));
                            echo "</div>";
                        }
                        ?>
                    <form action="<?=base_url('survey/prosesKuesioner')?>" method="POST">
                        <input type="hidden" name="responden" value="<?=$id_token?>" >
                        <div id="formkues">
                        <?php
                        $nomor_tanya = 1;
                        $unik_group = $this->utils->unique_multidim_array($pertanyaan, 'id_group_pilihan');
                        foreach ($unik_group as $key => $value) {
                            $group_id = $value['id_group_pilihan'];
                            $pertanyaan_filtered = array_filter($pertanyaan, function ($var) use ($group_id) {
                                return ($var['id_group_pilihan'] == $group_id);
                            });
                            foreach ($pertanyaan_filtered as $k => $v) {
                                $pilihan_filtered[$k] = array_filter($pilihan, function ($var) use ($group_id) {
                                    return ($var['id_group_pilihan'] == $group_id);
                                });
                            }                            
                            ?>
                            <table class="striped-columns" id="">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pertanyaan</th>
                                        <?php
                                        foreach ($pilihan_filtered[$key] as $x => $y) {
                                            echo "<th>".$y['pilihan']."</th>";
                                        }
                                        ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($pertanyaan_filtered as $k => $v) {
                                        echo "<tr>";
                                        echo "<td style=\"text-align:left\">".$nomor_tanya++.") </td>";
                                        echo "<td style=\"text-align:left\">".$v['pertanyaan']."</td>";
                                        foreach ($pilihan_filtered[$k] as $ky => $vl) {
                                            echo "<td data-label=\"".$vl['pilihan']."\"><input required type=\"radio\" value=\"".$vl['id_pilihan']."\" name=\"pilihan[".$v['id_pertanyaan']."]\" /></td>";
                                        }
                                        echo "</td>";
                                    } ?>
                                </tbody>
                            </table>
                            <br>
                            <?php
                        }
                        ?>
                        </div>
                        
                        <?php
                        foreach ($pertanyaan_text_input as $key => $value) {
                            echo "<div style=\"margin-bottom:10px\">".$nomor_tanya++.") ".$value['pertanyaan']."</div>";
                            echo "<textarea placeholder=\"Silahkan Masukkan Kritik dan Saran\" name=\"tanya[".$value['id_pertanyaan']."]\" id=\"\" cols=\"20\" rows=\"5\"></textarea>";
                        }
                        ?>
                        
                        <input type="submit" name="submit" value="SUBMIT">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    (function() {
        document.getElementById("kontensurvey").scrollIntoView();
    })();
</script>