@extends('page.layouts.main')
@section('content')
    <!-- start section -->
    <section id="about" class="p-0 overflow-hidden bg-dark-gray full-screen ipad-top-space-margin md-h-auto position-relative md-pb-70px sm-pb-40px cover-background" style="background-image: url('/front-assets/images/demo-elearning-hero-bg.jpg')">
        <div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0" style="background-image: url('/front-assets/images/vertical-line-bg-small.svg')"></div>
        <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true" data-particle-options='{"particles": {"number": {"value": 6,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 1,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":1,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'></div>
        <div class="position-absolute left-minus-80px top-25" data-bottom-top="transform: translateY(-80px)" data-top-bottom="transform: translateY(80px)">
            <img src="/front-assets/images/demo-elearning-01.png" alt="">
        </div>
        <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-xl-5 col-lg-6 col-md-12 text-white text-center text-lg-start position-relative z-index-1 d-flex flex-column justify-content-center h-100 md-mt-50px md-mb-20px xs-mb-10px" data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                    <span class="alt-font fs-75 lh-65 sm-fs-60 fw-500 mb-25px ls-minus-2px">Onlayn videodarslar uchun platforma.</span>
                    <div class="mb-30px w-80 md-w-60 sm-w-100 d-block mx-auto mx-lg-0 overflow-hidden">
                        <span class="fs-18 fw-300 opacity-5 d-inline-block">24/7 rejimda bemalol shug'ullanishingiz mumkin!</span>
                    </div>
                    <div class="overflow-hidden">
                        <a href="{{ route('coursesPage') }}" class="btn btn-extra-large btn-base-color btn-rounded btn-switch-text fw-600 d-inline-block me-25px sm-me-10px align-middle left-icon">
                            <span>
                                <span><i class="feather icon-feather-thumbs-up"></i></span>
                                <span class="btn-double-text ls-minus-05px" data-text="Boshlash">Boshlash</span>
                            </span>
                        </a>
                    </div>
                    <div class="row row-cols-3 justify-content-center counter-style-04 w-100 md-w-auto position-absolute lg-position-relative bottom-80px lg-bottom-0px lg-mt-50px">
                        <!-- start counter item -->
                        <div class="col text-center text-lg-start">
                            <h5 class="vertical-counter d-inline-flex alt-font text-white fw-600 mb-10px" data-text="+" data-to="60"></h5>
                            <div class="divider-style-03 divider-style-03-01 border-2 border-color-base-color mb-5px w-80 xs-w-90 md-mx-auto"></div>
                            <span class="fw-300 text-white opacity-5">O'qituvchilar</span>
                        </div>
                        <!-- end counter item -->
                        <!-- start counter item -->
                        <div class="col text-center text-lg-start">
                            <h5 class="vertical-counter d-inline-flex alt-font text-white fw-600 mb-10px" data-text="+" data-to="5340"></h5>
                            <div class="divider-style-03 divider-style-03-01 border-2 border-color-base-color mb-5px w-80 xs-w-90 md-mx-auto"></div>
                            <span class="fw-300 text-white opacity-5">Talabalar</span>
                        </div>
                        <!-- end counter item -->
                        <!-- start counter item -->
                        <div class="col text-center text-lg-start">
                            <h5 class="vertical-counter d-inline-flex alt-font text-white fw-600 mb-10px" data-text="+" data-to="100"></h5>
                            <div class="divider-style-03 divider-style-03-01 border-2 border-color-base-color mb-5px w-80 xs-w-90 md-mx-auto"></div>
                            <span class="fw-300 text-white opacity-5">Kurslar</span>
                        </div>
                        <!-- end counter item -->
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 pt-30px lg-pt-0">
                    <div class="position-relative outside-box-right-10 md-outside-box-right-0 atropos" data-atropos="">
                        <div class="atropos-scale">
                            <div class="atropos-rotate">
                                <div class="atropos-inner text-center w-100">
                                    <div data-atropos-offset="-1" class="position-absolute left-0px right-0px">
                                        <img src="/front-assets/images/demo-elearning-hero-banner-01.png" alt="">
                                    </div>
                                    <img data-atropos-offset="1" class="position-relative z-index-9 animation-float" src="/front-assets/images/demo-elearning-hero-banner-02.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section id="down-section" class="background-position-left-top background-no-repeat position-relative" style="background-image: url('/front-assets/images/demo-elearning-02.png')">
        <div class="position-absolute right-0px top-30px" data-bottom-top="transform: translateY(80px)" data-top-bottom="transform: translateY(-80px)">
            <img src="/front-assets/images/demo-elearning-04.png" alt="">
        </div>
        <div class="container">
            <div class="text-center position-absolute top-minus-40px left-0px right-0px z-index-1 d-none d-md-inline-block" data-anime='{ "opacity": [0, 1], "translate": [0, 0], "staggervalue": 100, "easing": "easeOutQuad" }'>
                <a href="#down-section" class="d-block section-link">
                    <div class="d-flex justify-content-center align-items-center mx-auto box-shadow-medium-bottom rounded-circle h-70px w-70px text-dark-gray bg-white">
                        <i class="bi bi-mouse icon-very-medium lh-0px"></i>
                    </div>
                </a>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-10 position-relative md-mb-40px sm-mb-25px" data-anime='{ "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="icon-with-text-style-08 mb-20px">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div class="feature-box-icon feature-box-icon-rounded w-55px h-55px rounded-circle bg-yellow me-15px">
                                <i class="bi bi-globe d-inline-block icon-extra-medium text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-inline-block alt-font fs-19 fw-500 ls-minus-05px text-dark-gray">Kafolatlangan</span>
                            </div>
                        </div>
                    </div>
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px mx-auto">Onlayn videodarslar istalgan vaqt va istalgan joyda.</h2>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-10 offset-xl-1 position-relative mt-minus-1">
                    <div class="row row-cols-auto row-cols-sm-2" data-anime='{ "el": "childs", "translateX": [30, 0], "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <!-- start features box item -->
                        <div class="col align-self-start">
                            <div class="feature-box text-start ps-30px pe-30px xl-pe-5px sm-pe-0">
                                <div class="feature-box-icon position-absolute left-0px top-0px">
                                    <h2 class="alt-font fs-100 fw-700 ls-minus-1px opacity-1 mb-0">01</h2>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin pt-30 md-pt-21 sm-pt-40px">
                                    <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-5px">Moslashuvchan jadval</span>
                                    <p>eDarslar sizga tezkor shug'ullanish imkonini beradi.</p>
                                    <span class="w-60px h-3px bg-yellow d-inline-block"></span>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="col align-self-end mt-25 xs-mt-30px">
                            <div class="feature-box text-start ps-30px pe-30px xl-pe-5px sm-pe-0">
                                <div class="feature-box-icon position-absolute left-0px top-0px">
                                    <h2 class="alt-font fs-100 fw-700 ls-minus-1px opacity-1 mb-0">02</h2>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin pt-30 md-pt-21 sm-pt-40px">
                                    <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-5px">Vaqt va joy muammosisiz</span>
                                    <p>Shug'ullanish uchun sizda internet va gadjet bo'lsa yetarli.</p>
                                    <span class="w-60px h-3px bg-yellow d-inline-block"></span>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="col align-self-start mt-minus-12 xs-mt-30px">
                            <div class="feature-box text-start ps-30px pe-30px xl-pe-5px sm-pe-0">
                                <div class="feature-box-icon position-absolute left-0px top-0px">
                                    <h2 class="alt-font fs-100 fw-700 ls-minus-1px opacity-1 mb-0">03</h2>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin pt-30 md-pt-21 sm-pt-40px">
                                    <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-5px">Tajribali instruktorlar</span>
                                    <p>O'z soxasining yetakchi insturktorlari tomonidan tayyorlangan darslar.</p>
                                    <span class="w-60px h-3px bg-yellow d-inline-block"></span>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-tranquil position-relative">
        <div class="position-absolute left-minus-200px top-25" data-bottom-top="transform: translateY(-80px)" data-top-bottom="transform: translateY(80px)">
            <img src="/front-assets/images/demo-elearning-bg-04.png" alt="">
        </div>
        <div class="container">
            <div class="row align-items-center mb-4">
                <div class="col-xl-5 lg-mb-30px text-center text-xl-start">
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px mb-0">Mashxur kurslar</h2>
                </div>
                <div class="col-xl-7 tab-style-04 text-center text-xl-end">
                    <!-- filter navigation -->
                    <ul class="portfolio-filter fw-500 nav nav-tabs justify-content-center justify-content-xl-end border-0">
                        <li class="nav active"><a data-filter="*" href="#">Barchasi</a></li>
                    </ul>
                    <!-- end filter navigation -->
                </div>
            </div>
            <div class="row" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-12 filter-content p-md-0">
                    <ul class="portfolio-wrapper grid-loading grid grid-3col xxl-grid-3col xl-grid-3col lg-grid-2col md-grid-2col sm-grid-1col xs-grid-1col gutter-extra-large">
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
                                            <div class="ps-35px pe-35px pt-30px pb-30px xl-ps-25px xl-pe-25px border-bottom border-color-transparent-dark-very-light">
                                                <span class="d-block mb-10px"><span class="fs-16">{{ $course->user->name }}</span></span>
                                                <div class="d-flex align-items-center mb-5px">
                                                    <a href="demo-elearning-courses-details.html" class="text-dark-gray fw-600 fs-19 md-fs-18 lh-28 w-90">{{ $course->name }}</a>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center ps-35px pe-35px xl-ps-20px xl-pe-20px pt-15px pb-20px">
                                                <div class="me-auto">
                                                    <i class="feather icon-feather-clipboard text-dark-gray d-inline-block me-5px"></i><span class="fs-16 text-dark-gray fw-500">Darslar soni: {{ $course->videos->count() }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- end portfolio item -->
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start footer -->
@endsection
