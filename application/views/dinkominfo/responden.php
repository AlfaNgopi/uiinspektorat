<script type="text/javascript">
	function validasireg(form){
		if (form.a.value == ""){ alert("Anda belum mengisikan Nama"); form.a.focus(); return (false); }							
		if (form.b.value == ""){ alert("Anda belum mengisikan E-mail"); form.b.focus(); return (false); }
		if (form.c.value == ""){ alert("Anda belum mengisikan Jabatan"); form.c.focus(); return (false); }
		if (form.d.value == ""){ alert("Anda belum mengisikan Jenis Kelamin"); form.d.focus(); return (false); }
		if (form.e.value == ""){ alert("Anda belum mengisikan Tanggal Lahir"); form.e.focus(); return (false); }
		if (form.f.value == ""){ alert("Anda belum mengisikan Jenjang Pendidikan"); form.f.focus(); return (false); }
	  return (true);
	}
</script>
<style>
#writecomment p labels {
	display: block;
	position: absolute;
	left: -130px;
	white-space: nowrap;
	line-height: 36px;
	width: 126px;
	text-align: right;
	top: 2px;
	color: #6b6b6b;
}
 #writecomment p input[type=radio] {
	height: 20px;
 }
 #writecomment p input[type=radio]:focus {
	border: 1px solid #bababa;
	box-shadow: 0px 0px 10px rgba(0,0,0,0.05);
}
 #writecomment p input[type=date] {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	width: 65%;
	padding: 8px 10px;
	display: block;
	background: #fff;
	font-size: 13px;
	border: 1px solid #d3d3d3;
	font-family: 'Arial';
	border-radius: 2px;
	-moz-border-radius: 2px;
 }
#writecomment p input[type=date]:focus {
	border: 1px solid #bababa;
	box-shadow: 0px 0px 10px rgba(0,0,0,0.05);
}
 #writecomment p input[type=email] {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	width: 65%;
	padding: 8px 10px;
	display: block;
	background: #fff;
	font-size: 13px;
	border: 1px solid #d3d3d3;
	font-family: 'Arial';
	border-radius: 2px;
	-moz-border-radius: 2px;
 }
#writecomment p input[type=email]:focus {
	border: 1px solid #bababa;
	box-shadow: 0px 0px 10px rgba(0,0,0,0.05);
}
#writecomment p select {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	width: 65%;
	padding: 8px 10px;
	display: block;
	background: #fff;
	font-size: 13px;
	border: 1px solid #d3d3d3;
	font-family: 'Arial';
	border-radius: 2px;
	-moz-border-radius: 2px;
 }
#writecomment p select:focus {
	border: 1px solid #bababa;
	box-shadow: 0px 0px 10px rgba(0,0,0,0.05);
}
</style>
<div class="main-page full-width">
	<div class="content-block main">
			<div class="block">
				<div class="block-title">
					<a href="<?php echo base_url(); ?>survey" class="right">Back to survey</a>
					<h2>Survey Kepuasan Mitra Pengawasan Tahun <?php echo date("Y");?> Semester <?php if(date("m")<=06){
			        echo "1";
			       }else{
			        echo"2";
			       } ?> </h2>
				</div>
				<div class="block-content">
			        <div class="paragraph-row">
			            <div class="column12"><center><h3>Data Responder</h3></center></div>
				        <div class="column12">
					        <div style="width:370px" id="writecomment">
						        <form action="<?php echo base_url(); ?>survey/kuisioner" method="POST">
							        <p class="contact-form-user">
							           <labels for="c_token">Nama<span class="required">*</span></labels> 
								        <input type="text" placeholder="Nama Lengkap" name='a' id="c_name" required/>
							        </p>
							        <p class="contact-form-email">
							            <labels for="c_email">E-mail Pribadi<span class="required">*</span></labels>
								        <input type="email" placeholder="E-mail Pribadi" name='b' id="c_email" required/>
							        </p>
							        <p class="contact-form-jabatan">
							            <labels for="c_jabatan">Jabatan<span class="required">*</span></labels>
								        <input type="text" placeholder="Jabatan Anda" name='c' id="c_jabatan" required/>
							        </p>
							        <p class="contact-form-jenkel" style="height:33px">
							            <labels for="c_jenkel">Jenis Kelamin<span class="required">*</span></labels>
							            <input type="radio" id="c_male" name="d" value="Laki-Laki"><span>&nbsp;&nbsp;Laki-Laki&nbsp;&nbsp;</span>
							            <input type="radio" id="c_female" name="d" value="Perempuan"><span>&nbsp;&nbsp;Perempuan&nbsp;&nbsp;</span>
							        </p>
							        <p class="contact-form-tgllhr">
							            <labels for="c_tgllhr">Tanggal Lahir<span class="required">*</span></labels>
							            <input type="date" id="c_tgllhr" name="e" value="Date" class="date">
							        </p>
							        <p class="contact-form-pendidikan">
								        <labels for="c_pendidikan">Jenjang Pendidikan<span class="required">*</span></labels>
								         <select id="" name="f">
								            <option value="0">--Pilih--</option>
                                            <option value="s2">Pasca Sarjana</option>
                                            <option value="s1">Sarjana/D4</option>
                                            <option value="d3">Diploma</option>
                                            <option value="sma">SMA/sederajat</option>
                                            <option value="smp">SMP/sederajat</option>
                                            <option value="sd">SD/sederajat</option>
                                        </select>
							        </p>
							        <input type="hidden" name='g' value="">
							        <p><input type="submit" name="submit" class="styled-button" style="width:100px" value="Berikutnya"/></p>
						        </form>
					        </div>
				        </div>
			        </div>
		        </div>
			</div>
		</div>
	</div>
	