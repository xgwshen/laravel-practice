<?php
/**
 * Created by PhpStorm.
 * User: xgwshen
 * Date: 2018/5/7
 * Time: 15:38
 */
namespace App\Http\Controllers;

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
        return view('member/info');
    }
}