<?php

$host = "localhost"; //host name
$user = "root"; //database user
$password = ""; //database password
$db = "practice"; //database name

$con = mysqli_connect($host, $user, $password, $db);

//now chweck either connection was ok

if(!$con){
  die("Connection failed:". mysqli_connect_error());
}



 ?>
