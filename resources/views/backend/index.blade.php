@extends('layouts.layout')
@section('content')
    <div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        请注意!删除操作一旦点击,不可撤回!!
    </div>
<table class="table table-hover">
<tr>
  <td class="success">路由名称</td>
  <td class="warning">路由路径</td>
  <td class="active">操作</td>
</tr>
    @foreach($panel1 as $item)
        <tr>
        <td class="success">{{$item->name}}</td>
        <td class="warning">{{$item->link}}</td>
        <td class="acti"><a href="{{route('system.edit',$item->id)}}" >修改</a>
                        <a href="{{route('system.delete',$item->id)}}" >删除</a></td>
        </tr>
    @endforeach
</table>
@stop