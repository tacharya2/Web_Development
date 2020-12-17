<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- include common file and call its necessary functions -->
<?php include("common.php"); myheader()?>
<div>
	<h1>Welcome!</h1>
	<ul>
		<li>
			<a href="signup.php">
				<img src="image/signup.gif" alt="icon" />
				Sign up for a new account
			</a>
		</li>
		
		<li>
      <!-- link to matches,php -->
			<a href="matches.php">
				<img src="image/heartbig.gif" alt="icon" />
				Check your matches
			</a>
		</li>
	</ul>
</div>
<br>
<!-- call myfooter and validator from common -->
<?php  myfooter()?>
<?php  validator()?>
</body>
</html>