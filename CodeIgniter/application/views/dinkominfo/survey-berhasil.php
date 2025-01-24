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
					<?php
						if ($this->session->flashdata('message')) {
							echo "<div style=\"background-color:#f43e42;padding:20px;margin:10px;font-size:1.3em;width:65vw;color:white\">".$this->session->flashdata('message')."</div>";
						}
					?>
					<table>
						<tr>
							<td></td>
						</tr>
					</table>
					</center>
			</div>
		</div>
	</div>
</div>
</div>
<script>document.getElementById("kontensurvey").scrollIntoView();</script>