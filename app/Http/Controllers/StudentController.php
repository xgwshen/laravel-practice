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
        $num = DB::delete('delete from student where id = ?', [1001]);
        dd($num);
    }

    /**
     * 数据库操作 -- 查询构造器
     * DB::table('表名')->.....
     */

    public function query1(){
        //新增数据 一条 返回bool
//        $bool = DB::table('student')->insert(['name'=>'name1','age'=>18]);
//        dd($bool);
        //获取新增的id
//        $id = DB::table('student')->insertGetId(['name'=>'name2','age'=>30]);
//        var_dump($id);

        //新增数据 多条
        DB::table('student')->insert([
            ['name'=>'name3','age'=>29],
            ['name'=>'name4','age'=>29],
        ]);


    }
    /**
     * 数据库操作 修改数据  自增和自减
     *
     */
    public function query2(){
        //修改 返回影响行数
//        $num=DB::table('student')
//            ->where('id',1003)
//            ->update(['age'=>19]);
//        var_dump($num);

        //自增 increment(str,str,array); 1-字段 2-自增数 3-其他字段更新
//        $num=DB::table('student')->increment('age',3);
        //自增并修改字段
//        $num=DB::table('student')->where('id',1003)->increment('age',3,['name'=>'increment']);
//        var_dump($num);

        //自减
        $num=DB::table('student')->where('id',1004)->decrement('age',2);
        var_dump($num);
    }
}