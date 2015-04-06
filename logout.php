<?php 

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['userId']);
// Delete all session variables
session_destroy();

// Jump to home page
header("Location: http://localhost/aceacademy.com/");

?>
