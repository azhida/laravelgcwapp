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

// 定义 API 路由
Route::get('/admin/news/api', 'Admin\NewsController@api');



Route::group(['middleware' => ['admin.login'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/logout', 'PublicController@logout');
    // 定义 admin/index
    Route::get('/index', 'IndexController@index');

    // 动态管理
    Route::get('/news/list', 'NewsController@newsList');
    Route::get('/news/add', 'NewsController@newsAdd');
    Route::get('/news/del', 'NewsController@newsDel');
    Route::get('/news/edit/{id}', 'NewsController@newsEdit');
    // 提交添加的信息
    Route::post('/news/store', 'NewsController@newsStore');
    // 上传文件
    Route::post('/news/upload/img', 'NewsController@uploadImg');



    Route::get('/article/index', 'ArticalController@index');
    Route::get('/article/add', 'ArticalController@add');
    Route::get('/article/delete', 'ArticalController@delete');
    Route::get('/article/edit/{id}', 'ArticalController@edit');
});










