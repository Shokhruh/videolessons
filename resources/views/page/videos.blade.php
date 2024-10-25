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
                <aside class="col-lg-4 ps-60px lg-ps-30px md-ps-15px">
                    <!-- start details  -->
                    <div class="col-12">
                        <div class="col-12 p-0 tab-style-04">
                            <div class="tab-content">
                                <!-- start tab content -->
                                <div class="tab-pane active show fade in" id="tab_five2">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-12">
                                            <div class="accordion accordion-style-04" id="accordion-style-04" data-active-icon="fa-angle-down" data-inactive-icon="fa-angle-right">
                                                <!-- start accordion item -->
                                                <div class="accordion-item active-accordion">
                                                    <div class="accordion-header border-bottom border-color-extra-medium-gray mb-0">
                                                        <a href="" data-bs-toggle="collapse" data-bs-target="#accordion-style-04-01" aria-expanded="true" data-bs-parent="#accordion-style-04">
                                                            <div class="accordion-title position-relative mb-0 pe-20px text-dark-gray fw-600 ls-minus-05px">
                                                                <span>{{ $course->name }}</span>
                                                                <i class="fa-solid fa-angle-down icon-small"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div id="accordion-style-04-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-04">
                                                        <div class="accordion-body bg-white last-paragraph-no-margin">
                                                            <ul class="p-0 m-0 list-style-02">
                                                                @foreach($course->videos as $vid)
                                                                    <li class="border-bottom border-color-extra-medium-gray pb-15px">
                                                                    <span>{{ $vid->name }}</span>
                                                                    <a href="{{ route('videoPage', ['course' => $course, 'video' => $vid->id]) }}" class="ms-auto text-dark-gray"><i class="fa-solid fa-circle-play fs-18"></i></a>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end accordion item -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab content -->
                            </div>
                        </div>
                    </div>
                    <!-- end details -->
                </aside>
                <div class="col-lg-8 md-mb-50px">
                    <!-- start details  -->
                    <div class="col-12">
                        <video id="player" playsinline controls data-poster="{{ asset('/storage/' . $first->thumbnail) }}">
                            <source src="{{ asset('/storage/' . $first->video) }}" type="video/mp4" />
                        </video>
                    </div>
                    <!-- end details -->
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
@section('script')
    <script>
        const player = new Plyr('#player');
    </script>
@endsection
