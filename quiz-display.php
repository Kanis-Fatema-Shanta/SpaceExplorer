<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Display Questions</title>
	<!--Font awesome CDN-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<script src="https://unpkg.com/scrollreveal"></script>
	<link rel="stylesheet" href="styles.css">
</head>
	<body class="oen">

		<?php
	  require "header.inc.php";?>


		<section class="discover-our-story">
			<div class="container">
				<div class="restaurant-info">

					<!-- Restaurant description -->
					<div class="restaurant-description padding-right animate-left">

						<p>
							<form action="quiz-check.php" method = "POST">
							What is your name?<br>
							<div>
							<input type="radio" name=1 value="A" > Evan<br>
									<input type="radio" name=1 value="B"> Kew Na<br>
									<input type="radio" name=1 value="C"> Jani na<br>
									<input type="radio" name=1 value="D"> None <br><br>
							</div>
							<input type="submit">
							</form>
						</p>
						<a href="#about" class="btn body-btn">About Us</a>
					</div>



				</div>
			</div>
		</section>

		<?php
	  require "footer.inc.php";?>
	</body>
</html>
