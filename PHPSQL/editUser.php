

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加用户</title>
</head>
<body>
<?php
include_once 'All_part_3.php';

if (isset($_GET['id'])&&!empty($_GET)){

    $id=$_GET['id'];
    $id=intval($id);


    $connect=ConnectDatabase();
    if($connect){
        echo "Connect success !";
        mysqli_select_db($connect, 'form');

        $result=mysqli_query($connect,"SELECT * FROM form WHERE id=$id");

        $arr=mysqli_fetch_assoc($result);
        echo '<br>';

    }else{

    }



}else{
    die("ID not define !");
}
?>

<form action="editUserServer.php" method="post">
    <div>
        用户账号：<input type="text" name="id" value="<?php echo $arr['id'];?>">
    </div>
    <div>
        用户姓名：<input type="text" name="name" value="<?php echo $arr['name'];?>">
    </div>
    <div>
        用户年龄：<input type="" name="age" value="<?php echo $arr['age'];?>">
    </div>
    <input type="submit">


</form>



</body>
</html>

