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
                                    <a href="<?= base_url('berita/browse/kategori/' . $kategori['kategori_seo']); ?>" class="btn btn-outline-primary">
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

    <style>
        .carousel-item {
            
            transition: 0.6s ease-in-out left;
        }
    </style>


    <div class=" shadow-lg  m-3 " style="background-color: white; height: 30px;">
        <div class="row">
            <div class="col-lg-2">
                <div class="h-100" style="background-color: red; "> Breaking news</div>
            </div>
            <div class="col-lg-10 carousel lide custom-init-animation" style="position: relative; overflow: hidden; height: 18px;" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <a class="carousel-item active" href="musrenbang-dalam-rangka-penyusunan-rencana-kerja-pemerintah-daerah-kabupaten-purworejo-tahun-2026-di-kecamatan-kemiri">* Musrenbang dalam rangka Penyusunan Rencana Kerja Pemerintah Daerah Kabupaten Purworejo Tahun 2026 di Kecamatan Kemiri</a>
                    <a class="carousel-item" href="musrenbang-dalam-rangka-penyusunan-rencana-kerja-pemerintah-daerah-kabupaten-purworejo-tahun-2026-di-kecamatan-kemiri">Musrenbang dalam rangka Penyusunan Rencana Kerja Pemerintah Daerah Kabupaten Purworejo Tahun 2026 di Kecamatan Kemiri</a>
                    <a class="carousel-item" href="musrenbang-dalam-rangka-penyusunan-rencana-kerja-pemerintah-daerah-kabupaten-purworejo-tahun-2026-di-kecamatan-kemiri">Musrenbang dalam rangka Penyusunan Rencana Kerja Pemerintah Daerah Kabupaten Purworejo Tahun 2026 di Kecamatan Kemiri</a>
                    <a class="carousel-item" href="musrenbang-dalam-rangka-penyusunan-rencana-kerja-pemerintah-daerah-kabupaten-purworejo-tahun-2026-di-kecamatan-kemiri">Musrenbang dalam rangka Penyusunan Rencana Kerja Pemerintah Daerah Kabupaten Purworejo Tahun 2026 di Kecamatan Kemiri</a>
                    <a class="carousel-item" href="musrenbang-dalam-rangka-penyusunan-rencana-kerja-pemerintah-daerah-kabupaten-purworejo-tahun-2026-di-kecamatan-kemiri">Musrenbang dalam rangka Penyusunan Rencana Kerja Pemerintah Daerah Kabupaten Purworejo Tahun 2026 di Kecamatan Kemiri</a>
                    <a class="carousel-item" href="musrenbang-dalam-rangka-penyusunan-rencana-kerja-pemerintah-daerah-kabupaten-purworejo-tahun-2026-di-kecamatan-kemiri">Musrenbang dalam rangka Penyusunan Rencana Kerja Pemerintah Daerah Kabupaten Purworejo Tahun 2026 di Kecamatan Kemiri</a>
                    <a class="carousel-item" href="musrenbang-dalam-rangka-penyusunan-rencana-kerja-pemerintah-daerah-kabupaten-purworejo-tahun-2026-di-kecamatan-kemiri">Musrenbang dalam rangka Penyusunan Rencana Kerja Pemerintah Daerah Kabupaten Purworejo Tahun 2026 di Kecamatan Kemiri</a>
                    <a class="carousel-item" href="musrenbang-dalam-rangka-penyusunan-rencana-kerja-pemerintah-daerah-kabupaten-purworejo-tahun-2026-di-kecamatan-kemiri">Musrenbang dalam rangka Penyusunan Rencana Kerja Pemerintah Daerah Kabupaten Purworejo Tahun 2026 di Kecamatan Kemiri</a>
                    <a class="carousel-item" href="musrenbang-dalam-rangka-penyusunan-rencana-kerja-pemerintah-daerah-kabupaten-purworejo-tahun-2026-di-kecamatan-kemiri">Musrenbang dalam rangka Penyusunan Rencana Kerja Pemerintah Daerah Kabupaten Purworejo Tahun 2026 di Kecamatan Kemiri</a>

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
                                <img src="<?= base_url('asset/foto_berita/' . $berita['gambar']); ?>" class="img-fluid asprat-4-3 rounded-start" alt="...">
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
                <nav aria-label="Page navigation example" class="mt-2">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="?page=<?= $currentpage - 1 ?>">Previous</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="?page=<?= $currentpage + 1 ?>">Next</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>

        <?php $this->load->view('alfas/partisi/sidebarberitaterbaru', ['beritasidebar' => $beritasidebar]); ?>
    </div>
</div>