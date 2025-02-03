<div class="main-page left">
	<div class="double-block">
		<div class="content-block main right">
			<div class="block">
				<div class="featured-block">
					<?php
						$cekslide = $this->model_utama->view_single('berita',array('headline' => 'Y','status' => 'Y'),'id_berita','DESC');
						if ($cekslide->num_rows() > 0){
						  include "slide.php";
						}
					?>	
				</div>
			</div>
			
			<div class="block">
				<div class="block-title">
					<a href="<?php echo base_url(); ?>berita/indeks_berita" class="right">+ Indexs Berita</a>
					<h2>Berita Utama</h2>
				</div>
				<div class="block-content">
					<ul class="article-block-big">
						<?php 
							$no = 1;
							$hot = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('utama' => 'Y','status' => 'Y'),'id_berita','DESC',0,12);
                			foreach ($hot->result_array() as $row) {	
							$total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $row['id_berita']))->num_rows();
							$tgl = tgl_indo($row['tanggal']);
							echo "<li style='width:180px'>
									<div class='article-photo'>
										<a href='".base_url()."$row[judul_seo]' class='hover-effect'>";
											if ($row['gambar'] ==''){
												echo "<a class='hover-effect' href='".base_url()."$row[judul_seo]'><img style='height:110px; width:200px' src='".base_url()."asset/foto_berita/no-image.jpg' alt='' /></a>";
											}else{
												echo "<a class='hover-effect' href='".base_url()."$row[judul_seo]'><img style='height:110px; width:200px' src='".base_url()."/asset/foto_berita/$row[gambar]' alt='' /></a>";
											}
									echo "</a>
									</div>
									<div class='article-content'>
										<h4><a href='".base_url()."$row[judul_seo]'>$row[judul]</a><a href='".base_url()."$row[judul_seo].html' class='h-comment'>$total_komentar</a></h4>
										<span class='meta'>
											<a href='".base_url()."$row[judul_seo]'><span class='icon-text'>&#128340;</span>$row[jam], $tgl</a>
										</span>
									</div>
								  </li>";
							}
						?>
					</ul>
				</div>
			</div>
			
			<?php
				$ia = $this->model_utama->view_ordering_limit('iklantengah','id_iklantengah','ASC',0,1)->row_array();
				echo "<a href='$ia[url]' target='_blank'>";
					$string = $ia['gambar'];
					if ($ia['gambar'] != ''){
						if(preg_match("/swf\z/i", $string)) {
							echo "<embed style='margin-top:-10px' src='".base_url()."asset/foto_iklantengah/$ia[gambar]' width='100%' height=90px quality='high' type='application/x-shockwave-flash'>";
						} else {
							echo "<img style='margin-top:-10px; margin-bottom:5px' width='100%' src='".base_url()."asset/foto_iklantengah/$ia[gambar]' title='$ia[judul]' />";
						}
					}
				echo "</a>";
			?>
					
			
			<div class="block">
				<div class="block-title" style="background: #dd8229;">
					<a href="#" class="right">Beberapa Berita Pilihan</a>
					<h2>Berita Pilihan Redaksi</h2>
				</div>
				<div class="block-content">
					<ul class="article-block-big">
						<?php 
							$pilihan = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('berita.aktif' => 'Y','berita.status' => 'Y'),'id_berita','DESC',0,6);
							foreach ($pilihan->result_array() as $pi) {
							$total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $pi['id_berita']))->num_rows();
							 $tgl = tgl_indo($pi['tanggal']);
								echo "<li style='width:180px'>
										<div class='article-photo'>
											<a href='".base_url()."$pi[judul_seo]' class='hover-effect'>";
												if ($pi['gambar'] ==''){
													echo "<a class='hover-effect' href='".base_url()."$pi[judul_seo]'><img style='height:110px; width:210px' src='".base_url()."asset/foto_berita/no-image.jpg' alt='' /></a>";
												}else{
													echo "<a class='hover-effect' href='".base_url()."$pi[judul_seo]'><img style='height:110px; width:210px' src='".base_url()."asset/foto_berita/$pi[gambar]' alt='' /></a>";
												}
										echo "</a>
										</div>
										<div class='article-content'>
											<h4><a href='".base_url()."$pi[judul_seo]'>$pi[judul]</a><a href='".base_url()."$pi[judul_seo]' class='h-comment'>$total_komentar</a></h4>
											<span class='meta'>
												<a href='".base_url()."$pi[judul_seo]'><span class='icon-text'>&#128340;</span>$pi[jam], $tgl</a>
											</span>
										</div>
									  </li>";
							}
						?>
					</ul>
				</div>
			</div>
		</div>				
		<div class="content-block left">
			<?php include "sidebar_kiri.php"; ?>
		</div>
	</div>
</div>
<div class="main-sidebar right">
	<?php include "sidebar_kanan.php"; ?>
</div>
 <div id="twitter" class="group btmspace-30">
	    <marquee  behavior="alternate" scrolldelay="200">
	          <a href="https://lpse.purworejokab.go.id/eproc4"><img src="https://inspektorat.purworejokab.go.id/baru/asset/images/lpse-logo.png" alt=""> </a> &nbsp &nbsp &nbsp &nbsp
              <a href="https://satudata.purworejokab.go.id/" target="_blank"><img src="https://inspektorat.purworejokab.go.id/baru/asset/images/satudata.png" alt=""> </a> &nbsp &nbsp &nbsp &nbsp
              <a href="https://covid19.purworejokab.go.id/" target="_blank"><img src="https://inspektorat.purworejokab.go.id/baru/asset/images/covid1.jpg" alt=""> </a> &nbsp &nbsp &nbsp &nbsp
              <a href="https://www.kpk.go.id/id/" target="_blank"><img src="https://inspektorat.purworejokab.go.id/baru/asset/images/kpk.png" alt=""> </a> &nbsp &nbsp &nbsp &nbsp
              <a href="http://www.bpkp.go.id" target="_blank"><img src="https://inspektorat.purworejokab.go.id/baru/asset/images/bpkp.png" alt=""> </a> &nbsp &nbsp &nbsp &nbsp
              <a href="https://www.bpk.go.id" target="_blank"><img src="https://inspektorat.purworejokab.go.id/baru/asset/images/bpkri.png" alt=""> </a> &nbsp &nbsp &nbsp &nbsp
              <a href="http://inspektorat.jatengprov.go.id" target="_blank"><img src="https://inspektorat.purworejokab.go.id/baru/asset/images/prov.png" alt=""> </a> &nbsp &nbsp &nbsp &nbsp
        </marquee> 
	  </div>