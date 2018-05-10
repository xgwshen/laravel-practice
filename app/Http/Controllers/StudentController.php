<?php
/**
 * Created by PhpStorm.
 * User: xgwshen
 * Date: 2018/5/8
 * Time: 10:50
 */
namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
        $students=DB::select('select * from student');
        dd($students);//dd 自带打印数据函数

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

    /**
     * 使用查询构造器 删除数据
     * delete 不加条件全删 加条件删部分 返回删除的行数
     * truncate 全部删除 没有返回值
     */
    public function query3(){
        //delete
//        $num = DB::table('student')->where('id',1004)->delete();
//        $num = DB::table('student')->where('id','>',1004)->delete();
//        var_dump($num);

        //truncate 不返回数据 （NULL）
        $num= DB::table('student')->truncate();
        var_dump($num);//NULL
    }

    /**
     * 使用查询构造器 查询数据 返回的是对象而不是数组 用toArray方法把对象转化为数组 但是里面的元素还是对象。。。？
     * get() 获取全部数据
     * first() 获取结果集中的第一条
     * where() 条件 whereRAW('...',['','']) 多个条件
     * pluck() 返回指定字段 5.3以后代替了lists()方法
     * lists() 返回字段与字段组合的数组 5.3以后被废弃了
     * select() 查询指定字段
     * chunk(count,function($result){... } ) 分块查询 直到查完为止
     */
    public function query4(){
        //get()
//        $students = DB::table('student')->get()->toArray();
//        dd($students);
        //first()
//        $students = DB::table('student')->orderBy('id','desc')->first();
        //where whereRAW
        $students = DB::table('student')->whereRAW('id >= ? and age< ?',[2,31])->get();
        dd($students);
        //pluck
//        $students = DB::table('student')->pluck('name','age');
        //lists  已废弃
//        $students = DB::table('student')->lists('name','age');
        //select()
//        $students = DB::table('student')->select('id','name','age')->get();
//        dd($students);
        //chunk
//        echo '<pre>';
//        DB::table('student')->orderBy('id','desc')->chunk(2,function($student){
//            var_dump($student->toArray());
//            if('你的条件'){
//                return false;//终止查询
//            }
//        });

    }

    /**
     * 查询构造器中的聚合函数 （5ge）
     * count() 统计总数
     * max() 最大值
     * min() 最小值
     * sum() 求和
     * avg() 平均值
     */
    public function query5(){
        //count()
//        $num = DB::table('student')->count();
//        var_dump($num);

        //max()
//        $max= DB::table('student')->max('age');
//        var_dump($max);

        //min()
//        $min= DB::table('student')->min('age');
//        var_dump($min);

        //avg
//        $avg= DB::table('student')->avg('age');
//        var_dump($avg);

        //sum
        $sum= DB::table('student')->sum('age');
        var_dump($sum);
    }

    /**
     * eloquent ORM
     * all() 查询所有数据，返回集合
     * find()  根据主键进行查询
     * findOrFail() 根据主键查找， 没查到返回异常
     */
    public function orm1(){
        //all()
//        $students = Student::all();

        //find() 返回一个对象
//        $students = Student::find(4);

        //findOrFail()
//        $students =Student::findOrFail(6);

        //查询构造器在orm中的使用
//        $students = Student::get();
//        $students = Student::where('id','>',3)->orderBy('age','desc')->first();
//        Student::chunk(2,function($students){
//            var_dump($students);
//        });
        //聚合函数
//        $num = Student::count();
//        $max = Student::max('age');
//        $sum =Student::sum('age');
//        $min =Student::min('age');
//        $avg =Student::avg('age');
//        dd($min);


    }
    /**
     * 使用模型新增数据
     * 使用模型的create方法新增数据
     */
    public function orm2(){
        //使用模型新增数据
//        $students = new Student();
//        $students -> name = 'xgwshen';
//        $students -> age = '18';
//        $students ->save();
//        dd($students);
//        $students = Student::find(7);
//        $student = $students->created_at;
//        echo $student;

        //使用模型的create方法新增数据
//        $student = Student::create([
//            'name'=>'imoocs',
//            'age' => '18',
//        ]);
//        var_dump($student);

        //firstOrCreate() 以属性查找用户 如没有则新增 并返回新的实例
//        $student = Student::firstOrCreate(
//            ['name'=>'imoocsss',]
//        );
//        dd($student);
        //firstOrNew() 以属性查找用户 如没有则创建实例 如保存 则手动save();
        $student = Student::firstOrNew([
            'name'=>'imoocssss',
        ]);
        $student->save();
        dd($student);
    }

    /**
     * orm 更新数据
     */
    public function orm3(){
        //使用模型更新 返回bool
//        $student= Student::find(12);
//        $student->age = 41;
//        $bool=  $student->save();
//        var_dump($bool);

        //批量更新 返回条数
        $num  = Student::where('id','>',13)->update(['age'=>29]);
        var_dump($num);
    }
    /**
     * orm 删除数据
     */
    public function orm4(){
        //使用模型删除 bool
//        $student = Student::find(13);
//        $bool = $student->delete();
//        var_dump($bool);

        //通过主键删除 destroy (ids:int|array) 条数
//        $num = Student::destroy(14);//单个删
//        $num = Student::destroy(15,16);//多个删
//        $num = Student::destroy([10,11]);//数组形式多个删
//        var_dump($num);

        //删除指定条件的数据
//        $num = Student::where('id','>',9)->delete();
//        var_dump($num);
    }

    /**
     * 模板引擎blade
     */
    public function section1(){
        //查询学生表
        $students = Student::where('id','>','7')->get();
        $arr=['xgwshen','sean'];
        //也可以用'student/section1' 推荐使用'.'形式（渲染模板）
        return view('student.section1',[
            'name'=>'xgwshen',
            'arr' => $arr,
            'students'=> $students,
        ]);
    }
    /*
     * 模板中的url
     */
    public function urlTest(){
        return "urlTest";
    }

    /**
     * request请求
     */
    public function request1(Request $request){
        //1. 取值 input() 加参数取具体值 不加参数去所有值 all() 去所有值
//        echo $request->input('name');
//            $res = $request->all();
//            var_dump($res);
            //input也可以加默认的值
//            echo $request->input('sex','未知');//没有sex参数 可以默认
            //判断有无参数 has() 返回bool值
//           var_dump($request->has('sex'));
        //2.判断request请求类型
         //method() 获取请求类型
//        echo $request->method();
         //isMethod() 获取请求类型
//        $bool = $request->isMethod('post');
//        var_dump($bool);
         //判断是否是ajax请求
//        var_dump($request->ajax()) ;
         //判断请求的路径是否符合某种格式 is()
//       $res = $request->is('request1');
//       var_dump($res);
    }

    /**
     * session的使用
     * HTTP request session()方法
     * session()辅助函数
     * Session:: 类
     */
    public function session1(Request $request){
        //1. HTTP request session
//        $request->session()->put('key1','value1');
        //2. session() 辅助函数
//        session()->put('key2','value2');
        //3. session类
//        Session::put('key3','value3');
        //以数组的形式一次性存多个session
        Session::put(['key4'=>'value4','key5'=>'value5']);
        //把数组放到session的数组中
        Session::push('student','xgwshen1');
        Session::push('student','xgwshen2');
        //暂存session值 第一次访问有 第二次就没了 flash
        Session::flash('key-flash','val-flash');
    }
    public function session2(Request $request){
        //1. 获取 HTTP request session
//        echo $request->session()->get('key1');
        //2. 获取 session() 辅助函数
//        echo session()->get('key2');
        //3. 获取session类
//        echo Session::get('key3');
        //不存在则取默认值 但不存到session中
//        echo Session::get('key5','default');

        //去数组的session
//        var_dump(Session::get('student'));
        //取出数据并删除
//        echo Session::pull('key4','default');
        //取出所有制
//        dd(Session::all());
        //判断session中是否有某值 has()
//        var_dump(Session::has('key1')) ;

        //删除session中的值
//        Session::forget('key1');
        //清空session信息
//        Session::flush();
//        dd(Session::all());

        echo Session::get('key-flash');
    }


}