<?php


$img=imagecreatefromjpeg('picture.jpg');

imagestring($img,5,5,5,'Desktop',imagecolorallocate($img,255,0,0));
header('Content-type:image/jpeg');
imagejpeg($img);