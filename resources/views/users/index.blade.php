@extends('common.layout')

@section('content')
    @include('common.message')
    {{--自定义内容区域--}}
    <div class="panel panel-default">
        <div class="panel-heading">学生列表</div>
        <table class="table table-striped table-hover table-responsive">
            <thead>
            <tr>
                <th>id</th>
                <th>姓名</th>
                <th>年龄</th>
                <th>性别</th>
                <th>添加时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->age}}</td>
                <td>
                   {{$student->sex($student->sex)}}
                </td>
                <td>{{date('Y-m-d H:i:s',$student->updated_at)}}</td>
                <td>
                    <a href="">详情</a>
                    <a href="{{url('users/update',['id'=> $student->id ]) }}">修改</a>
                    <a href="{{url('users/delete',['id'=> $student->id]) }}" onclick="if(confirm('你确定删除吗')==false) return false">删除</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {{--分页--}}
    <div class="pull-right">
        {{$students->render()}}
    </div>
@stop