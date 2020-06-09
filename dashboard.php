<?php 
session_start();

if(!$_SESSION["currentUser"]){
    $_SESSION["currentUser"] = "Guest";
}

include("includes/stats.php");
include("includes/header.php"); 
?>

<main class="full-vh">
    <nav class="navbar navbar-dark bg-dark">
        <span class="nav navbar-nav navbar-text">
            <?php echo $_SESSION["currentUser"]; ?>
        </span>
        <span class="navbar-brand">
            <img src="icons/memory-game.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            <span id="nav-logo-title">Memory: Web Developer Edition</span>
        </span>
        <span class="nav navbar-nav">
            <a href="logout.php">
                <?php if($_SESSION["currentUser"] == "Guest"){ echo "Exit";} else { echo "Logout";} ?>
            </a>
        </span>
    </nav>

    <section class="container full-height">
        <section class="row">
            <section class="col text-center play">
                <a href="game.php" class="btn btn-dark main-btn">Play Game</a>
            </section>
        </section>

        <?php if($_SESSION["loggedIn"]){ ?>
        <section class="row">
            <section class="col text-center">
                <h2 class="dash-h2"><?php echo $_SESSION["currentUser"]; ?>'s Stats</h2>
            </section>
        </section>
        <hr>
        <section class="row table-container">
            <section class="col-sm-12 col-md-4">
                <h3 class="table-title">Games Played</h3>
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th>Difficulty</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Easy</td>
                            <td><?php echo $userEasyTotal; ?></td>
                        </tr>
                        <tr>
                            <td>Medium</td>
                            <td><?php echo $userMediumTotal; ?></td>
                        </tr>
                        <tr>
                            <td>Hard</td>
                            <td><?php echo $userHardTotal; ?></td>
                        </tr>
                        <tr>
                            <td>Insane</td>
                            <td><?php echo $userInsaneTotal; ?></td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="col-sm-12 col-md-4">
                <h3 class="table-title">Average Scores</h3>
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th>Difficulty</th>
                            <th>Guesses</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Easy</td>
                            <td><?php if(round($userEasyAvg) == 0){echo "";} else{echo round($userEasyAvg);} ?></td>
                        </tr>
                        <tr>
                            <td>Medium</td>
                            <td><?php if(round($userMediumAvg) == 0){echo "";} else{echo round($userMediumAvg);} ?></td>
                        </tr>
                        <tr>
                            <td>Hard</td>
                            <td><?php if(round($userHardAvg) == 0){echo "";} else{echo round($userHardAvg);} ?></td>
                        </tr>
                        <tr>
                            <td>Insane</td>
                            <td><?php if(round($userInsaneAvg) == 0){echo "";} else{echo round($userInsaneAvg);} ?></td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="col-sm-12 col-md-4">
                <h3 class="table-title">Best Scores</h3>
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th>Difficulty</th>
                            <th>Guesses</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Easy</td>
                            <td><?php echo $userEasyBest; ?></td>
                        </tr>
                        <tr>
                            <td>Medium</td>
                            <td><?php echo $userMediumBest; ?></td>
                        </tr>
                        <tr>
                            <td>Hard</td>
                            <td><?php echo $userHardBest; ?></td>
                        </tr>
                        <tr>
                            <td>Insane</td>
                            <td><?php echo $userInsaneBest; ?></td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </section>

        <?php } ?>

        <section class="row">
            <section class="col text-center">
                <h2 class="dash-h2">All Users' Stats</h2>
                <?php if(!$_SESSION["loggedIn"]){ ?>
                <small>*<a href="login.php">Sign In</a> or <a href="register.php">Register</a> to track and view your personal stats.</small>
                <?php } ?>
            </section>
        </section>
        <hr>
        <section class="row table-container">
            <section class="col-sm-12 col-md-4">
                <h3 class="table-title">Games Played</h3>
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th>Difficulty</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Easy</td>
                            <td><?php echo $easyTotal; ?></td>
                        </tr>
                        <tr>
                            <td>Medium</td>
                            <td><?php echo $mediumTotal; ?></td>
                        </tr>
                        <tr>
                            <td>Hard</td>
                            <td><?php echo $hardTotal; ?></td>
                        </tr>
                        <tr>
                            <td>Insane</td>
                            <td><?php echo $insaneTotal; ?></td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="col-sm-12 col-md-4">
                <h3 class="table-title">Average Scores</h3>
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th>Difficulty</th>
                            <th>Guesses</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Easy</td>
                            <td><?php if(round($easyAvg) == 0){echo "N/A";} else{echo round($easyAvg);} ?></td>
                        </tr>
                        <tr>
                            <td>Medium</td>
                            <td><?php if(round($mediumAvg) == 0){echo "N/A";} else{echo round($mediumAvg);} ?></td>
                        </tr>
                        <tr>
                            <td>Hard</td>
                            <td><?php if(round($hardAvg) == 0){echo "N/A";} else{echo round($hardAvg);} ?></td>
                        </tr>
                        <tr>
                            <td>Insane</td>
                            <td><?php if(round($insaneAvg) == 0){echo "N/A";} else{echo round($insaneAvg);} ?></td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="col-sm-12 col-md-4">
                <h3 class="table-title">Best Scores</h3>
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th>Difficulty</th>
                            <th>Guesses</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Easy</td>
                            <td><?php echo $easyBest; ?></td>
                        </tr>
                        <tr>
                            <td>Medium</td>
                            <td><?php echo $mediumBest; ?></td>
                        </tr>
                        <tr>
                            <td>Hard</td>
                            <td><?php echo $hardBest; ?></td>
                        </tr>
                        <tr>
                            <td>Insane</td>
                            <td><?php echo $insaneBest; ?></td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </section>
    </section>
</main>

<?php include("includes/footer.php"); ?>