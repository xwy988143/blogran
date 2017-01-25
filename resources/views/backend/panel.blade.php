@extends('layouts.layout')
@section('link')
    {{--<script type="text/JavaScript" src="{{asset('plugins/ckeditor/ckeditor.js')}}"></script>--}}
@stop
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">创建栏目</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label  class="col-sm-2 control-label">父栏目</label>

                    <div class="col-sm-6">
                        <select class="form-control">
                            <option value=0>作为一级栏目</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">栏目标题</label>

                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="title" placeholder="名称">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">创建</button>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>
@stop