<?php

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

Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);
有时候还需要注册一个路由响应多种 HTTP 请求动作 —— 这可以通过 match 方法来实现。或者，可以使用 any 方法注册一个路由来响应所有 HTTP 请求动作
 */
Route::get('/', function () {
    return view('welcome');
});
Route::get('/x', function () {
    return view('index');
});
//基础路由
Route::get('hello',function(){
    return "hello world !";
});
//Route::get('/user',"UsersController@index");

Route::post('basic2',function(){
    return 'basic2 post';//不能通过url直接访问
});

//多请求路由
Route::match(['get','post'],'multy1',function(){
    return 'multy1';
});
Route::any('multy2',function(){
    return 'multy2';
});

//路由参数
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

//路由别名
Route::get('user/member-center',['as' => 'center' , function(){
    return route('center');//返回完整路径
}]);