<?php
    echo time();

    echo '<br>';


    echo date('Y年'.'m月'.'d日'.'H:'.'i:'.'s');
    echo '<br>';
    echo date('Y-m-d H-i-s');
    echo '<br>';

    echo date_default_timezone_get();
    echo '<br>';
    date_default_timezone_set('Asia/Shanghai');
    echo date('Y-m-d H:i:s');
    echo '<br>';
    echo date_default_timezone_get();
    echo '<br>';
    echo date('Y-m-d H:i:s','2000');