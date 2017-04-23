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

// 获取表单
route::get('/login', 'AdminController@login');
// 登录请求
route::post('/login', 'AdminController@login');




// welcome 页
route::get('/admin/welcome', 'AdminController@welcome');

/**
 * 问题管理
 */
// 问题列表
route::get('/admin/question/list', 'AdminController@questionList');
// 添加问题
route::get('/admin/question/add', 'AdminController@questionAdd');
// 删除问题
route::get('/admin/question/del', 'AdminController@questionDel');
// 修改问题
route::get('/admin/question/edit', 'AdminController@questionEdit');

/**
 * 产品管理
 */
// 产品分类
route::get('/admin/category', 'AdminController@category');
// 编辑产品分类
route::get('/admin/category/edit', 'AdminController@cateEdit');


/**
 * 轮播管理
 */
// 轮播列表
route::get('/admin/banner/list', 'AdminController@bannerList');
// 添加轮播
route::get('/admin/banner/add', 'AdminController@bannerAdd');
// 删除轮播
route::get('/admin/banner/del', 'AdminController@bannerDel');
// 修改轮播
route::get('/admin/banner/edit', 'AdminController@bannerEdit');

/**
 * 评论管理
 */
// 评论列表
route::get('/admin/comment/list', 'AdminController@commentList');
//意见反馈
route::get('/admin/feedback/list', 'AdminController@feedbackList');

/**
 * 会员管理
 */
//会员列表
route::get('/admin/member/list', 'AdminController@memberList');
//删除会员
route::get('/admin/member/del', 'AdminController@memberDel');
//等级管理
route::get('/admin/member/level', 'AdminController@memberLevel');
//积分管理
route::get('/admin/member/kiss', 'AdminController@memberKiss');
// 浏览记录，分享记录
route::get('/admin/member/view', 'AdminController@memberView');

/**
 * 管理员管理
 */
//管理员列表
route::get('/admin/admin/list', 'AdminController@adminList');
//角色管理
route::get('/admin/admin/role', 'AdminController@adminRole');
//权限分类
route::get('/admin/admin/cate', 'AdminController@adminCate');
//权限管理
route::get('/admin/admin/rule', 'AdminController@adminRule');

/**
 * 系统统计
 */
//拆线图
route::get('/admin/echarts1', 'AdminController@echarts1');
//柱状图
route::get('/admin/echarts2', 'AdminController@echarts2');
//地图
route::get('/admin/echarts3', 'AdminController@echarts3');
//饼图
route::get('/admin/echarts4', 'AdminController@echarts4');
//雷达图
route::get('/admin/echarts5', 'AdminController@echarts5');
//k线图
route::get('/admin/echarts6', 'AdminController@echarts6');
//热力图
route::get('/admin/echarts7', 'AdminController@echarts7');
//仪表图
route::get('/admin/echarts8', 'AdminController@echarts8');

/**
 * 系统设置
 */
//系统设置
route::get('/admin/sys/set', 'AdminController@sysSet');
//数字字典
route::get('/admin/sys/data', 'AdminController@sysData');
//屏蔽词
route::get('/admin/sys/shield', 'AdminController@sysShield');
//系统日志
route::get('/admin/sys/log', 'AdminController@sysLog');
//友情链接
route::get('/admin/sys/link', 'AdminController@sysLink');
//第三方登录
route::get('/admin/sys/qq', 'AdminController@sysQQ');









