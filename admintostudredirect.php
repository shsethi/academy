<?php
# Inialize session
	session_start();
# Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['userId'])) {
header("Location: http://localhost/aceacademy.com/");
	}


$_SESSION['sid']=$_GET['sid'];

header("Location: http://localhost/aceacademy.com/profile.php"); /* Redirect browser */

 ?>