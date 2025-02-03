<?php $this->load->view('alfas/partisi/header', ['page' => $page]); ?>

<!-- Main Content-->
<div class="container mt-5">

    <div class="card shadow p-3 mb-5  bg-body-tertiary rounded">

        <div class="card-body">
            <h2 class="card-title">
                Hubungi Kami
            </h2>

            <div class="row">
                <div class="col-6">
                    
                </div>
                <div class="col-6">
                    <div class="custom-horizontal-list justify-content-end">
                        <li>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>"
                                target="_blank">
                                <i class="fa-brands fa-facebook-f" style="color: #3b5998"></i>
                            </a>
                        </li>

                        <li>
                            <a href="http://twitter.com/share?text=Rapat Penilaian Kinerja Organisasi Triwulan 3&amp;url=<?php echo current_url(); ?>"
                                target="_blank">
                                <i class="fa-brands fa-twitter" style="color: #00acee"></i>
                            </a>
                        </li>

                        <li>
                            <a href="whatsapp://send?text=<?php echo current_url(); ?>"
                                target="_blank">
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
                <div class="map-border">
                    <div class="google-maps">
                        <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="<?= $identitas['maps'] ?>"
                            style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>

                <div class="card-text">
                    <p>Alamat : Jl. Mayjend. Sutoyo No. 59, Purworejo, 54113</p>
                    <p>No. Telp : <?= $identitas['no_telp'] ?></p>
                    <p>E-mail : <?= $identitas['email'] ?></p>
                </div>

                <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded border border-4 border-primary">
                    <form action="<?= base_url('alfas/hubungi/submit') ?>" method="post">
                        <h4>Form Pesan</h4>

                        <div class="row mb-4">
                            <div class="col-sm-6 form-group">
                                <input name="name" type="text" class="form-control" placeholder="Your Name*">
                            </div>
                            <div class="col-sm-6 form-group">
                                <input name="email" type="text" class="form-control" placeholder="Your Email*">
                            </div>
                        </div>

                        <div class="col form-group">
                            <textarea name="comment" class="form-control" rows="5" placeholder="Your Comment*"></textarea>
                        </div>

                        <div class="form-group d-flex justify-content-end my-4">
                            <div class="mx-2">
                                <label for="c_message">
                                    <?php echo $captcha; ?>
                                </label>
                            </div>
                            <div class="mx-2 d-flex align-items-center">
                                <input type="text" class="form-control" placeholder="Masukan kode dikiri" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php $this->load->view('alfas/partisi/sidebarberitaterbaru', ['beritasidebar' => $beritasidebar]); ?>
    </div>
</div>