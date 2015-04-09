<?php
# Inialize session
    session_start();
# Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['userId'])) {
header("Location: http://localhost/aceacademy.com/");
    }
?>
<?php include('header.php') ?>
<title>Ace Academy</title>
<link rel="stylesheet" href=" ../includes/DataTables-1.10.5/media/css/jquery.dataTables.min.css">
<body>
	<div id="wrapper">
		<div id="page-wrapper">
			<!-- Page Heading -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
					Student Manager
					<small>edit student profile</small>
					</h1>
					<ol class="breadcrumb">
						<li>
							<i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
						</li>
						<li class="active">
							<i class="fa fa-table"></i> Student Manager
						</li>
					</ol>
				</div>
			</div>
			<!-- Attendance Table -->
			<div class="row">
			<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<div class="table-responsive">
						<table id="uidtable" class="table table-striped table-bordered dataTable no-footer" border="1">
							
							<thead>
								<tr>
									<th>S.NO</th>
									<th>UID</th>
									
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
											$sth = $dbh->prepare("SELECT userId FROM registration");
											$sth->execute();
											// $obj = $sth->fetchAll();
											// var_dump($obj);
											$count=0;
											while($obj = $sth->fetch()) {
												$count++;
								?>
								<tr>
									<td> <?php echo $count; ?> </td>
									<td> <a href="../admintostudredirect.php?sid=<?php echo $obj['userId'];?>"> <?php echo $obj['userId'] ; ?> </a> </td>
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
			<div class="col-lg-3"></div>

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
<?php include('footer.php'); ?>