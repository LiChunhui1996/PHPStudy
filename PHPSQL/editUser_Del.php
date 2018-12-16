<?php
include_once 'All_part_3.php';

if (empty($_GET['id'])){
    die("ID not define !");
}

$id=$_GET['id'];
$id=intval($id);


$connect=ConnectDatabase();
if($connect){
    echo "Connect success !";
    mysqli_select_db($connect, 'form');

    $result=mysqli_query($connect,"DELETE FROM form WHERE id=$id");

    $arr=mysqli_fetch_assoc($result);
    echo '<br>';

    header("Location:All_part_1.php");


}else{

}
