<?php 
    // 3.3 Проверка формы адреса е-mail

    $temp = '/^[a-zA-Z]\w+@([a-zA-Z]+\.)+[a-zA-Z]+$/i';
    $emails = ['1dfhjnkdl_@gmail.com', 'kit@gmail.com.', 'kit@gmail.com', 'kit@gmail.com.ua'];

    for ($i=0; $i < count($emails); $i++) echo preg_match($temp, $emails[$i])."\n";
?>