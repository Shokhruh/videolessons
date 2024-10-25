<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="utf-8" />
    <title>DTPI | Dashboard tizimga kirish sahifasi</title>
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
            <div class="p-3">

                <!-- Logo -->
                <div class="auth-brand text-center text-lg-start">
                    <div class="auth-logo">
                        <a href="{{ route('loginPage') }}" class="logo logo-dark text-center">
                            <span class="logo-lg">
                                <img src="/assets/images/logo-dark.png" alt="" height="22">
                            </span>
                        </a>

                        <a href="{{ route('loginPage') }}" class="logo logo-light text-center">
                            <span class="logo-lg">
                                <img src="/assets/images/logo-light.png" alt="" height="22">
                            </span>
                        </a>
                    </div>
                </div>

                <!-- title-->
                <h4 class="mt-0">Tizimga kirish</h4>
{{--                {{ \Illuminate\Support\Facades\Hash::make('admin123') }}--}}

                <!-- form -->
                <form action="{{ route('authenticate') }}" method="post">
                    @csrf
                    {{ (\Illuminate\Support\Facades\Session::has('message') ? (\Illuminate\Support\Facades\Session::get('message')) : (\Illuminate\Support\Facades\Session::get('error'))) }}
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input class="form-control" type="text" name="username" id="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Parol</label>
                        <div class="input-group input-group-merge">
                            <input type="password" name="password" id="password" class="form-control">
                            <div class="input-group-text" data-password="false">
                                <span class="password-eye"></span>
                            </div>
                        </div>
                    </div>


                    <div class="text-center d-grid">
                        <button class="btn btn-primary" type="submit">Kirish</button>
                    </div>
                    <!-- social-->
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
