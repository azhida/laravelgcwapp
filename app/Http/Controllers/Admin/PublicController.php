<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use DB;

// 引入第三方验证码库
use Gregwar\Captcha\CaptchaBuilder;

class PublicController extends Controller
{

    // 生成并返回验证码
    public function code()
    {
        // 生成验证图片 文件名
        $builder = new CaptchaBuilder;
        $builder->build(150, 40);
        // 将验证码保存到session中
        Session::put('code', $builder->getPhrase());
        // 将图片输出的结果保存起来
        $img = "<img src=" . ($builder->inline()) . ">";
        return $img;
    }


    // 后台管理 登录操作
    public function login(Request $request)
    {
    	if ($request->isMethod('get')) {
            // get  获取登录页面
            return view('aiyouadmin.login');
        }

        // post提交数据
        $username = $request->username;
        $password = $request->pass;
        $user_code = $request->code;
        $session_code = Session::get('code');
        if (empty($request->username) || empty($request->pass) || empty($request->code)) {
//            return back()->with('msg', '数据不全');
                return '用户名为空';
        }

        if ($user_code != $session_code) {
            return back()->with('msg', '验证码错误');
        }

        // 验证用户名和密码是否正确
        $password = md5($password);
        $res = DB::table('admin')->where(['username' => $username, 'password' => $password])->first();
        if ($res) {
            // 登录成功，存储到session中，并跳转
            session(['admin' => $res]);
            return redirect('admin/index');
        } else {
            return back()->with('msg', '用户名或密码错误');
        }
    }

    // 退出登录
    public function logout()
    {
        // 清空 session 即可
        session(['admin' => null]);
        return redirect('admin/login');

    }










}
