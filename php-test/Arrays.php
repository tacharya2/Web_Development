<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays</title>
</head>
<body>
  <?php 
  $friends = array("Kevin", "Smothie", "Prinsa", "Prajol", "Hema", 1, 125, 12.03);
  echo $friends[0 ] , $friends[7];
  echo $friends[14] = "Angela";
  echo $friends[14];
  echo "<br>";
  echo count(($friends));
  ?>
</body>
</html>