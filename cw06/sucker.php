<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Buy Your Way to a Better Education!</title>
	<link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<?php
	if (($_SERVER["REQUEST_METHOD"] == "POST") &&
		(!empty($_POST["name"])) && (!empty($_POST["options"])) && (!empty($_POST["card_number"])) && (!empty($_POST["card_type"]))
	) {
		$name = ($_POST["name"]);
		$options = ($_POST["options"]);
		$card_number = ($_POST["card_number"]);
		$card_type = ($_POST["card_type"]);
	?>

		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Customer: </dt>
			<dd>

				<p><?php echo $name ?></p>
			</dd>

			<dt>State: </dt>
			<dd>

				<p><?php echo $options ?></p>
			</dd>
			<dt>Card Number: </dt>
			<dd>
				<p><?php echo $card_number ?></p>
			</dd>

			<dt>Card Type: </dt>
			<dd>

				<p><?php echo $card_type ?></p>
			</dd>
		</dl>
	<?php

	} else {
		echo "<h2> Sorry!</h2> <br>";
		echo " <b>You didn't fill out the form completely.</b<br>";
		echo 	'<a href= "buyagrade.html">try again?</a>';
	}

	?>


	<?php
	$file1 = "suckers.html";

	$current_content1 = file_get_contents($file1);


	$current_content1 .= "<pre>" . $_POST["name"] . ";" . $_POST["options"] . ";" .
		$_POST["card_number"]	. ";" . $_POST["card_type"] . "</pre>";


	file_put_contents($file1, $current_content1);

	?>
	<br>
	<a href="suckers.html">suckers.html(output)</a>
	<br>
	<a href="buyagrade.html">Home</a>

</body>

</html>