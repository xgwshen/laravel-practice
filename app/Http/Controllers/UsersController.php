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
        /**
         * 表单验证
         */
        if($request->isMethod('POST')){
            /**
             * 1. 控制器验证 如果通过就继续执行 不通过抛出一个异常跳到当前页面 把结果存到session中 可以用count($error)在页面中判断
             * validate 方法在验证失败时会带回所有输入值和错误
             * 直接在视图中 用old('Student')['name'] 这种就可以进行数据保持
             */
            $this->validate($request,[
                'Student.name'=>'required|max:20',
                'Student.age' => 'required|integer',
                'Student.sex' => 'required'
            ],[
                'required'=> ':attribute 为必填项',
                'integer'=> ':attribute 为整数',
                'max'=> ':attribute 长度不符合要求'
            ],[
                'Student.name'=>'姓名',
                'Student.age'=>'年龄',
                'Student.sex'=>'性别',
            ]);
            /**
             * 2.validator类验证 第一个参数和控制器验证不同 而且需要手动验证
             */
//            $validator = \Validator::make($request->input(),[
//                'Student.name'=>'required|max:20',
//                'Student.age' => 'required|integer',
//                'Student.sex' => 'required'
//            ],[
//                'required'=> ':attribute 为必填项',
//                'integer'=> ':attribute 为整数',
//                'max'=> ':attribute 长度不符合要求'
//            ],[
//                'Student.name'=>'姓名',
//                'Student.age'=>'年龄',
//                'Student.sex'=>'性别',
//            ]);
//
//            if($validator->fails()){
//                //用withErrors方法传递错误信息
//                //数据保持 withInput() 方法把提交信息（$request->input()）保存 在模板中用 old()取到数组信息
//                return redirect()->back()->withErrors($validator)->withInput();
//            }

            $data= $request->input('Student');
//        var_dump($data);
            $users = new Users();
            $users->name = $data['name'];
            $users->age = $data['age'];
            $users->sex = $data['sex'];
            $res = $users->save();
            if($res){
                return redirect('users/index')->with('success','添加成功');
            }else{
                return redirect()->back()->with('error','添加失败');
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
