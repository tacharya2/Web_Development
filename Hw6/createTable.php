<?php 
include_once('configure.php');
$sql = "create table Album (

    Album_id INT NOT NULL AUTO_INCREMENT,
    Album_name VARCHAR(60) NOT NULL,
    Album_year DATETIME

    PRIMARY KEY(Album_id)

)";

if($conn -> query($sql) == TRUE){
echo "table created successfully";
}else{
  echo "Error creating a table";
}
?>