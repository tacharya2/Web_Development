<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 3: Function</title>
</head>

<body>
<h5>Exercise 3</h5>
  <?php
  function triangle($N)
  {
    for ($i = 0; $i <= $N; $i++) {
      echo " <br>";
      for ($j = 0; $j <= $i; $j++) {
        echo "*";
      }
    }
  }
  triangle(20);

  ?>
  <br>
  <a href="Exercise1.php">Home</a>
</body>

</html>