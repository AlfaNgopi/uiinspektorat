<nav class="navbar navbar-expand-lg navbar-dark fixed-top pt-2" id="mainNav">
    <div class="container">
        <a class="" style="height: 50px;" href="<?= base_url('/') ?>">
            <img class="h-100 img-fluid" src="<?= base_url('asset/alfa/inspektorat-logo.png') ?>" alt="..." />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse w-100" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase py-4 py-lg-0 justify-content-around w-100">
                <?php $this->load->view('alfas/partisi/menu', ['menus' => $menus]); ?>

                <!-- Hubungi Kami statis -->
                <li class="nav-item dropdownhover">
                    <a class="nav-link" aria-expanded="false" href="<?= base_url('hubungi') ?>">
                        Hubungi Kami
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li class="nav-item nav-link"><a class="dropdown-item p-0" href="https://www.lapor.go.id/" target="_blank"><i
                                    class="fa-solid fa-envelope" style="color: #fff; width: 30px"></i>Lapor
                                SPAN</a></li>
                        <li class="nav-item nav-link"><a class="dropdown-item p-0" href="https://bit.ly/Pengaduan_Inspektorat-Daerah_Purworejo" target="_blank"><i
                                    class="fa-brands fa-whatsapp  " style="color: #fff; width: 30px"></i>Lapor
                                Whatsapp</a></li>
                        <li class="nav-item nav-link"><a class="dropdown-item p-0" href="https://www.instagram.com/purworejoinskab?igsh=bno4dnBwaTM5cm5u" target="_blank"><i
                                    class="fa-brands fa-instagram " style="color: #fff; width: 30px"></i>Lapor
                                Instagram</a></li>
                    </ul>
                </li>


            </ul>
        </div>
    </div>
</nav>