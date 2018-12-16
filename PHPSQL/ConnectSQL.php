<?php

//连接到数据库
$connect = new mysqli("localhost", "root", "", "test");

if ($connect) {
    echo "Connect success !" . '<br>';
    mysqli_select_db($connect, 'form');


//    如果只想查询ID=2 的用户 添加WHERE id=2即可：
//        如：SELECT * FROM form WHERE id=2
//    如果只想呈现ID NAME两个字段 将*（*号表示查询所有的内容）换成id，name即可
//        如：SELECT id,name FROM form
    $result = mysqli_query($connect, "SELECT * FROM form ");
    if (!$result) {
        printf("Error: %s\n", mysqli_error($connect));
        exit();
    } else {
        echo "Database get success !" . '<br>';
    }
//    $result_array=mysqli_fetch_array($result);
//    print_r($result_array);

    $data_count = mysqli_num_rows($result);
    echo '<br>' . "数据条数：" . $data_count . '<br>';

    for ($i = 0; $i < $data_count; $i++) {
        print_r(mysqli_fetch_assoc($result));
    }

//      高效的查询数据的条数：
//      条件查询方法：("$connect,"SELECT COUNT(*) FROM form WHERE name='ZhangSan'");
//      $result=mysqli_query("$connect,"SELECT COUNT(*) FROM form");
//      if ($result){
//          $result_array=mysqli_fetch_array($result);
//          echo "数据条数：".$result_array[0];
//       }else{
//          echo "数据为0 ！";
//       }
//


}else{
    echo "Connect failure !";
}

