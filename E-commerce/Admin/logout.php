<?php
session_start(); // Start the session

// Destroy all session data
session_destroy();

// Redirect to the login page or any other desired location
header("Location: index.html");
exit();
?>
