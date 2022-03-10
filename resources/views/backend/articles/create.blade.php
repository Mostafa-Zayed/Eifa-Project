@extends('backend.layouts.master')
@section('css')
    <link href="{{asset('assets/backend/css/bootstrap-datepicker.min.css')}}">
    <link href="{{asset('assets/css/trix.css')}}" rel="stylesheet" type="text/css">
    @toastr_css
@section('title')
    {{trans('dashboard.articles')}}
@stop
@endsection
@section('page-header')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}" class="default-color">{{ucwords(trans('dashboard.index'))}}</a></li>
                    <li class="breadcrumb-item active">{{ucwords(trans('dashboard.add_articles'))}}</li>
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
                    <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
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
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="description_ar">{{ucwords(trans('articles.description_ar'))}}:</label>
                                <input id="description[ar]" type="hidden" name="description[ar]">
                                <trix-editor input="description[ar]"></trix-editor>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="description_en">{{ucwords(trans('articles.description_en'))}}:</label>
                                <input id="description[en]" type="hidden" name="description[en]">
                                <trix-editor input="description[en]"></trix-editor>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="author_ar" class="mr-sm-2">{{ucwords(trans('articles.author_ar'))}} :</label>
                                <input id="author_ar" type="text" name="author[ar]" class="form-control" value="{{old('author.ar')}}">
                                @error('author.ar')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="author_en" class="mr-sm-2">{{ ucwords(trans('articles.author_en')) }}   :</label>
                                <input type="text" class="form-control" name="author[en]" value="{{old('author.en')}}">
                                @error('author.en')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="date">{{ucwords(trans('articles.date'))}} :</label>
                                <input type="text" data-provide="datepicker" class="form-control" name="date">
                            </div>
                        </div>
                        <br>

                        @if(! empty($categories) && $categories->count() > 0)
                            <div class="row">
                                <div class="col">
                                    <label class="mr-sm-2">{{ucwords(trans('media.category'))}}</label>
                                    <select class="form-control form-control-lg" name="category_id">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{ucwords($category->name)}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <span class="alert-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        @endif
                        <br>

                        <div class="row">
                            <div class="col">
                                <label class="mr-sm-2">{{ucwords(trans('dashboard.status'))}}</label>
                                <select class="form-control form-control-lg" name="status">
                                    <option value="1" selected>{{ucwords(trans('dashboard.active'))}}</option>
                                    <option value="0">{{ucwords(trans('dashboard.not_active'))}}</option>
                                </select>
                                @error('status')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <input type="file" name="image" class="form-control-sm">
                            </div>
                        </div>
                        <br>
                        <input type="submit" value="{{ucwords(trans('dashboard.add'))}}" class="button x-small">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src='{{asset("assets/js/bootstrap-datepicker.min.js")}}' type='text/javascript'></script>
    <script src="{{asset('assets/js/trix.js')}}"></script>
    @toastr_js
    @toastr_render
    <script>

    </script>
@endsection
