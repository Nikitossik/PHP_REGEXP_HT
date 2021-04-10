<?php 
  //3.2 Замена шаблона

  $text = "<p>Права пользователей:</p>
  <ul>
    <li>Administrator</li>
    <li>Editor</li>
    <li>Subscriber</li>
  </ul>";
  $temp = '/<li>(\w+)<\/li>/';
  $replace = '<li><a href="http://www.php.kh.ua/script.php?role=$1">$1</a></li>';
  $text = preg_replace($temp, $replace, $text);
  echo $text;
  
?>