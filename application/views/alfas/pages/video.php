<?php $this->load->view('alfas/partisi/header', ['page' => $page]); ?>

<!-- Main Content-->
<div class="container mt-5">
    <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
        <div class="card-body">
            <h2 class="card-title">
                <?= $video['jdl_video'] ?>
            </h2>

            <div class="row">
                <div class="col-6">
                    <div class="custom-horizontal-list">
                        <li>
                            <p class="d-flex align-items-center"><i class="bi bi-person mx-2"></i>
                                <?= $video['username'] ?></p>
                        </li>
                        <li>
                            <p class="d-flex align-items-center"><i class="bi bi-clock mx-2"></i> <?= $video['tanggal'] ?> </p>
                        </li>
                        <li>
                            <p class="d-flex align-items-center"><i class="bi bi-chat-dots mx-2"></i> <?= $countComments ?> comments</p>
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
                            <a href="http://twitter.com/share?text=<?= urlencode($video['jdl_video']) ?>&amp;url=<?= current_url() ?>" target="_blank">
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
                <div class="video-container asprat-video mb-3">

                    <iframe class="w-100 h-100" src="<?= $video['embed_url'] ?>" title="<?= $video['jdl_video'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <!-- other videos -->
                <h2>Video Lainya</h2>
                <?php foreach ($videos as $vid): ?>
                    <div class="row news-card custom-init-animation">
                        <div class="col-4 video-container">
                            <iframe class="w-100 h-100" src="<?= $vid['embed_url'] ?>" title="<?= $vid['jdl_vid'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="col-8">
                            <h5 class="card-title"><?= $vid['jdl_video'] ?></h5>
                            <div class="custom-horizontal-list sub-info">
                                <li style="padding: 0; margin: 0;">
                                    <p class="d-flex " style="margin: 0"><i class="bi bi-person mx-2"></i> <?= $vid['username'] ?></p>
                                </li>
                                <li style="padding: 0; margin: 0;">
                                    <p class="d-flex" style="margin: 0"><i class="bi bi-clock mx-2"></i> <?= $vid['tanggal'] ?></p>
                                </li>
                            </div>
                        </div>
                    </div>
                    <hr>
                <?php endforeach; ?>
            </div>

            <section class="p-0">
                <div class="container">
                    <h4 class="comments-count"><?= $countComments ?> Comments</h4>

                    <?php foreach ($komentars as $komentar) :  ?>
                        <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                            <div class="card-body">
                                <div class="d">
                                    <div class="row">
                                        <div class="col-auto">
                                            <img src="<?= base_url('asset/foto_user/blank.png') ?>" alt="user" class="rounded-circle" width="50">
                                        </div>
                                        <div class="col">
                                            <h5><i class="bi bi-person"></i> <?= $komentar['nama_komentar'] ?></h5>
                                            <span class="sub"><?= $komentar['tgl'] ?></span>
                                        </div>
                                    </div>
                                    <p>
                                        <?= $komentar['isi_komentar'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>


                    <?php endforeach; ?>
                </div>
            </section>

            <section class="comment-form section">
                <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <form action="<?= base_url('alfas/video/submitcomment') ?>" method="post">
                        <h4>Post Comment</h4>
                        <p>Your email address will not be published. Required fields are marked * </p>
                        <input type="hidden" name="id_video" value="<?= $video['id_video'] ?>">
                        <div class="row mb-4">
                            <div class="col-sm-6 form-group">
                                <input name="name" type="text" class="form-control" placeholder="Your Name*">
                            </div>
                            <div class="col-sm-6 form-group">
                                <input name="email" type="text" class="form-control" placeholder="Your Email*">
                            </div>
                        </div>
                        
                        <div class="row mb-4">
                            <div class="col form-group">
                                <textarea name="comment" class="form-control" rows="5" placeholder="Your Comment*"></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Post Comment</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>

        <?php $this->load->view('alfas/partisi/sidebarberitaterbaru', ['beritasidebar' => $beritasidebar]); ?>
    </div>
</div>