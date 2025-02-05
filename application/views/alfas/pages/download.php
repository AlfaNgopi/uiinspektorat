<?php $this->load->view('alfas/partisi/header', ['page' => $page]); ?>

<!-- Main Content-->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                <table class="custom-table-download" style="font-weight:bold; border:1px solid #e3e3e3;" width="100%">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Nama File</th>
                            <th>Hits</th>
                            <th style="width:70px"></th>
                        </tr>
                        <?php foreach ($downloads as $index => $download): ?>
                            <?php $index2 = (int) $index; ?> <!-- Ensure index is an integer -->
                            <tr bgcolor="<?= ($index2 % 2 === 0) ? '#E1E1E1' : '#FFFFFF' ?>">
                                <td><?= htmlspecialchars($download['numbering'], ENT_QUOTES, 'UTF-8') ?></td>
                                <td><?= htmlspecialchars($download['judul'], ENT_QUOTES, 'UTF-8') ?></td>
                                <td><?= htmlspecialchars($download['hits'], ENT_QUOTES, 'UTF-8') ?> Kali</td>
                                <td><a class="download-button" href="<?= base_url('alfas/download/downloadaction/' . $download['id_download']) ?>" target="_blank">Download</a></td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>

                <nav aria-label="Page navigation example" class="mt-2">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="?page=<?= $currentpage-1 ?>">Previous</a>
                        </li>
                        
                        <li class="page-item">
                            <a class="page-link" href="?page=<?= $currentpage+1 ?>">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- comment section -->

            <!-- comment form section -->
        </div>

        <?php $this->load->view('alfas/partisi/sidebarberitaterbaru', ['beritasidebar' => $beritasidebar]); ?>
    </div>
</div>