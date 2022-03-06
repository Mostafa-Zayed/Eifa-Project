@extends('frontend.layouts.app')
@section('title')
@endsection
@section('content')
        <div role="main" class="main">
            <div class='container'>
                <!--Slider-->
                <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs show-dots-sm show-dots-md nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover bg-color-quaternary custom-slider-container mb-0" data-plugin-options="{'autoplay': true, 'autoplayTimeout': 7000}" data-dynamic-height="['600px','600px','600px','600px','600px']" style="height: 600px; ">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">

                            <!-- Carousel Slide 1 -->
                            <div class="owl-item position-relative overflow-hidden">
                                <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0" data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s" data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show style="background-image: url(img/slides/header.png); background-size: cover; background-position: center;"></div>
                                <div class="container position-relative z-index-3 pb-5 h-100">
                                    <div class="row justify-content-center justify-content-lg-start align-items-center pb-5 h-100">
                                        <div class="col-sm-9 col-lg-7 text-center text-lg-start mb-5">
                                            <h2 class="text-color-primary font-weight-bold text-uppercase text-4 line-height-3 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}"><span class="line-pre-title bg-color-primary d-none d-lg-inline-block"></span>Finance Services</h2>
                                            <h1 class="text-color-dark font-weight-extra-bold text-10 line-height-2 pe-lg-5 me-lg-5 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" data-plugin-options="{'minWindowWidth': 0}">Islamic Finance Services</h1>
                                            <p class="text-4 9text-color-dark font-weight-light mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}"></p>
                                            <a href="#" class="btn btn-primary btn-modern font-weight-bold text-2 btn-py-3 px-5 mt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250" data-plugin-options="{'minWindowWidth': 0}">Start Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Carousel Slide 2 -->
                            <div class="owl-item position-relative overflow-hidden">
                                <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0" data-appear-animation="kenBurnsToRight" data-appear-animation-duration="30s" data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show style="background-image: url(img/slides/business-people-meeting-office-writing-memos-sticky-notes.jpg); background-size: cover; background-position: center;"></div>
                                <div class="container position-relative z-index-3 pb-5 h-100">
                                    <div class="row align-items-center justify-content-center justify-content-lg-end pb-5 h-100">
                                        <div class="col-sm-9 col-lg-7 text-center text-lg-start mb-5">
                                            <h3 class="text-color-primary font-weight-bold text-uppercase text-4 line-height-3 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}"><span class="line-pre-title bg-color-primary d-none d-lg-inline-block"></span>Finance Services</h3>
                                            <h2 class="text-color-dark font-weight-extra-bold text-10 line-height-2 pe-lg-5 me-lg-5 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" data-plugin-options="{'minWindowWidth': 0}">Your success is our main business!</h2>
                                            <p class="text-4 text-color-dark font-weight-light mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">Professional helps you design success!</p>
                                            <a href="#" class="btn btn-primary btn-modern font-weight-bold text-2 btn-py-3 px-5 mt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250" data-plugin-options="{'minWindowWidth': 0}">Start Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="owl-nav">
                        <button type="button" role="presentation" class="owl-prev"></button>
                        <button type="button" role="presentation" class="owl-next"></button>
                    </div>
                </div>

            </div>

            <div class="boxes-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <div class="box d-flex">
                                <div class="box-icon me-3">
                                    <img src="{{asset('assets/img/boxes/group-7.png')}}" width="100">
                                </div>
                                <div>
                                    <h4>About conferences</h4>
                                    <p>By enriching research and disseminating economic knowledge and contributing to building and supporting financial, economic and supervisory institutions in various aspects.</p>
                                    <a href="media.html" class="d-flex justify-content-end">More Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <div class="box d-flex">
                                <div class="box-icon me-3">
                                    <img src="{{asset('assets/img/boxes/group-8.png')}}" width="100">
                                </div>
                                <div>
                                    <h4>WorkShops</h4>
                                    <p>By enriching research and disseminating economic knowledge and contributing to building and supporting financial, economic and supervisory institutions in various aspects.</p>
                                    <a href="cases.html" class="d-flex justify-content-end">More Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <div class="box d-flex">
                                <div class="box-icon me-3">
                                    <img src="{{asset('assets/img/boxes/group-9.png')}}" width="100">
                                </div>
                                <div>
                                    <h4>Training courses</h4>
                                    <p>By enriching research and disseminating economic knowledge and contributing to building and supporting financial, economic and supervisory institutions in various aspects.</p>
                                    <a href="cases.html" class="d-flex justify-content-end">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('frontend.includes.footer')
    @section('js')
        <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
        <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
        <script src="{{asset('assets/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
        <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
        <script src="{{asset('assets/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
        <script src="{{asset('assets/vendor/lazysizes/lazysizes.min.js')}}"></script>
        <script src="{{asset('assets/vendor/isotope/jquery.isotope.min.js')}}"></script>
        <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/vendor/vide/jquery.vide.min.js')}}"></script>
        <script src="{{asset('assets/vendor/vivus/vivus.min.js')}}"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="{{asset('assets/js/theme.js')}}"></script>

        <!-- Current Page Vendor and Views -->
        <script src="{{asset('assets/js/views/view.contact.js')}}"></script>

        <!-- Demo -->
        <script src="{{asset('assets/js/demos/demo-business-consulting-2.js')}}"></script>

        <!-- Theme Custom -->
        <script src="{{asset('assets/js/custom.js')}}"></script>

        <!-- Theme Initialization Files -->
        <script src="{{asset('assets/js/theme.init.js')}}"></script>
    @endsection
@endsection
