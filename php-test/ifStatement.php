<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>if-else</title>
</head>
<body>
  <?php 
  $isMale = true;
  $isTall = true;
  // if($isMale && $isTall){
  if($isMale && $isTall){
 echo "I will accept him";
  }else{

    echo " Sorry, only for males!!";
    
  }
  echo "<br>";
  //can use as many as needed with boolean, string, integers etc.
  function getMax($num1, $num2){
    if($num1 > $num2){
      return $num1;
    }else{
      return $num2;
    }
  }
  echo getMax(5,9);
  
  ?>
</body>
</html>