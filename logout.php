<?php
// Check to see if user's broweser sent a cookie for the session
if(isset($_COOKIE[session_name()])){
    // Empty the cookie
    setcookie( session_name(), "", time()-86400, '/');
}

// Clear all session variables
session_unset();

// Destroy the session
session_destroy();

header("Location: index.php");
?>