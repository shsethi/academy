<?php 

require 'config.php';
session_start();

try {

	# dbh means database handle
	$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	# error handling method
	$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	$sth = $dbh->prepare("SELECT * FROM login WHERE userId = :userId AND password = :password");
	$pass = md5($_POST['password']);
	
	# bind parameters
	$sth->bindParam(':userId',$_POST['username'],PDO::PARAM_STR);
	$sth->bindParam(':password',$pass,PDO::PARAM_STR);
	
	$sth->setFetchMode(PDO::FETCH_ASSOC);
	$sth->execute();
	$check = $sth->fetch();

	if (empty($check)) {
		echo "invalid user id or password";
	}
	elseif ($check['utype'] == 'admin' ) {
		// echo "Admin login succesful";
		$_SESSION['userId'] = $_POST['username'];
		$_SESSION['utype'] = $check['utype'];
		$_SESSION['sid'] = $_POST['username'];
		header("Location: http://localhost/aceacademy.com/admin/"); /* Redirect browser */
		exit();
	}
	elseif ($check['utype'] == 'student') {
		// echo "Student login succesful";
		$_SESSION['userId'] = $_POST['username'];
		$_SESSION['utype'] = $check['utype'];
		$_SESSION['sid'] = $_POST['username'];

		header("Location: http://localhost/aceacademy.com/profile.php"); /* Redirect browser */
		exit();
	}
	else{
		echo "Unexpected user type. Contact us";
	}

	$dbh = NULL;
	
} catch (Exception $e) {
	echo $e->getMessage();
}

 ?>