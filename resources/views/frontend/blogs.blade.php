@extends('frontend.layouts.app')
@section('title')
    {{ucwords(trans('dashboard.articles'))}}
@endsection
@section('content')
    <div role="main" class="main">
        <section class="page-header page-header-modern custom-page-header bg-color-quaternary">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 class="font-weight-bold text-9 text-color-secondary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">{{ucwords(trans('dashboard.blogs'))}}</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                            <li><a href="{{route('home')}}">{{ucwords(trans('dashboard.index'))}}</a></li>
                            <li class="active">{{ucwords(trans('dashboard.articles'))}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-9">
                    @if(! empty($articles) && $articles->count() >0)
                        @foreach($articles as $article)
                            <article>
                                <div class="card border-0 border-radius-0 mb-5 box-shadow-1">
                                    <div class="card-body p-4 z-index-1">
                                        <a href="{{route('getArticle',$article->id)}}">
                                            <img class="card-img-top border-radius-0" src="{{asset('uploads/articles/'.$article->image)}}" alt="Card Image">
                                        </a>
                                        <p class="text-uppercase text-1 mb-3 pt-1 text-color-default"><time pubdate datetime="2021-01-10">{{$article->date}}</time><span class="opacity-3 d-inline-block px-2">|</span>{{strtoupper($article->author)}}</p>
                                        <div class="card-body p-0">
                                            <h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary" href="{{route('getArticle',$article->id)}}">{{$article->title}}</a></h4>
                                            <p class="card-text mb-3">{!! substr($article->description,0,300).'....' !!}</p>
                                            <a href="{{route('getArticle',$article->id)}}" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">{{strtoupper(trans('dashboard.read_more'))}} +</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach

                    @endif

                    <ul class="pagination pagination-rounded pagination-lg justify-content-center">
                        {{$articles->links()}}
{{--                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>--}}
{{--                        <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>--}}
                    </ul>

                </div>
                <div class="col-lg-3 pt-4 pt-lg-0">
                    <aside class="sidebar">
                        <div class="px-3 mb-4">
                            <h3 class="text-color-secondary text-capitalize font-weight-bold text-5 m-0 mb-3">About Our Articles</h3>
                            <p class="m-0">In our articles, you can follow the latest important topics that we offer</p>
                        </div>
                        <div class="py-1 clearfix">
                            <hr class="my-2">
                        </div>
                        <div class="px-3 mt-4">
                            <form action="page-search-results.html" method="get">
                                <div class="input-group mb-3 pb-1">
                                    <input class="form-control box-shadow-none text-1 border-0 bg-color-grey" placeholder="Search..." name="s" id="s" type="text">
                                    <button type="submit" class="btn bg-color-grey text-1 p-2"><i class="fas fa-search m-2"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="py-1 clearfix">
                            <hr class="my-2">
                        </div>
                        <div class="px-3 mt-4">
                            <h3 class="text-color-secondary text-capitalize font-weight-bold text-5 m-0 mb-3">Other Articles</h3>
                            <div class="pb-2 mb-1">
                                <a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 January 2021 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> author name</a>
                                <a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">covid conference</a>
                                <a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 January 2021 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span>author name </a>
                                <a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Honor Seminar</a>

                            </div>
                        </div>
                        <div class="py-1 clearfix">
                            <hr class="my-2">
                        </div>
                        <!--<div class="px-3 mt-4">-->
                        <!--	<h3 class="text-color-secondary text-capitalize font-weight-bold text-5 m-0 mb-3">الComments الاخرى</h3>-->
                        <!--	<div class="pb-2 mb-1">-->
                        <!--		<a href="#" class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">author name<strong class="text-color-dark text-hover-primary text-4"> covid conference</strong> <span class="text-uppercase text-1 d-block pt-1 pb-3">10 January 2021</span></a>-->
                        <!--		<a href="#" class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">author name<strong class="text-color-dark text-hover-primary text-4"> ندوة التكريم</strong> <span class="text-uppercase text-1 d-block pt-1 pb-3">10 January 2021</span></a>-->
                        <!--	</div>-->
                        <!--</div>-->
                        <div class="py-1 clearfix">
                            <hr class="my-2">
                        </div>
                        <div class="px-3 mt-4">
                            <h3 class="text-color-secondary text-capitalize font-weight-bold text-5 m-0">Categories</h3>
                            <ul class="nav nav-list flex-column mt-2 mb-0 p-relative right-9">
                                <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Conferences (2)</a></li>
                                <li class="nav-item">
                                    <a class="nav-link bg-transparent border-0 active" href="#">Association (4)</a>
                                    <!--<ul>-->
                                    <!--	<li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Animals</a></li>-->
                                    <!--	<li class="nav-item"><a class="nav-link bg-transparent border-0 active" href="#">Business</a></li>-->
                                    <!--	<li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Sports</a></li>-->
                                    <!--	<li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">People</a></li>-->
                                    <!--</ul>-->
                                </li>
                            </ul>
                        </div>
                    </aside>
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
