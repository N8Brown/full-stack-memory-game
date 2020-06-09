<?php
session_start();

$activeUser = $_SESSION["currentUser"];
$easyBest = "";
$easyAvg = "";
$easyTotal = "";
$mediumBest = "";
$mediumAvg = "";
$mediumTotal = "";
$hardBest = "";
$hardAvg = "";
$hardTotal = "";
$insaneBest = "";
$insaneAvg = "";
$insaneTotal = "";

$userEasyBest = "";
$userEasyAvg = "";
$userEasyTotal = "";
$userMediumBest = "";
$userMediumAvg = "";
$userMediumTotal = "";
$userHardBest = "";
$userHardAvg = "";
$userHardTotal = "";
$userInsaneBest = "";
$userInsaneAvg = "";
$userInsaneTotal = "";


include("includes/connection.php");

    // ALL EASY STATS
    $getStats = "SELECT MIN(guesses) AS BestScore FROM user_stats WHERE difficulty='easy'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $easyBest = $row["BestScore"];
        }
    }

    $getStats = "SELECT AVG(guesses) AS AvgScore FROM user_stats WHERE difficulty='easy'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $easyAvg = $row["AvgScore"];
        }
    }

    $getStats = "SELECT COUNT(id) FROM user_stats WHERE difficulty='easy'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $easyTotal = $row["COUNT(id)"];
        }
    }

    // ALL MEDIUM STATS
    $getStats = "SELECT MIN(guesses) AS BestScore FROM user_stats WHERE difficulty='medium'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $mediumBest = $row["BestScore"];
        }
    }

    $getStats = "SELECT AVG(guesses) AS AvgScore FROM user_stats WHERE difficulty='medium'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $mediumAvg = $row["AvgScore"];
        }
    }

    $getStats = "SELECT COUNT(id) FROM user_stats WHERE difficulty='medium'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $mediumTotal = $row["COUNT(id)"];
        }
    }

    // ALL HARD STATS 
    $getStats = "SELECT MIN(guesses) AS BestScore FROM user_stats WHERE difficulty='hard'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $hardBest = $row["BestScore"];
        }
    }

    $getStats = "SELECT AVG(guesses) AS AvgScore FROM user_stats WHERE difficulty='hard'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $hardAvg = $row["AvgScore"];
        }
    }

    $getStats = "SELECT COUNT(id) FROM user_stats WHERE difficulty='hard'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $hardTotal = $row["COUNT(id)"];
        }
    }

    // ALL INSANE STATS 
    $getStats = "SELECT MIN(guesses) AS BestScore FROM user_stats WHERE difficulty='insane'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $insaneBest = $row["BestScore"];
        }
    }

    $getStats = "SELECT AVG(guesses) AS AvgScore FROM user_stats WHERE difficulty='insane'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $insaneAvg = $row["AvgScore"];
        }
    }

    $getStats = "SELECT COUNT(id) FROM user_stats WHERE difficulty='insane'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $insaneTotal = $row["COUNT(id)"];
        }
    }
    

if($_SESSION["loggedIn"]){
    // USER EASY STATS
    $getStats = "SELECT MIN(guesses) AS BestScore FROM user_stats WHERE user='$activeUser' AND difficulty='easy'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $userEasyBest = $row["BestScore"];
        }
    }

    $getStats = "SELECT AVG(guesses) AS AvgScore FROM user_stats WHERE user='$activeUser' AND difficulty='easy'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $userEasyAvg = $row["AvgScore"];
        }
    }

    $getStats = "SELECT COUNT(id) FROM user_stats WHERE user='$activeUser' AND difficulty='easy'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $userEasyTotal = $row["COUNT(id)"];
        }
    }

    // USER MEDIUM STATS
    $getStats = "SELECT MIN(guesses) AS BestScore FROM user_stats WHERE user='$activeUser' AND difficulty='medium'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $userMediumBest = $row["BestScore"];
        }
    }

    $getStats = "SELECT AVG(guesses) AS AvgScore FROM user_stats WHERE user='$activeUser' AND difficulty='medium'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $userMediumAvg = $row["AvgScore"];
        }
    }

    $getStats = "SELECT COUNT(id) FROM user_stats WHERE user='$activeUser' AND difficulty='medium'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $userMediumTotal = $row["COUNT(id)"];
        }
    }

    // USER HARD STATS 
    $getStats = "SELECT MIN(guesses) AS BestScore FROM user_stats WHERE user='$activeUser' AND difficulty='hard'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $userHardBest = $row["BestScore"];
        }
    }

    $getStats = "SELECT AVG(guesses) AS AvgScore FROM user_stats WHERE user='$activeUser' AND difficulty='hard'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $userHardAvg = $row["AvgScore"];
        }
    }

    $getStats = "SELECT COUNT(id) FROM user_stats WHERE user='$activeUser' AND difficulty='hard'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $userHardTotal = $row["COUNT(id)"];
        }
    }  

    // USER INSANE STATS 
    $getStats = "SELECT MIN(guesses) AS BestScore FROM user_stats WHERE user='$activeUser' AND difficulty='insane'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $userInsaneBest = $row["BestScore"];
        }
    }

    $getStats = "SELECT AVG(guesses) AS AvgScore FROM user_stats WHERE user='$activeUser' AND difficulty='insane'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $userInsaneAvg = $row["AvgScore"];
        }
    } 

    $getStats = "SELECT COUNT(id) FROM user_stats WHERE user='$activeUser' AND difficulty='insane'";
    $results = mysqli_query($connection, $getStats);
    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $userInsaneTotal = $row["COUNT(id)"];
        }
    }   
}

mysqli_close($connection);
?>