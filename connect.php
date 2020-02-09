<?php

$user= 'root';
$pass = '';
$db= 'project1' ;

$db = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
  echo"great work";
?>
