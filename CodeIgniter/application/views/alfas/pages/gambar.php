<?php $this->load->view('alfas/partisi/header'); ?>
<!-- Main Content-->
<div class="container mt-5">
    <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
        <div class="card-body">
            <h2 class="card-title"><?= $album['jdl_album'] ?></h2>
            <div class="row">
                <div class="col-6">
                    <div class="custom-horizontal-list">
                        <li>
                            <p class="d-flex align-items-center"><i class="bi bi-person mx-2"></i><?= $gambar['username'] ?></p>
                        </li>
                        <li>
                            <p class="d-flex align-items-center"><i class="bi bi-clock mx-2"></i><?= $album['tgl_posting'] ?></p>
                        </li>
                    </div>
                </div>
                <div class="col-6">
                    <div class="custom-horizontal-list justify-content-end">
                        <li>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= current_url() ?>" target="_blank">
                                <i class="fa-brands fa-facebook-f" style="color: #3b5998"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://twitter.com/share?text=<?= $gambar['jdl_gallery'] ?>&amp;url=<?= current_url() ?>" target="_blank">
                                <i class="fa-brands fa-twitter" style="color: #00acee"></i>
                            </a>
                        </li>
                        <li>
                            <a href="whatsapp://send?text=<?= current_url() ?>" target="_blank">
                                <i class="fa-brands fa-whatsapp" style="color: #075e54"></i>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                <h2> <?= $gambar['jdl_gallery'] ?> </h2>

                <img src="<?php echo base_url('asset/img_galeri/' . $gambar['gbr_gallery']); ?>" class="img-fluid rounded-start w-100" alt="...">
                <!-- other videos -->
                <h2>Daftar Gambar</h2>
                <?php foreach ($gambars as $gam): ?>
                    <a href="<?php echo base_url('album/' . $album['jdl_album'] . '/' . $gam['gallery_seo']); ?>">
                        <div class="row news-card custom-init-animation">
                            <div class="col-4 r">
                                <img src="<?php echo base_url('asset/img_galeri/' . $gam['gbr_gallery']); ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-8">
                                <h5 class="card-title"><?= $gam['jdl_gallery'] ?></h5>
                            </div>
                        </div>
                        <hr>
                    </a>
                <?php endforeach; ?>

            </div>
        </div>
        <?php $this->load->view('alfas/partisi/sidebarberitaterbaru'); ?>
    </div>
</div>