<?php
require 'config.php';

try {

	# dbh means database handle
	$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	# error handling method
	$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	# sth means statement handle
	# prepared statement
	$sth = $dbh->prepare("INSERT into registration 
						(user_id,image,uname,gender,dob,age,weight,height,
							fname,email,phoneno,address,center,sports,trainingType,timings) 
						VALUES (NULL,
								NULL,
								'$_POST[uname]',
								'$_POST[gender]',
								'$_POST[dob]',
								'$_POST[age]',
								'$_POST[weight]',
								'$_POST[height]',
								'$_POST[fname]',
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