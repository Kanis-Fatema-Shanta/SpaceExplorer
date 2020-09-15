<?php
include('server.php');

$id=mysqli_escape_string($con, $_GET['id']);
mysqli_query($con, "update user set varification_status=1 where varification_id ='$id'");
echo "Your account is varified <br>";
 ?>
<a href="login.php">Click here for login your page</a>
