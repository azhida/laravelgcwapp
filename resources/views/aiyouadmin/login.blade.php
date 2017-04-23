<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            广场舞APP
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
    
    <body style="background-color: #393D49">
        <div class="x-box">
            <div class="x-top">
                <i class="layui-icon x-login-close">
                    &#x1007;
                </i>
                <ul class="x-login-right">
                    <li style="background-color: #F1C85F;" color="#F1C85F">
                    </li>
                    <li style="background-color: #EA569A;" color="#EA569A">
                    </li>
                    <li style="background-color: #393D49;" color="#393D49">
                    </li>
                </ul>
            </div>
            <div class="x-mid">
                <div class="x-avtar">
                    <img src="/aiyou-admin/images/logo.png" alt="">
                </div>
                <div class="input">
                    {{--<form class="layui-form">--}}
                    <form id="form" class="form-horizontal" role="form" method="POST" action="{{url('/admin/login')}}">
                        {{ csrf_field() }}
                        @if(session('msg'))
                            {{--这里要注意，input的type不能使用hidden了，否则会与  隐藏的 token 冲突，导致token生成失败--}}
                            <input id="msg" type="text" value="{{session('msg')}}" style="display: none;">
                        @endif

                        <div class="layui-form-item x-login-box">
                            <label for="username" class="layui-form-label">
                                <i class="layui-icon">&#xe612;</i>
                            </label>
                            <div class="layui-input-inline">
                                <input type="text" id="username" name="username" required="" lay-verify="username"
                                autocomplete="off" placeholder="用户名" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item x-login-box">
                            <label for="pass" class="layui-form-label">
                                <i class="layui-icon">&#xe628;</i>
                            </label>
                            <div class="layui-input-inline">
                                <input type="password" id="pass" name="pass" required="" lay-verify="pass"
                                autocomplete="off" placeholder="密码" class="layui-input" value="">
                            </div>
                        </div>
                        <div class="layui-form-item x-login-box">
                            <label for="code" class="layui-form-label">
                                <i class="layui-icon">&#xe612;</i>
                            </label>
                            <div class="layui-input-inline" style="width: 300px;">
                                <input type="text" id="code" name="code" required="" lay-verify="code"
                                       autocomplete="off" placeholder="验证码" class="layui-input" style="width: 150px;float: left;">
                                <a id="code_img" href="javascript:;" onclick="getCodeImg();return false;"></a>
                            </div>
                            <div class="layui-form-item" align="center" >
                                <button type="submit"  class="layui-btn" lay-filter="save" lay-submit="" style="width: 320px;margin-top: 10px;">
                                    登 录
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <p style="color:#fff;text-align: center;">Copyright © 2017.Company name All rights X-admin </p>
        <script src="/aiyou-admin/lib/layui/layui.js" charset="utf-8"></script>
        <script src="/aiyou-admin/js/jquery.min.js" charset="utf-8"></script>
        <script type="text/javascript">

            $(function () {
                function getCodeImg() {
                    // 获取验证码并显示
                    $.ajax({
                        url: '/admin/code',
                        type: 'get',
                        success: function (data) {
                            $('#code_img').empty();
                            $('#code_img').append(data);
                        }
                    })
                }
                getCodeImg(); // 第一次刷新页面时显示验证码
                $('#code').next().click(function () {
                    // 每次点击验证码图片市刷新验证码
                    getCodeImg();
                })
            })
        </script>
        <script>

            // 使用 layui 的 form模块
            layui.use(['form'],
            function() {
                $ = layui.jquery;
                var form = layui.form(),
                layer = layui.layer;

                // 登录失败弹出提示信息
                if ($('#msg').val()) {
                    layer.open({
                        title: '登录失败',
                        content: $('#msg').val()
                    });
                }

                $('.x-login-right li').click(function(event) {
                    color = $(this).attr('color');
                    $('body').css('background-color', color);
                });

                // 监听提交
                form.on('submit(save)', function(data) {
                    // 回调方法里要执行的动作，写到这里面来

                    console.log(data.field);
                })


            });



        </script>
    </body>

</html>