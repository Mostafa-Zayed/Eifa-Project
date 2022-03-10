@extends('backend.layouts.master')
@section('css')
    @toastr_css
    <style type="text/css">
        input.form-control,textarea {
            background-color: #dee1e5 !important;
        }
    </style>
@section('title')
    {{ucwords(trans('dashboard.articles'))}}
@stop
@endsection
@section('page-header')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-3">
                    <a type="button" class="button x-small" href="{{route('articles.create')}}">{{ucwords(trans('dashboard.add_article'))}}</a>
                </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}" class="default-color">{{trans('dashboard.index')}}</a></li>
                    <li class="breadcrumb-item active">{{trans('dashboard.all_articles')}}</li>
                </ol>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="modal fade" id="addArticleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">{{ucwords(trans('dashboard.add_article'))}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('articles.store')}}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="title_ar" class="mr-sm-2">{{ucwords(trans('articles.title_ar'))}} :</label>
                                <input id="title_ar" type="text" name="title[ar]" class="form-control" value="{{old('title.ar')}}">
                                @error('title.ar')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="title_en" class="mr-sm-2">{{ ucwords(trans('articles.title_en')) }}   :</label>
                                <input type="text" class="form-control" name="title[en]" value="{{old('title.en')}}">
                                @error('title.en')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="description_ar">{{ucwords(trans('founders.description_ar'))}}</label>
                                <textarea class="form-control" name="description[ar]" id="description_ar" rows="3">{{old('description.ar')}}</textarea>
                                @error('description.ar')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="description_en">{{ucwords(trans('founders.description_en'))}}</label>
                                <textarea class="form-control" name="description[en]" id="description_en" rows="3">{{old('description.en')}}</textarea>
                                @error('description.en')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="mr-sm-2">{{ucwords(trans('dashboard.facebook'))}}</label>
                                <input type="url" class="form-control" name="facebook" value="{{old('facebook')}}">
                                @error('facebook')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="mr-sm-2">{{ucwords(trans('dashboard.twitter'))}}</label>
                                <input type="url" class="form-control" name="twitter" value="{{old('twitter')}}">
                                @error('twitter')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="mr-sm-2">{{ucwords(trans('dashboard.instagram'))}}</label>
                                <input type="url" class="form-control" name="instagram" value="{{old('instagram')}}">
                                @error('instagram')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="mr-sm-2">{{ucwords(trans('dashboard.image'))}}</label>
                                <input type="file" class="form-control" name="image">
                                @error('image')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ucwords(trans('dashboard.cancel'))}}</button>
                        <button type="submit" class="btn btn-success">{{ucwords(trans('dashboard.add'))}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    js
@endsection
