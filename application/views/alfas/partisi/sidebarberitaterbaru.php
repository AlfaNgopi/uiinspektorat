<div class="col-lg-4">
    <div>
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
                        <a href="<?= base_url('halaman/detail/sotk') ?>">
                            <div class="btn widget-btn w-100 m-1"
                                style="background-color: #282474; color: #fff;">
                                <i class="fa-solid fa-file-lines"></i> SOTK
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="<?= base_url('halaman/detail/sop') ?>">
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
    </div>

    <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <div class="card-body">
            <h5 class="card-title">Berita Terbaru</h5>
            <?php foreach ($beritasidebar as $berita): ?>
                <a href="<?= base_url('berita/detail/' . $berita['judul_seo']); ?>" style="text-decoration: none;">
                    <div class="row news-card mt-3">
                        <div class="col-lg-4 news-card-img">
                            <img src="<?= base_url('asset/foto_berita/' . $berita["gambar"]) ?>" class="img-fluid asprat-4-3 rounded-start" alt="...">
                        </div>
                        <div class="col-lg-8">
                            <p class="card-title text-truncate-2 m-0"><?= $berita['judul'] ?></p>
                            <div class="news-tags"><?= $berita['kategori_name'] ?></div>
                        </div>
                    </div>
                    <hr class="solid">
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>