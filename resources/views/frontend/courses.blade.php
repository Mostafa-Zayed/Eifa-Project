@extends('frontend.layouts.app')
@section('title')
    {{ucwords(trans('dashboard.courses'))}}
@endsection
@section('content')
    <div role="main" class="main">
        <section class="page-header page-header-modern custom-page-header bg-color-quaternary">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 class="font-weight-bold text-9 text-color-secondary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">{{ucwords(trans('dashboard.tran_courses'))}}</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                            <li><a href="{{route('home')}}">{{ucwords(trans('dashboard.index'))}}</a></li>
                            <li class="active">{{ucwords(trans('dashboard.tran_courses'))}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="real-word-stories overflow-hidden p-relative pt-5 pb-4">
            <div class="container">
                <div class="row justify-content-between pt-5 mb-2">
                    @if(! empty($courses) && $courses->count() > 0)
                        @foreach($courses as $course)
                            <div class="col-lg-6 position-relative" style="direction: ltr;">
                                <div class="custom-testimonial-container bg-color-light mb-5">
                                    <div class="testimonial custom-testimonial testimonial-style-2 mb-0">
                                        <div class="d-none d-sm-flex align-items-center justify-content-center custom-testimonial-right bg-color-light p-absolute z-index-1">
                                            <img src="{{asset('assets/img/eifa/visoin.jpeg')}}" alt="Bullseye">
                                            <a href="{{route('course.details',$course->id)}}" class="d-block btn btn-primary custom-button-testimonial-right text-center text-uppercase text-decoration-none border-0 p-0 font-weight-semibold p-absolute">Read More</a>
                                        </div>
                                        <blockquote class="px-0 pb-5">
                                            <h4 class="text-color-secondary font-weight-bold text-start">{{$course->name}}</h4>
                                            <p class="mb-0 text-start text-3">{!!  $course->min_description !!}
                                                <a href="{{route('course.details',$course->id)}}" class="font-weight-bold text-uppercase text-decoration-none d-block d-sm-none mt-3">Read More +</a></p>
                                        </blockquote>
                                        <div class="testimonial-arrow-down"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
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
