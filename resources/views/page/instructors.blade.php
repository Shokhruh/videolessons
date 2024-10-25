@extends('page.layouts.main')
@section('content')
    <!-- start page title -->
    <section class="ipad-top-space-margin bg-dark-gray cover-background page-title-big-typography" style="background-image: url('/front-assets/images/demo-elearning-instructors-title-bg.jpg')">
        <div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0" style="background-image: url('/front-assets/images/vertical-line-bg-small.svg')"></div>
        <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true" data-particle-options='{"particles": {"number": {"value": 8,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 1,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":1,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'></div>
        <div class="container">
            <div class="row align-items-center extra-small-screen">
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-9 position-relative page-title-extra-small" data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="mb-20px alt-font text-yellow">O'qituvchilarimiz</h1>
                    <h2 class="fw-500 m-0 ls-minus-2px text-white alt-font">Ajoyib kurslar sizni kutmoqda</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="overflow-hidden position-relative overlap-height">
        <div class="container overlap-gap-section">
            <div class="row align-items-end justify-content-center mb-8 sm-mb-50px">
                <div class="col-xl-5 col-lg-6 col-md-9 position-relative md-mb-50px sm-mb-35px text-center text-lg-start" data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="icon-with-text-style-08 mb-20px d-inline-block">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div class="feature-box-icon feature-box-icon-rounded w-55px h-55px rounded-circle bg-yellow me-15px">
                                <i class="bi bi-people d-inline-block icon-extra-medium text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-inline-block alt-font fs-19 fw-500 ls-minus-05px text-dark-gray">Tajribali mentor va instruktorlar</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-10 offset-xl-2 position-relative text-center text-lg-start mt-minus-1">
                    <div class="row row-cols-1 row-cols-sm-2" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <!-- start pie chart item -->
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2" data-anime='{ "el": "childs", "translateY": [0, 0], "perspective": [800,800], "scale": [1.1, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                @foreach($instructors as $instructor)
                    <!-- start team member item -->
                    <div class="col text-center team-style-05 mb-45px">
                        <div class="position-relative mb-30px last-paragraph-no-margin border-radius-4px overflow-hidden">
                            <img src="{{ asset('/storage/' . $instructor->photo) }}" alt="">
                        </div>
                        <div class="fw-600 text-dark-gray lh-22 fs-18 ls-minus-05px"><a href="{{ route('instructorPage', ['user' => $instructor->id]) }}">{{ $instructor->name }}<i class="fa-solid fa-arrow-right ms-5px icon-very-small"></i></a></div>
                    </div>
                    <!-- end team member item -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
