<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $string = "To be or noe to be";
  $integer = 30;
  $name = "Tek";
  $float = 3.75;
  $boolean = false;
  $null = null;//null
  echo "Hello World <br>";

  //String
  $var = "GirafFe AcadEmy <br>";
  $var[2]  = "T";
  echo strtolower($var);
  echo strtoupper($var);
  echo $var[6];
  echo "<br>";
  echo str_replace("GiTafFe", "Panda", $var);
  echo"<br>";
  echo substr($var, 7, 5);// starting at 8th and grab 5
  
  ?>
</body>
</html>