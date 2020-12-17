<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>basic Calculator</title>
</head>

<body>


  <form action="betterCalculator.php" method="POST">
    num1: <input type="number" step="0.0001" name="num1"><br>
    Operator: <input type="text" name="op"><br>
    num2: <input type="number"step=0.001 name="num2"><br>
    <input type="submit">
  </form>


  <?php


  $num1 = $_POST["num1"];
  $op = $_POST["op"];
  $num2 = $_POST["num2"];


  echo "Result: ";
  if ($op == "+") {
    echo $num1 + $num2;
  } elseif ($op == "-") {
    echo $num1 - $num2;
  } elseif ($op == "*") {
    echo $num1 * $num2;
  } elseif ($op == "/") {
    echo $num1 / $num2;
  } else {
    echo "check your argument";
  }
  echo "<br>";


  ?>
</body>

</html>