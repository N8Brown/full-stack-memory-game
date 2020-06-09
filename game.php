<?php 
session_start();

include("includes/header.php"); 
?>

<main>

    <section id="game">
        <nav class="navbar navbar-dark bg-dark">
            <span id="currentUser" class="navbar-brand mb-0"><?php echo $_SESSION["currentUser"]; ?></span>
            <span id="currentScore" class= "navbar-brand mb-0 h1">Guesses: <span class="guess-count">0</span></span>
            <span><button type="button" id="quit" class="btn btn-link" onclick="quitGame()">Quit</button></span>
        </nav>
        <section id="game-select" class="container full-vh">
            <section class="row full-height">
                <section class="col full-height text-center">
                    <form id="game-diff-form">
                        <div class="form-group">
                            <label for="difficulty">Choose Difficulty</label>
                            <select class="form-control" id="difficulty" name="difficulty">
                                <option value="easy">Easy</option>
                                <option value="medium">Medium</option>
                                <option value="hard">Hard</option>
                                <option value="insane">Insane</option>
                            </select>
                        </div>
                        <button type="button" id="start" class="btn btn-dark" onclick="startGame()">Start Game</button>
                    </form>
                    <div>
                        <a href="dashboard.php">Return to Dashboard</a>
                    </div>
                </section>
            </section>
        </section>

        <section id="game-board" class="container full-vh">
            <section id="cards" class="row"></section>
        </section>

        <section id="game-over" class="modal-container">
            <section class="modal-body">
                <header>
                    <h3>GAME OVER</h3>
                </header>
                <section>
                    <p>You completed the game in <span class="guess-count">0</span> guesses!</p>
                    <p>Play again?</p>
                </section>
                <footer>
                    <form id="record-game" action="" method="POST">
                        <input type="hidden" id="game-difficulty" name="game-difficulty" value="">                            
                        <input type="hidden" id="game-score" name="game-score" value="">
                    </form>

                    <button type="button" id="again" class="btn btn-dark" onclick="playAgain()">Yes</button>
                    <button type="button" id="main-menu" class="btn btn-dark" onclick="mainMenu()">No</button>
                </footer>
            </section>
        </section>
    </section>

</main>

<script src="scripts-min.js"></script>
<?php include("includes/footer.php"); ?>