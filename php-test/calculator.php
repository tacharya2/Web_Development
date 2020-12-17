<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
</head>
<body>
<form action="calculator.php">
num1: <input type="number" name="num1" id="">
  <br>
 num2:  <input type="number" name="num2">
  <input type="submit">
</form>

  <?php   echo "add: "; echo $_GET["num1"] + $_GET["num2"];
  echo "<br>"; ?>
  <?php   echo "difference: "; echo $_GET["num1"] - $_GET["num2"];
  echo "<br>"; ?>
  <?php   echo "product: "; echo $_GET["num1"] * $_GET["num2"];
  echo "<br>"; ?>
  <?php   echo "division: "; echo $_GET["num1"] / $_GET["num2"];
  echo "<br>"; ?>
  <a href="calculator.php">Home</a>
</body>
</html>