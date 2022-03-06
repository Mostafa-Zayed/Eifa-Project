@extends('frontend.layouts.app')
@section('title')
    {{ucwords(trans('dashboard.courses'))}}
@endsection
@section('css')
    @toastr_css
@endsection
@section('content')
    <div role="main" class="main">
        <section class="page-header page-header-modern custom-page-header bg-color-quaternary">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 class="font-weight-bold text-9 text-color-secondary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">{{ucwords($course->name)}}</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                            <li><a href="{{route('home')}}">{{ucwords(trans('dashboard.index'))}}</a></li>
                            <li class="active">{{ucwords($course->name)}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-8 pt-3 pt-lg-0">
                    <p class="text-4 line-height-9 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">{{ucwords(trans('dashboard.course_reservation_title'))}}</p>
                    <div class="col-sm-9">
                        <button class="btn btn-modern btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">{{ucwords(trans('dashboard.registration_form'))}}</button>
                        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="formModalLabel">{{ucwords(trans('dashboard.registration_form'))}}</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <form id="demo-form" class="mb-4" method="POST" action="{{route('course.register',$course->id)}}">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group row align-items-center">
                                                <label class="col-sm-3 text-start text-sm-end mb-0">Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name..." value="{{old('name')}}"/>
                                                </div>
                                            </div>
                                            <div class="form-group row align-items-center">
                                                <label class="col-sm-3 text-start text-sm-end mb-0">Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="phone" class="form-control" placeholder="Enter Your Number..." value="{{old('phone')}}"/>
                                                </div>
                                            </div>
                                            <div class="form-group row align-items-center">
                                                <label class="col-sm-3 text-start text-sm-end mb-0">Company's name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="company" class="form-control" placeholder="Enter Your Company's Name..." value="{{old('company')}}"/>
                                                </div>
                                            </div>
                                            <div class="form-group row align-items-center">
                                                <label class="col-sm-3 text-start text-sm-end mb-0">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email..." value="{{old('email')}}"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 text-start text-sm-end mb-0">Notes</label>
                                                <div class="col-sm-9">
                                                    <textarea rows="5" class="form-control" placeholder="Enter Your Notes ..." name="note">{{old('note')}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-primary" value="submit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-3 pt-lg-0">
                    <div class="card border-radius-0 box-shadow-1 border-0 me-lg-3 p-3 mb-4 mb-lg-0">
                        <img src="{{asset('assets/img/eifa/partners-1.jpeg')}}" class="img-fluid border-radius-0" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col py-5">
                <hr class="m-0">
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <p class="text-4 line-height-9 mb-0">The program aims to provide participants with the necessary professional knowledge and skills in the Sharia standards of Islamic banks and financial institutions.</p>
                </div>
            </div>
            <div class="row py-5">
                <div class="col appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">
                    <div class="row align-items-center no-gutters">
                        <div class="col-lg-6">
                            <div class="card border-radius-0 box-shadow-1 border-0 me-lg-5 p-3 mb-3 mb-lg-0">
                                <img src="{{asset('assets/img/eifa/partners-2.jpeg')}}" class="img-fluid border-radius-0" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 ps-2 ps-lg-0 pt-4 pt-lg-0">
                            <p>{!! $course->min_description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>{!! $course->description !!}</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-8">
                    <p class="m-0 p-0">{!! $course->details !!}</p>
                </div>
                <div class="col-lg-4">
                    <div class="card border-radius-0 box-shadow-1 border-0 mt-4 mt-lg-0 ms-lg-3 p-3 mb-3 mb-lg-0">
                        <img src="{{asset('assets/img/eifa/partners-3.jpeg')}}" class="img-fluid border-radius-0" alt="">
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
    <script src="{{ URL::asset('assets/backend/js/toastr.js') }}"></script>
    @toastr_js
    @toastr_render
    <script>
        $(document).ready(function(){
            function openModelWithErrors() {
                let isSessionHasError = "{{session()->has('registerError')}}";
                if (isSessionHasError == 1) {
                    let addPageModal = $('div#formModal');
                    addPageModal.modal('show');
                }
            }
            openModelWithErrors();
        });
    </script>
@endsection
