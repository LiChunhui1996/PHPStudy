<?php

include_once 'All_part_2.php';
include_once 'All_part_3.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>封装的SQL操作</title>
</head>
<body>

<a href="addUser.html">添加用户</a>
<br>
<br>


<?php

$connect=ConnectDatabase();

if ($connect) {
    echo "Connect success !" . '<br>';
    mysqli_select_db($connect, 'form');
    //ASC 表示正序 DESC 表示倒序
    $result = mysqli_query($connect, "SELECT * FROM form ORDER BY id ASC ");
    $dataCount=mysqli_num_rows($result);
    echo $dataCount;

    echo " <table width='400' border='1' >
            <tr><th>id</th><th>name</th><th>age</th><th>修改</th><th>删除</th></tr>";
    for ($i=0;$i<$dataCount;$i++){
        $result_arr=mysqli_fetch_assoc($result);
        $id=$result_arr['id'];
        $name=$result_arr['name'];
        $age=$result_arr['age'];
        echo "<tr><td>$id</td><td>$name</td><td>$age</td><td><a href='editUser.php?id=$id'>修改</a></td><td><a href='editUser_Del.php?id=$id'>删除</a></td></tr>";
//        print_r($result_arr);
    }
    echo "<table>";

}else{
    echo "Connect failure";
}

?>
</body>
</html>


