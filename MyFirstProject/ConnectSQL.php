<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

function ConnectDatabase(){
    $connect = new mysqli("103.230.121.7:3306", "tbhynnle01", "299792458", "tbhynnle01");

    if ($connect) {
        echo "正在检索数据库 !" . '<br>';
        mysqli_select_db($connect, 'user');
    }else{
        echo "连接数据库失败 !";
    }

    return $connect;
    //music.163.com/outchain/player?type=2&id=37877141&auto=0&height=66

}
?>
</body>
</html>


