<?php

include_once 'All_part_2.php';

function ConnectDatabase(){
    return new mysqli(MYSQL_HOST,MYSQL_ID,MYSQL_PW,MYSQL_AIM);
}
