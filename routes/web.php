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

Route::get('/', function () {
    return 'ok';
    return view('welcome');
});



Route::get('/admin/code', 'Admin\PublicController@code');
// 后台登录
Route::get('/admin/login', 'Admin\PublicController@login');
Route::post('/admin/login', 'Admin\PublicController@login');

// 定义 admin/index
Route::get('/admin/index', 'Admin\IndexController@index');


// 动态管理
Route::get('/admin/news/list', 'Admin\NewsController@newsList');
Route::get('/admin/news/add', 'Admin\NewsController@newsAdd');
Route::get('/admin/news/del', 'Admin\NewsController@newsDel');
Route::get('/admin/news/edit', 'Admin\NewsController@newsEdit');
// 提交添加的信息
Route::post('/admin/news/store', 'Admin\NewsController@newsStore');
// 上传文件
Route::post('/admin/news/upload/img', 'Admin\NewsController@uploadImg');













Route::get('/article/index', 'ArticalController@index');
Route::get('/article/add', 'ArticalController@add');
Route::get('/article/delete', 'ArticalController@delete');
Route::get('/article/edit', 'ArticalController@edit');


