<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Inspektorat Kabupaten Purworejo</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../src/assets/logo.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->


    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <link href="css/styles.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />


</head>

<body>
    @include('partition.navbar')


    @yield('content')

    @include('partition.footer')


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
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