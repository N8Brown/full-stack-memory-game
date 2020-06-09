<?php 
session_start();

include("includes/header.php"); 
?>

<main class="full-vh">
    <?php include("includes/navbar.php"); ?>

    <section class="container full-height">
        <section class="row full-height" id="confirm-container">
            <div class="alert alert-success text-center" role="alert" id="confirm-alert">
                <h1>SUCCESS!</h1>
                <p>Congratulations you have successfully registerd for the <strong>Memory: Web Developer Edition</strong> game. Now whenever you sign in and play, your game stats will be recorded.</p>
                <hr>
                <a href="dashboard.php" class="btn btn-success">Continue</a>
            </div>
        </section>
    </section>

</main>

<?php include("includes/footer.php"); ?>