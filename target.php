<?php
require 'config.php';

try {

	# dbh means database handle
	$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	# error handling method
	$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	# sth means statement handle
	# prepared statement

	#Get number of members in center of user
	$sth = $dbh->query("SELECT count(*) FROM registration");
	$count = sprintf("%04d",$sth->fetch()[0]+1);

	#UserId generated
	// echo $count;
	$userId = (string)$_POST['center'].$_POST['sports'].$count;
	// echo $userId;

	$sth = $dbh->prepare("INSERT into registration 
						(userId,uname,gender,dob,weight,height,image,
							fname,mname,email,phoneno,address,centerId,sportsId,trainingType,timings) 
						VALUES ('$userId',
								'$_POST[uname]',
								'$_POST[gender]',
								'$_POST[dob]',
								'$_POST[weight]',
								'$_POST[height]',
									NULL,
								'$_POST[fname]',
								'$_POST[mname]',
								'$_POST[email]',
								'$_POST[phoneno]',
								'$_POST[address]',
								'$_POST[center]',
								'$_POST[sports]',
								'$_POST[trainingType]',
								'$_POST[timings]')");

	# fire query
	$sth->execute();

	echo "Record entered successfully";

} catch (Exception $e) {

	# display error message if any
	echo $e->getMessage();
}

# close connection
$dbh = null;
?>