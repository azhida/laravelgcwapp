<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>
            X-admin v1.0
        </title>
        <meta name="renderer" content="webkit">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="/aiyou-admin/css/x-admin.css" media="all">
    </head>
    
    <body>
        <div class="x-body">
            <form id="form" class="layui-form layui-form-pane" method="post" action="{{url('admin/news/store')}}">
                {{csrf_field()}}
                <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="layui-form-item">
                    <label for="L_title" class="layui-form-label">
                        标题
                    </label>
                    <div class="layui-input-block">
                        <input type="text" id="L_title" name="title" required lay-verify="title"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="url" class="layui-form-label">
                        <span class="x-red">*</span>链接
                    </label>
                    <div class="layui-input-block">
                        <input type="text" id="url" name="url" required="" lay-verify="required"
                               autocomplete="off" placeholder="http://" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_title" class="layui-form-label">
                        歌手
                    </label>
                    <div class="layui-input-block">
                        <input type="text" id="L_title" name="author" required lay-verify="title"
                               autocomplete="off" class="layui-input" value="佚名">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="link" class="layui-form-label">
                        <span class="x-red">*</span>头像原图
                    </label>
                    <div class="layui-input-inline">
                        <div class="site-demo-upbar">
                            <input type="file" name="news_img" class="layui-upload-file" id="test">
                        </div>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label  class="layui-form-label">头像缩略图
                    </label>
                    <img id="LAY_demo_upload" width="100" src="">
                </div>
                <div class="layui-form-item layui-form-text">
                    <div class="layui-input-block" style="border: 0px solid red;">
                        <textarea id="L_content" name="description"
                        placeholder="请输入内容" class="layui-textarea"></textarea>
                    </div>
                    <label for="L_content" class="layui-form-label" style="top: -2px;">
                        描述
                    </label>
                </div>

                <div class="layui-form-item">
                    <button class="layui-btn" lay-filter="add" lay-submit>
                        提交
                    </button>
                </div>
            </form>
        </div>
        <script src="/aiyou-admin/lib/layui/layui.js" charset="utf-8">
        </script>
        <script src="/aiyou-admin/js/x-layui.js" charset="utf-8">
        </script>
        <script>
            layui.use(['form','layer','upload'], function(){
                $ = layui.jquery;
              var form = layui.form()
              ,layer = layui.layer
              ,layedit = layui.layedit;


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                layui.upload({
                    url: '/admin/news/upload/img?_token=' + ($('#token').val()),
                    type: 'file',

                    before: function(input){
                        //返回的参数item，即为当前的input DOM对象
                        console.log('文件上传中');
                    }
                    ,success: function(res){
                        console.log(res);
                        if (res.code == 1) {
                            // 上传失败
                            return false;
                        } else {
                            // 上传成功，追加缩略图位置
                            $('#LAY_demo_upload').attr('src', res.img_name);
                            $('#LAY_demo_upload').attr('height', '100');
                            // 同时追加一个 input 用来保存 已经上传好的图片路径，注意：这个input一定不能用 hidden属性，否则会与token冲突
                            $('#form').append('<input type="text" name="smallimg" value="' + res.img_name + '" style="display: none;">');
                        }
                    }
                });


                //监听提交
              form.on('submit(add)', function(data){
                console.log(data);
                //发异步，把数据提交给php
                layer.alert("增加成功", {icon: 6},function () {
                    // 获得frame索引
                    var index = parent.layer.getFrameIndex(window.name);
                    //关闭当前frame
                    parent.layer.close(index);
//
                });
//                  return false;
              });
            });
        </script>
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