<?php

if (!isset($_POST['name'])){
    die("Please input your name !");
}

if (!isset($_POST['age'])){
    die("Please input your age !");
}

$name=$_POST['name'];
if (empty($name)){
    die ("user name is empty !");
}

$age=$_POST['age'];
if (empty($age)){
    die ("user age is empty !");
}

include_once 'All_part_3.php';

//防止注入攻击！
$age=intval($age);


$connect=ConnectDatabase();
if ($connect){
    echo "Connect success !";
    mysqli_select_db($connect,'form');

    mysqli_query($connect,"INSERT INTO form(name,age) VALUES ('$name',$age)");

    if (mysqli_errno()){
        echo mysqli_errno();
    }

    header("Location:All_part_1.php");


}else{
    echo "Connect failure !";
}



