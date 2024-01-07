

<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "ppsi";
// Create connection
$db = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) ;
if (!$db) 
  {
    die("Connection failed: " . mysqli_connect_error());
  }
  else{
    // echo "Connected successfully";
  }
?>