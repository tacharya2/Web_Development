<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>madlibgame</title>
</head>
<body>
  <form action="madlibgame.php" method="get">
    Color: <input type="text" name="color"> <br>
    plural noun: <input type="text" name="pluralNoun"><br>
    celebraty: <input type="text" name="celebraty"><br>
  <input type="submit">
  </form>
  <?php 
  $color = $_GET["color"];
  $pluralNoun = $_GET["pluralNoun"];
  $celebraty = $_GET["celebraty"];
  echo "Roses are $color <br>";
  echo "$pluralNoun are blue <br>";
  echo "I love $celebraty <br>";
  
  ?>
  <a href="madlibgame.php">Home</a>
</body>
</html>