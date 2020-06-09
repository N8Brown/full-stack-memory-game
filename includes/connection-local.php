<?php

$host = "localhost:8889";
$user = "root";
$password = "root";
$database = "memory";

// Create connection
$connection = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

?>