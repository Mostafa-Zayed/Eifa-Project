@extends('backend.layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('dashboard.categories')}}
@stop
@endsection
@section('page-header')

    <div class="page-title">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}" class="default-color">{{trans('dashboard.index')}}</a></li>
                    <li class="breadcrumb-item active">{{trans('dashboard.all_categories')}}</li>
                </ol>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <br>
                <br>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="{{route('categories.update',$category['id'])}}" method="POST" style="width:90%;">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name_ar" class="mr-sm-2">{{ucwords(trans('categories.name_ar'))}} :</label>
                                    <input id="name_ar" type="text" name="name[ar]" class="form-control" value="{{$category['name']['ar']}}">
                                    @error('name.ar')
                                    <span class="alert-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="name_en" class="mr-sm-2">{{ ucwords(trans('pages.name_en')) }}   :</label>
                                    <input type="text" class="form-control" name="name[en]" value="{{$category['name']['en']}}">
                                    @error('name.en')
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
