<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use \App\Http\Models\Article;

class ArticalController extends Controller
{
    //
    public function index()
    {

    	// $orm = new \App\Http\Models\Article();
    	// $res = $orm->all();
    	// 
    	// $res = Article::all();
    	// foreach ($res as $key => $value) {
    	// 	# code...
    	// 	echo "标题：" . $value->title;
    	// 	echo "<br>内容：" . $value->content;
    	// 	echo "<hr>";
    	// }
    	$res = Article::find(2);
    	echo "编号：" . $res->id;
    	echo "<br>标题：" . $res->title;
    	dd($res);

    	$res = DB::table('article')->where('id', 2)->first();
    	dd($res);

    }

    public function add()
    {
    	$orm = new \App\Http\Models\Article();
    	$orm->title = 'laravel 框架模型的应用';

    	$res = $orm->save();
    	dd($res);
    	$data = [
    		'title' => 'laravel的数据库操作',
    		'description' => '这边文章主要介绍了laravel操作数据库的方法，很实用哦',
    		'content' => '这边文章主要介绍了laravel操作数据库的方法，很实用哦',
    		'author' => '阿直达',
    		'add_time' => time(),

    	];
    	$res = DB::table('article')->insert($data);
    	dd($res);
    	return $res;


    }

    public function delete()
    {
    	$res = DB::table('article')->where('id', 1)->delete();
    	dd($res);

    }

    public function edit()
    {
    	// $orm = new \App\Http\Models\Article();
    	$orm = Article::find(4);
    	$orm->content = 'laravel 框架模型的应用';
    	$res = $orm->save();
    	dd($res);

    	$res = DB::table('article')->where('id', 3)->update(['title' => '更改后的标题']);
    	dd($res);

    }            
}
