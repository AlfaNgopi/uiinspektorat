<?php $this->load->view('alfas/partisi/header', ['page' => $page]); ?>

<!-- Main Content -->
<div class="container mt-5">

    <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
        <div class="card-body">
            <h2 class="card-title">Daftar Berita</h2>

            <div class="row">
                <div class="col-lg-8">
                    <div>Kategori :</div>
                    <div class="custom-horizontal-list" style="max-width: 80%;">
                        <?php foreach ($kategoris as $kategori): ?>
                            <li>
                                <?php if ($currentKategori == $kategori['id_kategori']): ?>
                                    <div class="btn btn-current"><?= $kategori['nama_kategori']; ?></div>
                                <?php else: ?>
                                    <a href="<?= base_url('berita/browse/' . $kategori['kategori_seo']); ?>" class="btn btn-outline-primary">
                                        <?= $kategori['nama_kategori']; ?>
                                    </a>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <form action="<?= base_url('berita/browse/cari/'); ?>" method="GET" class="input-group mb-3" style="min-width: 200px;">
                        <input type="text" name="keyword" class="form-control" placeholder="Cari Berita" aria-label="Search" aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow-lg p-4 mb-5 bg-body-tertiary rounded">

                <?php foreach ($beritas as $berita): ?>
                    <a style="all: unset; cursor:pointer" href="<?= base_url('berita/detail/' . $berita['judul_seo']); ?>">
                        <div class="row news-card custom-init-animation">
                            <div class="col-md-4 news-card-img p-0">
                                <img src="<?= base_url('asset/foto_berita/'.$berita['gambar']); ?>" class="img-fluid asprat-4-3 rounded-start" alt="...">
                            </div>
                            <div class="col-8">
                                <div style="border-width: 0;">
                                    <h5 class="card-title text-truncate-2"><?= $berita['judul']; ?></h5>
                                    <div class="custom-horizontal-list sub-info">
                                        <li style="padding: 0; margin: 0;">
                                            <p class="d-flex" style="margin: 0">
                                                <i class="bi bi-person mx-2"></i> <?= $berita['username']; ?>
                                            </p>
                                        </li>
                                        <li style="padding: 0; margin: 0;">
                                            <p class="d-flex" style="margin: 0">
                                                <i class="bi bi-clock mx-2"></i> <?= $berita['tanggal']; ?>
                                            </p>
                                        </li>
                                        <li style="padding: 0; margin: 0;">
                                            <div class="news-tags"><?= $berita['kategori_name']; ?></div>
                                        </li>
                                    </div>
                                    <p class="card-text text-truncate-4"><?= $berita['sinopsis']; ?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <hr>
                <?php endforeach; ?>

                <!-- Pagination -->
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <?php if ($pagination['current_page'] > 1): ?>
                            <li class="page-item">
                                <a class="page-link" href="<?= current_url() . '?page=' . ($pagination['current_page'] - 1); ?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php for ($i = 1; $i <= $pagination['last_page']; $i++): ?>
                            <li class="page-item <?= ($i == $pagination['current_page']) ? 'active' : ''; ?>">
                                <a class="page-link" href="<?= current_url() . '?page=' . $i; ?>"><?= $i; ?></a>
                            </li>
                        <?php endfor; ?>

                        <?php if ($pagination['current_page'] < $pagination['last_page']): ?>
                            <li class="page-item">
                                <a class="page-link" href="<?= current_url() . '?page=' . ($pagination['current_page'] + 1); ?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </nav>

            </div>
        </div>

        <?php $this->load->view('alfas/partisi/sidebarberitaterbaru', ['beritasidebar' => $beritasidebar]); ?>
    </div>
</div>
