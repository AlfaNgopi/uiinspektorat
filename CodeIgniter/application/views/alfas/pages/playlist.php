<?php $this->load->view('alfas/partisi/header', ['page' => $page]); ?>

<!-- Main Content-->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow-lg p-4 mb-5 bg-body-tertiary rounded">
                
                
                <?php foreach ($videos as $vid): ?>
                    <a style="text-decoration: none;" href="<?= base_url('videos/'.$vid['video_seo']) ?>">
                        <div class="row news-card custom-init-animation">
                            <div class="col-4 video-container">
                                <iframe class="w-100 h-100" src="<?= $vid['embed_url'] ?>"
                                    title="<?= $vid['jdl_video'] ?>"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="col-8">
                                <h5 class="card-title"><?= $vid['jdl_video'] ?></h5>
                                <div class="custom-horizontal-list sub-info">
                                    <li style="padding: 0; margin: 0;">
                                        <p class="d-flex " style="margin: 0"><i class="bi bi-person mx-2"></i> <?= $vid['username'] ?>
                                        </p>
                                    </li>
                                    <li style="padding: 0; margin: 0;">
                                        <p class="d-flex" style="margin: 0"><i class="bi bi-clock mx-2"></i> <?= $vid['tanggal'] ?> </p>
                                    </li>
                                </div>
                                <div class="news-tags"><?= $vid['playlist_name']; ?></div>
                            </div>
                        </div>
                        <hr>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php $this->load->view('alfas/partisi/sidebarberitaterbaru', ['beritasidebar' => $beritasidebar]); ?>
    </div>
</div>