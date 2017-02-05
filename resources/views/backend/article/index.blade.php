@extends('layouts.layout')
@section('content')
    <div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        请注意!删除操作一旦点击,不可撤回!!
    </div>
    <table class="table table-hover table-bordered" >

        <tr>
            <td class="info">文章标题</td>
            <td class="info">发布时间</td>
            <td class="info">操作</td>
        </tr>
        @foreach($data as $item)
            <tr>
                <td class="">{{$item->title}}</td>
                <td class="">{{date('Y-m-d',$item->create_at)}}</td>
                <td class=""><a href="{{route('article.edit',$item->id)}}" >修改</a>
                    <a href="{{route('article.delete',$item->id)}}" >删除</a></td>
            </tr>
        @endforeach
    </table>
    {{$data->render()}}
@stop