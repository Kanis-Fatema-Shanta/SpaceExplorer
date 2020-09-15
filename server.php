<?php
session_start();
$con=mysqli_connect('localhost','root','','earth');
if(!$con){
  die("Connection failed:". mysqli_connect_error());
}

?>
