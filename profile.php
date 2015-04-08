<?php
# Inialize session
	session_start();
	//echo $_SESSION['username'];
# Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['userId'])) {
header("Location: http://localhost/aceacademy.com/");
	}
?>
<?php include('/includes/header.php') ?>
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
				// $userId = '02060001';
				$userId = $_SESSION['userId'];
				try {
					# dbh means database handle
					$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
					# error handling method
					$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
					$sth = $dbh->prepare("SELECT
						userId,uname,gender,dob,weight,height,image,fname,mname,email,
						phoneno,address,centerName,sportsName,trainingType,timings
						FROM registration NATURAL JOIN center NATURAL JOIN sports NATURAL JOIN fitness
						NATURAL JOIN stud_sports
						WHERE userId = :userId");
					$sth->bindParam(':userId',$userId,PDO::PARAM_STR);
					$sth->setFetchMode(PDO::FETCH_CLASS,'student');
					$sth->execute();
					$obj = $sth->fetch();
?>
<link href="includes/bootstrap3-editable-1.5.1/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
<title>Profile Page</title>
<body>
	
	<div class="container">
		<h1 class=""><?php echo $obj->uname; ?>'s Profile</h1>
		<hr class="">
		<div class="row">
			<!-- left column -->
			<div id = "sidebar-left" class = "col-lg-4 col-sm-1">
				<!-- <h1 class=""><?php echo $obj->uname; ?>'s Profile</h1> -->
				<div class="text-center">
					<img src="img/default.jpg" class="avatar img-circle" alt="avatar">
					<h6 style="display: none" class="">Upload a photo...</h6>
					<input style="display: none" class="form-control" type="file">
				</div>
			</div>
			<!-- right column -->
			<div id = "sidebar-right" class = "col-lg-8 col-sm-11">
				<div style="display: none;" class="alert alert-info alert-dismissable">
					<a class="panel-close close" data-dismiss="alert">×</a>  <i class="fa fa-coffee"></i>
					This
					is an <strong class="">.alert</strong>. Use this to show important messages
				to the user.</div>
				<div class ="row-profile">
					<ul class="nav nav-tabs" id="myTab">
						<li class="active"><a data-toggle="tab" href="#perinfo">Personal Info</a></li>
						<li><a data-toggle="tab" href="#physicalstats">Physical Stats</a></li>
						<li><a data-toggle="tab" href="#photos">Photos</a></li>
					</ul>
					
					<div class="tab-content">
						<div class="tab-pane active" id="perinfo">
							<div class="row">
								<table class="table table-bordered table-striped">
									<tbody>
										<tr>
											<td >UserId
											</td>
											<td id="userId"><?php echo $obj->userId; ?></td>
										</tr>
										<tr>
											<td>Name</td>
											<td> <a id="uname">	<?php echo $obj->uname; ?></a></td>
										</tr>
										<tr>
											<td>Gender</td>
											<td> <a id="gender">	<?php echo $obj->gender; ?></a></td>
										</tr>
										<tr>
											<td>DOB</td>
											<td> <a id="dob">	<?php echo $obj->dob; ?></a></td>
										</tr>
										<!-- <td>
											<span class="glyphicon glyphicon-pencil" ></span>
										</td> -->
										<tr>
											<td>Father's Name</td>
											<td> <a id="fname">	<?php echo $obj->fname; ?></a></td>
										</tr>
										<tr>
											<td>Mother's Name</td>
											<td> <a id="mname">	<?php echo $obj->mname; ?></a></td>
										</tr>
										<tr>
											<td>Email id</td>
											<td> <a id="email">	<?php echo $obj->email; ?></a></td>
										</tr>
										<tr>
											<td>Phone no.</td>
											<td> <a id="phoneno">	<?php echo $obj->phoneno; ?></a></td>
										</tr>
										<tr>
											<td>Address</td>
											<td> <a id="address"><?php echo $obj->address; ?></a></td>
										</tr>
										<tr>
											<td>Center</td>
											<td> <a id="center">	<?php echo $obj->centerName; ?></a></td>
										</tr>
										<tr>
											<td>Sports</td>
											<td> <a id="sports">	<?php echo $obj->sportsName; ?></a></td>
										</tr>
										<tr>
											<td>Traing Type</td>
											<td> <a id="traingType">	<?php echo $obj->trainingType; ?></a></td>
										</tr>
										<tr>
											<td>Timings</td>
											<td> <a id="timings"> 	<?php echo $obj->timings; ?> </a></td>
										</tr>
									<!-- <td>	<?php //echo $obj->image; ?></td> -->
								    </tbody>
								</table>
							</div>
						</div>
					<div class="tab-pane" id="physicalstats">
							<div class="tab-pane" id="perinfo">
							<div class="row">
								<table class="table table-bordered table-striped">
									<tbody>
										<tr>
											<td >UserId
											</td>
											<td > 	<?php echo $obj->userId; ?> </td>
										</tr>
										
										<tr>
											<td>Weight</td>
											<td> <a id="weight">	<?php echo $obj->weight; ?> </a>kg
										</td>
										<!-- <td>
											<span class="glyphicon glyphicon-pencil" ></span>
										</td> -->
										</tr>
										<tr>
											<td>Height</td>
											<td> <a id="height">	<?php echo $obj->height; ?> </a>cm</td>
										</tr>
										<tr>
											<td>BMI</td>
											<td> <span id="bmi">	<?php echo round($obj->weight/pow(($obj->height/100),2),2) ; ?> </span></td>
										</tr>


									<!-- <td>	<?php //echo $obj->image; ?></td> -->
								    </tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="photos">
						<div class="row">
							<table class="table table-bordered table-striped">
								<tr>
									<td>Height Weight</td>
								</tr>
									<tr>
									<td>Height Weight</td>
								</tr><tr>
									<td>Height Weight</td>
								</tr><tr>
									<td>Height Weight</td>
								</tr>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php  $dbh=null;
		
		} catch (Exception $e) {
		echo "ERROR: ".$e->getMessage();
		}
		?>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="includes/bootstrap3-editable-1.5.1/bootstrap3-editable/js/bootstrap-editable.js"></script>
		<script src="js/profile.js" ></script>
	</body>
	<?php include('/includes/footer.php'); ?>