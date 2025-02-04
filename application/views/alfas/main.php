<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="<?= $identitas['meta_deskripsi'] ?>" />
    <meta name="author" content="dinkominfo">
    <meta name="keywords" content="<?= $identitas['meta_keyword'] ?>" />
    <title><?= $identitas['nama_website'] ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url('asset/images/' . $identitas['favicon']) ?>" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="<?= base_url('asset/alfa/css/styles.css') ?>" rel="stylesheet" />
</head>

<body class="bg-light">
    <!-- Include Navbar -->
    <?php $this->load->view('alfas/partisi/navbar', ['menus' => $menus]); ?>


    <div class="bg-light">
        <?php if (isset($content)) echo $content; ?>
    </div>

    <!-- Include Footer -->
    <?php $this->load->view('alfas/partisi/footer', ['links' => $identitas['links']]); ?>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('asset/alfa/js/scripts.js') ?>"></script>


    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script>
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
            );
        }

        // Select all elements with the class "square"
        const custom_init_animations = document.querySelectorAll('.custom-init-animation');

        // Add a scroll event listener
        window.addEventListener('scroll', () => {
            custom_init_animations.forEach(custom_init_animation => {
                if (isInViewport(custom_init_animation) && !custom_init_animation.classList.contains('animated')) {
                    custom_init_animation.classList.add('w3-animate-bottom', 'custom-animation', 'animated'); // Trigger animation
                    custom_init_animation.style.opacity = 1; // Make it visible
                }
            });
        });
    </script>
</body>

</html>