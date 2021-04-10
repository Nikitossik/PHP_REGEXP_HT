<?php 
    $tmp = '/(\$\w+)/i';
    $text = '$Lorem $ipsum $dolor sit amet consectetur $adipisicing elit.';
    $text = preg_replace($tmp, '<b>$1</b>', $text);
    echo $text;
?>