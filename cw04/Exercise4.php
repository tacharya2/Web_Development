<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 4: Function</title>
</head>

<body>
<h5>Exercise 4</h5>
  <?php

  function word_count($token){
    if($token == null){
      return "Please enter a valid string";
    }
    $count = 1;
    //$substring = substr($token, 0, strlen($token)-1);
    for($i = 0; $i < strlen($token); $i++){
      $char = substr($token, $i, 1);
      if(ctype_space($char)){
        $count+=1;
      }
    }
    //echo $count;
    return $count;
  }
  echo word_count("How many words are there in this sentence"), "<br>";

  ?>
  <br>
  <a href="Exercise1.php">Home</a>
</body>

</html>