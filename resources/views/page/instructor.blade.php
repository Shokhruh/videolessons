@extends('page.layouts.main')
@section('content')
    <!-- start page title -->
    <section class="ipad-top-space-margin bg-dark-gray cover-background page-title-big-typography" style="background-image: url('/front-assets/images/demo-elearning-about-title-bg.jpg')">
        <div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0" style="background-image: url('/front-assets/images/vertical-line-bg-small.svg')"></div>
        <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true" data-particle-options='{"particles": {"number": {"value": 8,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 1,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":1,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'></div>
        <div class="container">
            <div class="row align-items-center extra-small-screen">
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-9 position-relative page-title-extra-small" data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="mb-20px alt-font text-yellow">O'qituvchi</h1>
                    <h2 class="fw-500 m-0 ls-minus-2px text-white alt-font">{{ $instructor->name }}</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="position-relative">
        <div class="container">
            <div class="row justify-content-center" data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-lg-8 md-mb-50px">
                    <div class="col-12 p-0 tab-style-04">
                        <div class="tab-content">
                            <!-- start tab content -->
                            <div class="tab-pane fade in active show" id="tab_five3">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-12">
                                        <div class="feature-box feature-box-left-icon-middle d-md-inline-flex d-block text-md-start text-center">
                                            <div class="feature-box-icon me-50px sm-me-0 sm-mb-30px">
                                                <img src="/front-assets/images/demo-elearning-courses-details-tab-01.jpg" class="border-radius-6px" alt="">
                                            </div>
                                            <div class="feature-box-content">
                                                <span class="d-block fs-18 mb-5px"><span class="fw-600 text-dark-gray">{{ $instructor->name }}</span></span>
                                                <p>{{ $instructor->bio }}</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                        </div>
                    </div>
                    <!-- end details -->
                </div>
                <!-- start sidebar -->
                <aside class="col-lg-4 ps-60px lg-ps-30px md-ps-15px">
                    <div class="position-sticky top-150px lg-position-relative lg-top-0px">
                        <div class="border-radius-6px overflow-hidden bg-tranquil">
                            <div class="p-35px lg-p-25px">
                                <ul class="p-0 mb-20px list-style-02">
                                    <li class="border-bottom border-color-extra-medium-gray pt-15px pb-15px">
                                            <span class="text-dark-gray">
                                                <span class="me-5px"><i class="bi bi-globe fs-20"></i></span>
                                                <span class="fw-600">Til</span>
                                            </span>
                                        <span class="ms-auto">O'zbek</span>
                                    </li>
                                    <li class="border-bottom border-color-extra-medium-gray pt-15px pb-15px">
                                            <span class="text-dark-gray">
                                                <span class="me-5px"><i class="bi bi-clipboard-check fs-20"></i></span>
                                                <span class="fw-600">Kurslar soni</span>
                                            </span>
                                        <span class="ms-auto">
                                            <?php
                                                $count = 0;
                                                foreach ($instructor->courses as $course) {
                                                    if ($course->videos->count()) {
                                                        $count ++;
                                                    }
                                                }
                                            ?>
                                            @if($count)
                                                {{ $count }}
                                            @else
                                                {{ 0 }}
                                            @endif
                                        </span>
                                    </li>
                                </ul>
                                <div class="elements-social social-icon-style-02 mt-20px">
                                    <ul class="small-icon dark text-center">
                                        <li class="sm-mb-0"><a class="facebook" href="{{ $course->user->fb }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li class="sm-mb-0"><a class="telegram" href="{{ $course->user->tg }}" target="_blank"><i class="fa-brands fa-telegram"></i></a></li>
                                        <li class="sm-mb-0"><a class="linkedin" href="{{ $course->user->ln }}" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                                        <li class="sm-mb-0"><a class="instagram" href="{{ $course->user->ins }}" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- end sidebar -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-tranquil overflow-hidden position-relative overlap-height">
        <div class="container overlap-gap-section">
            <div class="row justify-content-center mb-2">
                <div class="col-xl-5 col-lg-6 text-center">
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px">O'qituvchining kurslari</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 px-0 sm-ps-15px sm-pe-15px">
                    <ul class="portfolio-wrapper grid grid-3col xxl-grid-3col xl-grid-3col lg-grid-2col md-grid-2col sm-grid-1col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        @foreach($courses as $course)
                            @if($course->videos->count())
                                <!-- start portfolio item -->
                                <li class="grid-item design transition-inner-all">
                                    <div class="services-box-style-06 border-radius-6px hover-box overflow-hidden box-shadow-large">
                                        <div class="image">
                                            <a href="{{ route('coursePage', ['course' => $course->id]) }}">
                                                <img src="{{ asset('/storage/' . $course->thumbnail) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="bg-white position-relative">
                                            <div class="ps-40px pe-40px pt-30px pb-30px border-bottom border-color-transparent-dark-very-light xl-ps-25px xl-pe-25px">
                                                <span class="d-block mb-10px"><span class="fs-16">{{ $course->user->name }}</span></span>
                                                <div class="d-flex align-items-center mb-5px">
                                                    <a href="{{ route('coursePage', ['course' => $course->id]) }}" class="text-dark-gray fw-600 fs-19 lh-28 w-90">{{ $course->name }}</a>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center ps-40px pe-40px xl-ps-25px xl-pe-25px pt-15px pb-20px">
                                                <div class="me-auto">
                                                    <i class="feather icon-feather-clipboard text-dark-gray d-inline-block me-5px"></i><span class="fs-16 text-dark-gray fw-500">Darslar soni: {{ $course->videos->count() }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- end portfolio item -->
                            @else
                                <div class="alert alert-danger">Ushbu o'qituvchida hozircha kurs mavjud emas!</div>
                            @endif
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
