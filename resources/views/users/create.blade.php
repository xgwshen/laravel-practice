@extends('common.layout')

@section('content')
    @include('common.validate')
    <div class="panel panel-default">
        <div class="panel-heading">新增用户</div>
        <div class="panel-body">
            @include('users._form')
        </div>
    </div>
@stop