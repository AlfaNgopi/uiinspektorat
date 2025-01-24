<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/background/<?php echo background(); ?>/table-style.css" />

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
						<h3>Validasi Instansi</h3>
					</center>
				</div>
				<div class="column12" id="cusform">
					<center>
					<form method="POST" action="<?=base_url().'survey/prosesToken'?>">
					<table>
						<tr>
							<td style="text-align:right">Kode Token</td>
							<td style=""><input type="text" placeholder="Masukkan Kode Token Disini" name="token" required value="" /></td>
						</tr>
						<tr>
							<td style="text-align:right"><?=$image?></td>
							<td style=""><input name='security_code' maxlength=6 type="text" required placeholder="Masukkkan kode di sebelah kiri.." value=""></td>
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
<script>document.getElementById("kontensurvey").scrollIntoView();</script>