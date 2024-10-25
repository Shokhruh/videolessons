@extends('page.layouts.main')
@section('content')
    <!-- start page title -->
    <section class="ipad-top-space-margin bg-dark-gray cover-background page-title-big-typography" style="background-image: url('/front-assets/images/demo-elearning-courses-title-bg.jpg')">
        <div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0" style="background-image: url('/front-assets/images/vertical-line-bg-small.svg')"></div>
        <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true" data-particle-options='{"particles": {"number": {"value": 8,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 1,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":1,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'></div>
        <div class="container">
            <div class="row align-items-center extra-small-screen">
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-9 position-relative page-title-extra-small" data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="mb-20px alt-font text-yellow">Onlayn videodarslar</h1>
                    <h2 class="fw-500 m-0 ls-minus-2px text-white alt-font">{{ $field->name }}</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="bg-tranquil position-relative overlap-height">
        <div class="position-absolute left-minus-200px top-25" data-bottom-top="transform: translateY(-80px)" data-top-bottom="transform: translateY(80px)">
            <img src="/front-assets/images/demo-elearning-bg-04.png" alt="">
        </div>
        <div class="container overlap-gap-section">
            <div class="row align-items-center mb-4">
                <div class="col-xl-5 lg-mb-30px text-center text-xl-start">
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px mb-0">Barcha kurslar</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 filter-content p-md-0">
                    <ul class="portfolio-wrapper grid-loading grid grid-3col xxl-grid-3col xl-grid-3col lg-grid-2col md-grid-2col sm-grid-1col xs-grid-1col gutter-extra-large">
                        <li class="grid-sizer"></li>
{{--                        {{ dd($courses) }}--}}
                        @if($courses->count())
                            @foreach($courses as $key => $course)
                                <?php
                                    $count = $course->videos->count();
                                ?>
                                @if($course->videos->count())
                                    <!-- start portfolio item -->
                                    <li class="grid-item transition-inner-all">
                                        <div class="services-box-style-06 border-radius-6px hover-box overflow-hidden box-shadow-large">
                                            <div class="image">
                                                <a href="{{ route('coursePage', ['course' => $course->id]) }}">
                                                    <img src="/storage/{{ asset($course->thumbnail) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="bg-white position-relative">
                                                <div class="ps-35px pe-35px pt-30px pb-30px border-bottom border-color-transparent-dark-very-light xl-ps-25px xl-pe-25px">
                                                    <span class="d-block mb-10px">
                                                        <span class="fs-16">{{ $course->user->name }}</span>
                                                    </span>
                                                    <div class="d-flex align-items-center mb-5px">
                                                        <a href="{{ route('coursePage', ['course' => $course->id]) }}" class="text-dark-gray fw-600 fs-19 md-fs-18 lh-28 w-90">{{ $course->name }}</a>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-center align-items-center ps-35px pe-35px xl-ps-25px xl-pe-25px pt-15px pb-20px">
                                                    <div class="me-auto">
                                                        <i class="feather icon-feather-clipboard text-dark-gray d-inline-block me-5px"></i><span class="fs-16 text-dark-gray fw-500">Darslar soni: {{ $count }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end portfolio item -->
                                @endif
                            @endforeach
                        @else
                            <div class="alert alert-danger">Bu sohada hozircha kurslar mavjud emas!</div>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center">
                    <!-- start pagination -->
                {{ $courses->links() }}
                <!-- end pagination -->
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
