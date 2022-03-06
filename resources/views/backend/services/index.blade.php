@extends('backend.layouts.master')
@section('css')
    @toastr_css
    <style type="text/css">
        input.form-control,textarea {
            background-color: #dee1e5 !important;
        }
    </style>
@section('title')
    {{trans('services.name')}}
@stop
@endsection
@section('page-header')

    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-3">
                    <button type="button" class="button x-small" data-toggle="modal" data-target="#addServiceModal">
                        {{ucwords(trans('dashboard.add_service'))}}
                    </button>
                </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}" class="default-color">{{trans('dashboard.index')}}</a></li>
                    <li class="breadcrumb-item active">{{trans('dashboard.all_services')}}</li>
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
                        <table id="datatable" class="table table-striped table-bordered p-0">
                            <thead>
                            <tr>
                                <th>{{trans('services.title')}}</th>
                                <th>{{trans('services.content')}}</th>
                                <th>{{trans('dashboard.status')}}</th>
                                <th>{{trans('dashboard.edit')}}</th>
                                <th>{{trans('dashboard.delete')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($services) && $services->count() > 0)
                                @foreach($services as $service)
                                    <tr>
                                        <td>{{ $service->title }}</td>
                                        <td>{{$service->content}}</td>
                                        <td>
                                            @if($service->status == 1)
                                                <button type="button" class="btn btn-danger" data-id="{{$service->id}}">Not Active</button>
                                            @else
                                                <button type="button" class="btn btn-success" data-id="{{$service->id}}">Active</button>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-warning" href="{{route('services.edit',$service->id)}}">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{route('services.destroy',$service->id)}}" method="POST">
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
                                <th>{{trans('services.title')}}</th>
                                <th>{{trans('services.content')}}</th>
                                <th>{{trans('dashboard.status')}}</th>
                                <th>{{trans('dashboard.edit')}}</th>
                                <th>{{trans('dashboard.delete')}}</th>
                            </tr>
                            </tfoot>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
    <div class="modal fade" id="addServiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width:100%">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">{{ucwords(trans('dashboard.add_service'))}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('services.store')}}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="title_ar" class="mr-sm-2">{{ucwords(trans('services.title_ar'))}} :</label>
                                <input id="title_ar" type="text" name="title_ar" class="form-control" value="{{old('title_ar')}}">
                                @error('title_ar')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="title_en" class="mr-sm-2">{{ ucwords(trans('services.title_en')) }}   :</label>
                                <input type="text" class="form-control" name="title_en" value="{{old('title_en')}}">
                                @error('title_en')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="content_ar">{{ucwords(trans('services.content_ar'))}}</label>
                                <textarea class="form-control" name="content_ar" id="content_ar" rows="3">{{old('content_ar')}}</textarea>
                                @error('content_ar')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="content_en">{{ucwords(trans('services.content_en'))}}</label>
                                <textarea class="form-control" name="content_en" id="content_en" rows="3">{{old('content_en')}}</textarea>
                                @error('content_en')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <table class="table table-bordered" id="dynamic_field">
                            <tr>
                                <td>
                                    <input type="text" name="list[1][ar]" id="name" class="form-control border" placeholder="AR">
                                    <br>
                                    <input type="text" name="list[1][en]" id="name" class="form-control border" placeholder="EN">
                                </td>
                                <td>
                                    <button type="button" name="add" id="add" class="btn btn-success">{{ucwords(trans('dashboard.add'))}}</button>
                                </td>
                            </tr>
                        </table>
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
                        <button type="submit" class="btn btn-success" name="submit">{{ucwords(trans('dashboard.add'))}}</button>
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
                let addPageModal = $('#addServiceModal');
                addPageModal.modal('show');
            }
        }
        openModelWithErrors();

        let i = 1;
        $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="list['+i+'][ar]" id="name" class="form-control border" placeholder="AR"><br><input type="text" name="list['+i+'][en]" id="name" class="form-control border" placeholder="AR"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-remove">{{ucwords(trans('dashboard.cancel'))}}</button></td></tr>');
        });

        $(document).on('click','.btn-remove',function(){
            var btn_id = $(this).attr('id');
            $("#row"+btn_id).remove();
            console.log(btn_id);
        });
    </script>
@endsection
