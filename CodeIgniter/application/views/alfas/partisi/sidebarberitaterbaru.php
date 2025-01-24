<div class="col-lg-4">
    <div>
        <div class="custom-widget" style="background-color: rgb(200, 200, 200);">
            <div class="widget-header">
                Kanal Aduan
            </div>
            <div class="widget-body mb-3">
                <ul class="list-unstyled">
                    <li><a style="text-decoration: none; color: #000;" href=""><i
                                class="fa-solid fa-envelope px-2"
                                style="color: rgb(9, 0, 102); min-width: 30px"></i>Lapor SPAN</a></li>
                    <li><a style="text-decoration: none; color: #000;" href=""><i
                                class="fa-brands fa-whatsapp px-2"
                                style="color: rgb(9, 0, 102); min-width: 30px"></i>Lapor WhatsApp</a></li>
                    <li><a style="text-decoration: none; color: #000;" href=""><i
                                class="fa-brands fa-instagram px-2"
                                style="color: rgb(9, 0, 102); min-width: 30px"></i>Lapor Instagram</a></li>
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
                        <a href="/document/sotk">
                            <div class="btn widget-btn w-100 m-1"
                                style="background-color: #282474; color: #fff;">
                                <i class="fa-solid fa-file-lines"></i> SOTK
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="#">
                            <div class="btn widget-btn w-100 m-1"
                                style="background-color: #282474; color: #fff;">
                                <i class="fa-solid fa-file-lines"></i> LHKAN
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="#">
                            <div class="btn widget-btn w-100 m-1"
                                style="background-color: #282474; color: #fff;">
                                <i class="fa-solid fa-file-lines"></i> DPA
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="#" target="_blank">
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
            <a href="/berita/<?= $berita['link'] ?>" style="text-decoration: none;">
                <div class="row news-card mt-3">
                    <div class="col-lg-4 news-card-img">
                        <img src="<?= base_url($berita['img']) ?>" class="img-fluid asprat-4-3 rounded-start" alt="...">
                    </div>
                    <div class="col-lg-8">
                        <p class="card-title text-truncate-2 m-0"><?= $berita['title'] ?></p>
                        <div class="news-tags"><?= $berita['kategori_name'] ?></div>
                    </div>
                </div>
                <hr class="solid">
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>
