<?php
$dbconn=mysqli_connect('localhost','root','',"student");
if($dbconn){
  echo "Connected successfully";
}
else {
  die("Connection failed: " . $conn->connect_error);
}

?>
