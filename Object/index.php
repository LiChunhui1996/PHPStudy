<?php

    include 'Hello.php';

    $hello=new Hello();
    $hello->sayHello();

    include 'Note.php';
    $note=new Note();
    echo '<br>';

    include 'Man.php';
//    $man=new Man();
//    echo $man->getAge();
//    echo $man->getName();

    $man_2=new Man(10,"Li");
    echo $man_2->getAge();
    echo $man_2->getName();

    $man_2.sayHello();

