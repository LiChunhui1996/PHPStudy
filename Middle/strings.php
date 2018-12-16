<?php

    $str = "hello PHP ";      //声明变量
    echo $str.'<br>';

//常用功能
    echo 'needle= o 在第'.strpos($str,'o').'位';
    echo '<br>';
    echo 'needle= PH 在第'.strpos($str,'PH').'位';
    echo '<br>';

    $str_temp=substr($str,2,3);
    echo  $str_temp;
    echo '<br>';


    $str_temp=str_split($str,2);
    print_r($str_temp);
    echo '<br>';

    $str_temp=explode(' ',$str);
    print_r($str_temp);
    echo '<br>';

    $str_2="hello World !";
    $str_temp=$str.$str_2;
    echo $str_temp;
    echo '<br>';









