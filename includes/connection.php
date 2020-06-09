<?php

$host = "mysql.nathanabrown.com";
$user = "nathanabrown";
$password = "gU58URDvgubCcCn";
$database = "nabmemorygame";

// Create connection
$connection = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

?>