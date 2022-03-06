@extends('frontend.layouts.app')
@section('title')
    {{ucwords(trans('dashboard.services'))}}
@endsection
@section('content')
    <div role="main" class="main">
        <section class="page-header page-header-modern custom-page-header bg-color-quaternary">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 class="font-weight-bold text-9 text-color-secondary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">{{ucwords(trans('dashboard.services'))}}</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                            <li><a href="{{route('home')}}">{{ucwords(trans('dashboard.index'))}}</a></li>
                            <li class="active">{{ucwords(trans('dashboard.services'))}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <p class="text-4 line-height-9 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">@if(! empty($settings['service_header'])) {{$settings['service_header']}}@endif</p>
                </div>
                <div class="col-lg-3 pt-4 pt-lg-0">
                    <div class="card border-radius-0 box-shadow-1 border-0 me-lg-3 p-3 mb-3 mb-lg-0">
                        <img src="{{asset('assets/img/eifa/partners-1.jpeg')}}" class="img-fluid border-radius-0" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col py-5">
                    <hr class="m-0">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>{{ucwords(trans('dashboard.services'))}}</p>
                    <h2 class="text-color-secondary font-weight-bold text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">{{ucwords(trans('services.events_and_activities'))}}</h2>

                    <div class="accordion accordion-sm mb-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500" id="accordionServices">
                        @if(isset($services) && $services->count() > 0)
                        @foreach($services as $key => $service)
                        <div class="border-radius mb-1 border-0 card-accordion-our-services-container">
                            <div class="card-header py-2 bg-color-quaternary">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-tertiary font-weight-semibold" data-bs-toggle="collapse" data-bs-parent="#accordionServices" href="#collapse3One">{{$service->title}}</a>
                                </h4>
                            </div>
                            <div id="collapse3One" class="collapse card-accordion-our-services @if($key == 0) {{'show'}} @endif">
                                <div class="card-body">
                                    <p class="font-weight-semibold mb-4">{{$service->content}}
                                        <br>
                                        • {{ucwords(trans('services.certificate_contents'))}}:
                                    </p>
                                    <!-- Service List -->
                                    <div class="row no-gutters">
                                        <div class="col-md-12">
                                            <ul class="list list-icons list-primary ms-4">
                                                @if (! empty($service->serviceList) && $service->serviceList->count() > 0)
                                                    @foreach($service->serviceList as $list)
                                                        <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fas fa-check"></i>{{$list->content}}</li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.includes.footer')
@endsection
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


