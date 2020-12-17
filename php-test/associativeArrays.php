<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>key-value pairs</title>
</head>
<body>
  <form action="associativeArrays.php" method="POST">
  Your name: <input type="text" name="student">
  <input type="submit">
  </form>
<?php
$grades = array("Jim" => "A+", "Pamela" => "B+", "Tek"=> "A-");
$grades["Pamela"] = "F";
//echo $grades["Pamela"];
echo "<br>";
echo "Grade: ";
echo $grades[$_POST["student"]];
?>
</body>
</html>