<?php

    $arr=array();
    $arr[0]="hello ";
    $arr[1]="world ";
    $arr[2]=2;
    $arr[3]=3.14;

    print_r($arr);


    $brr=array();
    for ($i=0;$i<10;$i++){
        array_push($brr,'Item'.$i.'<br>');
    }

    $brr=array('10'=>'10','11'=>'11');

    print_r($brr);












