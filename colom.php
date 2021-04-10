<?php 
    //3.6 Двоеточие
    $text = 'Lorem: ipsum dolor sit amet: consectetur adipisicing: elit.';
    if(preg_match_all('/\w+(?=:)/i', $text, $all));
    print_r($all);
?>