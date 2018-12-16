<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册新用户</title>

    <style>
        #back{
            width:1500px;
            height:730px;
            background: url("232.jpg");
        }
        #login{
            margin-left: 1000px;
            width: 350px;
            height:200px;
            background: rgba(255, 249, 254, 0.60);
        }
    </style>

</head>
<body>

<div id="back">
<br><br><br><br><br><br>
    <div id="login" >
<form action="add.php" method="post" style="text-align: center">
    <br><br>
    <div style="text-align: left">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 请输入登录信息：
    </div>
    <div>nickname:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="name"><br>
    </div>
    <div>password_one：
        <input type="text" name="password_one"><br>
    </div>
    <div>password_two：
        <input type="text" name="password_two"><br>
    </div>

    <div style="text-align: left">    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit">
    </div>

</form>

    </div>
</div>

</body>
</html>