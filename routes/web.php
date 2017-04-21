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
    return view('welcome');
});


Route::get('/test', 'IndexController@test');


Route::get('/article/index', 'ArticalController@index');
Route::get('/article/add', 'ArticalController@add');
Route::get('/article/delete', 'ArticalController@delete');
Route::get('/article/edit', 'ArticalController@edit');


Route::get('/admin/login', 'Admin\PublicController@login');
Route::post('/admin/login', 'Admin\PublicController@login');
