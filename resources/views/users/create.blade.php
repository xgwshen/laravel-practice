@extends('common.layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">新增学生</div>
        <div class="panel-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="name" class="col-sm-2  control-label">姓名</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="name" placeholder="请输入姓名">
                        <div class="col-sm-5">
                            <p class="form-control-static text-danger">姓名不能为空</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="age" class="col-sm-2  control-label">年龄</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="age" placeholder="请输入年龄">
                        <div class="col-sm-5">
                            <p class="form-control-static text-danger">年龄只能为整数</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="age" class="col-sm-2  control-label">年龄</label>
                    <div class="col-sm-5">
                        <label class="radio-inline">
                            <input type="radio" name="sex" value="10">未知
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="sex" value="20">男
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="sex" value="30">女
                        </label>
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">请选择性别</p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">提交</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop