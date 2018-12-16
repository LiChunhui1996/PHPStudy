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
if(empty($name)){
    die("没有输入昵称！ !");
}
$connect=ConnectDatabase();

$result_temp=mysqli_query($connect,"SELECT * FROM user WHERE  `name`  LIKE  '$name' ");
$userCount=mysqli_num_rows($result_temp);

if ($userCount>0){
    die("此用户名已经被占用！");
}


$password=$_POST['password_one'];
if(empty($password)){
    die("没有输入密码！");
}

$password_two=$_POST['password_two'];
if(empty($password_two)){
    die("请再次输入密码 ！");
}

if ($password_two!=$password){
    die("两次密码输入不一致！");
}


$password=intval($password);



mysqli_query($connect,"INSERT INTO user(name,password) VALUES ('$name',$password)");
echo "注册完成 ！";

$result=mysqli_query($connect,"SELECT * FROM user WHERE  `name` LIKE '$name' ORDER BY id DESC ");

$result_arr=mysqli_fetch_assoc($result);
$idFromDatabase=$result_arr['id'];
print_r($result_arr);
echo "您的ID是 ：$idFromDatabase";

if ($idFromDatabase>0){
    header("Location:main.html");
}else{
    echo "你未完成注册 ！";
}
?>

</body>
</html>

