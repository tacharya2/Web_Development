<?php
$conn = mysqli_connect('localhost', 'root', '','tutorial' );

if(!$conn){
  echo 'Connection could not be established! ';
}
  if(!mysqli_select_db($conn, 'tutorial')){

  echo 'Database not caught';
}

$Name = $_POST['usernme'];
$Email = $_POST['email'];

$sql = "INSERT INTO person (name, email) VALUES('$Name', '$Email')";

if(!mysqli_query($conn, $sql)){

echo 'Not inserted';
}else{
  echo 'One token inserted';
}
header('refresh:2; url=index.html');

?>