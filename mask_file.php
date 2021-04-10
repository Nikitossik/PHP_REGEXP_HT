<?php 

//3.1 Маска файла

$files = ['images/IMG_.png', 'images/IM.png', 'images/IMG_1.png','images/IMG_1.png.gif','images/IMG_1.pnggif'];

$mask = '/images\/IMG_\d*\.(png|gif|jpg)$/i';

for ($i=0; $i < count($files); $i++) echo preg_match($mask, $files[$i])."\n";
?>