<div class="widget">
    <h3>Cuaca</h3>
<a class="weatherwidget-io" href="https://forecast7.com/en/n7d71110d01/purworejo/" data-label_1="PURWOREJO" data-label_2="WEATHER" data-days="3" data-theme="orange" >PURWOREJO WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
</div>

<div class="widget">
    <h3>Instagram</h3>
<!-- InstaWidget -->
<!-- SnapWidget -->
<script src="https://snapwidget.com/js/snapwidget.js"></script>
<!--iframe src="https://snapwidget.com/embed/741594" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; width:525px; "></iframe-->
<!-- SnapWidget -->
<iframe src="https://snapwidget.com/embed/928512" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; height:350px;"></iframe>
<!-- Instagram Widget Embed End -->
<!--a href="https://instawidget.net/v/user/dinkominfopwr" id="link-75ddcc802ee2027011dea48f17d76a4c9b4aef05f1e3c1049ecfbcdd352edc85">@dinkominfopwr</a>
<script src="https://instawidget.net/js/instawidget.js?u=75ddcc802ee2027011dea48f17d76a4c9b4aef05f1e3c1049ecfbcdd352edc85&width=300px"></script-->
</div>

<div class="widget">
    <h3>Twitter</h3>
	<?php
	  $pasangiklan2 = $this->model_utama->view_ordering_limit('pasangiklan','id_pasangiklan','ASC',1,1);
	  foreach ($pasangiklan2->result_array() as $b) {
		$string = $b['gambar'];
		if ($b['gambar'] != ''){
			if(preg_match("/swf\z/i", $string)) {
				echo "<embed src='".base_url()."asset/foto_pasangiklan/$b[gambar]' width=300 height=240 quality='high' type='application/x-shockwave-flash'>";
			} else {
				echo "<a href='$b[url]' target='_blank'><img style='width:100%' src='".base_url()."asset/foto_pasangiklan/$b[gambar]' alt='$b[judul]' /></a>
					  <a href='$b[url]' class='ad-link'><span class='icon-text'>&#9652;</span>$b[judul]<span class='icon-text'>&#9652;</span></a>";
			}
		}
	  }
	?>
</div><hr>
<div class="widget">
	<a class="twitter-timeline" data-height="450" href="https://twitter.com/purworejokab">Tweets by purworejokab</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
<div class="widget">
    <h3>Jejak Pendapat</h3>

		<?php
		  $t = $this->model_utama->view_where('poling',array('aktif' => 'Y','status' => 'Pertanyaan'))->row_array();
		  echo " <div style='color:#000; font-weight:bold;'>$t[pilihan] <br></div>";
		  echo "<form method=POST action='".base_url()."polling/hasil'>";
			  $pilih = $this->model_utama->view_where('poling',array('aktif' => 'Y','status' => 'Jawaban'));
			  foreach ($pilih->result_array() as $p) {
			  echo "<input class=marginpoling type=radio name=pilihan value='$p[id_poling]'/>
					<class style=\"color:#666;font-size:12px;\">&nbsp;&nbsp;$p[pilihan]<br />";}
			  echo "<br><center><input style='width: 110px; padding:2px' type=submit class=simplebtn value='PILIH' />
		  </form>
		  <a href='".base_url()."polling'>
		  <input style='width: 110px; padding:2px;' type=button class=simplebtn value='LIHAT HASIL' /></a></center>";
		?>
</div>


