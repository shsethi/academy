<html>
	<head>
		<title>Grid View Page</title>
	</head>
	<body>
		<table border="1" style="width:100%">
			<tr>
				<th>UserId</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Date Of Birth</th>
				<th>Weight</th>
				<th>Height</th>
				<th>Image</th>
				<th>Father's Name</th>
				<th>Mother's Name</th>
				<th>Email</th>
				<th>PhoneNo.</th>
				<th>Address</th>
				<th>Centre</th>
				<th>Sports</th>
				<th>Training Type</th>
				<th>Timings</th>
			</tr>
			<?php 
				require 'config.php';

				class student
				{
					public $userId;
					public $uname;
					public $gender;
					public $dob;
					public $weight;
					public $height;
					public $image;
					public $fname;
					public $mname;
					public $email;
					public $phoneno;
					public $address;
					public $centerName;
					public $sportsName;
					public $trainingType;
					public $timings;
					
					function __construct()
					{
		
					}
				}
				try {
					# dbh means database handle
					$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
					# error handling method
					$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
					$sth = $dbh->query("SELECT 
						userId,uname,gender,dob,weight,height,image,fname,mname,email,
						phoneno,address,centerName,sportsName,trainingType,timings
						FROM registration NATURAL JOIN center NATURAL JOIN sports");
					$sth->setFetchMode(PDO::FETCH_CLASS,'student');
					

					while ($obj = $sth->fetch()) {
						?><tr> 
							<td>	<?php echo $obj->userId; ?> </td>
							<td>	<?php echo $obj->uname; ?></td>
							<td>	<?php echo $obj->gender; ?></td>
							<td>	<?php echo $obj->dob; ?></td>
							<td>	<?php echo $obj->weight; ?></td>
							<td>	<?php echo $obj->height; ?></td>
							<td>	<?php echo $obj->image; ?></td>
							<td>	<?php echo $obj->fname; ?></td>
							<td>	<?php echo $obj->mname; ?></td>
							<td>	<?php echo $obj->email; ?></td>
							<td>	<?php echo $obj->phoneno; ?></td>
							<td>	<?php echo $obj->address; ?></td>
							<td>	<?php echo $obj->centerName; ?></td>
							<td>	<?php echo $obj->sportsName; ?></td>
							<td>	<?php echo $obj->trainingType; ?></td>
							<td>	<?php echo $obj->timings; ?></td>
						</tr> <?php  $dbh=null;
					}
				} catch (Exception $e) {
					echo "ERROR: ".$e->getMessage();
				}
			 ?>
		</table>
	</body>
</html>