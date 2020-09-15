<html>
	<?php
		$user = "root";
		$pass = "root";
		$server = "localhost";
		$conn = new mysqli($server,$user,$pass,"Evan");
		$sql = "CREATE TABLE Q(id int(6) AUTO_INCREMENT primary key,q LONGTEXT,opa TEXT,opb LONGTEXT,opc LONGTEXT,opd LONGTEXT,ans LONGTEXT)";
		if($conn->query("SELECT * from Q")==FALSE)
			$conn->query($sql);echo $conn->error;
		$sql = "INSERT INTO Q(q,opa,opb,opc,opd,ans)
		 values('".$_POST['q']."','".$_POST['oa']."','".$_POST['ob']."','".$_POST['oc']."','".$_POST['od']."','".$_POST['ans']."')";
		 $conn->query($sql);
		 echo $conn->error;
	?>
</html>
