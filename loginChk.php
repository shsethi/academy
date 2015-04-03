<?php 

require 'config.php';

try {

	# dbh means database handle
	$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	# error handling method
	$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	$sth = $dbh->prepare("SELECT * FROM login WHERE userId = :userId AND password = :password");
	$sth->bindParam(':userId',$_POST['username'],PDO::PARAM_STR);
	$sth->bindParam(':password',$_POST['password'],PDO::PARAM_STR);
	$sth->setFetchMode(PDO::FETCH_ASSOC);
	$sth->execute();
	$check = $sth->fetch();

	if (empty($check)) {
		echo "invalid user id or password";
	}
	elseif ($check['utype'] == 'admin' ) {
		// echo "Admin login succesful";
		header("Location: http://localhost/aceacademy.com/admin.php"); /* Redirect browser */
		exit();
	}
	elseif ($check['utype'] == 'student') {
		// echo "Student login succesful";
		header("Location: http://localhost/aceacademy.com/profile.php?userId=".$check['userId']); /* Redirect browser */
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