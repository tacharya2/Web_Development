<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  require("restaurant.html");
  echo "<h1>Henry Fav Restaurant</h1>";
  if (date("m") == 10) { //taken care for this month only
    $m = "October";
    echo "Order processed at " . date("h:i") . "," . date("d") . "th " . "$m " . date("20y") . " <br> <br>";
  }
  if ($_POST["submit"]) {
    echo "<b>~~Your order is as follows~~</b>" . "<br> <br>";

    echo "Plates ordered: ";
    $num1 = (int)$_POST["Plate1"];
    $num2 = (int)$_POST["Plate2"];
    $num3 = (int)$_POST["Plate3"];

    $platetotal =  $num1 + $num2 + $num3;
    echo $platetotal . "<br>";
  }
  if ($platetotal == 0) {
    echo "You did not ordered anything on the previous page! <br>";
  }
  $subtotal =  $num1 * 2100 + $num2 * 199 + $num2 * 899;

  echo "Subtotal: $" . number_format($subtotal, 2);

  echo "<br>";
  $tot_tax =  ($subtotal * 0.10 + $subtotal);

  echo "Total including tax: $" . number_format($tot_tax, 2);
  echo  "<br><br><br><br>";

  $selection = $_POST["find"];
  if ($selection == "a") {
    echo "<p>Customer referred by Google </p>";
  } else if ($selection == "b") {
    echo "<p>Customer referred by Web Ad </p>";
  } else if ($selection == "c") {
    echo "<p>Customer referred by Tv ad </p>";
  } else if ($selection == "d") {
    echo "<p>Customer referred by Word by mouth </p>";
  } else {
    echo "Did you forgot make a selection?";
  }
  ?>
</body>

</html>