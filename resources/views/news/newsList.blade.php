<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            X-admin v1.0
        </title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="/aiyou-admin/css/x-admin.css" media="all">
    </head>
    <body>
        <div class="x-nav">
            <span class="layui-breadcrumb">
              <a><cite>首页</cite></a>
              <a><cite>会员管理</cite></a>
              <a><cite>问题/资讯列表</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
            <form class="layui-form x-center" action="" style="width:800px">
                <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="layui-form-pane" style="margin-top: 15px;">
                  <div class="layui-form-item">
                    <label class="layui-form-label">日期范围</label>
                    <div class="layui-input-inline">
                      <input class="layui-input" placeholder="开始日" id="LAY_demorange_s">
                    </div>
                    <div class="layui-input-inline">
                      <input class="layui-input" placeholder="截止日" id="LAY_demorange_e">
                    </div>
                    <div class="layui-input-inline">
                      <input type="text" name="username"  placeholder="标题" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
                    </div>
                  </div>
                </div> 
            </form>
            <xblock><button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon">&#xe640;</i>批量删除</button><button class="layui-btn" onclick="question_add('添加问题','/admin/news/add','600','500')"><i class="layui-icon">&#xe608;</i>添加</button><span class="x-right" style="line-height:40px">共有数据：{{$res->total()}} 条</span></xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="" value="">
                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            标题
                        </th>
                        <th>
                            链接
                        </th>
                        <th>
                            歌手
                        </th>
                        <th>
                            头像
                        </th>
                        <th>
                            描述
                        </th>
                        <th>
                            添加时间
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach ($res as $items) {
                    echo '<tr>';
                    echo '<td><input type="checkbox" value="1" name=""></td>';
                    echo '<td>' . $items->id . '</td>';
                    echo '<td>' . $items->title . '</td>';
                    echo '<td>' . $items->url . '</td>';
                    echo '<td>' . $items->author . '</td>';
                    echo '<td><img src="' . $items->smallimg . '" alt="" style="width: 50px;height: 50px;"></td>';
                    echo '<td>' . $items->description . '</td>';
                    echo '<td>' . $items->add_time . '</td>';
                    echo '<td class="td-manage">';
                    echo "<a title='编辑' href='javascript:;' class='ml-5' style='text-decoration:none' onclick='question_edit(\"编辑\", \"/admin/news/edit/{$items->id}\", \"4\", \"\", \"510\")'>";
                    echo '<i class="layui-icon">&#xe642;</i>';
                    echo '</a>';
                    echo '<a title="删除" href="javascript:;" onclick="question_del(this,' . $items->id . ')" style="text-decoration:none">';
                    echo '<i class="layui-icon">&#xe640;</i>';
                    echo '</a>';
                    echo '</td>';
                    echo '</tr>';
                }
                ?>
                </tbody>
            </table>
            <input id="last_page" type="hidden" value="{{$res->lastPage()}}">
            <input id="curr_page" type="hidden" value="{{$res->currentPage()}}">
            <div id="page"></div>
        </div>
        <script src="/aiyou-admin/lib/layui/layui.js" charset="utf-8"></script>
        <script src="/aiyou-admin/js/x-layui.js" charset="utf-8"></script>
        <script>
            layui.use(['laydate','element','laypage','layer'], function(){
                $ = layui.jquery;//jquery
                laydate = layui.laydate;//日期插件
                lement = layui.element();//面包导航
                laypage = layui.laypage;//分页
                layer = layui.layer;//弹出层

                laypage({
                    cont: 'page', //容器。值支持id名、原生dom对象，jquery对象,
                    curr: $('#curr_page').val() || 1,
                    pages: $('#last_page').val(), //总页数
                    skin: 'molv', //皮肤
                    first: 1, //将首页显示为数字1,。若不显示，设置false即可
                    last: $('#last_page').val(), //将尾页显示为总页数。若不显示，设置false即可
                    prev: '<', //若不显示，设置false即可
                    next: '>', //若不显示，设置false即可
                });


                //以上模块根据需要引入
                var start = {
                    min: laydate.now()
                    ,max: '2099-06-16 23:59:59'
                    ,istoday: false
                    ,choose: function(datas){
                        end.min = datas; //开始日选好后，重置结束日的最小日期
                        end.start = datas //将结束日的初始值设定为开始日
                    }
                };

                var end = {
                    min: laydate.now()
                    ,max: '2099-06-16 23:59:59'
                    ,istoday: false
                    ,choose: function(datas){
                        start.max = datas; //结束日选好后，重置开始日的最大日期
                    }
                };

                document.getElementById('LAY_demorange_s').onclick = function(){
                    start.elem = this;
                    laydate(start);
                }
                document.getElementById('LAY_demorange_e').onclick = function(){
                    end.elem = this
                    laydate(end);
                }


                $('#page').find('a').click(function () {
                    var curr_page = $(this).text();
                    window.location.href = '/admin/news/list?page=' + curr_page;
                    return false;
                });
            });

            //批量删除提交
             function delAll () {
                layer.confirm('确认要删除吗？',function(index){
                    //捉到所有被选中的，发异步进行删除
                    layer.msg('删除成功', {icon: 1});
                });
             }

            function question_show (argument) {
                layer.msg('可以跳到前台具体问题页面',{icon:1,time:1000});
            }
            /*添加*/
            function question_add(title,url,w,h){
                x_admin_show(title,url,w,h);
            }
            //编辑
            function question_edit (title,url,id,w,h) {
                x_admin_show(title,url,w,h);
            }

            /*删除*/
            function question_del(obj,id){
                layer.confirm('确认要删除吗？',function(index){
                    //发异步删除数据
                    $.ajax({
                        type: 'post',
                        url: '/admin/news/del/' + id,
                        data: {_token: $('#token').val()},
                        success: function (res) {
                            if (res == 'ok') {
                                // 删除成功
                                $(obj).parents("tr").remove();
                                layer.msg('已删除!',{icon:1,time:1000});
                            } else {
                                layer.msg('删除失败!',{icon:1,time:1000});
                            }
                        }
                    })

                });
            }
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