@extends('backend.layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{ucwords(trans('dashboard.media'))}}
@stop
@endsection
@section('page-header')

    <div class="page-title">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}" class="default-color">{{trans('dashboard.index')}}</a></li>
                    <li class="breadcrumb-item active">{{trans('dashboard.all_events')}}</li>
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
                        <form action="{{route('medias.update',$media['id'])}}" method="POST" style="width:90%;">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name_ar" class="mr-sm-2">{{ucwords(trans('media.name_ar'))}} :</label>
                                    <input id="name_ar" type="text" name="name[ar]" class="form-control" value="{{$media['name']['ar']}}">
                                    @error('name.ar')
                                    <span class="alert-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="name_en" class="mr-sm-2">{{ ucwords(trans('media.name_en')) }}   :</label>
                                    <input type="text" class="form-control" name="name[en]" value="{{$media['name']['en']}}">
                                    @error('name.en')
                                    <span class="alert-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="description_ar">{{ucwords(trans('media.description_ar'))}}</label>
                                    <textarea class="form-control" name="description[ar]" id="description_ar" rows="3">{{$media['description']['ar']}}</textarea>
                                    @error('description.ar')
                                    <span class="alert-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="description_en">{{ucwords(trans('media.description_en'))}}</label>
                                    <textarea class="form-control" name="description[en]" id="description_en" rows="3">{{$media['description']['en']}}</textarea>
                                    @error('description.en')
                                    <span class="alert-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label for="location_en">{{ucwords(trans('media.location_en'))}} :</label>
                                    <input type="text" name="location[en]" id="location_en" class="form-control" value="{{$media['location']['en']}}">
                                </div>
                                <div class="col">
                                    <label for="location_ar">{{ucwords(trans('media.location_ar'))}} :</label>
                                    <input type="text" name="location[ar]" id="location_ar" class="form-control" value="{{$media['location']['ar']}}">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label for="date">{{ucwords(trans('media.date'))}} :</label>
                                    <input type="text" data-provide="datepicker" class="form-control" name="date" value="{{$mediaDate}}">
                                </div>
                            </div>
                            <br>
                            @if(! empty($categories) && $categories->count() > 0)
                                <div class="row">
                                    <div class="col mb-3">
                                        <label class="mr-sm-2">{{ucwords(trans('media.category'))}}</label>
                                        <select class="form-control form-control-lg" name="category_id">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" @if($category->id == $media['category_id']) selected @endif>{{ucwords($category->name)}}</option>
                                            @endforeach
                                        </select>
                                        @error('status')
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
                                        <option value="1" @if($media['status'] == 1 ) selected @endif >{{ucwords(trans('dashboard.active'))}}</option>
                                        <option value="0" @if($media['status'] == 0 ) selected @endif >{{ucwords(trans('dashboard.not_active'))}}</option>
                                    </select>
                                    @error('status')
                                    <span class="alert-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            {{--
                            <div class="row">
                                <div class="col">
                                    <label class="mr-sm-2">{{ucwords(trans('dashboard.twitter'))}}</label>
                                    <input type="url" class="form-control" name="twitter" value="{{$founder['twitter']}}">
                                    @error('twitter')
                                    <span class="alert-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            --}}
                            {{--
                            <div class="row">
                                <div class="col">
                                    <label class="mr-sm-2">{{ucwords(trans('dashboard.instagram'))}}</label>
                                    <input type="url" class="form-control" name="instagram" value="{{$founder['instagram']}}">
                                    @error('instagram')
                                    <span class="alert-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            --}}
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
