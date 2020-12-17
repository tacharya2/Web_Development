<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 5: Function</title>
</head>
<body>
<h5>Exercise 5</h5>
  <?php 

  $str = "My name is my mylem. So my lentth is My Pride?";
  print_r(array_count_values(countWords($str)));

  //$exlpode;

    function countWords($str){
      //$str = strtolower($str);
      $strArr = preg_split("/[\s,.)(]+/", $str);
      return $strArr;

    }
    countWords($str)
  
  ?>
  <br>
  <br>
  <a href="Exercise1.php">Home</a>
</body>
</html>