@extends('backend.layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('dashboard.services')}}
@stop
@endsection
@section('page-header')

    <div class="page-title">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}" class="default-color">{{trans('dashboard.index')}}</a></li>
                    <li class="breadcrumb-item active">{{trans('dashboard.all_services')}}</li>
                </ol>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <br>
                <br>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="{{route('services.update',$service['id'])}}" method="POST" style="width:90%;">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="title_ar" class="mr-sm-2">{{ucwords(trans('services.title_ar'))}} :</label>
                                    <input id="title_ar" type="text" name="title_ar" class="form-control" value="{{$service['title']['ar']}}">
                                    @error('title_ar')
                                    <span class="alert-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="title_en" class="mr-sm-2">{{ ucwords(trans('services.title_en')) }}   :</label>
                                    <input type="text" class="form-control" name="title_en" value="{{$service['title']['en']}}">
                                    @error('title_en')
                                    <span class="alert-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="content_ar">{{ucwords(trans('services.content_ar'))}}</label>
                                    <textarea class="form-control" name="content_ar" id="content_ar" rows="9" cols="5">{{$service['content']['ar']}}</textarea>
                                    @error('content_ar')
                                    <span class="alert-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="content_en">{{ucwords(trans('services.content_en'))}}</label>
                                    <textarea class="form-control" name="content_en" id="content_en" rows="9" cols="5">{{$service['content']['en']}}</textarea>
                                    @error('content_en')
                                    <span class="alert-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success">{{ucwords(trans('dashboard.update'))}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

    @toastr_js
    @toastr_render
    <script>
        function openModelWithErrors() {
            let isSessionHasError = "{{session()->has('errors')}}";
            if (isSessionHasError == 1) {
                let addPageModal = $('#addPageModal');
                addPageModal.modal('show');
            }
        }
        openModelWithErrors();
    </script>
@endsection
