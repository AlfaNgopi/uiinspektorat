<?php $this->load->view('alfas/partisi/header', ['page' => $page]); ?>

<div class="container mt-5">
    <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
        <div class="card-body">
            <h2 class="card-title"><?= $berita['judul'] ?></h2>
            <p class="subjudul"><?= $berita['sub_judul'] ?></p>

            <div class="row">
                <div class="col-6">
                    <ul class="custom-horizontal-list">
                        <li>
                            <p class="d-flex align-items-center">
                                <i class="bi bi-person mx-2"></i> <?= $berita['author_name'] ?>
                            </p>
                        </li>
                        <li>
                            <p class="d-flex align-items-center">
                                <i class="bi bi-clock mx-2"></i> <?= $berita['tanggal'] ?>
                            </p>
                        </li>
                        <li>
                            <p class="d-flex align-items-center">

                                <i class="bi bi-chat-dots mx-2"></i> <?= $countComments ?> comments
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
                            <a href="http://twitter.com/share?text=<?= urlencode($berita['title']) ?>&url=<?= current_url() ?>" target="_blank">
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
                <img src="<?= base_url('asset/foto_berita/' . $berita["gambar"]) ?>" class="card-img-top" alt="Image">
                <div class="ket-gambar text-center">
                    <?php if (!empty($berita['keterangan_gambar'])): ?>
                        <b>Keterangan Gambar:</b> <?= $berita['keterangan_gambar'] ?>
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <p class="card-text">
                    <div><?= $berita['isi_berita'] ?></div>
                    </p>
                </div>
            </div>

            <section class="p-0">
                <div class="container">
                    <h4 class="comments-count"><?= $countComments ?> Comments</h4>
                    <?php foreach ($komentars as $komentar): ?>
                        <div class="comment">
                            <div class="d-flex">
                                <div>
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
                    <form action="<?= base_url('alfas/komentar/submit') ?>" method="POST">
                        <h4>Post Comment</h4>
                        <input type="hidden" name="id_berita" value="<?= $berita['id_berita'] ?>">
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