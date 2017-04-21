<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

// 引入第三方验证码库
use Gregwar\Captcha\CaptchaBuilder;

class PublicController extends Controller
{
    //
    public function login(Request $request)
    {
    	if ($request->isMethod('post')) {
    		$user_code = $request->code;
    		$session_code = Session::get('code', '');
    		if ($user_code != $session_code) {
    			// 验证码正确
    			return '验证码错误';
    		}


    		// 验证用户名和密码
    		// ***

    		return view('public.home');
    	}


    	// 生成验证图片 文件名
    	$builder = new CaptchaBuilder;
    	$builder->build(150, 40);
    	// 将验证码保存到session中
    	Session::put('code', $builder->getPhrase());
    	// 将图片输出的结果保存起来
    	$img = "<img src=" . ($builder->inline()) . ">";
    	return view('public.login')->with('img', $img);
    }


}
