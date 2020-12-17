<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Return Statement</title>
</head>
<body>
  <form action="returnStatement.php" method="$_POST">
  enter a number: <input type="text"name="user">
  <input type="submit">

  </form>
  
<?php 
//cube a number from the user and return it to them

// I am trying to get the argument from the 
//user instead of giving here in the code
function cube($num){
 return  $num * $num * $num;

}
$cubeResult = cube($_POST["user"]);
echo $cubeResult;

?>

</body>
</html>