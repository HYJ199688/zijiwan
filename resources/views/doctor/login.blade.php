<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>登录</title>
</head>
<body>

<form  name="input" action="{{ route('doctor.login') }}" method="post">
    {{csrf_field()}}
    姓名<input type="text" name="name" ><br>
    邮箱<input type="text" name="email"><br>
    密码<input type="password" name="password" ><br>

    <button type="submit" >登录</button>
</form>
</body>
</html>