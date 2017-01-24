@extends('layouts.layout')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">创建文章分类</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">文章类名</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="名称">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">文章标题</label>

                    <div class="col-sm-10">
                        <textarea id="editor1" name="editor1" rows="10" cols="130">
                        </textarea>
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