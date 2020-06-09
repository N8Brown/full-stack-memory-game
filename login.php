<?php 
session_start();

$username = "";
$userpassword = "";

if(isset($_POST["submit"])){
    include('includes/functions.php');
    include('includes/connection-local.php');

    if(!$_POST["username"]){
        $usernameError = "<div class='alert alert-danger' role='alert'>Please enter a username.</div>";
    } else {
        $username = formValidation($_POST["username"]);
    }

    if(!$_POST["password"]){
        $passwordError = "<div class='alert alert-danger' role='alert'>Please enter a password.</div>";
    } else {
        $userpassword = formValidation($_POST["password"]);
    }

    if(!empty($username) && !empty($userpassword)){
        $checkCredentials = "SELECT `username`, `password` FROM registered_users WHERE username='$username'";
        $results = mysqli_query($connection, $checkCredentials);
        
        if(mysqli_num_rows($results)>0){
            while($row = mysqli_fetch_assoc($results)){
                $currentUser = $row['username'];
                $hashedPass = $row['password'];
            }
    
            if(password_verify($userpassword, $hashedPass)){            
                $_SESSION['currentUser'] = $currentUser;
                $_SESSION['loggedIn'] = true;
                header("Location: dashboard.php");
            } else {
                $loginError = "<div class='alert alert-danger' role='alert'>Wrong Username/Password combination. Please try again.</div>";
            }
        } else {
            $loginError = "<div class='alert alert-danger' role='alert'>That username does not exist. Please <a href='register.php'>register</a> or try another username.</div>";
        }   
    }
}

mysqli_close($connection);



include("includes/header.php"); 
?>

<main class="full-vh">
    <?php include("includes/navbar.php"); ?>

    <section class="container full-height">
        <section id="sign-in-form-container" class="row full-height auth-form-container">
            <form id="sign-in-form" class="auth-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <h2>SIGN IN</h2>
                <?php echo $loginError; ?>
                <div class="form-group">
                    <?php echo $usernameError; ?>
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <?php echo $passwordError; ?>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-dark" name="submit">Submit</button>
                <div id="sign-in-alt-actions" class="form-group form-alt-actions">
                    <a href="register.php" class="btn btn-link">Register</a>                    
                    <a href="dashboard.php" class="btn btn-link">Play As Guest</a>
                </div>
            </form>
        </section>
    </section>
</main>

<?php include("includes/footer.php"); ?>