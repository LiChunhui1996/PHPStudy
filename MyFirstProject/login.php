<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

include_once 'ConnectSQL.php';


$name=$_POST['name'];

$password=intval($_POST['password']);

if (empty($name)){
    die("请输入您的用户名 ，点击返回重新登录 ！");
}
if (empty($password)){
    die("请输入您的密码 ，点击返回重新登录 ！");
}


$connect=ConnectDatabase();

$result=mysqli_query($connect,"SELECT * FROM `user` WHERE `name` LIKE '$name' ");

$result_arr=mysqli_fetch_assoc($result);
$passwordFromDatabase=$result_arr['password'];
if ($passwordFromDatabase==$password){
    echo "登陆成功 ！";
    header("Location:main.html");
}else{
    echo "密码错误，请重新登录 ！";
}
?>

</body>
</html>

