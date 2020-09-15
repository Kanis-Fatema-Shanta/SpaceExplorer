<html>
	<head>
		Show Scores
	</head>
	<body>
		<?php
		$user = "root";
		$pass = "root";
		$db = "Evan";
		$server = "localhost";
		$conn = new mysqli($server,$user,$pass,$db);
		if($conn->connect_error)
		{
			echo $conn->connect_error;
		}
		else
		{
			$sql = "SELECT * FROM Q";
			$res = $conn->query($sql);
			$cnt = 1;
			$score  =0;
			while($row = $res->fetch_assoc())
			{
				
				if($_POST[$cnt]==$row['ans'])
					$score++;
				$cnt++;
			}
			echo "Your score is ".$score . "<br>";
		}
		?>
	</body>
</html>
