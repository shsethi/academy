<?php
# Inialize session
session_start();
# Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['userId'])) {
header("Location: http://localhost/aceacademy.com/");
}
?>
<?php include('/includes/header.php') ?>
<link rel="stylesheet" href="bootstrap-combobox-master/bootstrap-combobox.css">
<title>Ace Academy</title>
<link rel="stylesheet" href=" ../includes/DataTables-1.10.5/media/css/jquery.dataTables.min.css">
<body>
	<div id="wrapper">
		<div id="page-wrapper">
			<!-- Page Heading -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
					Fees Manager
					<!-- <small>mark attendance</small> -->
					</h1>
					<ol class="breadcrumb">
						<li>
							<i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
						</li>
						<li class="active">
							<i class="fa fa-money"></i> Fees Manager
						</li>
					</ol>
				</div>
			</div>
			<div class="row">
				
				<div class="col-lg-6">
					<form role="form" id="form1" name="form1" method="post" action="feesInsert.php">
						<div class="form-group">
							<label for="userId" class="control-label">Student Id</label>
							<div class="">
								<!-- <input type="text" class="form-control" name="userId" required> -->
								<select  id="useridbox" class="form-control" name= "userId" required>
									
									<?php
											require '../config.php';
											try {
												# dbh means database handle
												$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
												# error handling method
												$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
												$sth = $dbh->prepare("SELECT userId FROM registration");
												$sth->execute();
												// $obj = $sth->fetchAll();
												// var_dump($obj);
												while($obj = $sth->fetch()) {
									?>
									<option value="<?php echo $obj['userId']; ?>"><?php echo $obj['userId'];?></option>
									<?php
									}
									
									}
									catch (Exception $e) {
									echo $e->getMessage();
									}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="amount" class="control-label">Amount</label>
							<div class="">
								<input step="0.01" type="number" class="form-control" name="amount" required>
							</div>
						</div>
						
						<div class="form-group">
							<label for="date" class="control-label">Date of Payment</label>
							<div class="">
								<input type="date" class="form-control" name="date"  required>
							</div>
						</div>
						<div class="form-group">
							<label for="MONTH" class="control-label">MONTH</label>
							<div class="">
								<select class="form-control" name= "month">
									<option value="JANUARY">JANUARY</option>
									<option value="FEBUARY">FEBUARY</option>
									<option value="MARCH">MARCH</option>
									<option value="APRIL">APRIL</option>
									<option value="MAY">MAY</option>
									<option value="JUNE">JUNE</option>
									<option value="JULY">JULY</option>
									<option value="AUGUST">MAY</option>
									<option value="SEPTEMBER">SEPTEMBER</option>
									<option value="OCTOBER">OCTOBER</option>
									<option value="NOVEMEBER">NOVEMEBER</option>
									<option value="DECEMBER">DECEMBER</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3">
							<!-- <button type="submit" class="btn btn-default">Submit</button> -->
							<input class="btn btn-primary" type="submit" value="Submit">
						</div>
					</form>
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

		<script src="bootstrap-combobox-master/bootstrap-combobox.js"></script>
		<script>
			$(document).ready(function(){
		    	$('#useridbox').combobox();
  			});
		</script>
	</body>
	<?php include('/includes/footer.php'); ?>