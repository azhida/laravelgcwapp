<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            后台系统名称
        </title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="/aiyou-admin/css/x-admin.css" media="all">
    </head>
    <body>
        <div class="layui-layout layui-layout-admin">
            <div class="layui-header header header-demo">
                <div class="layui-main">
                    <a class="logo" href="/aiyou-admin/index.html">
                        后台系统名称
                    </a>
                    <ul class="layui-nav" lay-filter="">
                      <li class="layui-nav-item"><img src="/aiyou-admin/images/logo.png" class="layui-circle" style="border: 2px solid #A9B7B7;" width="35px" alt=""></li>
                      <li class="layui-nav-item">
                        <a href="javascript:;">admin</a>
                        <dl class="layui-nav-child"> <!-- 二级菜单 -->
                          <dd><a href="">个人信息</a></dd>
                          <dd><a href="">切换帐号</a></dd>
                          <dd><a href="{{url('logout')}}">退出</a></dd>
                        </dl>
                      </li>
                      <!-- <li class="layui-nav-item">
                        <a href="" title="消息">
                            <i class="layui-icon" style="top: 1px;">&#xe63a;</i>
                        </a>
                        </li> -->
                      <li class="layui-nav-item x-index"><a href="/">前台首页</a></li>
                    </ul>
                </div>
            </div>
            <div class="layui-side layui-bg-black x-side">
                <div class="layui-side-scroll">
                    <ul class="layui-nav layui-nav-tree site-demo-nav" lay-filter="side">
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe607;</i><cite>常用操作</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/question/list')}}">
                                        <cite>热门管理</cite>
                                    </a>
                                </dd>
                                </dd>
                                <dd class="">
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/question/del')}}">
                                        <cite>广场管理</cite>
                                    </a>
                                </dd>
                                </dd>
                                <dd class="">
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/news/list')}}">
                                        <cite>动态管理</cite>
                                    </a>
                                </dd>
                                </dd>
                            </dl>
                        </li>



                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe607;</i><cite>常用操作</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="{{url('/admin/question/list')}}">
                                            <cite>问题列表</cite>
                                        </a>
                                    </dd>
                                </dd>
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="{{url('/admin/question/del')}}">
                                            <cite>删除问题</cite>
                                        </a>
                                    </dd>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe62d;</i><cite>产品管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="{{url('/admin/welcome')}}">
                                            <cite>产品列表（待开发）</cite>
                                        </a>
                                    </dd>
                                </dd>
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="{{url('/admin/welcome')}}">
                                            <cite>品牌管理（待开发）</cite>
                                        </a>
                                    </dd>
                                </dd>
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="{{url('/admin/welcome')}}">
                                            <cite>类型管理（待开发）</cite>
                                        </a>
                                    </dd>
                                </dd>
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="{{url('/admin/welcome')}}">
                                            <cite>类型属性（待开发）</cite>
                                        </a>
                                    </dd>
                                </dd>
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="{{url('/admin/category')}}">
                                            <cite>产品分类</cite>
                                        </a>
                                    </dd>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe634;</i><cite>轮播管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="{{url('/admin/banner/list')}}">
                                            <cite>轮播列表</cite>
                                        </a>
                                    </dd>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe642;</i><cite>订单管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="{{url('/admin/welcome')}}">
                                            <cite>订单列表（待开发）</cite>
                                        </a>
                                    </dd>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe630;</i><cite>分类管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/category')}}">
                                        <cite>分类列表</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe606;</i><cite>评论管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/comment/list')}}">
                                        <cite>评论列表</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/feedback/list')}}">
                                        <cite>意见反馈</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe612;</i><cite>会员管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/member/list')}}">
                                        <cite>会员列表</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/member/del')}}">
                                        <cite>删除会员</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/member/level')}}">
                                        <cite>等级管理</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/member/kiss')}}">
                                        <cite>积分管理</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/member/view')}}">
                                        <cite>浏览记录</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/member/view')}}">
                                        <cite>分享记录</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe613;</i><cite>管理员管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/admin/list')}}">
                                        <cite>管理员列表</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/admin/role')}}">
                                        <cite>角色管理</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/admin/cate')}}">
                                        <cite>权限分类</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/admin/rule')}}">
                                        <cite>权限管理</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe629;</i><cite>系统统计</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/echarts1')}}">
                                        <cite>拆线图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/echarts2')}}">
                                        <cite>柱状图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/echarts3')}}">
                                        <cite>地图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/echarts4')}}">
                                        <cite>饼图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/echarts5')}}">
                                        <cite>雷达图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/echarts6')}}">
                                        <cite>k线图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/echarts7')}}">
                                        <cite>热力图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/echarts8')}}">
                                        <cite>仪表图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="http://echarts.baidu.com/examples.html" target="_blank" _href="{{url('/admin/welcome')}}">
                                        <cite>更多案例</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe614;</i><cite>系统设置</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/sys/set')}}">
                                        <cite>系统设置</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/sys/data')}}">
                                        <cite>数字字典</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/sys/shield')}}">
                                        <cite>屏蔽词</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/sys/log')}}">
                                        <cite>系统日志</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/sys/link')}}">
                                        <cite>友情链接</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="{{url('/admin/sys/qq')}}">
                                        <cite>第三方登录</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item" style="height: 30px; text-align: center">
                        </li>
                    </ul>
                </div>

            </div>
            <div class="layui-tab layui-tab-card site-demo-title x-main" lay-filter="x-tab" lay-allowclose="true" style="border: 0px solid red">
                <div class="x-slide_left"></div>
                <ul class="layui-tab-title">
                    <li class="layui-this">
                        我的桌面
                        <i class="layui-icon layui-unselect layui-tab-close">ဆ</i>
                    </li>
                </ul>
                <div class="layui-tab-content site-demo site-demo-body">
                    <div class="layui-tab-item layui-show"  style="border: 0px solid red">
                        <iframe frameborder="0" src="{{url('/admin/welcome')}}" class="x-iframe"></iframe>
                    </div>
                </div>
            </div>
            <div class="site-mobile-shade">
            </div>
        </div>
        <script src="/aiyou-admin/lib/layui/layui.js" charset="utf-8"></script>
        <script src="/aiyou-admin/js/x-admin.js"></script>
        <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
        </script>
    </body>
</html>