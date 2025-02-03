<div class="block">
	<h2 style='color: #dd8229;border-bottom: 2px solid #dd8229;' class="list-title">Pengumuman</h2>
	<ul class="article-block">
		<?php 
			$sekilas = $this->model_utama->view_ordering_limit('sekilasinfo','id_sekilas','DESC',0,2);
			foreach ($sekilas->result_array() as $row) {	
			$tgl = tgl_indo($row['tgl_posting']);
			echo "<li>
					<div class='article-photo'>";
						if ($row['gambar'] ==''){
							echo "<a href='#' class='hover-effect'><img style='width:59px; height:42px;' src='".base_url()."asset/foto_info/small_no-image.jpg' alt='' /></a>";
						}else{
							echo "<a href='#' class='hover-effect'><img style='width:59px; height:42px;' src='".base_url()."asset/foto_info/$row[gambar]' alt='' /></a>";
						}
					echo "</div>
					<div class='article-content'>
						<h4><a href='#'>$row[info]</a></h4>
						<span class='meta'>
							<a href='#'><span class='icon-text'>&#128340;</span>$tgl</a>
						</span>
					</div>
				  </li>";
			}
		?>
	</ul>
</div>

<div class="block">
	<h2 class="list-title" style="color: green;border-bottom: 2px solid green;">LINK TERKAIT</h2>
	<ul class="article-list">
		<?php
		  $banner = $this->model_utama->view_ordering_limit('banner','id_banner','ASC',0,5);
		  foreach ($banner->result_array() as $b) {
					echo "<li><a target='_BLANK' href='$b[url]'>$b[judul]</a></li>";
		  }
		?>
	</ul>
</div>
<div class="widget">
	<h3>Video Terbaru</h3>
	<div class="latest-galleries">
		<?php						  
		  $video = $this->model_utama->view_ordering_limit('video','id_video','DESC',0,1);
		  foreach ($video->result_array() as $d) {
		  $baca = $d['dilihat']+1;
		  $tgl = tgl_indo($d['tanggal']);
		  $judul = substr($d['jdl_video'],0,35);
		  echo "<div class='gallery-widget'>
					<div class='gallery-photo' rel='hover-parent'>
						<a href='#' class='slide-left icon-text'>&#59229;</a>
						<a href='#' class='slide-right icon-text'>&#59230;</a>
						<ul>
							<li>";
								if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $d['youtube'], $match)) {
                                    echo "<iframe width='100%' height='220' src='https://www.youtube.com/embed/".$match[1]."' frameborder='0' allowfullscreen></iframe>";
                                } 
							echo "</li>
						</ul>
					</div>
					<div class='gallery-content'>
						<h4><a href='".base_url()."playlist/watch/$d[video_seo]' title='$d[jdl_video]'>$judul . . .</a></h4>
						<span class='meta'>
							<span class='right'>$d[hari], $tgl - Dilihat $baca Kali</span>
							<a href='".base_url()."playlist/watch/$d[video_seo]'><span class='icon-text'>&#59212;</span>Lihat Video</a>
						</span>
					</div>
				</div>";
		  }
		?>
	</div>
<a href="<?php echo base_url()."playlist"; ?>" class="more">View All Video</a>
</div>
<div class="block">
  <div class="widget">
      <?php echo"<a href='https://inspektorat.purworejokab.go.id/baru/survey' target='_blank'><img style='width:100%' src='".base_url()."asset/foto_info/survey.png' alt='' /></a>
					  <a href='https://inspektorat.purworejokab.go.id/baru/survey' class='ad-link'><span class='icon-text'>&#9652;</span><span class='icon-text'>&#9652;</span></a>"; ?>
  </div>
  <div class="widget">
      <?php echo"<a href='https://elhkpn.kpk.go.id/portal/user/pengumuman_lhkpn/TURaV05GSmFSMnhyT1dOUU9VOVBOakpKTDJFeFRVMXNjak' target='_blank'><img style='width:100%' src='".base_url()."asset/foto_info/LHKPN.png' alt='' /></a>
					  <a href='https://elhkpn.kpk.go.id/portal/user/pengumuman_lhkpn/TURaV05GSmFSMnhyT1dOUU9VOVBOakpKTDJFeFRVMXNjak' class='ad-link'><span class='icon-text'>&#9652;</span><span class='icon-text'>&#9652;</span></a>"; ?>
  </div>
</div>



<div class="widget">
	<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
<div id="gpr-kominfo-widget-container"></div></div>

<div class="block">
	<div class="banner">
		<?php
		  $pasangiklan = $this->model_utama->view_ordering_limit('pasangiklan','id_pasangiklan','ASC',0,1);
		  foreach ($pasangiklan->result_array() as $b) {
			$string = $b['gambar'];
			if ($b['gambar'] != ''){
				if(preg_match("/swf\z/i", $string)) {
					echo "<embed src='".base_url()."asset/foto_pasangiklan/$b[gambar]' width=250 height=200 quality='high' type='application/x-shockwave-flash'>";
				} else {
					echo "<a href='$b[url]' target='_blank'><img style='width:250px;' src='".base_url()."asset/foto_pasangiklan/$b[gambar]' alt='$b[judul]' /></a>
						  <a href='$b[url]' class='ad-link'><span class='icon-text'>&#9652;</span>$b[judul]<span class='icon-text'>&#9652;</span></a>";
				}
			}
		  }
		?>
	</div>
</div>

</div>