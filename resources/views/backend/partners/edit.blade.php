@extends('backend.layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{ucwords(trans('dashboard.partners'))}}
@stop
@endsection
@section('page-header')

    <div class="page-title">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}" class="default-color">{{trans('dashboard.index')}}</a></li>
                    <li class="breadcrumb-item active">{{ucwords(trans('dashboard.all_partners'))}}</li>
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
                        <form action="{{route('partners.update',$partner['id'])}}" method="POST" style="width:90%;">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name_ar" class="mr-sm-2">{{ucwords(trans('partners.name_ar'))}} :</label>
                                    <input id="name_ar" type="text" name="name[ar]" class="form-control" value="{{$partner['name']['ar']}}">
                                    @error('name.ar')
                                    <span class="alert-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="name_en" class="mr-sm-2">{{ ucwords(trans('partners.name_en')) }}   :</label>
                                    <input type="text" class="form-control" name="name[en]" value="{{$partner['name']['en']}}">
                                    @error('name.en')
                                    <span class="alert-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="description_ar">{{ucwords(trans('founders.description_ar'))}}</label>
                                    <textarea class="form-control" name="description[ar]" id="description_ar" rows="3">{{$partner['description']['ar']}}</textarea>
                                    @error('description.ar')
                                    <span class="alert-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="description_en">{{ucwords(trans('founders.description_en'))}}</label>
                                    <textarea class="form-control" name="description[en]" id="description_en" rows="3">{{$partner['description']['en']}}</textarea>
                                    @error('description.en')
                                    <span class="alert-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label class="mr-sm-2">{{ucwords(trans('dashboard.facebook'))}}</label>
                                    <input type="url" class="form-control" name="facebook" value="{{$partner['facebook']}}">
                                    @error('facebook')
                                    <span class="alert-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label class="mr-sm-2">{{ucwords(trans('dashboard.linkedin'))}}</label>
                                    <input type="url" class="form-control" name="linkedin" value="{{$partner['linkedin']}}">
                                    @error('linkedin')
                                    <span class="alert-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label class="mr-sm-2">{{ucwords(trans('dashboard.link'))}}</label>
                                    <input type="url" class="form-control" name="link" value="{{$partner['link']}}">
                                    @error('link')
                                    <span class="alert-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
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
