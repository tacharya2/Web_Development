<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  class Student
  {
    var $name;
    var $major;
    var $gpa;
    function __construct($name, $major, $gpa)
    {
      $this->name = $name;
      $this->major = $major;
      $this->gpa = $gpa;
    }
    function hasHonors(){
      if($this->gpa >=3.5){
        return "true";
      }
      return "false";
    }
  }
  $student1 = new Student("Jim", "Computer Science", 3.6);
  $student2 = new Student("Crow", "Business", 3.1);
  $student3 = new Student("Jungle", "Education", 3.87);

  echo $student2->hasHonors();
  ?>
</body>

</html>