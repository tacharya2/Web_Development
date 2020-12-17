<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tacharya2';


$conn = new mysqli($host, $username, $password, $dbname);
echo 'Hello';
// Check connection
if ($conn->connect_error) {
  echo 'Failed to connect to MySQL: ' . $conn->connect_error;
  exit();

}
$conn-> close();
