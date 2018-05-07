<?php
/**
 * Created by PhpStorm.
 * User: xgwshen
 * Date: 2018/5/7
 * Time: 15:38
 */
namespace App\Http\Controllers;

use App\Member;

class MemberController extends Controller
{
    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *  创建视图 info.blade.php info.php 都可以 一般是一个控制器对应一个文件
     *  view()加载模板的时候只要  把路径写对就可以定位的相应的文件
     */
    public function info($id){
//        return 'member-info-id-' .$id ;
//        return route('memberinfo');
//        return view('member/info', [
//            'name'=> 'xgwshen',
//            'age' => '25',
//        ]);

        //调用member模型 静态方法直接调用
//        return Member::getMember();

        //调用member模型 非静态方法 实例化对象调用(自测)
        $Member =  new Member();
        return $Member->getMember1();
    }
}