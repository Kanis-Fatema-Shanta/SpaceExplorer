<html>
	<body>
	<?php
		$user = "root";
		$pass = "root";
		$server = "localhost";
		$conn = new mysqli($server,$user,$pass,"Evan");
		if($conn->connect_error)
			die( $conn->connect_error);
		else{
			echo $conn->error;
		echo "<form action='insrt.php' method='post'>
		Question:
		<input type='text' name='q'><br>
		Options:<br>
		A:<input type='text' name ='oa'><br>
		B:<input type='text' name ='ob'><br>
		C:<input type='text' name ='oc'><br>
		D:<input type='text' name ='od'><br>
		Answer:
		<select name='ans'>
		<option>
			A
		</option>
		<option>
			B
		</option>
		<option>
			C
		</option>
		<option>
			D
		</option>
		</select>
		<br>
		Quiz Name:
		<input type='qname'>
		<br>
		<input type='submit'>
		</form>";
	}
	?>
	</body>
</html>
