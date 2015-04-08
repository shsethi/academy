<?php include('/includes/header.php') ?>

<title>Ace Academy</title>
<link rel="stylesheet" href=" includes/DataTables-1.10.5/media/css/jquery.dataTables.min.css">

<body>

<div class="container">

<div class="row">
<div class="table-responsive">
<table id="uidtable" class="table table-striped table-bordered dataTable no-footer" border="1" style="width:100%">
	
	<thead>  
	          <tr>  
	            <th>S.NO</th>  
	            <th>UID</th>  
	            <th>A/P</th>  
	          </tr>  
	</thead>  

	<tbody>

	<?php
			require 'config.php';
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
				<td> <?php echo $obj['userId'] ; ?> 	</td>
				<td> 
					  <label class="radio-inline">
		                <input type="radio" name="attd<?php echo $obj['userId'];?>"  value="P"> P
		              </label>
		              <label class="radio-inline">
		                <input type="radio" name="attd<?php echo $obj['userId'];?>"  value="A" checked> A
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
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="includes/DataTables-1.10.5/media/js/jquery.dataTables.js"></script>

	<script>
	$(document).ready(function () {

		$("#uidtable").DataTable(); //initializing Datatable plugin
	});
	</script>



</body>
<?php include('/includes/footer.php'); ?>