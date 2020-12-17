<?php
 include_once('./configure.php');
// $sql = "create table Album (


//     Album_id INT(15) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     Album_name VARCHAR(60) NOT NULL,
//     Album_year DATETIME

// )";

// if ($conn->query($sql) === TRUE) {
//   echo "table created successfully";
// } else {
//   echo "Error creating a table";
// }
$sql = "create table AlbumX (
  Album_id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Album_name VARCHAR(10) NOT NULL,
  Album_year DATETIME
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
