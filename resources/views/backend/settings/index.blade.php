@extends('backend.layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('dashboard.settings')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">
                    <button type="button" class="button x-small" data-toggle="modal" data-target="#addSettingModal">
                        {{ucwords(trans('dashboard.add_setting'))}}
                    </button>
                </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}" class="default-color">{{trans('dashboard.index')}}</a></li>
                    <li class="breadcrumb-item active">{{trans('dashboard.all_setting')}}</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">

                <br><br>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered p-0">
                            <thead>
                            <tr>
                                <th>{{trans('settings.key')}}</th>
                                <th>{{trans('settings.value')}}</th>
                                <th>{{trans('dashboard.status')}}</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($settings) && $settings->count() > 0)
                                @foreach($settings as $setting)
                                    <tr>
                                        <td>{{ $setting->key }}</td>
                                        <td>{{$setting->value}}</td>
                                        <td>
                                            @if($setting->status == 0)
                                                <button class="btn btn-success">Active</button>
                                            @else
                                                <button class="btn btn-danger">Not Active</button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                            <tfoot>
                            <tr>

                                <th>{{trans('settings.key')}}</th>
                                <th>{{trans('settings.value')}}</th>
                                <th>{{trans('dashboard.status')}}</th>
                            </tr>
                            </tfoot>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
    <div class="modal fade" id="addSettingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">{{ucwords(trans('dashboard.add_service'))}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('settings.store')}}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="key" class="mr-sm-2">{{ucwords(trans('settings.key'))}} :</label>
                                <input id="key" type="text" name="key" class="form-control" value="{{old('key')}}">
                                @error('key')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="value_ar">{{ucwords(trans('settings.value_ar'))}}</label>
                                <textarea class="form-control" name="value[ar]" id="value_ar" rows="3">{{old('value_ar')}}</textarea>
                                @error('value_ar')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="value_en">{{ucwords(trans('settings.value_en'))}}</label>
                                <textarea class="form-control" name="value[en]" id="value_en" rows="3">{{old('value_en')}}</textarea>
                                @error('value_en')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
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
