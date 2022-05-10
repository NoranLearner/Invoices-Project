@extends('layouts.master')

@section('title')
اضافة الصلاحيات
@stop

@section('css')
<!--Internal  Font Awesome -->
<link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
<!--Internal  treeview -->
<link href="{{URL::asset('assets/plugins/treeview/treeview-rtl.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">الصلاحيات</h4>
            <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ اضافة الصلاحيات </span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection

@section('content')

<!-- row -->
<div class="row">
    <div class="col-lg-12 col-md-12">

        <!--Alert-->
        @if (count($errors) > 0)
            <div class="alert alert-danger">

                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>

                <strong>خطا</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif
        <!--End Alert-->

        <div class="card">

            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title col-xl-6">اضافة الصلاحيات</h4>
                </div>
            </div>

            <div class="card-body">

                {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}

                <div class="main-content-label mg-b-5">
                    <div class="col-xs-7 col-sm-7 col-md-7">
                        <div class="form-group">
                            <p>اسم الصلاحية :</p>
                            {!! Form::text('name', null, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-4">

                        <ul id="treeview1">
                            <li>
                                <a href="#">الصلاحيات</a>
                                <ul>
                                    </li>
                                    @foreach($permission as $value)
                                        <label style="font-size: 16px;">
                                            {{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                            {{ $value->name }}
                                        </label>
                                    @endforeach
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-main-primary">تاكيد</button>
                </div>

                {!! Form::close() !!}

            </div>
        </div>

    </div>
</div>

</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Treeview js -->
<script src="{{URL::asset('assets/plugins/treeview/treeview.js')}}"></script>
@endsection
