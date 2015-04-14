<?php
# Inialize session
session_start();
# Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['userId'])) {
header("Location: http://localhost/aceacademy.com/");
}
?>
<?php include('/includes/header.php') ?>
<title>Ace Academy</title>
<link rel="stylesheet" href=" ../includes/DataTables-1.10.5/media/css/jquery.dataTables.min.css">
<body>
	<div id="wrapper">
		<div id="page-wrapper">
			<!-- Page Heading -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
					Attendance
					<!-- <small>mark attendance</small> -->
					</h1>
					<ol class="breadcrumb">
						<li>
							<i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
						</li>
						<li class="active">
							<i class="fa fa-table"></i> Attendance
						</li>
					</ol>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12">
	
						<div class="span5">
							<form role="form" id="form1" name="form1" method="post" >
							
								<div class="row">
									
									<div class="form-group">
										<label for="date" class="col-lg-2 control-label">Date</label>
										<div class="col-lg-6">
											<input type="date" id= "datepicker" class="form-control" name="date" 
											value="<?php if(isset ($_POST['date'])) echo$_POST['date']; else echo date("Y-m-d"); ?>">
											<!-- <input type="text" class="form-control" id="datepicker"> -->
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<label for="Center" class="col-lg-2 control-label">Center</label>
										<div class="col-lg-6">
											<select class="form-control" name= "centerId">
												<option value="all">All</option>
												<option value="01">Sarabha Nagar</option>
												<option value="02">Khalsa College</option>
												<option value="03">BCM college</option>
												<option value="04">Govt. College</option>
												<option value="05">Sports College</option>
											</select>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="form-group">
										<label for="Sports" class="col-lg-2 control-label">Sports</label>
										<div class="col-lg-6">
											<select class="form-control" name= "sportsId" >
												<option value="all">All</option>
												<option value="BD">Badminton</option>
												<option value="CK">Cricket</option>
												<option value="FB">Football</option>
												<option value="MA">Martial Arts</option>
												<option value="TT">Table Tennis</option>
												<option value="LT">Tennis</option>
											</select>
										</div>
									</div>
								</div>					

								<div class="col-md-3">
									<input class="btn btn-primary" type="submit" value="Go">
								</div>

							</form>
						</div>
						<hr>
						<!-- Attendance Table -->
										
						<div class="alert" style="display:none">
							
							<!-- <strong>Success!</strong> Attendance marked -->
						</div>

						<ul class="nav nav-tabs" id="myTab">
							<li class="active"><a data-toggle="tab" href="#viewattd">View Attendance</a></li>
							<li><a data-toggle="tab" href="#markattd">Mark Attendance</a></li>
						</ul>
						<div class="tab-content">
						<div class="tab-pane active" id="viewattd">
							<div class="span7 offset2">
									
							<div class="table-responsive">
								<table id="viewAttdTable" class="table table-striped table-bordered dataTable no-footer" border="1">
									
									<thead>
										<tr>
											<th>S.NO</th>
											<th>Student Name</th>
											<th>UID</th>
											<th>Absent(A) Present(P) </th>
										</tr>
									</thead>
									<tbody>
										<?php
												require '../config.php';
										try {
												# dbh means database handle
												$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
												# error handling method
												$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
												$query = "SELECT registration.userId,uname,status FROM registration
															LEFT JOIN (SELECT * FROM attendance
																WHERE date like :date) as attd
																ON registration.userId = attd.userId";
												$sth = $dbh->prepare($query);
												$sth->bindParam(':date',$_POST['date'],PDO::PARAM_STR);

												//If all was selected then where conditions would not be added
												if (strcasecmp("all", $_POST['sportsId']) !== 0) {
												//Concatenate
													$query = $query . " JOIN stud_sports
																		ON registration.userId = stud_sports.userId 
																		WHERE sportsId = :sportsId";
													$sth = $dbh->prepare($query);
													
													
													if (strcasecmp("all", $_POST['centerId']) !== 0) {
														$query = $query . " AND centerId = :centerId";
														$sth = $dbh->prepare($query);
														$sth->bindParam(':centerId',$_POST['centerId'],PDO::PARAM_STR);
													}

													$sth->bindParam(':sportsId',$_POST['sportsId'],PDO::PARAM_STR);
												}
												else{
													if (strcasecmp("all", $_POST['centerId']) !== 0) {
														$query = $query . " WHERE centerId = :centerId";
														$sth = $dbh->prepare($query);
														$sth->bindParam(':centerId',$_POST['centerId'],PDO::PARAM_STR);
													}
												}
												$sth->execute();
												$count=0;
												while($obj = $sth->fetch()) {
												$count++;
												// print_r($obj);
												?>
										<tr>
											<td> <?php echo $count; ?> </td>
											<td> <?php echo $obj['uname'] ; ?> 	</td>
											<td> <?php echo $obj['userId'] ; ?> 	</td>
											<td>
												<label >
													 <?php 
													 if( $obj['status']=== NULL)
													 	echo "Not marked" ;
													 else 
													 	echo $obj['status'] ;?>
												</label>
											</td>
										</tr>
										<?php
										}
										
										}
										catch (Exception $e) {
										echo $e->getMessage();
										}
										?>
									</tbody>
								</table>
							</div>

							</div>
						</div>
						<div class="tab-pane" id="markattd">
							<form role="form" id="form2" name="form2" method="post" action="attdInsert.php">
								
							 <!-- <input type="date" id= "datepicker" class="form-control" name="date" > -->
								<div class="span7 offset2">
									<div class="form-group">
										<div class="table-responsive">
											<table id="uidtable" class="table table-striped table-bordered dataTable no-footer" border="1">
												
												<thead>
													<tr>
														<th>S.NO</th>
														<th>Student Name</th>
														<th>UID</th>
														<th>Absent(A) Present(P) </th>
													</tr>
												</thead>
												<tbody>
													<?php
															require '../config.php';
											try{
												# dbh means database handle
												$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
												# error handling method
												$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
												$query = "SELECT registration.userId,uname,status FROM registration
															LEFT JOIN (SELECT * FROM attendance
																WHERE date like :date) as attd
																ON registration.userId = attd.userId";
												$sth = $dbh->prepare($query);
												$sth->bindParam(':date',$_POST['date'],PDO::PARAM_STR);

												//If all was selected then where conditions would not be added
												if (strcasecmp("all", $_POST['sportsId']) !== 0) {
												//Concatenate
													$query = $query . " JOIN stud_sports
																		ON registration.userId = stud_sports.userId 
																		WHERE sportsId = :sportsId";
													$sth = $dbh->prepare($query);
													
													
													if (strcasecmp("all", $_POST['centerId']) !== 0) {
														$query = $query . " AND centerId = :centerId";
														$sth = $dbh->prepare($query);
														$sth->bindParam(':centerId',$_POST['centerId'],PDO::PARAM_STR);
													}

													$sth->bindParam(':sportsId',$_POST['sportsId'],PDO::PARAM_STR);
												}
												else{
													if (strcasecmp("all", $_POST['centerId']) !== 0) {
														$query = $query . " WHERE centerId = :centerId";
														$sth = $dbh->prepare($query);
														$sth->bindParam(':centerId',$_POST['centerId'],PDO::PARAM_STR);
													}
												}
												$sth->execute();
												$count=0;
												while($obj = $sth->fetch()) {
												$count++;
												// print_r($obj);
															?>
													<tr>
														<td> <?php echo $count; ?> </td>
														<td> <?php echo $obj['uname'] ; ?> 	</td>
														<td> <?php echo $obj['userId'] ; ?> 	</td>
														<td>
															<label class="radio-inline">
																<input type="radio" name="<?php echo $obj['userId'];?>" <?php if (strcasecmp ($obj['status'],"P")) {echo  "checked";} ?> value="P"  > P
															</label>
															<label class="radio-inline">
																<input type="radio" name="<?php echo $obj['userId'];?>" <?php if (strcasecmp ($obj['status'],"A")) {echo  "checked";} ?> value="A"  > A
															</label>
														</td>
													</tr>
													<?php
													}
													
													}
													catch (Exception $e) {
													echo $e->getMessage();
													}
													?>
												</tbody>
											</table>
										</div>
										<div class="span2 offset2">
											<input id="markattdbutton"class="btn btn-primary" type="submit" value="Submit">
										</div>
									</div>
								</div>
							</form>
						</div>
						
						</div>
				</div>
						
				</div>
			</div>
	</div>
	
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../includes/DataTables-1.10.5/media/js/jquery.dataTables.js"></script>
	<script>
	$(document).ready(function () {
		$("#uidtable").DataTable(); //initializing Datatable plugin
		$("#viewAttdTable").DataTable(); //initializing Datatable plugin
	});

	function today(){
    	var d = new Date();
	    var curr_date = d.getDate();
	    var curr_month = d.getMonth() + 1;
		
		if(curr_month<10)
		curr_month= '0'+curr_month; 
		
		if(curr_date<10)
		curr_date= '0'+curr_date; 
	   
	    var curr_year = d.getFullYear();
	    return(curr_year+ "-" + curr_month + "-" + curr_date  );
	}
	
	// $("#datepicker").val(today());

	</script>
	<script src="js/markattendance.js"></script>

</body>
<?php include('/includes/footer.php'); ?>