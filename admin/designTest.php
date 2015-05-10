<?php 
# Inialize session
    session_start();
# Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['userId'])) {
header("Location: http://localhost/aceacademy.com/");
    }
 ?>
<?php include('/includes/header.php') ?>
<title>Design</title>
<link rel="stylesheet" href=" ../includes/DataTables-1.10.5/media/css/jquery.dataTables.min.css">
<body>
	<div id="wrapper">
		<div id="page-wrapper">
			<!-- Page Heading -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
					Design Test
					<!-- <small>mark attendance</small> -->
					</h1>
					<ol class="breadcrumb">
						<li>
							<i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
						</li>
						<li class="active">
							<i class="fa fa-table"></i> Design
						</li>
					</ol>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					
					<div class="span5">
						<form role="form" id="form1" name="form1" method="post" action="createTest.php" >
							
							<div class="row">
								
								<div class="form-group">
									<label for="date" class="col-lg-2 control-label">Date</label>
									<div class="col-lg-6">
										<input type="date" id= "datepicker" class="form-control" name="date"
										value="<?php if(isset ($_POST['date'])) echo $_POST['date']; else echo date("Y-m-d"); ?>">
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
											<!-- <option value="all">All</option> -->
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
							<br>
							<div class="row" align="center">
								<input class="btn btn-primary" type="submit" value="Submit">
							</div>
							<hr>
						</form>
					</div>
				</div>
				<!-- Main Content -->
			</div>
		</div>
		
	</div>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../includes/DataTables-1.10.5/media/js/jquery.dataTables.js"></script>
	<script>
	$(document).ready(function () {
		$("#uidtable").DataTable(); //initializing Datatable plugin
	});
	</script>
</body>
<?php include('/includes/footer.php'); ?>