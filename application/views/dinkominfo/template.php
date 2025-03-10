<!DOCTYPE HTML>
<html lang = "en">
<head><meta charset="euc-kr">
<title><?php echo $title; ?></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
	
	<meta name="robots" content="index, follow">
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="keywords" content="<?php echo $keywords; ?>">
	<meta name="author" content="dinkominfo">
	<meta name="robots" content="all,index,follow">
	<meta http-equiv="Content-Language" content="id-ID">
	<meta NAME="Distribution" CONTENT="Global">
	<meta NAME="Rating" CONTENT="General">
	<link rel="canonical" href="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"/>
	<?php if ($this->uri->segment(1)=='berita' AND $this->uri->segment(2)=='detail'){ $rows = $this->model_utama->view_where('berita',array('judul_seo' => $this->uri->segment(3)))->row_array();
	   echo '<meta property="og:title" content="'.$title.'" />
			 <meta property="og:type" content="article" />
			 <meta property="og:url" content="'.base_url().''.$this->uri->segment(3).'" />
			 <meta property="og:image" content="'.base_url().'asset/foto_berita/'.$rows['gambar'].'" />
			 <meta property="og:description" content="'.$description.'"/>';
	} ?>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>asset/images/<?php echo favicon(); ?>" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="rss.xml" />

	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/background/<?php echo background(); ?>/mycustom.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/background/<?php echo background(); ?>/reset.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/background/<?php echo background(); ?>/main-stylesheet.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/background/<?php echo background(); ?>/shortcode.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/background/<?php echo background(); ?>/fonts.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/background/<?php echo background(); ?>/responsive.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/background/style.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/background/ideaboxWeather.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/slide/slide.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/slide/slide1.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/lightbox/lightbox.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/jscript/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/jscript/jquery-latest.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/jscript/theme-scripts.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/slide/js/jssor.slider-27.5.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/slide/js/slide1.js"></script>
	<?php if ($this->uri->segment(1)=='main' OR $this->uri->segment(1)==''){ ?>
	<script type="text/javascript" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/slide/js/jssor.slider-23.1.0.mini.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/slide/js/slide.js"></script>
	<?php } ?>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
	<style type="text/css">
		.the-menu a.active{ color:red !important; }
	</style>
</head>

<body>
<div id='Back-to-top'>
  <img alt='Scroll to top' src="<?php echo base_url(); ?>asset/top.png"/>
</div>
		<div class="boxed">	
			<div class="header">
				<?php include "header.php"; ?>
			</div>
			
			<div class="content">
				<div class="wrapper">
				    <div id="jssor_2" style="position:relative;margin:0 auto;top:0px;left:0px;width:1200px;height:350px;overflow:hidden;visibility:hidden;">
					    <!-- Loading Screen -->
					    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
						    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?php echo base_url(); ?>asset/spin.svg" />
					    </div>
					    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1200px;height:350px;overflow:hidden;">
						<?php
					    	$header = $this->model_utama->view_ordering_limit('iklanatas','id_iklanatas','desc',0,6);
						    $no=1;
						    foreach ($header->result_array() as $b) {
							    if ($b['gambar'] ==''){ $foto_slide = 'no-image.jpg'; }else{ $foto_slide = $b['gambar']; 
							        if (strlen($b['judul']) > 100){ $judul = substr($b['judul'],0,100).',..';  }else{ $judul = $b['judul']; }}
								echo  "<div><img data-u='image' src='".base_url()."asset/foto_iklanatas/$foto_slide'/>
									    <div data-u='thumb'><style='color:#b2f2f4'></div>
								    </div>";
								$no++;
							}
						?>
					    </div>
					    <!--<div u="thumbnavigator" style="position:absolute;bottom:0px;left:0px;width:1200px;height:50px;color:#FFF;overflow:hidden;cursor:default;background-color:rgba(0,0,0,.5);">-->
						   <!-- <div u="slides">-->
							  <!--  <div u="prototype" style="position:absolute;top:0;left:0;width:1200px;height:50px;">-->
								 <!--   <div u="thumbnailtemplate" style="position:absolute;top:0;left:0;width:100%;height:100%;font-family:arial,helvetica,verdana;font-weight:normal;line-height:50px;font-size:16px;padding-left:10px;box-sizing:border-box;"></div>-->
							  <!--  </div>-->
						   <!-- </div>-->
					    <!--</div>-->
					    <!-- Arrow Navigator -->
					    <div data-u="arrowleft" class="jssora061" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
						    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
							    <path class="a" d="M11949,1919L5964.9,7771.7c-127.9,125.5-127.9,329.1,0,454.9L11949,14079"></path>
						    </svg>
					    </div>
					    <div data-u="arrowright" class="jssora061" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
						    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
							    <path class="a" d="M5869,1919l5984.1,5852.7c127.9,125.5,127.9,329.1,0,454.9L5869,14079"></path>
						    </svg>
					    </div>
					</div>
					
					<!--div class="ctriklanatas">
					    <center>
					    <?php
					     /*   $iklanatas = $this->model_utama->view('iklanatas');
					        foreach ($iklanatas->result_array() as $b) {
						        $string = $b['gambar'];
						            if ($b['gambar'] != ''){
							            if(preg_match("/swf\z/i", $string)) {
								            echo "<embed width='100%' src='".base_url()."asset/foto_iklanatas/DXQ97B3V4AAlFRL.PNG' quality='high' type='application/x-shockwave-flash'>";
							            } else {
								            echo "<a href='$b[url]' target='_blank'><img width='80%' src='".base_url()."asset/foto_iklanatas/$b[gambar]' alt='$b[judul]' /></a>
									        <a href='$b[url]' class='ad-link'><span class='icon-text'>&#9652;</span>$b[judul]<span class='icon-text'>&#9652;</span></a>";
							            }
						            }
					        } */
					    ?>
					    </center>
					</div--><hr>
