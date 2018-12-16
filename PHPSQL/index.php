<?php

//$connect=mysql_connect('localhost','root','');
//if ($connect){
//    echo "连接成功 ！";
//}else{
//    echo "连接失败 ！";
//}


//    $connect = new mysqli("localhost", "root", "", "");
//    if($connect)  {
//        echo "php connect successful";
//        mysqli_select_db();
//        $result=mysqli_query("SELECT * FORM user");
//        $result_arr=mysqli_fetch_array($result);
//        print_r($result_arr);
//
//    }else{
//        echo "database error";
//    }
//    $connect->close();


//
//$con = new mysqli("localhost", "root", "", "");

//$con->query('set names utf8;');
//$sql = "SELECT * FROM 'user' ";
//$result = $con->query($sql);
//$data=array();
//while ($tmp=mysqli_fetch_assoc($result)) {
//    $data[]=$tmp;
//}
//var_dump($data);
//print_r($data);

$mysqli = new mysqli("localhost", "root", "", "");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}else{
    echo "Success !";
}

if ($mysqli->query("CREATE TEMPORARY TABLE myCity LIKE City") === TRUE) {
    printf("Table myCity successfully created.\n");
}

//$con->query('set names utf8;');
//$sql="INSERT INTO 'user' (name,age) VALUES ('zl','23')";
//if($result = $con->query($sql)){
//    echo "成功";
//}else{
//    echo "失败";
//}
//





















