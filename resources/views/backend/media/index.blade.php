@extends('backend.layouts.master')
@section('css')
    <link href="{{asset('assets/backend/css/bootstrap-datepicker.min.css')}}">
    @toastr_css
@section('title')
    {{trans('dashboard.media')}}
@stop
@endsection
@section('page-header')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-3">
                    <button type="button" class="button x-small" data-toggle="modal" data-target="#addMediaModal">
                        {{ucwords(trans('dashboard.add_event'))}}
                    </button>
                </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}" class="default-color">{{trans('dashboard.index')}}</a></li>
                    <li class="breadcrumb-item active">{{ucwords(trans('dashboard.all_events'))}}</li>
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
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered p-0">
                            <thead>
                            <tr>
                                <th>{{ucfirst(trans('media.name'))}}</th>
                                <th>{{ucfirst(trans('media.description'))}}</th>
                                <th>{{ucfirst(trans('media.date'))}}</th>
                                <th>{{trans('dashboard.status')}}</th>
                                <th>{{ucwords(trans('dashboard.show'))}}</th>
                                <th>{{ucwords(trans('dashboard.edit'))}}</th>
                                <th>{{ucwords(trans('dashboard.delete'))}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(! empty($media) && $media->count() > 0)
                                @foreach($media as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{$item->description}}</td>
                                        <td>{{$item->date}}</td>

                                        <td>
                                            @if($item->status == 1)
                                                <button type="button" class="btn btn-danger" data-id="{{$item->id}}">Not Active</button>
                                            @else
                                                <button type="button" class="btn btn-success" data-id="{{$item->id}}">Active</button>
                                            @endif
                                        </td>
                                        <td><a class="btn btn-warning" href="{{route('medias.edit',$item->id)}}">Edit</a> </td>
                                        <td>
                                            <form action="{{route('medias.destroy',$item->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <input type="submit" value="Delete" class="btn btn-danger">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>{{trans('media.name')}}</th>
                                <th>{{trans('media.description')}}</th>
                                <th>{{trans('dashboard.status')}}</th>
                                <th>{{ucwords(trans('dashboard.show'))}}</th>
                                <th>{{ucwords(trans('dashboard.edit'))}}</th>
                                <th>{{ucwords(trans('dashboard.delete'))}}</th>
                            </tr>
                            </tfoot>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addMediaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">{{ucwords(trans('dashboard.add_event'))}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('medias.store')}}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="name_ar" class="mr-sm-2">{{ucwords(trans('media.name_ar'))}} :</label>
                                <input id="name_ar" type="text" name="name[ar]" class="form-control" value="{{old('name.ar')}}">
                                @error('name.ar')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="name_en" class="mr-sm-2">{{ ucwords(trans('media.name_en')) }}   :</label>
                                <input type="text" class="form-control" name="name[en]" value="{{old('name[en]')}}">
                                @error('name.en')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="description_ar">{{ucwords(trans('media.description_ar'))}}</label>
                                <textarea class="form-control" name="description[ar]" id="description_ar" rows="3">{{old('description.ar')}}</textarea>
                                @error('description.ar')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="description_en">{{ucwords(trans('media.description_en'))}}</label>
                                <textarea class="form-control" name="description[en]" id="description_en" rows="3">{{old('description.en')}}</textarea>
                                @error('description.en')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label class="mr-sm-2">{{ucwords(trans('dashboard.image'))}}</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="location_en">{{ucwords(trans('media.location_en'))}} :</label>
                                <input type="text" name="location[en]" id="location_en" class="form-control">
                            </div>
                            <div class="col">
                                <label for="location_ar">{{ucwords(trans('media.location_ar'))}} :</label>
                                <input type="text" name="location[ar]" id="location_ar" class="form-control" value="{{old('location.ar')}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="date">{{ucwords(trans('media.date'))}} :</label>
                                <input type="text" data-provide="datepicker" class="form-control" name="date">
                            </div>
                        </div>
                        <br>

                        @if(! empty($categories) && $categories->count() > 0)
                        <div class="row">
                            <div class="col">
                                <label class="mr-sm-2">{{ucwords(trans('media.category'))}}</label>
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{ucwords($category->name)}}</option>
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
                                <select class="form-control" name="status">
                                    <option value="1" selected>{{ucwords(trans('dashboard.active'))}}</option>
                                    <option value="0">{{ucwords(trans('dashboard.not_active'))}}</option>
                                </select>
                                @error('status')
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
    <script src='{{asset("assets/js/bootstrap-datepicker.min.js")}}' type='text/javascript'></script>
    @toastr_js
    @toastr_render
    <script>
        function openModelWithErrors() {
            let isSessionHasError = "{{session()->has('hasError')}}";
            if (isSessionHasError == 1) {
                let addMediaModal = $('#addMediaModal');
                addMediaModal.modal('show');
            }
        }
        openModelWithErrors();
    </script>
@endsection
