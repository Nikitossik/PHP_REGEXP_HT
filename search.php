<?php 
    //3.4 Поисковик
    $tmp = '/\.*\s+/i';
    $text = "Cat   cat cat   cat. Dog dog      dog dog. Frog frog   frog frog";
    print_r(array_unique(preg_split($tmp, $text)));
?>