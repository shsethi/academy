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
<!-- <link rel="stylesheet" type="text/css" href="css/feespage.css" media="print" /> -->
<title>Ace Academy</title>
<link rel="stylesheet" href=" ../includes/DataTables-1.10.5/media/css/jquery.dataTables.min.css">
<body>
	<div id="wrapper">
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
					Fee Records
					<small>view</small>
					</h1>
					<ol class="breadcrumb">
						<li>
							<i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
						</li>
						<li class="active">
							<i class="fa fa-money"></i> Fee Records
						</li>
					</ol>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12">
					<form role="form" id="form1" name="form1" method="post">
						<div class="span5">
							
							<div class="row">								
								<div class="form-group">
									<label for="Month" class="col-lg-2 control-label">Month</label>
									<div class="col-lg-6">
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
						</div>
						<br>
						<div class="row" align="center">
							<input class="btn btn-primary" type="submit" value="Submit">
						</div>
						<hr>
						
					</form>
						<!-- Fees Record Table -->
						<div class="span7 offset2">
							<h3 align="center">Fees Record</h3>
							<div class="form-group">
							
							<div id="printdata">
								<div class="table-responsive">
									<table id="uidtable" class="table table-striped table-bordered dataTable no-footer" border="1">
										
										<thead>
											<tr>
												<th>S.NO</th>
												<th>Student Name</th>
												<th>UID</th>
												<th>Amount</th>
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
												$query = "SELECT registration.userId,uname,amount FROM registration
														LEFT JOIN (SELECT * FROM fees WHERE month like :month)
														as feesJoin ON registration.userId = feesJoin.userId";
												$sth = $dbh->prepare($query);
												$sth->bindParam(':month',$_POST['month'],PDO::PARAM_STR);
												$sth->execute();
												//If all was selected then where conditions would not be added
												if (strcasecmp("all", $_POST['sportsId']) !== 0) {
												//Concatenate
													$query = $query . " JOIN stud_sports
																		ON registration.userId = stud_sports.userId
																		WHERE sportsId = :sportsId";
													
													
													
													if (strcasecmp("all", $_POST['centerId']) !== 0) {
														$query = $query . " AND centerId = :centerId";
														$sth = $dbh->prepare($query);
														$sth->bindParam(':sportsId',$_POST['sportsId'],PDO::PARAM_STR);
														$sth->bindParam(':centerId',$_POST['centerId'],PDO::PARAM_STR);
														$sth->bindParam(':month',$_POST['month'],PDO::PARAM_STR);
														$sth->execute();
													}
													else{
														$sth = $dbh->prepare($query);
														$sth->bindParam(':sportsId',$_POST['sportsId'],PDO::PARAM_STR);
														$sth->bindParam(':month',$_POST['month'],PDO::PARAM_STR);
														$sth->execute();
													}

													
												}
												else{
													if (strcasecmp("all", $_POST['centerId']) !== 0) {
														$query = $query . " WHERE centerId = :centerId";
														$sth = $dbh->prepare($query);
														$sth->bindParam(':centerId',$_POST['centerId'],PDO::PARAM_STR);
														$sth->bindParam(':month',$_POST['month'],PDO::PARAM_STR);
														$sth->execute();

													}
												}
												// echo $query;
												// echo $_POST['centerId'];
												// echo $_POST['sportsId'];
												
												$count=0;
												while($obj = $sth->fetch()) {
												$count++;

												// print_r($obj);
											?>
											<tr>
												<td> <?php echo $count; ?> </td>
												<td> <?php echo $obj['uname'] ; ?> 	</td>
												<td> <?php echo $obj['userId'] ; ?> 	</td>
												<td><?php echo $obj['amount'] ; ?>	</td>
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
							<button class="btn btn-info" onClick="printThis('uidtable')">Print View</button>
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
			});

			function printThis(id){
    			// var originalContents = document.body.innerHTML;

				var printContents = document.getElementById(id).innerHTML;

				//fetching  maont sports center value to pass on to print page
				var month = $( "select[name='month']").val();
				var centerId = $( "select[name='centerId']").val();
				var center = $( "select[name='centerId'] option[value="+  centerId+ "]").text();

				var sportsId = $( "select[name='sportsId']").val();
				var sports = $( "select[name='centerId'] option[value="+  sportsId+ "]").text();
				// console.log( month+  sports +center);

     			var display_setting="toolbar=yes,menubar=yes,"; 
				display_setting+="scrollbars=yes,width=650, height=600, left=100, top=25"; 
				var printpage=window.open("","",display_setting); 
				printpage.document.open(); 
				printpage.document.write('<html><head><title>Print Page</title></head>'); //onLoad="self.print()"

				printpage.document.write('<h1 align="center">Fee Record</h1>');
				printpage.document.write('<label><b>MONTH</b></label>:'+ month 	+' <label><b>SPORT</b></label> :'+ sports+' <label><b>CENTRE</b></label>:'+ center);
				printpage.document.write('<body align="center"><table border="1">'+ printContents +'</table>');
				printpage.document.write('<br><button onclick="window.print()">Print</button>	</body></html>'); 
				printpage.document.close(); 
				printpage.focus();

			}

			</script>
</body>
		<?php include('/includes/footer.php'); ?>