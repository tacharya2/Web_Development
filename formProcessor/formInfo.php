<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php 
if($_POST["submit"]){
  echo "First name: ".$_POST["FirstName"] ."<br>";
  echo "Last name: ".$_POST["LastName"] ."<br>";
  echo "Age: ".$_POST["Age"] ."<br>";
  echo "Gender: ".$_POST["Gender"] ."<br>";
  echo "E-mail: ".$_POST["email"] ."<br>";
}
?>
</body>
</html>