<!--<img src="https://dinkominfo.purworejokab.go.id/asset/foto_iklanatas/DXQ97B3V4AAlFRL.png" alt="Girl in a jacket" align="center" width="50%" height="50%">-->
					<div class="breaking-news">
						<span class="the-title">Breaking News</span>
						<ul>
							<?php
							  $terkini = $this->model_utama->view_where_ordering_limit('berita',array('status' => 'Y'),'id_berita','DESC',0,10);
							  foreach ($terkini->result_array() as $row) {
								echo "<li><a href='$row[judul_seo]'>$row[judul]</a></li>";
							  }
							?>
						</ul>
					</div>
					<div class="main-content">
						<?php echo $contents; ?>
					<div class="clear-float"></div>
					</div>
				</div>
			</div>

			<footer>
				<div class="footer">
					<?php 
						include "footer.php";
						$this->model_utama->kunjungan(); 
					?>
				</div>
			</footer>
		</div>
		<!-- Scripts -->
		<script type="text/javascript">jssor_2_slider_init();</script>
		<script>
			var slideIndex = 0;
			showSlides();

			function showSlides() {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("dot");
				for (i = 0; i < slides.length; i++) {
				   slides[i].style.display = "none";  
				}
				slideIndex++;
				if (slideIndex > slides.length) {slideIndex = 1}    
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex-1].style.display = "block";  
				dots[slideIndex-1].className += " active";
				setTimeout(showSlides, 2000); // Change image every 2 seconds
			}
		</script>
		<script>
			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
			  showSlides(slideIndex += n);
			}

			function currentSlide(n) {
			  showSlides(slideIndex = n);
			}

			function showSlides(n) {
			  var i;
			  var slides = document.getElementsByClassName("mySlides");
			  var dots = document.getElementsByClassName("dot");
			  if (n > slides.length) {slideIndex = 1}    
			  if (n < 1) {slideIndex = slides.length}
			  for (i = 0; i < slides.length; i++) {
				  slides[i].style.display = "none";  
			  }
			  for (i = 0; i < dots.length; i++) {
				  dots[i].className = dots[i].className.replace(" active", "");
			  }
			  slides[slideIndex-1].style.display = "block";  
			  dots[slideIndex-1].className += " active";
			}
		</script>
		<script type='text/javascript'>
		$(function() { $(window).scroll(function() {
		    if($(this).scrollTop()>400) { $('#Back-to-top').fadeIn(); }else { $('#Back-to-top').fadeOut();}});
		    $('#Back-to-top').click(function() {
		        $('body,html')
		        .animate({scrollTop:0},300)
		        .animate({scrollTop:40},200)
		        .animate({scrollTop:0},130)
		        .animate({scrollTop:15},100)
		        .animate({scrollTop:0},70);
		        });
		});

		function jam(){
			var waktu = new Date();
			var jam = waktu.getHours();
			var menit = waktu.getMinutes();
			var detik = waktu.getSeconds();
			 
			if (jam < 10){ jam = "0" + jam; }
			if (menit < 10){ menit = "0" + menit; }
			if (detik < 10){ detik = "0" + detik; }
			var jam_div = document.getElementById('jam');
			jam_div.innerHTML = jam + ":" + menit + ":" + detik;
			setTimeout("jam()", 1000);
		} jam();

		</script>

	<script type="text/javascript">
      (function (jQuery) {
      $.fn.ideaboxWeather = function (settings) {
      var defaults = {
      modulid   :'Swarakalibata',
      width :'100%',
      themecolor    :'#2582bd',
      todaytext :'Hari Ini',
      radius    :true,
      location  :' Jakarta',
      daycount  :7,
      imgpath   :'img_cuaca/', 
      template  :'vertical',
      lang  :'id',
      metric    :'C', 
      days  :["Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu"],
      dayssmall :["Mg","Sn","Sl","Rb","Km","Jm","Sa"]};
      var settings = $.extend(defaults, settings);

      return this.each(function () {
      settings.modulid = "#" + $(this).attr("id");
      $(settings.modulid).css({"width":settings.width,"background":settings.themecolor});

      if (settings.radius)
      $(settings.modulid).addClass("ow-border");

      getWeather();
      resizeEvent();

      $(window).on("resize",function(){
      resizeEvent();});

      function resizeEvent(){
      var mW=$(settings.modulid).width();

      if (mW<200){
      $(settings.modulid).addClass("ow-small");}
      else{
      $(settings.modulid).removeClass("ow-small");}}

      function getWeather(){$.get("https://api.openweathermap.org/data/2.5/forecast/daily?q="+settings.location+"&mode=xml&units=metric&cnt="+settings.daycount+"&lang="+settings.lang+"&appid=b318ee3082fcae85097e680e36b9c749", function(data) {
      var $XML = $(data);
      var sstr = "";
      var location = $XML.find("name").text();
      $XML.find("time").each(function(index,element) {
      var $this = $(this);
      var d = new Date($(this).attr("day"));
      var n = d.getDay();
      var metrics = "";
      if (settings.metric=="F"){
      metrics = Math.round($this.find("temperature").attr("day") * 1.8 + 32)+"°F";}
      else{
      metrics = Math.round($this.find("temperature").attr("day"))+"°C";}

      if (index==0){
      if (settings.template=="vertical"){
      sstr=sstr+'<div class="ow-today">'+
      '<span><img src="<?php echo base_url(); ?>asset/'+settings.imgpath+$this.find("symbol").attr("var")+'.png"/></span>'+
      '<h2>'+metrics+'<span>'+ucFirst($this.find("symbol").attr("name"))+'</span><b>'+location+' - '+settings.todaytext+'</b></h2>'+
      '</div>';}
      else{
      sstr=sstr+'<div class="ow-today">'+
      '<span><img src="<?php echo base_url(); ?>asset/'+settings.imgpath+$this.find("symbol").attr("var")+'.png"/></span>'+
      '<h2>'+metrics+'<span>'+ucFirst($this.find("symbol").attr("name"))+'</span><b>'+location+' - '+settings.todaytext+'</b></h2>'+
      '</div>';}}
      else{
      if (settings.template=="vertical"){
      sstr=sstr+'<div class="ow-days">'+
      '<span>'+settings.days[n]+'</span>'+
      '<p><img src="<?php echo base_url(); ?>asset/'+settings.imgpath+$this.find("symbol").attr("var")+'.png" title="'+ucFirst($this.find("symbol").attr("name"))+'"> <b>'+metrics+'</b></p>'+
      '</div>';}
      else{
      sstr=sstr+'<div class="ow-dayssmall" style="width:'+100/(settings.daycount-1)+'%">'+
      '<span title='+settings.days[n]+'>'+settings.dayssmall[n]+'</span>'+
      '<p><img src="<?php echo base_url(); ?>asset/'+settings.imgpath+$this.find("symbol").attr("var")+'.png" title="'+ucFirst($this.find("symbol").attr("name"))+'"></p>'+
      '<b>'+metrics+'</b>'+
      '</div>';}}});

      $(settings.modulid).html(sstr); 
      });}

      function ucFirst(string) {
      return string.substring(0, 1).toUpperCase() + string.substring(1).toLowerCase();}});
      };
      })(jQuery);

      $(document).ready(function(){
      $('#example1').ideaboxWeather({
      location      :' Jakarta, ID'});});
    </script>

    <script>
	$(function(){
	    var url = window.location.pathname, 
	        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
	        // now grab every link from the navigation
	        $('.the-menu a').each(function(){
	            // and test its normalized href against the url pathname regexp
	            if(urlRegExp.test(this.href.replace(/\/$/,''))){
	                $(this).addClass('active');
	            }
	        });

	});
	</script>
<!--style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style-->

	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/background/<?php echo background(); ?>/alert/csalert.css" />
	<script type="text/javascript" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/background/<?php echo background(); ?>/alert/csalert.js"></script>
</body>
</html>