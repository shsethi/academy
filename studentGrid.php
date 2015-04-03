<?php include('/includes/header.php') ?>
<link href="includes/bootstrap3-editable-1.5.1/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
<link rel="stylesheet" href=" includes/DataTables-1.10.5/media/css/jquery.dataTables.min.css">
<title>Grid View Page</title>
<body>
	<div class="table-responsive">
		<table id ="student" class="table .table-condensed .table-responsive" border="1" style="width:100%">
			<thead>
				<tr>
					<th>UserId</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Date Of Birth</th>
					<th>Weight</th>
					<th>Height</th>
					<th>Father's Name</th>
					<th>Mother's Name</th>
					<th>Email</th>
					<th>PhoneNo.</th>
					<th>Address</th>
					<th>Centre</th>
					<th>Sports</th>
					<th>Training Type</th>
					<th>Timings</th>
					<!-- <th>Image</th> -->
				</tr>
			</thead>
			<tbody>
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
					<td> 	<?php echo $obj->userId; ?> </td>
					<td> <a id="uname">	<?php echo $obj->uname; ?></a></td>
					<td> <a id="gender">	<?php echo $obj->gender; ?></a></td>
					<td> <a id="dob">	<?php echo $obj->dob; ?></a></td>
					<td> <a id="weight">	<?php echo $obj->weight; ?></a></td>
					<td> <a id="height">	<?php echo $obj->height; ?></a></td>
					<td> <a id="fname">	<?php echo $obj->fname; ?></a></td>
					<td> <a id="mname">	<?php echo $obj->mname; ?></a></td>
					<td> <a id="email">	<?php echo $obj->email; ?></a></td>
					<td> <a id="phoneno">	<?php echo $obj->phoneno; ?></a></td>
					<td> <a id="address">	<?php echo $obj->address; ?></a></td>
					<td> <a id="center">	<?php echo $obj->centerName; ?></a></td>
					<td> <a id="sports">	<?php echo $obj->sportsName; ?></a></td>
					<td> <a id="traingType">	<?php echo $obj->trainingType; ?></a></td>
					<td> <a id="timings"> 	<?php echo $obj->timings; ?></a></td>
					<!-- <td>	<?php //echo $obj->image; ?></td> -->
				</tr> <?php  $dbh=null;
				}
				} catch (Exception $e) {
				echo "ERROR: ".$e->getMessage();
				}
				?>
			</tbody>
		</table>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="includes/bootstrap3-editable-1.5.1/bootstrap3-editable/js/bootstrap-editable.js"></script>
		<script src="includes/DataTables-1.10.5/media/js/jquery.dataTables.js"></script>
		<script src="js/studentgrid.js" ></script>
	</body>
	<?php include('/includes/footer.php'); ?>