<?php 

require '../config.php';

try {
	# dbh means database handle
	$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	# error handling method
	$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	# sth means statement handle
	# prepared statement
	$sth = $dbh->prepare("INSERT into attendance (userId,date,status)
							VALUES (:userId,:date,:status)");

	$sth->bindParam(':date',$_POST['date'],PDO::PARAM_STR);

	foreach ($_POST as $key => $value) {

		//For all array elements in $_POST other than date
		if (strcasecmp($key, "date") !== 0) {
			
			$sth->bindParam(':userId',$key,PDO::PARAM_STR); //$key holds userId
			$sth->bindParam(':status',$value,PDO::PARAM_STR); //$value holds attendance status

			$sth->execute();
		}
	}
	
	echo "Inserted successfully";

	$dbh = null;
} catch (Exception $e) {
	echo $e->getMessage();
}
 ?>