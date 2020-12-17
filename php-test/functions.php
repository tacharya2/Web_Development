<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>functions</title>
</head>
<body>
  <form action="functions.php" method="POST">
Your name: <input type="text" name="userName">
<input type="submit">

  </form>
  <?php

  //$name = $_GET["userName"];
  function sayHi($userName){

    echo ("Hello $userName");
  }
  sayHi($_POST[$userName]);
  
  ?>
</body>
</html>