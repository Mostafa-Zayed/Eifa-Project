@extends('frontend.layouts.app')
@section('title')
    {{ucwords(trans('dashboard.partners'))}}
@endsection
@section('content')
    <div role="main" class="main">
        <section class="page-header page-header-modern custom-page-header bg-color-quaternary">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 class="font-weight-bold text-9 text-color-secondary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">{{ucwords(trans('dashboard.partners'))}}</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                            <li><a href="{{route('home')}}">{{ucwords(trans('dashboard.index'))}}</a></li>
                            <li class="active">{{ucwords(trans('dashboard.partners'))}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="container py-4">
            <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="team" data-option-key="filter">
            </ul>
            <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
                <div class="row team-list sort-destination" data-sort-id="team">
                    @if(! empty($partners) && $partners->count() > 0)
                        @foreach($partners as $partner)
                            <div class="col-12 col-sm-6 col-lg-3 isotope-item leadership">
								<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
									<span class="thumb-info-wrapper">
										<a href="{{url($partner->link)}}">
											<img src="{{asset('assets/img/eifa/its-logo.png')}}" class="img-fluid" alt="">
											<span class="thumb-info-title">
											    <span class="thumb-info-inner">{{$partner->name}}</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">{{$partner->description}}</span>
										<span class="thumb-info-social-icons mb-4">
											<a target="_blank" href="{{$partner->facebook}}"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="{{$partner->linkedin}}"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
                            </div>
                        @endforeach
                    @endif
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
