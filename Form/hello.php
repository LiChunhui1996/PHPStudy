<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
<?php

if (isset($_GET['name'])&&$_GET['name']){
    echo 'hello , '.$_GET['name'].' !';
}else{
    echo 'Please input name !';
}
?>

</body>
</html>

