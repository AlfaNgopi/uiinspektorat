<?php $this->load->view('alfas/partisi/header'); ?>

<!-- Main Content-->
<div class="container mt-5">


    <div class="row">

        <div class="col-lg-8">
            <div class="card shadow-lg p-4 mb-5 bg-body-tertiary rounded">


                <div class="custom-gallery-grid justify-content-around">



                    <?php foreach ($albums as $album): ?>
                        <a style="text-decoration: none;" href="<?php echo base_url('albums/' . $album['album_seo'] . '/' . $album['first_img']); ?>">
                            <div class="card mb-3 gallery-item" style="width: 15rem;">
                                <?php if (!empty($album['gbr_album'])): ?>
                                    <img src="<?php echo base_url('asset/img_album/' . $album['gbr_album']); ?>" class="card-img-top img-fluid w-100" alt="...">
                                <?php else: ?>
                                    <img src="<?php echo base_url('asset/img_album/no-image.jpg'); ?>" class="card-img-top img-fluid w-100" alt="...">
                                <?php endif; ?>
                                <div class="card-body">
                                    <p class="mb-1" style="font-size: small; color: grey;">Ada <?php echo $album['gbr_count']; ?> foto</p>
                                    <h5 class="card-title hover-primary"><?php echo $album['jdl_album']; ?></h5>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>

                </div>



            </div>
        </div>



        <?php $this->load->view('alfas/partisi/sidebarberitaterbaru'); ?>


    </div>
</div>