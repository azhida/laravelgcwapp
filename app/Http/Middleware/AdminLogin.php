<?php

namespace App\Http\Middleware;

use Closure; // 闭包

class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    // 解释：handle 相当于类里边的构造函数，每次调用控制器，都会触发类的构造函数
    public function handle($request, Closure $next)
    {
        if (!session('admin')) {
            // 跳转到 admin/login 登录页面
            return redirect('admin/login');
        }
        return $next($request);
    }
}
