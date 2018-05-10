<?php

namespace App\Http\Controllers;

use App\Student;
class UsersController extends Controller
{
    //列表及分页 paginate() 页面中用 render()方法分页
    public function index(){
        $students = Student::paginate(2);
        return view('users.index',[
            'students' => $students,
        ]);
    }

    //新增
    public function create(){
        return view('users.create');
    }
}
