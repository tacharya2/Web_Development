<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h5>Choose your favorite fruit/s</h5>
  <form action="checkbox.php" method="POST">
    
    <input type="checkbox" name="fruits[]" value="apples"> Apples:<br>
    <input type="checkbox" name="fruits[]" value="oranges"> Oranges:<br>
    <input type="checkbox" name="fruits[]" value="pears"> Pears:<br>
   <input type="checkbox" name="fruits[]" value="mango">  Mango:<br>
    <input type="checkbox" name="fruits[]" value="papaya"> Papaya:<br>
   <input type="submit"> <br>
  </form>
  <?php
  $fruits = $_POST["fruits"];
  echo $fruits;
  ?>
</body>
</html>