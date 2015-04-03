
<!-- new file is studentGrid.php -->
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/bootstrap-theme.min.css">

</head>
	<body>

	<div class="table-responsive">
	<!-- table-responsive adds scroll bars -->
		<table  class="table .table-condensed .table-responsive" border="2" style="width:100%">
			<tr>
				<th>UserId</th>
				<th>Image</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Date Of Birth</th>
				<th>Age</th>
				<th>Weight</th>
				<th>Height</th>
				<th>Father's Name</th>
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
					public $user_id;
					public $image;
					public $uname;
					public $gender;
					public $dob;
					public $age;
					public $weight;
					public $height;
					public $fname;
					public $email;
					public $phoneno;
					public $address;
					public $center;
					public $sports;
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

					$sth = $dbh->query("SELECT * FROM registration");
					$sth->setFetchMode(PDO::FETCH_CLASS,'student');

					while ($obj = $sth->fetch()) {
						?><tr> 
							<td>	<?php echo $obj->user_id; ?> </td>
							<td>	<?php echo $obj->image; ?></td>
							<td>	<?php echo $obj->uname; ?></td>
							<td>	<?php echo $obj->gender; ?></td>
							<td>	<?php echo $obj->dob; ?></td>
							<td>	<?php echo $obj->age; ?></td>
							<td>	<?php echo $obj->weight; ?></td>
							<td>	<?php echo $obj->height; ?></td>
							<td>	<?php echo $obj->fname; ?></td>
							<td>	<?php echo $obj->email; ?></td>
							<td>	<?php echo $obj->phoneno; ?></td>
							<td>	<?php echo $obj->address; ?></td>
							<td>	<?php echo $obj->center; ?></td>
							<td>	<?php echo $obj->sports; ?></td>
							<td>	<?php echo $obj->trainingType; ?></td>
							<td>	<?php echo $obj->timings; ?></td>
						</tr> <?php  $dbh=null;
					}
				} catch (Exception $e) {
					echo "ERROR: ".$e->getMessage();
				}
			 ?>
		</table>
	</div>
		<script src="js/jquery.min.js"></script>
  		<script src="js/bootstrap.min.js"></script>
	</body>
</html>