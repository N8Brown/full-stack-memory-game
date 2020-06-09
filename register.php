<?php 
session_start();

$regEmail = "";
$regUsername = "";
$regPassword = "";
$regError = "";

if(isset($_POST["submit"])) {
    include('includes/functions.php');
    include('includes/connection-local.php');

    $nameCheck = $_POST["username"];
    $checkExistingUsers = "SELECT * FROM registered_users WHERE username='$nameCheck'";
    $results = mysqli_query($connection, $checkExistingUsers);

    if(!$_POST["email"]) {
        $emailError = "<div class='alert alert-danger' role='alert'>Please enter a valid email address.</div>";
    } else {
        $regEmail = formValidation($_POST["email"]);        
    }

    if(!$_POST["username"]) {
        $usernameError = "<div class='alert alert-danger' role='alert'>Please select a username.</div>";
    } elseif(mysqli_num_rows($results)>0){
        $usernameError = "<div class='alert alert-danger' role='alert'>Sorry, but that username has been taken. Please select a new one</div>";
    } else {
        $regUsername = formValidation($_POST["username"]);
    }


    if(!$_POST["password"]) {
        $passwordError = "<div class='alert alert-danger' role='alert'>Please select a password.</div>";
    } elseif(!$_POST["password-confirm"] || $_POST["password"]!=$_POST["password-confirm"]) {
        $passwordError = "<div class='alert alert-danger' role='alert'>Passwords do not match.</div>";
    } else {
        $regPassword = formValidation($_POST["password"]);
        $regPassHash = password_hash($regPassword, PASSWORD_DEFAULT);
    }

    if(!empty($regEmail) && !empty($regUsername) && !empty($regPassword)){
        $registerNew = "INSERT INTO registered_users (`id`, `email`, `username`, `password`) VALUES (NULL, '$regEmail', '$regUsername', '$regPassHash')";
        $results = mysqli_query($connection, $registerNew);
    
        if($results){
            $_SESSION["currentUser"] = $regUsername;
            $_SESSION["loggedIn"] = true;
            header("Location: confirmation.php");
        } else {
            $regError = "<div class='alert alert-danger' role='alert'>There was an error with your registration. Please try again.</div>";
        }    
    }
}

mysqli_close($connection);

include("includes/header.php"); ?>

<main class="full-vh">
    <?php include("includes/navbar.php"); ?>

    <section class="container full-height">
        <section class="row auth-form-container full-height" id="reg-form-row">
            <form class="auth-form" id="reg-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <h2>REGISTER</h2>
                <section id=reg-form-fields>
                    <div class="form-group">
                        <?php echo $emailError; ?>
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <?php echo $usernameError; ?>
                        <label for="username">Choose A Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <?php echo $passwordError; ?>
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" class="form-control" id="password-confirm" name="password-confirm">
                    </div>
                </section>
                <button type="submit" name="submit" class="btn btn-dark">Submit</button>
                <div id="sign-in-alt-actions" class="form-group form-alt-actions">
                    <a href="login.php" class="btn btn-link">Sign In</a>                    
                    <a href="dashboard.php" class="btn btn-link">Play As Guest</a>
                </div>
            </form>

        </section>
    </section>

</main>

<?php include("includes/footer.php"); ?>