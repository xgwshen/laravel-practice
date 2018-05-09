{{--继承模板--}}
@extends('layout')

{{--修改header部分--}}
@section('header')
    header
@stop

{{--保留原有的，修改--}}
@section('sidebar')
    @parent
    sidebar
@stop

{{--yield 还是用section 来修改--}}
@section('title')
    {{--但是parent不起效 既是用yield修饰的模板 只能重写 ， 不能保留原有的内容 --}}
    @parent
    title修改
@stop

{{--content部分--}}
@section('content')
    this is main space
    <!--1.模板中输出PHP变量-->
    {{--<p>{{$name}}</p>--}}
    {{--2.模板中条用PHP代码--}}
    {{--<p>{{time()}}--{{date('Y-m-d H:i:s',time())}}</p>--}}
    {{--<p>{{ in_array($name,$arr) ? 'true' : 'false' }}</p>--}}
    {{--<p>{{ $name1 or 'default' }}</p>--}}
    {{--3.原样输出@--}}
    {{--<p>@{{ $name }}</p>--}}
    {{--4. 模板中注释--}}
    {{--5. include引入子视图--}}
    {{--@include('student.common1',['message'=>'include 传值'])--}}

    <br>
    {{--流程控制--}}
    {{--1. if--}}
    @if($name == 'xgwshen')
        xgwshen
    @else
        no xgwshen
    @endif

    <br>
    @unless($name != 'xgwshen')
        xgwshen
    @endunless
    <br>
    @for( $i=0 ; $i<3 ; $i++)
        {{$i}}
    @endfor
    <br>
    @foreach( $students as $student)
        <p>{{ $student->name }}</p>
    @endforeach
    <br>
    @forelse( $students as $student)
        <p>{{$student->age}}</p>
    @empty
        <p>null</p>
    @endforelse
@stop