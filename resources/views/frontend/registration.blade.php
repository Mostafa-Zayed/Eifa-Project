@extends('frontend.layouts.app')
@section('title')
@endsection
@section('css')
@endsection
@section('content')
    <div role="main" class="main">

        <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-dark">استمارة تسجيل</h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="{{route('home')}}">{{ucwords(trans('dashboard.index'))}}</a></li>
                            <li class="active">{{ucwords(trans('dashboard.registration_form'))}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-4">

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <h2 class="font-weight-bold text-5 mb-0">{{ucwords(trans('dashboard.registration_form'))}}</h2>
                    <form action="{{route('makeRegister')}}" id="frmSignUp" method="POST">
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">الاسم<span class="text-color-danger">*</span></label>
                                <input type="text" value="{{old('name')}}" class="form-control form-control-lg text-4" name="name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">الرقم<span class="text-color-danger">*</span></label>
                                <input type="text" value="{{old('phone')}}" class="form-control form-control-lg text-4" name="phone">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">الوظيفة<span class="text-color-danger">*</span></label>
                                <input type="text" value="{{old('job')}}" class="form-control form-control-lg text-4" name="job">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">البريد الالكتروني<span class="text-color-danger">*</span></label>
                                <input type="text" value="{{old('email')}}" class="form-control form-control-lg text-4" name="email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">ارسل</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection
@section('js')
@endsection
