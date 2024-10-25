<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>DTPI | Dashboard qulf sahifasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/logo.png">

    <!-- Bootstrap css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>
    <!-- icons -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- Head js -->
    <script src="/assets/js/head.js"></script>

</head>

<body class="auth-fluid-pages pb-0">

<div class="auth-fluid">
    <!--Auth fluid left content -->
    <div class="auth-fluid-form-box">
        <div class="align-items-center d-flex h-100">
            <div class="p-3 flex-grow-1">

                <!-- Logo -->
                <div class="auth-brand text-center text-lg-start">
                    <div class="auth-logo">
                        <a href="{{ route('lockscreen') }}" class="logo logo-dark text-center">
                            <span class="logo-lg">
                                <img src="/assets/images/logo-dark.png" alt="" height="22">
                            </span>
                        </a>

                        <a href="{{ route('lockscreen') }}" class="logo logo-light text-center">
                            <span class="logo-lg">
                                <img src="/assets/images/logo-light.png" alt="" height="22">
                            </span>
                        </a>
                    </div>
                </div>

                <div class="text-center w-75 m-auto">
                    <img src="{{ asset('/storage/' . auth()->user()->photo) }}" height="88" alt="user-image">
                    <h4 class="text-dark-50 text-center mt-3">Salom! {{ auth()->user()->name }} </h4>
                    <p class="text-muted mb-4">Tizimga kirish uchun parolni kiriting!</p>
                </div>


                <form action="{{ route('unlock') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="password" class="form-label">Parol</label>
                        <input class="form-control" type="password" required name="password" id="password">
                    </div>

                    <div class="text-center d-grid">
                        <button class="btn btn-primary" type="submit"> Kirish </button>
                    </div>

                </form>
                <!-- end form-->

            </div> <!-- end .card-body -->
        </div> <!-- end .align-items-center.d-flex.h-100-->
    </div>
    <!-- end auth-fluid-form-box-->

    <!-- Auth fluid right content -->
    <div class="auth-fluid-right text-center">
        <div class="auth-user-testimonial">
            <h2 class="mb-3 text-white">Ilmdan o'zga najot yo'q!</h2>

            <h5 class="text-white">
                - Imom al-Buxoriy
            </h5>
        </div> <!-- end auth-user-testimonial-->
    </div>
    <!-- end Auth fluid right content -->
</div>
<!-- end auth-fluid-->

<!-- Vendor js -->
<script src="/assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="/assets/js/app.min.js"></script>

</body>
</html>
