<?php
/**
 * 路由的概念：
 *  1. 简单说就是把用户的请求转发给相应的程序进行处理
 *  2. 作用是建立 url 和 程序 间的映射
 */
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|这里是您可以注册应用程序的Web路由的地方。这些路由被一个包含“Web”中间件组里的RouteService提供程序加载。现在创造伟大的东西！
*/
/**
 * 我们可以注册路由来响应任何 HTTP 请求动作：
 *
 * Route::get($uri, $callback);
 * Route::post($uri, $callback);
 * Route::put($uri, $callback);
 * Route::patch($uri, $callback);
 * Route::delete($uri, $callback);
 * Route::options($uri, $callback);
 * 有时候还需要注册一个路由响应多种 HTTP 请求动作 —— 这可以通过 match 方法来实现。或者，可以使用 any 方法注册一个路由来响应所有 HTTP 请求动作
 */
Route::get('/', function () {
    return view('welcome');
});
Route::get('/x', function () {
    return view('index');
});
//1.基础路由
Route::get('hello',function(){
    return "hello world !";
});
//Route::get('/user',"UsersController@index");

Route::post('basic2',function(){
    return 'basic2 post';//不能通过url直接访问
});

//2.多请求路由
Route::match(['get','post'],'multy1',function(){
    return 'multy1';
});
Route::any('multy2',function(){
    return 'multy2';
});

//3.路由参数
//不加默认值
//Route::get('user/{id}',function($id){
//    return 'user-id-'.$id;
//});
////加默认值
//Route::get('user/{name?}',function($name='sean'){
//    return 'user-name-'.$name;
//});
////多参数加正则
//Route::get('user/{id}/{name}',function($id,$name){
//    return 'user-id-'.$id.'-name-'.$name;
//})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);

//4.路由别名
//Route::get('user/member-center',['as' => 'center' , function(){
//    return route('center');//返回完整路径
//}]);

//5.路由群组
Route::group(['prefix'=>'member'],function(){
    //前缀路由
    Route::get('user/member-center',['as' => 'center' , function(){
        return route('center');//返回完整路径
    }]);

    Route::any('multy2',function(){
        return 'member-multy2';
    });
});

//7.路由中输出视图
Route::get('view', function(){
    return view('welcome');
});

//二 、路由与控制器

//1.直接映射到控制器的方法
//Route::get('member/info','MemberController@info');

//2.第二个参数用数组的方式表示
//Route::any('member/info', [
//    'uses'=>'MemberController@info',
//    'as' => 'memberinfo'
//]);

// 绑定参数 及参数限制
Route::get('member/{id}', 'MemberController@info')->where('id','\d+');
//db facade 数据库操作
Route::any('test1','StudentController@test1');
//查询构造器数据库操作
Route::any('query1','StudentController@query1');
Route::any('query2','StudentController@query2');
Route::any('query3','StudentController@query3');
Route::any('query4','StudentController@query4');
Route::any('query5','StudentController@query5');
//Eloquent ORM 数据库操作
Route::any('orm1','StudentController@orm1');
Route::any('orm2','StudentController@orm2');
Route::any('orm3','StudentController@orm3');
Route::any('orm4','StudentController@orm4');
//blade模板学习
Route::any('section1','StudentController@section1');
//模板中的url 测试 一般都设置别名 便于使用route() 的方式进行url跳转
Route::any('urlTest',['as'=>'url','uses'=>'StudentController@urlTest']);

//request
Route::any('request1','StudentController@request1');

//session 没用中间件路由也成功了啊。。。
Route::group(['middleware'=>'web'],function(){
    Route::any('session1',['uses'=>'StudentController@session1']);
    Route::any('session2',['uses'=>'StudentController@session2']);
});