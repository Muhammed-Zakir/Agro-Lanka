<?php
// Start the session
session_start();

// Destroy the session data
session_destroy();

unset ($_SESSION['logged']);

// Redirect to the login page
header("Location: homepage.php");

exit();
?>