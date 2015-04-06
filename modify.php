<?php 

require 'config.php';

$table = null;

switch ($_POST['name']) {
	case 'uname':
		$table = 'registration';
		$type = PDO::PARAM_STR;
		break;
	case 'gender':
		$table = 'registration';
		$type = PDO::PARAM_STR;
		break;
	case 'dob':
		$table = 'registration';
		$type = PDO::PARAM_STR;
		break;
	case 'fname':
		$table = 'registration';
		$type = PDO::PARAM_STR;
		break;
	case 'mname':
		$table = 'registration';
		$type = PDO::PARAM_STR;
		break;
	case 'email':
		$table = 'registration';
		$type = PDO::PARAM_STR;
		break;
	case 'phoneno':
		$table = 'registration';
		$type = PDO::PARAM_STR;
		break;
	case 'address':
		$table = 'registration';
		$type = PDO::PARAM_STR;
		break;
	case 'center':
		$table = 'registration';
		$type = PDO::PARAM_STR;
		break;
	case 'sports':
		$table = 'registration';
		$type = PDO::PARAM_STR;
		break;
	case 'trainingType':
		$table = 'registration';
		$type = PDO::PARAM_STR;
		break;
	case 'timings':
		$table = 'registration';
		$type = PDO::PARAM_STR;
		break;
	
	case 'weight':
		$table = 'fitness';
		$type = PDO::PARAM_INT;
		break;
	case 'height':
		$table = 'fitness';
		$type = PDO::PARAM_INT;
		break;
	default:
		echo "Unexpected error in switch case";
		break;
}

try {
	print_r($_POST);

	# dbh means database handle
	$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	# error handling method
	$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	# sth means statement handle
	# prepared statement
	$sth = $dbh->prepare("UPDATE ".$table." SET ". $_POST['name'] ." = :value
							WHERE userId = :pk");
	$sth->bindParam(':value',$_POST['value'],$type);
	$sth->bindParam(':pk',$_POST['pk'],PDO::PARAM_STR);
	$sth->execute();

	echo "Update successful";
} catch (Exception $e) {
	echo $e->getMessage();
}

 ?>