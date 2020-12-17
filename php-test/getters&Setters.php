<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Getters & Setters</title>
</head>
<body>
  
<?php 
class Movie{
//public attributes
  public $title;
  public $rating;

  function __construct($title, $rating){
    $this-> title = $title;
    $this-> rating = $rating;

  }
}

$avengers = new Movie("Avengers", "PG-13");

echo $avengers ->rating;
?>

</body>
</html>