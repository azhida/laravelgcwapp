<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    // 关联表
    protected $table = 'news';
    // 主键
    protected $primaryKey = 'id';
    // 时间戳
    public $timestamps = false;
    // 白名单
    protected $fillable = ['id', 'title', 'url', 'author', 'smallimg', 'description', 'add_time'];
}
