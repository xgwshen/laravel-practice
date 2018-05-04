<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
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
Route::get('/user',"UsersController@index");