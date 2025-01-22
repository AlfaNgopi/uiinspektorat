<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/logo.png')}}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->


    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body class="hold-transition login-page bg-light">
    <center>
        <div class="container d-flex justify-content-center align-items-center min-vh-100 center">
            <div class="login-box">
                <div class="login-logo">
                    <h1>
                        <b>USERS</b> Login
                    </h1>
                </div>
                <!-- /.login-logo -->
                <div class="card card-sh">
                    <div class="card-body login-card-body">
                        <p class="login-box-msg">Sign in to start your session</p>
                        <form action="{{route('actionLogin')}}" method="post" accept-charset="utf-8">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Username" required="">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="password" placeholder="Password" required="">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <img src="https://inspektorat.purworejokab.go.id/baru/captcha/1737529970.5034.jpg" style="width: 320px; height: 33px; border: 0;" alt=" ">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="security_code" placeholder="Security Code">
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" name="submit" class="btn btn-primary btn-block w-100 m-2">Sign In</button>
                                </div>
                                <!-- /.col -->
                                <div class="col-6">
                                    <a href="#" class="btn btn-primary btn-block w-100 m-2">SSO Login</a>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>
        </div>
    </center>
    <!-- /.login-box -->
    
</body>

</html>