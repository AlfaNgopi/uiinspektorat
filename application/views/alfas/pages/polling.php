<?php $this->load->view('alfas/partisi/header', ['page' => $page]); ?>

<div class="container mt-5">


    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                <h2>Total Hasil Persentasi / Perhitungan Poling</h2>

                <h5>Berikut Adalah hasil Perhitungan sementara Poling yang masuk.
                    Silahkan untuk selalu mengunjungi halaman ini untuk melihat hasil terbarunya.
                    Terima kasih,..</h5>

                <br>
                <br>

                <table class="table">
                    <?php foreach ($jawabans as $jawaban) : ?>
                        <tr>
                            <td ><?= $jawaban['jawaban'] ?> ( <?= $jawaban['jumlah']  ?> )</td>
                            <td style="width: 200px; height:1em"> <div class="d" style="height:1em; background-color: <?= $jawaban['color']  ?>; width: <?= $jawaban['width'] ?>" ></div> <?= $jawaban['persen']  ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <br>
                <br>
                <br>
                <p>jumlah pemilih : <?= $total ?></p>
            </div>




        </div>

        <?php $this->load->view('alfas/partisi/sidebarberitaterbaru', ['beritasidebar' => $beritasidebar]); ?>
    </div>
</div>