<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>For Loop</title>
</head>
<body>
  <?php 
  $luck = array(4,8,11,17,7,16,19,21);
  for($i = 0; $i < count($luck); $i++){
    echo "<br>";
    echo "$luck[$i]";
  }
  ?>
</body>
</html>