<?php 

require '../config.php';

try {
	# dbh means database handle
	$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	# error handling method
	$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	# sth means statement handle
	# prepared statement
	$sth = $dbh->prepare("INSERT into fees (userId,amount,date,month)
							VALUES (:userId,:amount,:date,:month)");

	$sth->bindParam(':userId',$_POST['userId'],PDO::PARAM_STR);
	$sth->bindParam(':amount',$_POST['amount'],PDO::PARAM_INT);
	$sth->bindParam(':date',$_POST['date'],PDO::PARAM_STR);
	$sth->bindParam(':month',$_POST['month'],PDO::PARAM_STR);

	$sth->execute();

	echo "Inserted successfully";

	$dbh = null;
} catch (Exception $e) {
	echo $e->getMessage();
}
 ?>