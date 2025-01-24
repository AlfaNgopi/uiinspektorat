<link type="text/css" rel="stylesheet"
    href="<?php echo base_url(); ?>template/<?php echo template(); ?>/background/<?php echo background(); ?>/table-style.css" />

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
                        <h3>Data Responder</h3>
                    </center>
                </div>
                <div class="column12" id="cusform">
                    <center>
                        <form method="POST"
                            action="<?=base_url().'survey/prosesResponden'?>">
                            <table>
                                <tr>
                                    <td style="text-align:right">Nama Lengkap *</td>
                                    <td style="width:40vw">
                                        <input type="hidden" placeholder="Nama Lengkap Anda" name="token" value="<?=$id_token?>" required />
                                        <?php if (form_error('nama')){$this->utils->showAlert('warning', form_error('nama',' ',' '));}?>
                                        <input type="text" placeholder="Nama Lengkap Anda" name="nama" value="<?=$responden['nama']?$responden['nama']:''?>" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:right">Email Pribadi *</td>
                                    <td style="">
                                        <?php if (form_error('email')){$this->utils->showAlert('warning', form_error('email',' ',' '));}?>
                                        <input type="email" placeholder="Email Pribadi Anda" name="email" value="<?=$responden['email']?$responden['email']:''?>" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:right">Jabatan *</td>
                                    <td style="">
                                        <?php if (form_error('jabatan')){$this->utils->showAlert('warning', form_error('jabatan',' ',' '));}?>
                                        <input type="text" placeholder="Jabatan Anda" name="jabatan" required value="<?=$responden['jabatan']?$responden['jabatan']:''?>"  />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:right">Jenis Kelamin *</td>
                                    <td style="">
                                        <?php if (form_error('jkel')){$this->utils->showAlert('warning', form_error('jkel',' ',' '));}?>
                                        <input type="radio" name="jkel" value="Laki-Laki" <?=$responden['jenis_kelamin']=="Laki-Laki"?'checked':''?>><span>&nbsp;&nbsp;Laki-Laki&nbsp;&nbsp;</span>
                                        <input type="radio" name="jkel" value="Perempuan" <?=$responden['jenis_kelamin']=="Perempuan"?'checked':''?>><span>&nbsp;&nbsp;Perempuan&nbsp;&nbsp;</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:right">Tanggal Lahir *</td>
                                    <td style="">
                                        <?php if (form_error('tanggallahir')){$this->utils->showAlert('warning', form_error('tanggallahir',' ',' '));}?>
                                        <input type="date" name="tanggallahir" required value="<?=$responden['tanggal_lahir']?$responden['tanggal_lahir']:''?>" />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:right">Jenjang Pendidikan *</td>
                                    <td style="">
                                        <?php if (form_error('jenjang')){$this->utils->showAlert('warning', form_error('jenjang',' ',' '));}?>
                                        <select id="" name="jenjang">
                                            <option value="0">--Pilih--</option>
                                            <option <?=$responden['jenjang_pendidikan']=="s3"?'selected':''?> value="s3">Doktoral</option>
                                            <option <?=$responden['jenjang_pendidikan']=="s2"?'selected':''?> value="s2">Pasca Sarjana</option>
                                            <option <?=$responden['jenjang_pendidikan']=="s1"?'selected':''?> value="s1">Sarjana/D4</option>
                                            <option <?=$responden['jenjang_pendidikan']=="d3"?'selected':''?> value="d3">Diploma 3</option>
                                            <option <?=$responden['jenjang_pendidikan']=="sma"?'selected':''?> value="sma">SMA/sederajat</option>
                                            <option <?=$responden['jenjang_pendidikan']=="smp"?'selected':''?> value="smp">SMP/sederajat</option>
                                            <option <?=$responden['jenjang_pendidikan']=="sd"?'selected':''?> value="sd">SD/sederajat</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" name="submit" value="SUBMIT"></td>
                                </tr>
                            </table>
                        </form>
                        <?php
                        if ($this->session->flashdata('message')) {
                            echo "<div style=\"background-color:#f43e42;padding:20px;margin:10px;font-size:1.3em;width:60vw;color:white\">".$this->session->flashdata('message')."</div>";
                        }
                    ?>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
	(function () {
		document.getElementById("kontensurvey").scrollIntoView();
	})();
</script>