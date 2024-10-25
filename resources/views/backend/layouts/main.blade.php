<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>DTPI | Videodars Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/assets/images/logo.png') }}">

    <!-- Plugins css -->
    <link href="/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap css -->
    <link href="/assets/libs/bootstrap-table/bootstrap-table.min.css" rel="stylesheet" type="text/css" />

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>
    <!-- icons -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- Head js -->
    <script src="/assets/js/head.js"></script>

</head>

<body data-layout-mode="default" data-theme="dark" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="dark" data-leftbar-size='default' data-sidebar-user='false'>

<div id="wrapper">
    <!-- Topbar Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-end mb-0">

                <li class="d-none d-lg-block">
                    <form class="app-search">
                        <div class="app-search-box dropdown">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Qidirish..." id="top-search">
                                <button class="btn input-group-text" type="submit">
                                    <i class="fe-search"></i>
                                </button>
                            </div>
                            <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h5 class="text-overflow mb-2">Found 22 results</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-home me-1"></i>
                                    <span>Analytics Report</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-aperture me-1"></i>
                                    <span>How can I help you?</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings me-1"></i>
                                    <span>User profile settings</span>
                                </a>

                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                </div>

                                <div class="notification-list">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="d-flex align-items-start">
                                            <img class="d-flex me-2 rounded-circle" src="/storage/{{ \Illuminate\Support\Facades\Auth::user()->photo }}" alt="Generic placeholder image" height="32">
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                                <span class="font-12 mb-0">UI Designer</span>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="d-flex align-items-start">
                                            <img class="d-flex me-2 rounded-circle" src="/storage/{{ \Illuminate\Support\Facades\Auth::user()->photo }}" alt="Generic placeholder image" height="32">
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">Jacob Deo</h5>
                                                <span class="font-12 mb-0">Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </form>
                </li>

                <li class="dropdown d-inline-block d-lg-none">
                    <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fe-search noti-icon"></i>
                    </a>
                    <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                        <form class="p-3">
                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                        </form>
                    </div>
                </li>

                <li class="dropdown notification-list topbar-dropdown">
                    <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="/storage/{{ \Illuminate\Support\Facades\Auth::user()->photo }}" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ms-1">
                        <span style="text-transform: capitalize">{{ \Illuminate\Support\Facades\Auth::user()->username }}</span><i class="mdi mdi-chevron-down"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end profile-dropdown">
                        <!-- item-->
                        <a href="{{ route('profile', ['user' => auth()->user()->id]) }}" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>Mening sahifam</span>
                        </a>

                        <!-- item-->
                        <a href="{{ route('lockscreen') }}" class="dropdown-item notify-item">
                            <i class="fe-lock"></i>
                            <span>Ekranni qulflash</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <form method="post" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">Chiqish</button>
                        </form>
{{--                        <a href="{{ route('logout') }}" class="dropdown-item notify-item">--}}
{{--                            <i class="fe-log-out"></i>--}}
{{--                            <span>Chiqish</span>--}}
{{--                        </a>--}}

                    </div>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box" style="padding-top: 10px; padding-bottom: 10px;">
                <a href="{{ route('dashboardPage') }}" class="logo logo-dark text-center">
                    <span class="logo-sm">
                        <img src="{{ asset('/assets/images/logo.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('/assets/images/logo.png') }}" alt="" height="20">
                    </span>
                </a>

                <a href="{{ route('dashboardPage') }}" class="logo logo-light text-center">
                    <span class="logo-sm">
                        <img src="{{ asset('/assets/images/logo.png') }}" alt="" height="30px">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('/assets/images/logo.png') }}" alt="" height="100px">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect waves-light">
                        <i class="fe-menu"></i>
                    </button>
                </li>

                <li>
                    <!-- Mobile menu toggle (Horizontal Layout)-->
                    <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">

        <div class="h-100" data-simplebar>

            <!-- User box -->
            <div class="user-box text-center">
                <div class="dropdown">
                    <a href="javascript: void(0);" class="text-black dropdown-toggle h5 mt-2 mb-1 d-block"
                       data-bs-toggle="dropdown"><span style="text-transform: capitalize">{{ \Illuminate\Support\Facades\Auth::user()->username }}</span>
                    </a>
                    <a href="javascript: void(0);" class="text-black dropdown-toggle h5 mt-2 mb-1 d-block"
                       data-bs-toggle="dropdown"><span style="text-transform: capitalize">Administrator</span>
                    </a>
                    <div class="dropdown-menu user-pro-dropdown">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-user me-1"></i>
                            <span>Mening sahifam</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings me-1"></i>
                            <span>Sozlamalar</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-lock me-1"></i>
                            <span>Ekranni qulflash</span>
                        </a>

                        <!-- item-->
                        <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                            <i class="fe-log-out me-1"></i>
                            <span>Chiqish</span>
                        </a>

                    </div>
                </div>
            </div>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul id="side-menu">

                    <li class="menu-title mt-2">Jadvallar</li>

                    @if(\Illuminate\Support\Facades\Auth::user()->role->position === 'developer')
                    <li>
                        <a href="{{ route('users.index') }}">
                            <i data-feather="users"></i>
                            <span> O'qituvchilar </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('roles.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                            <span> Rollar </span>
                        </a>
                    </li>
                    @endif

                    <li>
                        <a href="#sidebarProjects" data-bs-toggle="collapse">
                            <i data-feather="briefcase"></i>
                            <span> Loyihalar </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarProjects">
                            <ul class="nav-second-level">
                                @if(\Illuminate\Support\Facades\Auth::user()->role->position === 'developer')
                                    <li>
                                        <a href="{{ route('fields.index') }}">Soxalar</a>
                                    </li>
                                @endif
                                <li>
                                    <a href="{{ route('courses.index') }}">Kurslar</a>
                                </li>
                                <li>
                                    <a href="{{ route('videos.index') }}">Videolar</a>
                                </li>
                                <li>
                                    <a href="{{ route('docs.index') }}">Qo'llanmalar</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="apps-file-manager.html">
                            <i data-feather="folder-plus"></i>
                            <span> File Manager </span>
                        </a>
                    </li>

                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">

        @yield('content')

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <script>document.write(new Date().getFullYear())</script> &copy; Raqamli ta'lim texnologiyalari markazi
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end footer-links d-none d-sm-block">
                            <a href="https://t.me/shokhruh1197">Bog'lanish</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>


</div>
<!-- END wrapper -->


<!-- Vendor js -->
<script src="/assets/js/vendor.min.js"></script>

<!-- Plugins js-->
<script src="/assets/libs/flatpickr/flatpickr.min.js"></script>
{{--<script src="/assets/libs/apexcharts/apexcharts.min.js"></script>--}}
<script src="/assets/libs/bootstrap-table/bootstrap-table.min.js"></script>

{{--<script src="/assets/js/pages/dashboard-1.init.js"></script>--}}
<script src="/assets/js/pages/bootstrap-tables.init.js"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
@yield('scripts')
<!-- App js-->
<script src="/assets/js/app.min.js"></script>

</body>
</html>
