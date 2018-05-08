<?php
/**
 * Created by PhpStorm.
 * User: xgwshen
 * Date: 2018/5/8
 * Time: 10:50
 */
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /*
     * DB facade 实现CURD
     * 原始数据库curd DB::select('sql query',['参数绑定值', ....]);
     * 用 ? 绑定参数,参数值在后面的一个数组中.
     */
    public function test1(){
        //return 'test1';
        //原始查询 db facades 返回数组
//        $students=DB::select('select * from student');
//        dd($students);//dd 自带打印数据函数

        //原始新增  返回boolean值
//        $bool = DB::insert('insert into student(name,age) values(?, ?)',
//            ['sean',25]
//        );
//        var_dump($bool);
        //修改 返回修改的行数
//        $num=DB::update('update student set age= ? where name= ?',['20', 'xgwshen']);
//        var_dump($num);
        //删除 返回删除的行数
//        $num = DB::delete('delete from student where id = ?', [1001]);
//        dd($num);
    }
}