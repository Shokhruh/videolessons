<?php
if ($course->videos) {
    $sekund = 0;
    foreach ($course->videos as $video) {
        $sekund += ($video->min * 60 + $video->sec);
    }
}

$hour = (int)($sekund / 3600);
$min = (int)($sekund - $hour * 3600) / 60;
?>
@extends('page.layouts.main')
@section('content')
    <!-- start page title -->
    <section class="ipad-top-space-margin bg-dark-gray cover-background page-title-big-typography" style="background-image: url('/front-assets/images/demo-elearning-about-title-bg.jpg')">
        <div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0" style="background-image: url('/front-assets/images/vertical-line-bg-small.svg')"></div>
        <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true" data-particle-options='{"particles": {"number": {"value": 8,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 1,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":1,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'></div>
        <div class="container">
            <div class="row align-items-center extra-small-screen">
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-9 position-relative page-title-extra-small" data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="mb-20px alt-font text-yellow">{{ $course->getFieldName($course) }}</h1>
                    <h2 class="fw-500 m-0 ls-minus-2px text-white alt-font">{{ $course->name }}</h2>
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
                    <!-- start details  -->
                    <div class="col-12">
                        <img src="{{ asset('/storage/' . $course->thumbnail) }}" alt="" class="w-100 border-radius-6px mb-7">
                        <div class="text-ckeditor">{!! $course->description !!}</div>
                    </div>
                    <!-- end details -->
                </div>
                <!-- start sidebar -->
                <aside class="col-lg-4 ps-60px lg-ps-30px md-ps-15px">
                    <div class="position-sticky top-150px lg-position-relative lg-top-0px">
                        <div class="border-radius-6px overflow-hidden bg-tranquil">
                            <div class="p-35px lg-p-25px">
                                <ul class="p-0 mb-20px list-style-02">
                                    <li class="border-bottom border-color-extra-medium-gray pb-15px">
                                            <span class="text-dark-gray">
                                                <span class="me-5px"><i class="bi bi-clock-history fs-20"></i></span>
                                                <span class="fw-600">Davomiyligi</span>
                                            </span>
                                        <span class="ms-auto">@if($hour){{ $hour }} soat @endif {{ (int)$min }} min</span>
                                    </li>
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
                                                <span class="fw-600">Darslar soni</span>
                                            </span>
                                        <span class="ms-auto">{{ $course->videos->count() }}</span>
                                    </li>
                                    <li class="pt-10px pb-15px">
                                        <span class="text-dark-gray">
                                            <span class="me-5px"><i class="bi bi-award fs-20"></i></span>
                                            <span class="fw-600">O'qituvchi</span>
                                        </span>
                                        <span class="ms-auto"><a style="color: #0b5ed7" href="{{ route('instructorPage', ['user' => $course->user_id]) }}">{{ $course->user->username }}</a></span>
                                    </li>
                                </ul>
                                <a href="{{ route('videoPage', ['course' => $course->id, 'video' => $video]) }}" class="btn btn-extra-large btn-base-color btn-rounded btn-switch-text fw-600 left-icon w-100">
                                        <span>
                                            <span><i class="feather icon-feather-thumbs-up"></i></span>
                                            <span class="btn-double-text" data-text="Kursni boshlash">Kursni boshlash</span>
                                        </span>
                                </a>
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
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px">A'loqador kurslar</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 px-0 sm-ps-15px sm-pe-15px">
                    <ul class="portfolio-wrapper grid grid-3col xxl-grid-3col xl-grid-3col lg-grid-2col md-grid-2col sm-grid-1col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        @if($relatedCourses)
                            @foreach($relatedCourses as $c)
                                @if($c->videos->count())
                                    <li class="grid-item transition-inner-all">
                                        <div class="services-box-style-06 border-radius-6px hover-box overflow-hidden box-shadow-large">
                                            <div class="image">
                                                <a href="demo-elearning-courses-details.html">
                                                    <img src="{{ asset('/storage/' . $c->thumbnail) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="bg-white position-relative">
                                                <div class="ps-40px pe-40px pt-30px pb-30px border-bottom border-color-transparent-dark-very-light xl-ps-25px xl-pe-25px">
                                                    <div class="d-flex align-items-center mb-5px">
                                                        <a href="demo-elearning-courses-details.html" class="text-dark-gray fw-600 fs-19 lh-28 w-90">{{ $c->name }}</a>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-center align-items-center ps-40px pe-40px xl-ps-25px xl-pe-25px pt-15px pb-20px">
                                                    <div class="me-auto">
                                                        <i class="feather icon-feather-clipboard text-dark-gray d-inline-block me-5px"></i><span class="fs-16 text-dark-gray fw-500">Darslar soni: {{ $c->videos->count() }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @else
                                    <div class="alert alert-danger">A'loqador kurslar mavjud emas!</div>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
