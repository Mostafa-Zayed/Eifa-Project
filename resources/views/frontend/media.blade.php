@extends('frontend.layouts.app')
@section('title')
    {{ucwords(trans('dashboard.media'))}}
@endsection
@section('css')
@endsection
@section('content')
    <div role="main" class="main">
        <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md ">
            <div class="container-fluid">
                <div class="row align-items-center">

                    <div class="col">
                        <div class="row">
                            <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <div class="overflow-hidden pb-2">
                                    <h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">{{ucwords(trans('dashboard.media'))}}</h1>
                                </div>
                            </div>
                            <div class="col-md-12 align-self-center order-1">
                                <ul class="breadcrumb d-block text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                                    <li><a href="{{route('home')}}">{{ucwords(trans('dashboard.index'))}}</a></li>
                                    <li class="active">{{ucwords(trans('dashboard.media'))}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="container py-2">

            <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                <li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="{{route('media')}}">Show All</a></li>
                @if(! empty($categories) && $categories->count() > 0)
                    @foreach($categories as $category)
                        <li class="nav-item" data-option-value=".conferences"><a class="nav-link text-1 text-uppercase" href="{{route('category.media',$category->id)}}">{{ucwords($category->name)}}</a></li>
                    @endforeach
                @endif
            </ul>

            <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
                <div class="row portfolio-list sort-destination" data-sort-id="portfolio">

                    <div class="col-md-6 col-lg-4 isotope-item seminars">
                        <div class="portfolio-item">
                            <a href="single-media.html">
										<span class="thumb-info thumb-info-lighten border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/media/media-1.jpg" class="img-fluid border-radius-0" alt="" style="width:390px;height:290px;">

												<span class="thumb-info-title">
													<span class="thumb-info-inner">Seminars</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
												</span>
											</span>
										</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 isotope-item seminars">
                        <div class="portfolio-item">
                            <a href="single-media.html">
										<span class="thumb-info thumb-info-lighten border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/media/media-2.jpg" class="img-fluid border-radius-0" alt="" style="width:390px;height:290px;">

												<span class="thumb-info-title">
													<span class="thumb-info-inner">Seminars</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
												</span>
											</span>
										</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 isotope-item conferences">
                        <div class="portfolio-item">
                            <a href="single-media.html">
										<span class="thumb-info thumb-info-lighten border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/media/media-3.jpg" class="img-fluid border-radius-0" alt="" style="width:390px;height:290px;">

												<span class="thumb-info-title">
													<span class="thumb-info-inner">Conferences</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
												</span>
											</span>
										</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 isotope-item seminars">
                        <div class="portfolio-item">
                            <a href="single-media.html">
										<span class="thumb-info thumb-info-lighten border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/media/media-4.jpg" class="img-fluid border-radius-0" alt="" style="width:390px;height:290px;">

												<span class="thumb-info-title">
													<span class="thumb-info-inner">Seminars</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
												</span>
											</span>
										</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 isotope-item conferences">
                        <div class="portfolio-item">
                            <a href="single-media.html">
										<span class="thumb-info thumb-info-lighten border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/media/media-5.jpg" class="img-fluid border-radius-0" alt="" style="width:390px;height:290px;">

												<span class="thumb-info-title">
													<span class="thumb-info-inner">Conferences</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
												</span>
											</span>
										</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 isotope-item conferences">
                        <div class="portfolio-item">
                            <a href="single-media.html">
										<span class="thumb-info thumb-info-lighten border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/media/media-6.jpg" class="img-fluid border-radius-0" alt="" style="width:390px;height:290px;">

												<span class="thumb-info-title">
													<span class="thumb-info-inner">Conferences</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
												</span>
											</span>
										</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 isotope-item seminars">
                        <div class="portfolio-item">
                            <a href="single-media.html">
										<span class="thumb-info thumb-info-lighten border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/media/media-7.jpg" class="img-fluid border-radius-0" alt="" style="width:390px;height:290px;">

												<span class="thumb-info-title">
													<span class="thumb-info-inner">Seminars</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
												</span>
											</span>
										</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 isotope-item seminars">
                        <div class="portfolio-item">
                            <a href="single-media.html">
										<span class="thumb-info thumb-info-lighten border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/media/media-8.jpg" class="img-fluid border-radius-0" alt="" style="width:390px;height:290px;">

												<span class="thumb-info-title">
													<span class="thumb-info-inner">Seminars</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
												</span>
											</span>
										</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 isotope-item conferences">
                        <div class="portfolio-item">
                            <a href="single-media.html">
										<span class="thumb-info thumb-info-lighten border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/media/media-9.jpg" class="img-fluid border-radius-0" alt="" style="width:390px;height:290px;">

												<span class="thumb-info-title">
													<span class="thumb-info-inner">Conferences</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
												</span>
											</span>
										</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 isotope-item conferences">
                        <div class="portfolio-item">
                            <a href="single-media.html">
										<span class="thumb-info thumb-info-lighten border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/media/media-10.jpg" class="img-fluid border-radius-0" alt="" style="width:390px;height:290px;">

												<span class="thumb-info-title">
													<span class="thumb-info-inner">Conferences</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
												</span>
											</span>
										</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 isotope-item conferences">
                        <div class="portfolio-item">
                            <a href="single-media.html">
										<span class="thumb-info thumb-info-lighten border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/media/media-11.jpg" class="img-fluid border-radius-0" alt="" style="width:390px;height:290px;">

												<span class="thumb-info-title">
													<span class="thumb-info-inner">Conferences</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
												</span>
											</span>
										</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 isotope-item conferences">
                        <div class="portfolio-item">
                            <a href="single-media.html">
										<span class="thumb-info thumb-info-lighten border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/media/media-12.jpg" class="img-fluid border-radius-0" alt="" style="width:390px;height:290px;">

												<span class="thumb-info-title">
													<span class="thumb-info-inner">Conferences</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
												</span>
											</span>
										</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
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

