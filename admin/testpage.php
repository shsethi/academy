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

				<div class="row">
						<!-- <div class="col-md-3-offset-4" > -->
						<h3 align = "center"><?php echo $_POST['type'] ?> Test</h3>
				</div>
					
					<div class="span5">
						<form role="form" id="form4" name="form4" method="post" action="#" >
						<table class="table table-striped table-bordered" border="1">
							<thead>
							<tr>
								<th>S.No.</th>
								<th>Name</th>
								<th>SID</th>
							<?php 

								// print_r($_POST);
								$value = $_POST['field'];
								$no_of_params = count($value);
									// print_r($value);
									foreach ($value as $k => $v) {
										
										echo "<th>".$v['paraname']."(".$v['ftype'].")"."</th>";
										// echo "<td>".$v['type']."</td>";
										
									}
								
							 ?>
								<th>Option</th>
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
								$query = "SELECT registration.userId,uname FROM registration JOIN stud_sports
														ON registration.userId = stud_sports.userId
											WHERE sportsId = :sportsId AND  centerId = :centerId" ;
								
								$sth = $dbh->prepare($query);
								
								$sth->bindParam(':sportsId',$_POST['sportsId'],PDO::PARAM_STR);
								$sth->bindParam(':centerId',$_POST['centerId'],PDO::PARAM_STR);

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
							
						<?php
							for ($i=0; $i < $no_of_params; $i++) { 
								echo '<td>' ;
								echo '<input type="text" class="form-control" name="" required> ';
								echo ' </td>\n';
							}
						
						?>
						<td><button type="button" class="btn btn-default printButton"><i class="fa fa-print"></i></button></td>
						<?php
						}
						}
						catch (Exception $e) {
						echo $e->getMessage();
						}
						?>
						</tr>
					</tbody>
					</table >	
					<!-- 		<div class="row" align="center">
								<input class="btn btn-primary" type="submit" value="Submit">
							</div> -->
					
							<hr>
						</form>
					</div>
							<button id="myButton" class="btn btn-info">Print</button>
					</div>
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

		$('.printButton').on('click', function() { 
		  	var row = $(this).parent().parent();    
		  	row.find('td').each (function() {


		  		console.log(this);	    
			}); 	

		  });

	 $("#myButton").on('click', function () {
        location.href = "http://localhost/aceacademy.com/admin/testreport.php";
    	});

			


	});
	</script>
</body>
<?php include('/includes/footer.php'); ?>