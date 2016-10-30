@extends('admin.layout.admin_index_layout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ trans('admin_common.Clothes Sizes') }}
            <small>{{ trans('admin_common.Add/Edit') }}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> {{ trans('admin_common.Home') }}</a></li>
            <li><a href="{{ url('admin/adtype') }}">{{ trans('admin_common.Clothes Sizes') }}</a></li>
            <li class="active">{{ trans('admin_common.Add/Edit') }}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">{{ trans('admin_common.Add/Edit Clothes Sizes') }}</h3>
                    </div>
                    <!-- /.box-header -->
                    <form role="form" method="post" name="edit_form" id="edit_form">
                        <div class="box-body">

                            {!! csrf_field() !!}

                            <div class="form-group required {{ $errors->has('clothes_size_name') ? ' has-error' : '' }}">
                                <label for="clothes_size_name" class="control-label">{{ trans('admin_common.Clothes Size') }}</label>
                                <input type="text" class="form-control" name="clothes_size_name" id="clothes_size_name" placeholder="{{ trans('admin_common.Clothes Size') }}" value="{{ Util::getOldOrModelValue('clothes_size_name', $modelData) }}">
                                @if ($errors->has('clothes_size_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('clothes_size_name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group required {{ $errors->has('clothes_size_ord') ? ' has-error' : '' }}">
                                <label for="clothes_size_ord" class="control-label">{{ trans('admin_common.Clothes Size Ord') }}</label>
                                <input type="text" class="form-control" name="clothes_size_ord" id="clothes_size_ord" placeholder="{{ trans('admin_common.Clothes Size Ord') }}" value="{{ Util::getOldOrModelValue('clothes_size_ord', $modelData) }}">
                                @if ($errors->has('clothes_size_ord'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('clothes_size_ord') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">{{ trans('admin_common.Add/Save') }}</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection