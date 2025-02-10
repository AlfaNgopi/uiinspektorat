<!-- Masthead -->
<div>
    <div class="masthead">
        <video autoplay muted loop class="masthead-video w-100">
            <source src="<?= base_url('asset/alfa/homevideo.mp4'); ?>" type="video/mp4">
        </video>
        <img class="masthead-logo" src="<?= base_url('asset/alfa/inspektorat-logo.png'); ?>" alt="Logo">
    </div>
</div>

<!-- Carousel -->
<div class="w3-content w3-section" style="width:70%;">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php for ($i = 0; $i < 6; $i++): ?>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i; ?>" <?= $i == 0 ? 'class="active" aria-current="true"' : ''; ?> aria-label="Slide <?= $i + 1; ?>"></button>
            <?php endfor; ?>
        </div>
        <div class="carousel-inner bg-dark">
            <?php

            foreach ($carouselImages as $key => $image): ?>
                <div class="carousel-item custom-carousel <?= $key == 0 ? 'active' : ''; ?>">
                    <img src="<?= base_url("asset/foto_iklanatas/$image"); ?>" class="img-fluid d-block p-2 w-100 h-100" alt="...">
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Berita Grid -->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Berita Utama</h2>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="row gy-4">

                    <?php foreach ($beritas as $berita): ?>
                        <div class="col-lg-6 news-card custom-init-animation">
                            <a style="text-decoration: none; color:#000" href="<?= base_url('berita/detail/' . $berita['judul_seo']); ?>">
                                <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded mb-3" style="min-height: 215px;">
                                    <div class="row g-0">
                                        <div class="col-md-4 news-card-img">
                                            <img src="<?= base_url('asset/foto_berita/' . $berita['gambar']); ?>" class="img-fluid rounded-start asprat" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title text-truncate-3"><?= $berita['judul']; ?></h5>
                                                <p class="card-text text-truncate-3"><?= $berita['sinopsis']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                    <div class="text-end mt-3">
                        <a href="<?= base_url('berita/browse'); ?>" class="btn btn-primary">Lihat Semua Berita</a>
                    </div>
                </div>
            </div>
            <!-- Sidebar -->
            <div class="col-lg-3">
                <!-- Kanal Aduan -->
                <div class="custom-widget" style="background-color: rgb(200, 200, 200);">
                    <div class="widget-header">
                        Kanal Aduan
                    </div>
                    <div class="widget-body mb-3">

                        <ul class="list-unstyled">
                            <li><a style="text-decoration: none; color: #000;" href="https://www.lapor.go.id/" target="_blank"><i
                                        class="fa-solid fa-envelope px-2"
                                        style="color: rgb(9, 0, 102); min-width: 30px"></i>Lapor SPAN</a></li>
                            <li><a style="text-decoration: none; color: #000;" href="https://bit.ly/Pengaduan_Inspektorat-Daerah_Purworejo" target="_blank"><i
                                        class="fa-brands fa-whatsapp px-2"
                                        style="color: rgb(9, 0, 102); min-width: 30px"></i>Lapor WhatsApp</a></li>
                            <li><a style="text-decoration: none; color: #000;" href="https://www.instagram.com/purworejoinskab?igsh=bno4dnBwaTM5cm5u" target="_blank"><i
                                        class="fa-brands fa-instagram px-2"
                                        style="color: rgb(9, 0, 102); min-width: 30px"></i>Lapor Instagram</a></li>
                            <li><a style="text-decoration: none; color: #000;" href="https://docs.google.com/forms/d/e/1FAIpQLScQX0jTOEbVOMaxskF_KZrLkLfTDe2joEjkQ7IZwu4db8hbpw/viewform?usp=dialog" target="_blank"><i
                                        class="fa-solid fa-user-tie px-2"
                                        style="color: rgb(9, 0, 102); min-width: 30px"></i>Teras Pak Bejo</a></li>

                        </ul>
                    </div>
            </div>
            <hr>
            <div class="custom-widget" style="background-color: rgb(200, 200, 200);">
                <div class="widget-header">
                    Informasi Publik
                </div>
                <div class="widget-body">
                    <div class="row">
                        <div class="col-6">
                            <a href="<?= base_url('halaman/detail/struktur-organisasi-dan-tata-kerja') ?>">
                                <div class="btn widget-btn w-100 m-1"
                                    style="background-color: #282474; color: #fff;">
                                    <i class="fa-solid fa-file-lines"></i> SOTK
                                </div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="<?= base_url('halaman/detail/standard-operating-procedure') ?>">
                                <div class="btn widget-btn w-100 m-1"
                                    style="background-color: #282474; color: #fff;">
                                    <i class="fa-solid fa-file-lines"></i> SOP
                                </div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="https://drive.google.com/drive/folders/16DwRZr6M3tESwcPx1PTWNZblMfmVQoO5?usp=drive_link" target="_blank">
                                <div class="btn widget-btn w-100 m-1"
                                    style="background-color: #282474; color: #fff;">
                                    <i class="fa-solid fa-file-lines"></i> LHKPN
                                </div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="https://drive.google.com/drive/folders/1pImrpcf4ieUaqmqz2u7IJVUVlp3uRbdD?usp=drive_link" target="_blank">
                                <div class="btn widget-btn w-100 m-1"
                                    style="background-color: #282474; color: #fff;">
                                    <i class="fa-solid fa-file-lines"></i> LHKAN
                                </div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="https://drive.google.com/drive/folders/1chG_l5HcPMaBYgLYxzKk55YQDBU5q39M?usp=drive_link" target="_blank">
                                <div class="btn widget-btn w-100 m-1"
                                    style="background-color: #282474; color: #fff;">
                                    <i class="fa-solid fa-file-lines"></i> DPA
                                </div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="https://drive.google.com/drive/folders/1q52hRnsCPA4N8BwTIPqY54rBPy-ueif6?usp=drive_link" target="_blank">
                                <div class="btn widget-btn w-100 m-1"
                                    style="background-color: #282474; color: #fff;">
                                    <i class="fa-solid fa-file-lines"></i> LKJIP
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <hr>
            <div class="widget">
                <script type="text/javascript" src="<?= base_url('asset/alfa/js/kom.js') ?>"></script>
                <div id="gpr-kominfo-widget-container"></div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Berita Pilihan -->
