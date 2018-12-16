<?php
include_once 'All_part_3.php';

if (empty($_POST['id'])){
    die("ID not define !");
}

if (empty($_POST['name'])){
    die("name not define !");
}

if (empty($_POST['age'])){
    die("age not define !");
}



$id=$_POST['id'];
$id=intval($id);

$name=$_POST['name'];

$age=$_POST['age'];
$age=intval($age);


$connect=ConnectDatabase();
if($connect){
    echo "Connect success !";
    mysqli_select_db($connect, 'form');

    $result=mysqli_query($connect,"UPDATE form SET name='$name',age=$age WHERE id=$id");

    $arr=mysqli_fetch_assoc($result);
    echo '<br>';

    header("Location:All_part_1.php");


}else{

}


