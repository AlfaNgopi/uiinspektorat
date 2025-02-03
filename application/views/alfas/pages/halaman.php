<?php $this->load->view('alfas/partisi/header', ['page' => $page]); ?>

<div class="container mt-5">
    <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
        <div class="card-body">
            <h2 class="card-title"><?= $halaman['judul'] ?></h2>

            <div class="row">
                <div class="col-6">
                    <ul class="custom-horizontal-list">
                        <li>
                            <p class="d-flex align-items-center">
                                <i class="bi bi-person mx-2"></i> <?= $halaman['username'] ?>
                            </p>
                        </li>
                        <li>
                            <p class="d-flex align-items-center">
                                <i class="bi bi-clock mx-2"></i> <?= $halaman['tgl_posting'] ?>
                            </p>
                        </li>
                        
                    </ul>
                </div>

                <div class="col-6">
                    <ul class="custom-horizontal-list justify-content-end">
                        <li>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= current_url() ?>" target="_blank">
                                <i class="fa-brands fa-facebook-f" style="color: #3b5998"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://twitter.com/share?text=<?= urlencode($halaman['judul']) ?>&url=<?= current_url() ?>" target="_blank">
                                <i class="fa-brands fa-twitter" style="color: #00acee"></i>
                            </a>
                        </li>
                        <li>
                            <a href="whatsapp://send?text=<?= current_url() ?>" target="_blank">
                                <i class="fa-brands fa-whatsapp" style="color: #075e54"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                <?php if (!empty($halaman['gambar'])): ?>
                    <img src="<?= base_url('asset/foto_statis/'.$halaman['gambar']) ?>" class="card-img-top" alt="Image">
                <?php endif; ?>
                
                <div class="card-body">
                    <p class="card-text">
                        <div><?= $halaman['isi_halaman'] ?></div>
                    </p>
                </div>
            </div>

            

            
        </div>

        <?php $this->load->view('alfas/partisi/sidebarberitaterbaru', ['beritasidebar' => $beritasidebar]); ?>
    </div>
</div>