<section class="page-section" id="Bpilihan">
    <h1 class="text-center">Berita Pilihan Redaksi</h1>
    <div id="cardSlider" class="carousel carousel-dark slide custom-init-animation" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">

                <div class="d-flex" style="justify-content: space-evenly;">
                    <?php foreach ($beritaredaksis1 as $key => $berita): ?>
                        <div class="card mx-2" style="width: 18rem;">
                            <img src="<?= base_url('asset/foto_berita/' . $berita['gambar']); ?>" class="card-img-top asprat-4-3" alt="Card Image">
                            <div class="card-body">
                                <h5 class="text-truncate-2"><?= $berita['judul']; ?></h5>
                                <p class="card-text text-truncate-3"><?= $berita['sinopsis']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
            <div class="carousel-item ">
                <div class="d-flex" style="justify-content: space-evenly;">
                    <?php foreach ($beritaredaksis2 as $key => $berita): ?>

                        <div class="card mx-2" style="width: 18rem;">
                            <img src="<?= base_url('asset/foto_berita/' . $berita['gambar']); ?>" class="card-img-top asprat-4-3" alt="Card Image">
                            <div class="card-body">
                                <h5 class="text-truncate-2"><?= $berita['judul']; ?></h5>
                                <p class="card-text text-truncate-3"><?= $berita['sinopsis']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#cardSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#cardSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>


<!-- Video Grid-->
<section class="page-section bg-light ">
    <div class="row mx-3">


        <div class="col-lg-8">
            <div class="card shadow-lg p-3 mb-5 h-100 bg-body-tertiary custom-init-animation ">
                <h2 class="card-title  text-center">Video Terbaru</h2>
                <div class="row h-100">
                    <div class="col-md-4 h-100 video-container">
                        <iframe class="w-100 h-100" src="https://www.youtube.com/embed/Ys02g5xgTBs"
                            title="Inspektorat Kabupaten Purworejo Melihat SPI Survei Penilaian Integritas Lebih Dekat"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body h-100 d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title">Inspektorat Kabupaten Purworejo Melihat SPI Survei Penilaian
                                    Integritas Lebih Dekat</h5>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                        ago</small></p>
                            </div>
                            <div class="text-end mt-3">
                                <a href="/semua-video" class="btn btn-primary">Lihat Semua Video</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-4">
            <div
                class="widget card shadow-lg p-3 mb-2 bg-body-tertiary border border-primary border-4 custom-init-animation">
                <h3>Jejak Pendapat</h3>


                <div style="color:#000; font-weight:bold;">Bagaimana Pelayanan di Inspektorat? <br></div>
                <form method="POST" action="https://inspektorat.purworejokab.go.id/baru/polling/hasil">
                    <input class="marginpoling" type="radio" name="pilihan" value="40">
                    <class style="color:#666;font-size:12px;">&nbsp;&nbsp;Memuaskan<br><input class="marginpoling"
                            type="radio" name="pilihan" value="41">
                        <class style="color:#666;font-size:12px;">&nbsp;&nbsp;Sangat Memuaskan<br><input
                                class="marginpoling" type="radio" name="pilihan" value="42">
                            <class style="color:#666;font-size:12px;">&nbsp;&nbsp;Kurang Memuaskan<br><br>
                                <center><input style="width: 110px; padding:2px" type="submit" class="simplebtn"
                                        value="PILIH">

                                    <a href="https://inspektorat.purworejokab.go.id/baru/polling">
                                        <input style="width: 110px; padding:2px;" type="button" class="simplebtn"
                                            value="LIHAT HASIL"></a>
                                </center>
                            </class>
                        </class>
                    </class>
                </form>
            </div>
            <div class="mb-2 ">
                <div class="widget card shadow-lg  bg-body-tertiary custom-init-animation">
                    <a href="https://inspektorat.purworejokab.go.id/baru/survey" target="_blank">
                        <img style="width: 100%; height: auto;"
                            src="https://inspektorat.purworejokab.go.id/baru/asset/foto_info/survey.png"
                            alt="Survey" class="img-fluid">
                    </a>
                </div>

            </div>

            <div class="mb-1 mx-auto" style="width: 70%;">

                <div class="block card shadow-lg  bg-body-tertiary custom-init-animation +">
                    <div class="banner">
                        <a href="https://ppid.purworejokab.go.id/" style="width: 100%;" target="_blank">
                            <img src="https://inspektorat.purworejokab.go.id/baru/asset/foto_pasangiklan/ppid1.png"
                                alt="PPID Utama" class="img-fluid w-100" style="width: 100%; height: auto;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>



</section>