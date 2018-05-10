<?php
/**
 * Created by PhpStorm.
 * User: xgwshen
 * Date: 2018/5/10
 * Time: 11:42
 */
//创建activity中间件
namespace App\Http\Middleware;

use Closure;//只能用这个

class Activity
{
    //前置
//    public function handle($request,Closure $next){
//        if(time()<strtotime('2018-5-11')){
//            return redirect('activity0');
//        }
//
//        return $next($request);//判断在请求之前就是前置
//    }

    //后置 没整明白怎么用
//    public function handle($request,Closure $next){
//        echo $next($request);//判断在请求之前就是前置
//    }
}