<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="" style="height: 50px;" href="<?= base_url('/') ?>">
            <img class="h-100 img-fluid" src="<?= base_url('assets/inspektorat-logo.png') ?>" alt="..." />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse w-100" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase py-4 py-lg-0 justify-content-around w-100">
                <?= $this->include('partition/menu', ['menus' => $menus]) ?>
            </ul>
        </div>
    </div>
</nav>
