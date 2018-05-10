<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('static/bootstrap/css/bootstrap.min.css') }}">
    @section('style')
    @show
</head>
<body>
{{--头部--}}
@section('header')
    <div class="jumbotron">
        <div class="container">
            <h2>学习laravel</h2>
            <p>laravel表单</p>
        </div>
    </div>
@show
{{--中间内容区--}}
<div class="container">
    <div class="row">
        {{--左侧--}}
        <div class="col-md-3">
            @section('leftmenu')
            <div class="list-group">
                <a href="{{ url('users/index') }}" class="list-group-item {{ Request::getPathInfo() == '/users/index' ? 'active':'' }}">用户列表</a>
                <a href="{{ url('users/create') }}" class="list-group-item {{ Request::getPathInfo() == '/users/create' ? 'active':'' }}">新增用户</a>
            </div>
            @show
        </div>
        {{--右侧--}}
        <div class="col-md-9">
            @yield('content')
        </div>
    </div>
</div>
{{--尾部--}}
@section('footer')
<div class="jumbotron" style="margin: 0;">
    <div class="container">
        <span> @2018 xgwshen@gmail.com</span>
    </div>
</div>
@show
<script src="{{ asset('static/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('static/bootstrap/js/bootstrap.min.js') }}"></script>
@section('script')
@show
</body>
</html>