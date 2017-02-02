@extends('layouts.layout')
@section('content')
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
        <td class="active"><a href="{{route('system.edit',$item->id)}}" >修改</a></td>
        </tr>
    @endforeach
</table>
@stop