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
	$sth = $dbh->prepare("SELECT count(*) FROM stud_sports
						WHERE sportsId = :sportsId
						GROUP BY sportsId");
	$sth->bindParam(':sportsId',$_POST['sports'],PDO::PARAM_STR);
	$sth->setFetchMode(PDO::FETCH_ASSOC);
	$sth->execute();
	$count = sprintf("%04d",$sth->fetch()['count(*)']+1);

	//echo $count;
	#UserId generated
	$userId = (string)$_POST['sports'].substr($_POST['yoj'], 2,2).$count;
	echo $userId;

	$sth1 = $dbh->prepare("INSERT into registration 
						(userId,uname,yearOfJoining,gender,dob,image,fname,mname,
						email,phoneno,address,centerId,trainingType,timings) 
						VALUES (:userId,
								:uname,
								:yoj,
								:gender,
								:dob,
								NULL,
								:fname,
								:mname,
								:email,
								:phoneno,
								:address,
								:center,
								:trainingType,
								:timings)");

	$sth2 = $dbh->prepare("INSERT into login
						(userId,password,utype)
						VALUES (:userId,:pass,:utype)");

	$sth3 = $dbh->prepare("INSERT into stud_sports
						(userId,sportsId,rank)
						VALUES (:userId,:sportsId,NULL)");

	$sth4 = $dbh->prepare("INSERT into fitness
						(userId,weight,height)
						VALUES(:userId,:weight,:height)");

	$sth1->bindParam(':userId',$userId,PDO::PARAM_STR);
	$sth1->bindParam(':uname',$_POST['uname'],PDO::PARAM_STR);
	$sth1->bindParam(':yoj',$_POST['yoj'],PDO::PARAM_STR);
	$sth1->bindParam(':gender',$_POST['gender'],PDO::PARAM_STR);
	$sth1->bindParam(':dob',$_POST['dob'],PDO::PARAM_STR);
	$sth1->bindParam(':fname',$_POST['fname'],PDO::PARAM_STR);
	$sth1->bindParam(':mname',$_POST['mname'],PDO::PARAM_STR);
	$sth1->bindParam(':email',$_POST['email'],PDO::PARAM_STR);
	$sth1->bindParam(':phoneno',$_POST['phoneno'],PDO::PARAM_STR);
	$sth1->bindParam(':address',$_POST['address'],PDO::PARAM_STR);
	$sth1->bindParam(':center',$_POST['center'],PDO::PARAM_STR);
	$sth1->bindParam(':trainingType',$_POST['trainingType'],PDO::PARAM_STR);
	$sth1->bindParam(':timings',$_POST['timings'],PDO::PARAM_STR);

	# generating hashed password
	$pass = md5($_POST['password']);
	$utype = "student";
	$sth2->bindParam(':userId',$userId,PDO::PARAM_STR);
	$sth2->bindParam(':pass',$pass,PDO::PARAM_STR);
	$sth2->bindParam(':utype',$utype,PDO::PARAM_STR);

	$sth3->bindParam(':userId',$userId,PDO::PARAM_STR);
	$sth3->bindParam(':sportsId',$_POST['sports'],PDO::PARAM_STR);

	$sth4->bindParam(':userId',$userId,PDO::PARAM_STR);
	$sth4->bindParam(':weight',$_POST['weight'],PDO::PARAM_STR);
	$sth4->bindParam(':height',$_POST['height'],PDO::PARAM_STR);

	# fire query
	$sth1->execute();
	$sth2->execute();
	$sth3->execute();
	$sth4->execute();

	# close connection
	$dbh = null;

	echo "Record entered successfully";

} catch (Exception $e) {

	# display error message if any
	echo $e->getMessage();
}

?>