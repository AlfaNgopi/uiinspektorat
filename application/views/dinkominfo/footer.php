<?php
/*<a href='https://wa.widget.web.id/0e2388' target='_blank'><img src='https://wa.widget.web.id/assets/img/tombol-wa.png'></a>*/
echo "<div class='wrapper'>
	<ul class='right'>";
		$topmenu2 = $this->model_utama->view_where('menu',array('position' => 'Top','aktif' => 'Ya'),'urutan','ASC',0,5);
			foreach ($topmenu2->result_array() as $row) {
			echo "<li><a href='$row[link]'>$row[nama_menu]</a></li>";
		}
	echo "</ul>
	<b><p ><center>&copy;  Copyright <b>Inspektorat Kabupaten Purworejo - ".date('Y')."</b> <br/>Jln. Mayjend. Sutoyo No 59 Purworejo E-Mail : inspektorat@purworejokab.go.id website: inspektorat.purworejokab.go.id</p>
</div>";
