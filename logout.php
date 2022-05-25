<?php
session_start();
// Destroy session
if (session_destroy()) {
    // Redirecting To Home Page
    header("Location: login.php");
}
?>
<?php
unset($_SESSION['logged_in']);
session_destroy();
?>