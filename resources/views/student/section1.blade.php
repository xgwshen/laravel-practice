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
@stop