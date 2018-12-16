
<?php

    if ($_POST['a']&&$_POST['b']){
        echo $_POST['a']+$_POST['b'];
    }else{
        echo 'Please input number !';
    }


//   GET方式不能传输很大的数据
//   POST可以传输很大的数据并且很安全