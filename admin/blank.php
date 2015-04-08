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
					Heading
					<!-- <small>mark attendance</small> -->
					</h1>
					<ol class="breadcrumb">
						<li>
							<i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
						</li>
						<li class="active">
							<i class="fa fa-table"></i> Heading
						</li>
					</ol>
				</div>
			</div>




	<div class="row">
		
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
<?php include('footer.php'); ?>