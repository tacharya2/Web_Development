<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Submit</title>
</head>
<body>
<?php
include("common.php");
myheader();
 $file1 = "singles.txt";
  $current_content1 = file_get_contents($file1);

  ?>
<pre>
  Thank you
  Welcome to <strong>NerdLuv!</strong> <?php $user["name"] ?>
  <br>
  Now <a href="matches.php">Log in to see your matches!</a>
</pre>
  <?php
  $current_content1 .= $_POST["name"] . "," . $_POST["gender"] . "," .
    $_POST["number"]  . "," . $_POST["personality"] . "," . $_POST["favoriteOs"]
    . "," . $_POST["ageStart"] . "," . $_POST["ageEnd"] . "\n";
  file_put_contents($file1, $current_content1);

  ?>
  <?php
$file2 = "matches.php";
$current_content2 = file_get_contents($file2);


$current_content2 .= $_GET["name"] . "\n";
file_put_contents($file2, $current_content2);

myfooter();
validator();

?> 
<p>
Note: Please switch <strong>signup-submit.php</strong> in the folder to see some robustness
I have tried but couldn't make it as expected. But looking for some credit for code.
just rename <strong>signup-submit1.php</strong> with <strong>signup-submit.php3</strong> 
</p>
</body>
</html>