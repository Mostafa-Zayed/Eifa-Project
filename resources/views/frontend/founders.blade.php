@extends('frontend.layouts.app')
@section('title')
    {{ucwords(trans('dashboard.founders'))}}
@endsection
@section('content')
    <div role="main" class="main">
        <section class="page-header page-header-modern custom-page-header bg-color-quaternary">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 class="font-weight-bold text-9 text-color-secondary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">{{ucwords(trans('dashboard.founders'))}}</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                            <li><a href="{{route('home')}}">{{ucwords(trans('dashboard.index'))}}</a></li>
                            <li class="{{route('founders')}}">{{ucwords(trans('dashboard.founders'))}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="container py-5">
            <div class="row">
                @if(! empty($founders) && $founders->count() > 0)
                    @foreach($founders as $founder)
                        <div class="col-md-6 pt-3 mb-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">
                            <div class="row align-items-center no-gutters">
                                <div class="col-lg-5">
                                    <div class="card border-radius-0 box-shadow-1 border-0 me-lg-4 p-3 mb-3 mb-lg-0">
                                        <a href="{{route('founder.details',$founder->id)}}" class="d-block p-relative">
                                            <img src="{{asset('assets/img/eifa/visoin.jpeg')}}" class="img-fluid border-radius-0" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 ps-2 ps-lg-0">
                                    <h4 class="mb-3 text-5 font-weight-bold"><a class="text-color-tertiary" href="{{route('founder.details',$founder->id)}}">{{$founder->name}}</a></h4>
                                    <p class="mb-3">{{$founder->description}}</p>
                                    <a href="{{route('founder.details',$founder->id)}}" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">Read More +</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
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
