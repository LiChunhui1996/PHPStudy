<?php

    function echoNumber(){
        for ($i=0;$i<100;$i++){
            if ($i%2==0&&$i%3==0) {
                echo $i.'<br>';
            }
        }
    }

    echoNumber();

//    &&
//    ||
//    !=
