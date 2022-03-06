@extends('backend.layouts.master')
@section('css')
    @toastr_css
    <style type="text/css">
        input.form-control,textarea {
            background-color: #dee1e5 !important;
        }
    </style>
@section('title')
    {{ucwords(trans('dashboard.categories'))}}
@stop
@endsection
@section('page-header')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-3">
                    <button type="button" class="button x-small" data-toggle="modal" data-target="#addCategoryModal">
                        {{ucwords(trans('dashboard.add_category'))}}
                    </button>
                </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}" class="default-color">{{trans('dashboard.index')}}</a></li>
                    <li class="breadcrumb-item active">{{trans('dashboard.all_categories')}}</li>
                </ol>
            </div>
        </div>
    </div>
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
                                <th>{{trans('pages.name')}}</th>
                                <th>{{ucwords(trans('dashboard.status'))}}</th>
                                <th>{{ucwords(trans('dashboard.edit'))}}</th>
                                <th>{{ucwords(trans('dashboard.delete'))}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($categories) && $categories->count() > 0)
                                @php $i = 0; @endphp
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            @if(! empty($category->status) && $category->status == 1)
                                                <button type="button" class="btn btn-danger" data-id="{{$category->id}}">Not Active</button>
                                            @else
                                                <button type="button" class="btn btn-success" data-id="{{$category->id}}">Active</button>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-warning" href="{{route('categories.edit',$category->id)}}">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{route('categories.destroy',$category->id)}}" method="POST">
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
                                <th>{{trans('pages.name')}}</th>
                                <th>{{ucwords(trans('dashboard.status'))}}</th>
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
    <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">{{ucwords(trans('dashboard.add_category'))}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('categories.store')}}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="name_ar" class="mr-sm-2">{{ucwords(trans('categories.name_ar'))}} :</label>
                                <input id="name_ar" type="text" name="name[ar]" class="form-control" value="{{old('name.ar')}}">
                                @error('name.ar')
                                <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="name_en" class="mr-sm-2">{{ ucwords(trans('categories.name_en')) }}   :</label>
                                <input type="text" class="form-control" name="name[en]" value="{{old('name.en')}}">
                                @error('name.en')
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
                let addPageModal = $('#addCategoryModal');
                addPageModal.modal('show');
            }
        }
        openModelWithErrors();
    </script>
@endsection
