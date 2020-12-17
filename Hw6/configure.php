<?php
// $host = 'localhost';
// $username = 'root';
// $password = '';
// $dbname = 'tacharya2';


// $conn = new mysqli($host, $username, $password, $dbname);
// echo 'Hello';
// // Check connection
// if ($conn->connect_error) {
//   echo 'Failed to connect to MySQL: ' . $conn->connect_error;
//   exit();

// }
// $conn-> close();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tacharya2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}