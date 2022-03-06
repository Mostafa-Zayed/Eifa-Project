@extends('frontend.layouts.app')
@section('title')
    {{ucwords(trans('dashboard.contact'))}}
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
                        <h1 class="font-weight-bold text-9 text-color-secondary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">{{ucwords(trans('dashboard.contact'))}}</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                            <li><a href="{{route('home')}}">{{ucwords(trans('dashboard.index'))}}</a></li>
                            <li class="active">{{ucwords(trans('dashboard.contact'))}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="custom-bg-color-lighter-grey">
            <div class="cards custom-cards h-auto pt-5 pb-4 container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
                <div class="row bg-color-light cards-container d-flex justify-content-center justify-content-xl-between w-100 mb-5 mx-0 box-shadow-1 p-relative top-0">
                    <div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
                        <div class="card border-radius-0 border-0 shadow-none">
                            <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
                                <h4 class="card-title mb-4 font-weight-semibold text-color-primary"> {{ucwords(trans('contacts.contact_us'))}}</h4>

                                <strong class="d-block text-secondary text-4">{{ucwords(trans('contacts.contact'))}}</strong>
                                <p class="d-block m-0">@if(! empty($settings['phone2'])) {{$settings['phone2']}}@endif</p>

                                <strong class="d-block text-secondary text-4 pt-4">{{ucwords(trans('contacts.work_hours'))}}:</strong>
                                <p class="d-block m-0">@if(! empty($settings['work_hours'])) {{$settings['work_hours']}}@endif</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
                        <div class="card border-radius-0 border-0 shadow-none">
                            <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
                                <h4 class="card-title mb-4 font-weight-semibold text-color-primary">{{ucwords(trans('contacts.address_email'))}}</h4>

                                <strong class="d-block text-secondary text-4">{{ucwords(trans('contacts.address'))}}</strong>
                                <p class="d-block m-0">@if($settings['address'])) {{$settings['address']}} @endif</p>

                                <strong class="d-block text-secondary text-4 pt-4">{{ucwords(trans('contacts.email'))}}</strong>
                                <p class="d-block m-0">
                                    <a class="text-default" href="mailto:info@eifa-eg.com">@if(! empty($settings['email1'])) {{$settings['email1']}}@endif</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
                        <div class="card border-radius-0 border-0 shadow-none">
                            <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1 border-end-0">
                                <h4 class="card-title mb-4 font-weight-semibold text-color-primary">{{ucwords(trans('contacts.social_media'))}}</h4>
                                <ul class="social-icons custom-social-icons p-0 pt-3 m-0">
                                    <li class="m-0 d-block pb-2 social-icons-instagram">
                                        <a class="custom-bg-color-light-grey" href="@if(! empty($settings['instagram'])) {{$settings['instagram']}}@else http://www.instagram.com/@endif" target="_blank" title="Instagram">
                                            <i class="fab fa-instagram text-4 font-weight-semibold text-color-secondary"></i>
                                        </a>
                                    </li>
                                    <li class="m-0 d-block pb-2 social-icons-twitter">
                                        <a class="custom-bg-color-light-grey" href="@if(! empty($settings['twitter'])) {{$settings['twitter']}} @else https://twitter.com/ @endif" target="_blank" title="Twitter">
                                            <i class="fab fa-twitter text-4 font-weight-semibold text-color-secondary"></i>
                                        </a>
                                    </li>
                                    <li class="m-0 d-block pb-2 social-icons-facebook">
                                        <a class="custom-bg-color-light-grey" href="@if(! empty($settings['facebook'])) {{$settings['facebook']}} @else {{ 'https://www.facebook.com/'}} @endif" target="_blank" title="Facebook">
                                            <i class="fab fa-facebook-f text-4 font-weight-semibold text-color-secondary"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <form class="contact-form custom-form-style-1" action="{{route('contacts.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" placeholder="Name"  class="form-control" name="name">
                            @error('name')
                            <span class="alert-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="email" placeholder="E-Mail" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <input placeholder="Name Of Subject" type="text" class="form-control" name="subject">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <textarea placeholder="Your Message..."  rows="10" class="form-control" name="message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <input type="submit" value="{{ucwords(trans('contacts.send'))}}" class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold" >
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@include('frontend.includes.footer')
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