<div class="widget">
	<h3>Berita Populer</h3>
	<div class="widget-articles">
		<ul>
			<li>
				<?php 
					$populer = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('berita.status' => 'Y'),'dibaca','DESC',0,3);
					foreach ($populer->result_array() as $r2x) {
					$total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $r2x['id_berita']))->num_rows();
					echo "<li>
							<div class='article-photo'>";
								if ($r2x['gambar'] ==''){
									echo "<a href='".base_url()."$r2x[judul_seo]' class='hover-effect'><img style='width:59px; height:42px;' src='".base_url()."asset/foto_berita/small_no-image.jpg' alt='' /></a>";
								}else{
									echo "<a href='".base_url()."$r2x[judul_seo]' class='hover-effect'><img style='width:59px; height:42px;' src='".base_url()."asset/foto_berita/$r2x[gambar]' alt='' /></a>";
								}
							echo "</div>
							<div class='article-content'>
								<h4><a href='".base_url()."$r2x[judul_seo]'>$r2x[judul]</a><a href='".base_url()."$r2x[judul_seo]' class='h-comment'>$total_komentar</a></h4>
								<span class='meta'>
									<a href='".base_url()."$r2x[judul_seo]'><span class='icon-text'>&#128340;</span>$r2x[jam], ".tgl_indo($r2x['tanggal'])."</a>
								</span>
							</div>
						  </li>";
					}
				?>
			</li>
		</ul>
	</div>
</div>
<div class="widget">
    
 <div class="widget">
<h3>Temukan juga kami di</h3>
	<div class="widget-social">
		<div class="social-bar">
		<?php
			$sosmed = $this->model_utama->view('identitas')->row_array();
			$pecahd = explode(",", $sosmed['facebook']);
		?>
		<a target="_BLANK" href="<?php echo $pecahd[0]; ?>" class="btn btn-social-icon btn-facebook"><span class="facebook">Facebook</span></a>
		<a target="_BLANK" href="<?php echo $pecahd[1]; ?>" class="social-icon"><span class="twitter">Twitter</span></a>
		<a target="_BLANK" href="<?php echo $pecahd[2]; ?>" class="social-icon"><span class="google">Instagram</span></a>
		</div>
		<p>Ikuti kami di facebook, twitter, Instagram dan dapatkan informasi- informasi terbaru dari kami disana.</p>
	</div>
</div>   
    
<?php
function seo_slug($str){
	$seo = strtolower(str_replace(' ','-',preg_replace('/[^a-zA-Z0-9_ %\[\]\.%&-]/s', '', $str)));
	return $seo;
}
?>
<div class="widget">
	<h3>Berita Purworejo</h3>
	<div class="widget-articles">
		<ul>
			<li>
				<?php
				
				$pemkab = $this->model_pemkab->get_berita_pemkab();
				//var_dump($pemkab);
				foreach ($pemkab as $berita_pemkab) {
					$link_berita = "https://www.purworejokab.go.id/web/read/".$berita_pemkab['post_id']."/".seo_slug($berita_pemkab['post_title']);
					echo "<li>
							<div class='article-photo'>";
					if ($berita_pemkab['post_image'] == '') {
						echo "<a target=\"_blank\" href='$link_berita' class='hover-effect'><img style='width:59px; height:42px;' src='" . base_url() . "asset/foto_berita/small_no-image.jpg' alt='' /></a>";
					} else {
						echo "<a target=\"_blank\" href='$link_berita' class='hover-effect'><img style='width:59px; height:42px;' src='https://www.purworejokab.go.id/web/cni-content/uploads/modules/posts/$berita_pemkab[post_image]' alt='' /></a>";
					}
					echo "</div>
							<div class='article-content'>
								<h4><a target=\"_blank\" href='$link_berita'>$berita_pemkab[post_title]</a></h4>
								<span class='meta'>
								</span>
							</div>
						  </li>";
				}
				
				?>
			</li>
		</ul>
	</div>
</div>

<h3>STATISTIK PENGUNJUNG</h3>
<ul class="article-list">
<?php 
  $pengunjung       = $this->model_utama->pengunjung()->num_rows();
  $totalpengunjung  = $this->model_utama->totalpengunjung()->row_array();
  $hits             = $this->model_utama->hits()->row_array();
  $totalhits        = $this->model_utama->totalhits()->row_array();
  $pengunjungonline = $this->model_utama->pengunjungonline()->num_rows();
  echo "<li>User Online : $pengunjungonline</li>
        <li>Today Visitor : $pengunjung</li>
        <li>Hits hari ini : $hits[total]</li>
        <li>Total pengunjung : $totalpengunjung[total]</li>";
?>
</ul>
</div>

 

