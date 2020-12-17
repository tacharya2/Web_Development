<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book class</title>
</head>
<body>
<?php 

class Book{
  //parameters
  var $title;
  var $author;
  var $pages;
  var $publication;
  function __construct(){

   echo"Anywhere you create a new book object, you'll fin me <br>";

   //we can also pass a parameter such as $name inside the constructors
   // and pass the actual argumen from an object that will echo at $name
   //called from each instaces of the class.
  }
}
$book1 = new Book(); //an instance of an Book class (object)
$book1 -> title = "Herry Potter"; 
$book1 -> author = "JK Rowling"; 
$book1 -> pages = 12356; 
$book1 -> publication = "Kalyani BiShow"; 
echo $book1->title;
echo "<br>";
echo $book1->author;
echo "<br>";
echo $book1->pages;
echo "<br>";
echo $book1->publication;
?>
<b><strong><hr></strong></b>
<?php
$book2 = new Book(); //an instance of an Book class (object)
$book2 -> title = "Lord Of The Rings "; 
$book2 -> author = "Tolkien"; 
$book2 -> pages = 900; 
$book2 -> publication = "Kamran Griefer"; 
echo $book2->title;
echo "<br>";
echo $book2->author;
echo "<br>";
echo $book2->pages;
echo "<br>";
echo $book2->publication;
?>
<br>
<?php 

$book2 = new Book(); 

?>
</body>
</html>