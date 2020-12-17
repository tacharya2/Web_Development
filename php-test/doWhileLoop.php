<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Do while loop</title>
</head>
<body>
  <?php 
  $index = 1;
  while($index < 5){
    echo "$index <br>";
    $index++;
  }
  ?>
  <?php
  $index2 = 0;  
  do{
    echo "$index2 <br>"; 
    $index2++;
  }while($index2 <= 10);
  
  ?>
</body>
</html>