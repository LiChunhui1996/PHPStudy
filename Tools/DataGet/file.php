<?php


//$file=@fopen('data','w');  如果添加@符号 那么将忽略警告 ！
//$file=fopen('data','w');
//if ($file){
//    fwrite($file,'Hello PHP !');
//    echo 'OK !';
//    fclose();
//}else{
//    echo '创建文件失败 ！';
//}

echo '<br>';
$read=@fopen('data','r');
while(!feof($read)){

    $content=fgets($read);
    echo '<br>';
    echo $content;
}
fclose();

echo '<br>';
echo file_get_contents('data');










