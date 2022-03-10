@extends('backend.layouts.master')
@section('css')
    <link href="{{asset('assets/css/trix.css')}}" rel="stylesheet" type="text/css">
    <style type="text/css">
        .trix-content {
            min-height: 500px !important;
            overflow-y: auto;
        }
    </style>
    @toastr_css
@section('title')
    {{trans('dashboard.courses')}}
@stop
@endsection
@section('page-header')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}" class="default-color">{{ucwords(trans('dashboard.index'))}}</a></li>
                    <li class="breadcrumb-item active">{{trans('dashboard.add_course')}}</li>
                </ol>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <br><br>
                <div class="card-body">
                    <form action="{{route('courses.store')}}" method="POST" id="add-course">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="name_ar">{{ucwords(trans('courses.name_ar'))}}:</label>
                                <input type="text" name="name[ar]" class="form-control" value="{{{old("name.ar")}}}">
                            </div>
                            @error('name.ar')
                                <span class="alert-danger">{{$message}}</span>
                            @enderror
                            <div class="col">
                                <label for="name_en">{{ucwords(trans('courses.name_en'))}}:</label>
                                <input id="name_en" type="text" name="name[en]" class="form-control" value="{{old('name.en')}}">
                            </div>
                            @error('name.en')
                                <span class="alert-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="title_ar">{{ucwords(trans('courses.title_ar'))}}:</label>
                                <input id="title_ar" type="text" name="title[ar]" class="form-control" value="{{old('title.ar')}}">
                            </div>
                            @error('title.ar')
                                <span class="alert-danger">{{$message}}</span>
                            @enderror
                            <div class="col">
                                <label for="title_en">{{ucwords(trans('courses.title_en'))}}:</label>
                                <input id="title_en" type="text" name="title[en]" class="form-control" value="{{old('title.en')}}">
                            </div>
                            @error('title.en')
                                <span class="alert-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="min_description_ar">{{ucwords(trans('courses.min_description_ar'))}}:</label>
                                <input id="min_description[ar]" type="hidden" name="min_description[ar]">
                                <trix-editor input="min_description[ar]"></trix-editor>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="min_description_en">{{ucwords(trans('courses.min_description_en'))}}:</label>
                                <input id="min_description[en]" type="hidden" name="min_description[en]">
                                <trix-editor input="min_description[en]"></trix-editor>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="description_ar">{{ucwords(trans('courses.description_ar'))}}:</label>
                                <input id="description[ar]" type="hidden" name="description[ar]">
                                <trix-editor input="description[ar]"></trix-editor>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="description_en">{{ucwords(trans('courses.description_en'))}}:</label>
                                <input id="description[en]" type="hidden" name="description[en]">
                                <trix-editor input="description[en]"></trix-editor>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="details_ar">{{ucwords(trans('courses.details_ar'))}}:</label>
                                <input id="details[ar]" type="hidden" name="details[ar]">
                                <trix-editor input="details[ar]"></trix-editor>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="details_en">{{ucwords(trans('courses.details_en'))}}:</label>
                                <input id="details[en]" type="hidden" name="details[en]">
                                <trix-editor input="details[en]"></trix-editor>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col">
                                <h4 class="mb-0">
                                    <button type="button" class="button x-small" disabled>
                                        {{ucwords(trans('dashboard.add_image'))}}
                                    </button>
                                </h4>
                            </div>
                            <div class="col">
                                <h4 class="mb-0">
                                    <button type="button" class="button x-small" disabled="disabled">
                                        {{ucwords(trans('dashboard.add_image'))}}
                                    </button>
                                </h4>
                            </div>
                            <div class="col">
                                <h4 class="mb-0">
                                    <button type="button" class="button x-small" data-toggle="modal" data-target="#addImageModal3">
                                        {{ucwords(trans('dashboard.add_image'))}}
                                    </button>
                                </h4>
                            </div>
                        </div>
                        <br>
                        <div class="row" id="images">
                            <div class="col-sm-4" id="div-image1">
                                <input type="file" name="image1">
                                <br>
{{--                                <input type="text" name="alt" class="form-control" placeholder="title">--}}
                            </div>
                            <div class="col-sm-4" id="div-image2">
                                <input type="file" name="image2">
                            </div>
                            <div class="col-sm-4" id="div-image3">
                                <input type="file" name="image3">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="status"> Status :</label>
                                <select id="status" name="status" class="form-control">
                                    <option value="1" selected>Active</option>
                                    <option value="0">Not Active</option>
                                    </option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <input type="submit" value="{{ucwords(trans('dashboard.add'))}}" class="button x-small">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
    <div class="modal fade" id="addImageModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">{{ucwords(trans('dashboard.add_image'))}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <label for="image1" class="mr-sm-2">{{ucwords(trans('dashboard.image1'))}} :</label>
                                <input id="image1" type="file" name="image1" class="form-control">
                                @error('image1')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="alt1" class="mr-sm-2">Alt :</label>
                                <input id="alt1" type="text" name="alt1" class="form-control">
                                @error('alt1')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="title1" class="mr-sm-2">Title:</label>
                                <input id="title1" type="text" name="title1" class="form-control">
                                @error('title1')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="width1" class="mr-sm-2">Width :</label>
                                <input id="width1" type="number" name="width1" class="form-control">
                                @error('width1')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="height1" class="mr-sm-2">Height:</label>
                                <input id="height1" type="number" name="height1" class="form-control">
                                @error('height1')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ucwords(trans('dashboard.cancel'))}}</button>
                        <button type="button" class="btn btn-success add-image" data-id="1">{{ucwords(trans('dashboard.add'))}}</button>
                    </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addImageModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">{{ucwords(trans('dashboard.add_image'))}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <label for="image2" class="mr-sm-2">{{ucwords(trans('dashboard.image2'))}} :</label>
                            <input id="image2" type="file" name="image2" class="form-control">
                            @error('image2')
                            <span class="alert-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="alt2" class="mr-sm-2">Alt :</label>
                            <input id="alt2" type="text" name="alt2" class="form-control">
                            @error('alt2')
                            <span class="alert-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="title2" class="mr-sm-2">Title:</label>
                            <input id="title2" type="text" name="title2" class="form-control">
                            @error('title2')
                            <span class="alert-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="width2" class="mr-sm-2">Width :</label>
                            <input id="width2" type="number" name="width2" class="form-control">
                            @error('width2')
                            <span class="alert-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="height2" class="mr-sm-2">Height:</label>
                            <input id="height2" type="number" name="height2" class="form-control">
                            @error('height2')
                            <span class="alert-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ucwords(trans('dashboard.cancel'))}}</button>
                    <button type="button" class="btn btn-success add-image" data-id="2">{{ucwords(trans('dashboard.add'))}}</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addImageModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">{{ucwords(trans('dashboard.add_image'))}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <label for="image3" class="mr-sm-2">{{ucwords(trans('dashboard.image3'))}} :</label>
                            <input id="image3" type="file" name="image3" class="form-control">
                            @error('image3')
                            <span class="alert-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="alt3" class="mr-sm-2">Alt :</label>
                            <input id="alt3" type="text" name="alt3" class="form-control">
                            @error('alt3')
                            <span class="alert-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="title3" class="mr-sm-2">Title:</label>
                            <input id="title3" type="text" name="title3" class="form-control">
                            @error('title3')
                            <span class="alert-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="width3" class="mr-sm-2">Width :</label>
                            <input id="width3" type="number" name="width3" class="form-control">
                            @error('width3')
                            <span class="alert-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="height3" class="mr-sm-2">Height:</label>
                            <input id="height3" type="number" name="height3" class="form-control">
                            @error('height3')
                            <span class="alert-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ucwords(trans('dashboard.cancel'))}}</button>
                    <button type="button" class="btn btn-success add-image"  data-id="3">{{ucwords(trans('dashboard.add'))}}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

    <script src="{{asset('assets/js/trix.js')}}"></script>
    <script>

        $(document).ready(function(){
            $('.solution-trix-field-wrapper').find($('trix-editor')).css("min-height", "350px");
            $('.add-image').click(function(){
                var id = $(this).attr('data-id');
                appendImage(id);
            });
        });
        function appendImage(imageNumber){
            console.log(imageNumber);
            let file = $('#image'+imageNumber);
            let alt = $('#alt'+imageNumber);
            let title = $('#title'+imageNumber);
            let width = $('#width'+imageNumber);
            let height = $('#height'+imageNumber);
            let files = file.get(0).files;
            if (files.length != 0) {
                let form = $('form#add-course');
                let images = $('#images > div#div-image'+imageNumber);

                images.append(file.clone());
                images.append(alt.clone());
                images.append(title.clone());
                images.append(width.clone());
                images.append(height.clone());
                $('#addImageModal'+imageNumber).modal('toggle');
            }
        }
    </script>
@endsection
