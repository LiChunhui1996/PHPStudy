<?php

//Json Format
//[1,2,5,7,8,"LINING",[6,7,8,],"hi":"ZZH"];
//{"h":"hello","w":"world"};

//encode.......................
$arr=array(1,2,5,8,'hello','world');
print_r($arr);
echo '<br>';
echo json_encode($arr);
echo '<br>';

$obj=array('h'=>'hello','h'=>'world',array(1,2,3));
echo json_encode($obj);
echo '<br>';


//decode....................
$jsonString='{[1,2,5,7,8,"LINING",[6,7,8,],"hi":"ZZH"]}';
$brr=json_encode($jsonString);
echo $brr;
echo '<br>';

