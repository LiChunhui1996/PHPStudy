<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>悦享网</title>
    <style>
        #back{
            width:1500px;
            height:730px;
            background: url("232.jpg");
        }
        #login{
            margin-left: 1000px;
            margin-top: 130px;
            width: 350px;
            height:200px;
            background: rgba(255, 249, 254, 0.60);
        }
        #info{
            margin-left: 500px;
            margin-top: 290px;
            width: 500px;
            height:80px;
            background: rgba(255, 249, 254, 0.50);
        }
    </style>
</head>
<body>
<div id="back" >
    <h3>&nbsp;欢迎您登陆乐享网！</h3>

<div id="login" >
    <br>
    <h4 style="text-align: left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请登录\注册：</h4>
    <form action="login.php" method="post" style="text-align: center">
        <div>昵称：
            <input type="text" name="name" ><br>
        </div>
        <div>密码：
            <input type="password" name="password" ><br>
        </div>
        <div style="text-align: left">
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" value="登陆">
            <input type="button"  value=注册 class="btn"
                   onclick="location.href='addphp.php'" />
        </div>

    </form>


</div>


<div id="info" style="text-align: center">
<h6>
    <?php
            date_default_timezone_set('Asia/Shanghai');
            echo '<br>';
            echo "欢迎您登陆乐享网，听音乐，上悦享。".'<br>';
            echo "网络文化许可证：陕网文[2017]0298-029号".'<br>';
            echo date('Y年'.'m月'.'d日 '.'H:'.'i:'.'s').'<br>';
            echo " ©2016-2017HappyMusic.com";
    ?>
</h6>
</div>
</div>


</body>
</html>