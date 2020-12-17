<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 2: Loops</title>
</head>
<body>
<h5>Exercise 2</h5>
  <?php 
  
  for($i = 1; $i < 6; $i++ ){
    echo " <br>";
    
    for($j = 0; $j < $i; $j++ ){
      echo "*"; 
    }
  }
  ?>
  <br>
  <a href="Exercise1.php">Home</a>
</body>
</html>