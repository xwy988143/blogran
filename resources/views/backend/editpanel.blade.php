@extends('layouts.layout')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">修改栏目</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="{{route('system.modify')}}">
            {{csrf_field()}}
            <input type="hidden" name="_token" value="{{csrf_token()}}" class="form-control">
            <div class="box-body">
                <div class="form-group">

                    <label  class="col-sm-2 control-label">
                        @if($data[0]->pid==0)
                        父类标题
                            @else
                                子类标题
                        @endif
                    </label>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">栏目标题</label>

                    <div class="col-sm-6">
                        <input type="text" value="{{$data[0]->name}}" class="form-control" name="panel[name]" placeholder="名称">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">路由地址</label>

                    <div class="col-sm-6">
                        <input type="text" value="{{$data[0]->link}}" class="form-control" name="panel[link]" placeholder="路由地址">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        @include('errors.validate')
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <input type="hidden" name="panel[id]" value="{{$data[0]->id}}" />
                <button type="submit" class="btn btn-info pull-right">修改</button>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>
@stop