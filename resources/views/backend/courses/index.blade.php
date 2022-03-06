@extends('backend.layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('dashboard.courses')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-3">
                    <a  href="{{route('courses.create')}}" class="button x-small">
                        {{ucwords(trans('dashboard.add_course'))}}
                    </a>
                </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}" class="default-color">{{trans('dashboard.index')}}</a></li>
                    <li class="breadcrumb-item active">{{ucwords(trans('dashboard.all_courses'))}}</li>
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
                                <th>image</th>
                                <th>{{trans('courses.name')}}</th>
                                <th>{{trans('courses.description')}}</th>
                                <th>{{trans('dashboard.status')}}</th>
                                <th>{{ucwords(trans('dashboard.show'))}}</th>
                                <th>{{ucwords(trans('dashboard.edit'))}}</th>
                                <th>{{ucwords(trans('dashboard.delete'))}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(! empty($courses) && $courses->count() > 0)
                                @foreach($courses as $course)
                                    <tr>
                                        <td>{{ $course->name }}</td>
                                        <td>{{$course->description}}</td>
                                        <td>
                                            @if($course->status == 1)
                                                <button type="button" class="btn btn-danger" data-id="{{$course->id}}">Not Active</button>
                                            @else
                                                <button type="button" class="btn btn-success" data-id="{{$course->id}}">Active</button>
                                            @endif
                                        </td>
                                        <td><a class="btn btn-warning" href="{{route('courses.edit',$course->id)}}">Edit</a> </td>
                                        <td>
                                            <form action="{{route('courses.destroy',$course->id)}}" method="POST">
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
                                <th>image</th>
                                <th>{{trans('courses.name')}}</th>
                                <th>{{trans('courses.description')}}</th>
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
    <!-- row closed -->
    <div class="modal fade" id="addPageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">{{ucwords(trans('dashboard.add_page'))}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('pages.store')}}" method="POST">
                    <div class="modal-body">

                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="name_ar" class="mr-sm-2">{{ucwords(trans('pages.name_ar'))}} :</label>
                                <input id="name_ar" type="text" name="name_ar" class="form-control" value="{{old('name_ar')}}">
                                @error('name_ar')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="name_en" class="mr-sm-2">{{ ucwords(trans('pages.name_en')) }}   :</label>
                                <input type="text" class="form-control" name="name_en" value="{{old('name_en')}}">
                                @error('name_en')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="description_ar">{{ucwords(trans('pages.description_ar'))}}</label>
                                <textarea class="form-control" name="description_ar" id="description_ar" rows="3">{{old('description_ar')}}</textarea>
                                @error('description_ar')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="description_en">{{ucwords(trans('pages.description_en'))}}</label>
                                <textarea class="form-control" name="description_en" id="description_en" rows="3">{{old('description_en')}}</textarea>
                                @error('description_en')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="mr-sm-2">{{ucwords(trans('dashboard.order'))}}</label>
                                <input type="number" class="form-control" name="order" value="{{old('order')}}">
                                @error('order')
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
