<?php

    function printHelloPHP(){
        echo 'hello PHP !';
        echo '<br>';
        echo 'hello World !';
        echo '<br>';
    }

    printHelloPHP();

    $fun='printHelloPHP';
    $fun();                                   //这样也可以调用这个函数

//一般的函数
    function sayHelloTo($name){
        echo 'Hello '.$name.' !';           //Php 里面字符串相连接用的是‘.’
        echo '<br>';
    }

    sayHelloTo('LiSi');


//多参数的调用
    function plus($a,$b){
        echo '$a+$b='.($a+$b).'<br>';
        echo "$a=$a,$b=$b";
        echo '<br>';

        return $a+$b;
    }

    plus('3','4');


    if (plus('3','4')==6) echo "right !";
    else echo plus('3','4');
























