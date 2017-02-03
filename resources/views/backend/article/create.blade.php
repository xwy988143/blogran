@extends('layouts.layout')
@section('link')
    <script type="text/JavaScript" src="{{asset('plugins/ckeditor/ckeditor.js')}}"></script>
@stop
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">创建文章</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="{{route('article.store')}}">
            {{csrf_field()}}
            {{--<input type="hidden" name="_token" value="{{csrf_token()}}" class="form-control">--}}
            <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">文章标题</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="article[title]" placeholder="名称">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">文章关键字</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="article[keyword]" placeholder="不同关键字以逗号分割">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">文章分类</label>
                    <div class="col-sm-10">
                        <select name="article[class]" class="form-control">
                            <option value="博文">博文</option>
                            <option value="随笔">随笔</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">文章内容</label>

                    <div class="col-sm-10">
                        <textarea id="editor1" name="article[content]" rows="10" cols="130">
                        </textarea>
                        <script type="text/javascript">CKEDITOR.replace('editor1');</script>
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
                @include('errors.validate')
            </div>
            <!-- /.box-footer -->
        </form>
    </div>
@stop