
    <!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>DTPI | Videodars</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="/assets/images/logo.png">
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <!-- style sheets and font icons -->
        <link rel="stylesheet" href="https://cdn.plyr.io/3.7.2/plyr.css" />
        <link rel="stylesheet" href="/front-assets/css/vendors.min.css">
        <link rel="stylesheet" href="/front-assets/css/icon.min.css">
        <link rel="stylesheet" href="/front-assets/css/style.min.css">
        <link rel="stylesheet" href="/front-assets/css/responsive.min.css">
        <link rel="stylesheet" href="/front-assets/demos/elearning/elearning.css">
        <style>
            .theme-demos {
                display: none !important;
            }
        </style>
    </head>
    <body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="modern" data-mobile-nav-bg-color="#313e3b">
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse" data-header-hover="light">
                <div class="container-fluid">
                    <div class="col-auto col-lg-2 me-lg-0 me-auto">
                        <a class="navbar-brand" href="{{ route('mainPage') }}">
                            <img src="/assets/images/logo.png" alt="" class="default-logo">
                            <img src="/assets/images/logo.png" data-at2x="/assets/images/logo.png" alt="" class="alt-logo">
                            <img src="/assets/images/logo.png" data-at2x="/assets/images/logo.png" alt="" class="mobile-logo">
                        </a>
                    </div>
                    <div class="col-auto menu-order position-static">
                        <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav alt-font">
                                <li class="nav-item"><a href="{{ route('mainPage') }}" class="nav-link">Asosiy</a></li>
                                <li class="nav-item"><a href="{{ route('coursesPage') }}" class="nav-link">Kurslar</a></li>
                                <li class="nav-item"><a href="{{ route('instructorsPage') }}" class="nav-link">O'qituvchilar</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto col-lg-2 text-end d-none d-sm-flex">
                        <div class="header-icon">
                            <div><div title="Ish vaqti soat 09:00 dan 17:00 gacha"  class="alt-font fw-500 lg-fs-15"><a href="tel:998762280827" class="widget-text text-white-hover"><i class="feather icon-feather-phone-call me-10px lg-me-5px"></i>76 228 08 27</a></div></div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->

        @yield('content')

        <footer class="bg-gradient-aztec-green position-relative">
            <div class="position-absolute left-minus-100px top-25px">
                <img src="/front-assets/images/demo-elearning-bg-05.png" alt="" class="w-80">
            </div>
            <div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0" style="background-image: url('/front-assets/images/vertical-line-bg-small.svg')"></div>
            <div class="container footer-dark text-center text-sm-start position-relative">
                <div class="row mb-5 sm-mb-7 xs-mb-30px">
                    <!-- start footer column -->
                    <div class="col-lg-3 col-md-4 col-sm-6 ps-4 last-paragraph-no-margin md-mb-40px xs-mb-30px">
                        <ul>
                            <li><a href="{{ route('fieldPage', ['field' => 1]) }}">O'zbek tili va adabiyoti</a></li>
                            <li><a href="{{ route('fieldPage', ['field' => 2]) }}">Xorijiy til va adabiyoti(yuqori)</a></li>
                            <li><a href="{{ route('fieldPage', ['field' => 3]) }}">Xorijiy til va adabiyoti(quyi)</a></li>
                            <li><a href="{{ route('fieldPage', ['field' => 4]) }}">Rus tili va adabiyoti</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-lg-3 col-md-4 col-sm-6 ps-4 last-paragraph-no-margin md-mb-40px xs-mb-30px">
                        <ul>
                            <li><a href="{{ route('fieldPage', ['field' => 5]) }}">Axborot texnologiyalari</a></li>
                            <li><a href="{{ route('fieldPage', ['field' => 6]) }}">Moliya va bank ishi</a></li>
                            <li><a href="{{ route('fieldPage', ['field' => 7]) }}">Raqamli iqtisodiyot</a></li>
                            <li><a href="{{ route('fieldPage', ['field' => 8]) }}">Tarix va falsafa</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-lg-3 col-md-4 col-sm-6 ps-4 last-paragraph-no-margin md-mb-40px xs-mb-30px">
                        <ul>
                            <li><a href="{{ route('fieldPage', ['field' => 9]) }}">Umumiy fizika va qurilish muhandisligi</a></li>
                            <li><a href="{{ route('fieldPage', ['field' => 10]) }}">Umumiy kimyo va kimyoviy texnologiyalar</a></li>
                            <li><a href="{{ route('fieldPage', ['field' => 11]) }}">Oliy matematika</a></li>
                            <li><a href="{{ route('fieldPage', ['field' => 12]) }}">Biologiya va qishloq xo'jaligi texnologiyalari</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-lg-3 col-md-4 col-sm-6 ps-4 last-paragraph-no-margin md-mb-40px xs-mb-30px">
                        <ul>
                            <li><a href="{{ route('fieldPage', ['field' => 13]) }}">Boshlang'ich ta'lim</a></li>
                            <li><a href="{{ route('fieldPage', ['field' => 14]) }}">Pedagogika va psixologiya</a></li>
                            <li><a href="{{ route('fieldPage', ['field' => 15]) }}">Maktabgacha ta'lim</a></li>
                            <li><a href="{{ route('fieldPage', ['field' => 16]) }}">Jismoniy madaniyat</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                </div>
                <div class="row align-items-center footer-bottom border-top border-color-transparent-white-light pt-30px g-0">
                    <!-- start footer menu -->
                    <div class="col-xl-7 ps-0 text-center text-xl-start lg-mb-10px">
                        <ul class="footer-navbar fs-16 lh-normal">
                            <li class="nav-item active"><a href="{{ route('mainPage') }}" class="nav-link ps-0">Asosiy</a></li>
                            <li class="nav-item"><a href="{{ route('coursesPage') }}" class="nav-link">Kurslar</a></li>
                            <li class="nav-item"><a href="{{ route('instructorsPage') }}" class="nav-link">O'qituvchilar</a></li>
                        </ul>
                    </div>
                    <!-- end footer menu -->
                    <!-- start copyright -->
                    <div class="col-xl-5 last-paragraph-no-margin text-center text-xl-end">
                        <p class="fs-16">&copy; 2024 Raqamli ta'lim texnologiyalari markazi <a href="https://dtpi.uz/" target="_blank" class="text-white text-decoration-line-bottom">DTPI</a></p>
                    </div>
                    <!-- start copyright -->
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Aylantirish</span><span class="scroll-line"><span class="scroll-point"></span></span>
            </a>
        </div>
        <!-- end scroll progress -->
        <!-- javascript libraries -->
        <script data-cfasync="false" src="/front-assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script type="text/javascript" src="/front-assets/js/jquery.js"></script>
        <script type="text/javascript" src="/front-assets/js/vendors.min.js"></script>
        <script type="text/javascript" src="/front-assets/js/main.js"></script>
        <script src="https://cdn.plyr.io/3.7.2/plyr.js"></script>
        @yield('script')
    </body>
</html>

