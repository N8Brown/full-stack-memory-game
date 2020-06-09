<?php
session_start();

include("includes/connection.php");

$updateData = json_decode($_POST["final"], true);

$username = $updateData["user"];
$difficulty = $updateData["difficulty"];
$guesses = $updateData["guesses"];

$scoreboard = array();

$recordGame = "INSERT INTO user_stats (`id`, `user`, `difficulty`, `guesses`, `timestamp`) VALUES (NULL, '$username', '$difficulty', '$guesses', CURRENT_TIMESTAMP)";
$results = mysqli_query($connection, $recordGame);
if($results){
}

// $getBest = "SELECT MIN(guesses) AS BestScore FROM user_stats WHERE user='$username' AND difficulty='$difficulty'";
// $results = mysqli_query($connection, $getBest);
// if(mysqli_num_rows($results)>0){
//     while($row = mysqli_fetch_assoc($results)){
//         array_push($scoreboard, $row["BestScore"]);
//     }
// }

// $getAvg = "SELECT AVG(guesses) AS AvgScore FROM user_stats WHERE user='$username' AND difficulty='$difficulty'";
// $results = mysqli_query($connection, $getAvg);
// if(mysqli_num_rows($results)>0){
//     while($row = mysqli_fetch_assoc($results)){
//         array_push($scoreboard, $row["AvgScore"]);
//     }
// }

// $getTotal = "SELECT COUNT(id) FROM user_stats WHERE user='$username' AND difficulty='$difficulty'";
// $results = mysqli_query($connection, $getTotal);
// if(mysqli_num_rows($results)>0){
//     while($row = mysqli_fetch_assoc($results)){
//         array_push($scoreboard, $row["COUNT(id)"]);
//     }
// }

mysqli_close($connection);

echo json_encode($scoreboard);
?>