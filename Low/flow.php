<?php


//if else 控制流
    function getLevel($score){
        if ($score>=90) {
            return '优秀 ！';
        }elseif ($score>=80){
            return '良好 ！';
        }elseif ($score>=60){
            return '可以 ！';
        }elseif ($score>=0){
            return '天啊 ！';
        }else return '出错 ！';
    }

    echo getLevel(91).'<br>';
    echo getLevel(-1).'<br>';

//switch 控制流
    function getLevel_2($score){
        switch (intval($score/10)){
            case 9:
            case 8:     $result= '不错';break;
            case 7:
            case 6:     $result= '还行';break;
            default:
                return '垃圾';

        }
        return $result;
    }



    echo getLevel(20).'<br>';





