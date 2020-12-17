<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 6: Function</title>
</head>
<body>
<h5>Exercise 6</h5>
  <?php 

//without library function.  
function remove_all($string, $char){

  $len = strlen($string);
  $new_string = ""; //enpty string
  for($i = 0; $i < $len; $i++){ //loop through the string
    if($string[$i] != $char){
      $new_string = $new_string.$string[$i];//string concatention

    }
  } 
  return $new_string;
}
echo remove_all("summer is here", "e");
  
  ?>
<br>
<hr>
<!--Using Library-->
  <?php
  function remove_all2($string1, $char1){

   return str_replace($char1, '', $string1);

  } 
  echo remove_all2("summer is here", "e");
  
  ?>
  <br>
  <a href="Exercise1.php">Home</a>
</body>
</html>