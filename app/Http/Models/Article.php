<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    // 关联表
    protected $table = 'article';
    // 定义表主键
    protected $primaryKey = 'id';
    // 定义时间撮
    public $timestamps = false;
    // 定义白名单
    protected $fillable = [
    	'id',
    	'title',
    	'description',
    	'content',
    	'author',
    	'add_time',
    ];
}
