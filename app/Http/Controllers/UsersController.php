<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //列表及分页 paginate() 页面中用 render()方法分页
    public function index(){
        $students = Users::paginate(10);
        return view('users.index',[
            'students' => $students,
        ]);
    }

    //新增
    public function create(Request $request){
        if($request->isMethod('POST')){
            $data= $request->input('Student');
//        var_dump($data);
            $users = new Users();
            $users->name = $data['name'];
            $users->age = $data['age'];
            $users->sex = $data['sex'];
            $res = $users->save();
            if($res){
                return redirect('users/index');
            }else{
                return redirect()->back();
            }
        }

        return view('users.create');
    }

    public function add(Request $request){
        $data= $request->input('Student');
//        var_dump($data);
        $users = new Users();
        $users->name = $data['name'];
        $users->age = $data['age'];
        $users->sex = $data['sex'];
        $res = $users->save();
        if($res){
            return redirect('users/index');
        }else{
            return redirect()->back();
        }
    }
}
