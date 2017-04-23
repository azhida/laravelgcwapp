<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    //

    /**
     * 管理员登录
     * @param Request $request
     * @return string
     */
    public function login(Request $request)
    {

        // 判断请求方式，get请求（非post请求）则直接展示登录页面
        if (!$request->isMethod('post')){
            return view('aiyouadmin.login');
        }
        return 'ok';

        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        $remember = $request->remember;

        if ($username != '' && $password !='') {
            // 用户名 和 密码 都不能为空
            $result = DB::table('admin_manage')->where('username', '=', $username)->where('password', md5($username . $password))->get();
        } elseif ($email != '' && $password !='') {
            // 邮箱和密码都不能为空
            $result = DB::table('admin_manage')->where('email', '=', $email)->where('password', md5($username . $password))->get();
        } else {
            return '数据不全，请重新填写后再登录';
        }

        // 判断用户是否已存在（已注册）
        if (count($result, 0) < 1) {
            // 用户不存在
            return '用户不存在';
        }

        // 处理 remember me
        if ($remember == 1) {
            // 记住，存session
            Session::put('uid', $result->id);
            Session::put('nickname', $result->nickname);
            Session::put('name', $result->username);
            Session::put('role', $result->role);
        }

        // 验证通过，跳转路径
        return redirect()->route('/home');

    }



    /**
     * 后台首页
     */
    public function index()
    {
        return view('aiyouadmin.index');
    }

    /**
     * 后台 welcome 页
     */
    public function welcome()
    {
        return view('aiyouadmin.welcome');
    }

    // 问题列表
    public function questionList()
    {
        return view('aiyouadmin.questionList');
    }

    // 问题添加
    public function questionAdd()
    {
        return view('aiyouadmin.questionAdd');
    }

    // 问题删除
    public function questionDel()
    {
        return view('aiyouadmin.questionDel');
    }

    // 问题修改
    public function questionEdit()
    {
        return view('aiyouadmin.questionEdit');
    }

    // 产品分类
    public function category()
    {
        return view('aiyouadmin.category');
    }

    // 编辑产品分类
    public function cateEdit()
    {
        return view('aiyouadmin.cateEdit');
    }

    // 轮播列表
    public function bannerList()
    {
        return view('aiyouadmin.bannerList');
    }

    // 轮播添加
    public function bannerAdd()
    {
        return view('aiyouadmin.bannerAdd');
    }

    // 轮播删除
    public function bannerDel()
    {
        return view('aiyouadmin.bannerDel');
    }

    // 轮播修改
    public function bannerEdit()
    {
        return view('aiyouadmin.bannerEdit');
    }

    // 评论列表
    public function commentList()
    {
        return view('aiyouadmin.commentList');
    }

    // 意见反馈
    public function feedbackList()
    {
        return view('aiyouadmin.feedbackList');
    }

    // 会员列表
    public function memberList()
    {
        return view('aiyouadmin.memberList');
    }

    // 删除会员
    public function memberDel()
    {
        return view('aiyouadmin.memberDel');
    }

    // 等级管理
    public function memberLevel()
    {
        return view('aiyouadmin.memberLevel');
    }

    // 积分管理
    public function memberKiss()
    {
        return view('aiyouadmin.memberKiss');
    }

    // 浏览记录，分享记录
    public function memberView()
    {
        return view('aiyouadmin.memberView');
    }

    // 管理员列表
    public function adminList()
    {
        return view('aiyouadmin.adminList');
    }

    // 角色管理
    public function adminRole()
    {
        return view('aiyouadmin.adminRole');
    }

    // 权限分类
    public function adminCate()
    {
        return view('aiyouadmin.adminCate');
    }

    // 权限管理
    public function adminRule()
    {
        return view('aiyouadmin.adminRule');
    }

    // 拆线图
    public function echarts1()
    {
        return view('aiyouadmin.echarts1');
    }


    //柱状图
    public function echarts2()
    {
        return view('aiyouadmin.echarts2');
    }

    // 地图
    public function echarts3()
    {
        return view('aiyouadmin.echarts3');
    }

    //饼图
    public function echarts4()
    {
        return view('aiyouadmin.echarts4');
    }

    //雷达图
    public function echarts5()
    {
        return view('aiyouadmin.echarts5');
    }

    //k线图
    public function echarts6()
    {
        return view('aiyouadmin.echarts6');
    }

    //热力图
    public function echarts7()
    {
        return view('aiyouadmin.echarts7');
    }

    //仪表图
    public function echarts8()
    {
        return view('aiyouadmin.echarts8');
    }

    //系统设置
    public function sysSet()
    {
        return view('aiyouadmin.sysSet');
    }

    //数字字典
    public function sysData()
    {
        return view('aiyouadmin.sysData');
    }

    //屏蔽词
    public function sysShield()
    {
        return view('aiyouadmin.sysShield');
    }

    //系统日志
    public function sysLog()
    {
        return view('aiyouadmin.sysLog');
    }
    //友情链接

    public function sysLink()
    {
        return view('aiyouadmin.sysLink');
    }

    //系统日志
    public function sysQQ()
    {
        return view('aiyouadmin.sysQQ');
    }

















}
