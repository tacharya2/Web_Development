<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
	<title>Album Info</title>
	<link href="album.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<?php
	if (($_SERVER["REQUEST_METHOD"] == "POST") && (!empty($_POST["name"]))
		(!empty($_POST["album"])) && (!empty($_POST["artist"])) && (!empty($_POST["music"])) && (!empty($_POST["year"]))
	) {
     
		$name = ($_POST["name"]);
		$album = ($_POST["album"]);
		$artist = ($_POST["artist"]);
		$music = ($_POST["music"]);
		$year = ($_POST["year"]);
	?>

		<h1>Thank You $name!</h1>

		<p>Your information has been submitted.</p>
	<?php

	} else {
		echo "<h2> Sorry!</h2> <br>";
		echo " <b>You didn't fill out the form completely.</b<br>";
	}

	?>


</body>

</html>