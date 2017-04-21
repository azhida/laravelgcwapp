<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>login</title>

        <!-- Styles -->
        <style>


        </style>
    </head>
    <body>
<h3>后台管理</h3>
		<form action="{{url('/admin/login')}}" method="post"><br>
        {{ csrf_field() }}
			用户名：<input type="text" name="username" value=""><br><br>
			密码：<input type="text" name="password" value=""><br><br>
			验证码：<input type="text" name="code" id="code" value="">
			<?php echo $img?>
			



			<input type="submit" value="登录">
		</form>

    </body>
</html>
