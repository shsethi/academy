<?php 
# Inialize session
    session_start();
# Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['userId'])) {
header("Location: http://localhost/aceacademy.com/");
    }
 ?>
<?php include('/includes/header.php') ?>
<type>Ace Academy</title>
<link rel="stylesheet" href=" ../includes/DataTables-1.10.5/media/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="css/createtest.css">
<body>
	<div id="wrapper">
		<div id="page-wrapper">
			<!-- Page Heading -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
					Create Test
					<!-- <small>mark attendance</small> -->
					</h1>
					<ol class="breadcrumb">
						<li>
							<i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
						</li>
						<li class="active">
							<i class="fa fa-table"></i> Create Test
						</li>
					</ol>
				</div>
			</div>
			<div class="row">
			
				<div class="col-lg-12">			
							
					<div class="row">
						<form class="form-inline" id="form3" name="form3" method="post" action="testpage.php">
							
							<div class="col-md-3-offset-4" >
								<button id ="addBtn" class="addButton">+ Add Category</button>							
							</div>
							<div id="parameter0" class="parameter-row" align="center">
								<div class="form-group">
									<label >Name</label>  
									<input type="text" class="form-control" name="field[0][paraname]" required>
		  						</div>

		  						<div class="form-group">
		  							<label >Type</label>  
		  							<label class="radio-inline">
									<input type="radio" name="field[0][type]"  value="level"> level
									</label>
									<label class="radio-inline">
									<input type="radio" name="field[0][type]"  value="units"> units
									</label>
		  						</div>

								<div class="form-group">
				  						<select class="form-control" name= "field[0][units]">
			                 				 <option value="kg">kg</option>
			                 				 <option value="m/sec">m/sec</option>
			                 				 <option value="feet">feet</option>
			                 				 <option value="sec">sec</option>
			                 				 <option value="min">min</option>
				                 		</select>
		  						</div>
									
								<div class="form-group">
			  						<div class="col-xs-1">           
	       								 <button type="button" class="btn btn-default addButton"><i class="fa fa-plus"></i></button>
	   								</div>
	   								<div class="col-xs-1">           
	       								 <button type="button" class="btn btn-default removeButton"><i class="fa fa-minus"></i></button>
	   								</div>
	   								</div>
							</div>
								
							<div class="holder"></div>
							
							<div class="col-md-3 col-md-offset-8"  style="margin-top:10px;">
 						  		 <input class="btn btn-primary" type="submit" value="Submit">
 							 </div>

 							<input type="hidden" name="date" value= "<?php echo $_POST['date']; ?>"	>
 							<input type="hidden" name="centerId" value="<?php echo $_POST['centerId']; ?>"	>
 							<input type="hidden" name="sportsId" value= "<?php echo $_POST['sportsId']; ?>"	>
							
						</form>	

						<div class="parameter-row hide" id="template" align="center">
							<div class="form-group">
									<label >Name</label>  
									<input type="text" class="form-control" name="paraname" required>
		  						</div>

		  						<div class="form-group">
		  							<label >Type</label>  
		  							<label class="radio-inline">
									<input type="radio" name="type"  value="level"> level
									</label>
									<label class="radio-inline">
									<input type="radio" name="type"  value="units"> units
									</label>
		  						</div>

								<div class="form-group">
				  						<select class="form-control" name= "units">
			                 				 <option value="kg">kg</option>
			                 				 <option value="m/sec">m/sec</option>
			                 				 <option value="feet">feet</option>
			                 				 <option value="sec">sec</option>
			                 				 <option value="min">min</option>
				                 		</select>
		  						</div>
									
								<div class="form-group">
			  						<div class="col-xs-1">           
	       								 <button type="button" class="btn btn-default addButton"><i class="fa fa-plus"></i></button>
	   								</div>
	   								<div class="col-xs-1">           
	       								 <button type="button" class="btn btn-default removeButton"><i class="fa fa-minus"></i></button>
	   								</div>
	   								</div>
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

		var pindex=0;
	   $('#form3')  
		    .on('click', '.addButton', function() {

            pindex++;
		    var $holder = $('.holder');
            var $template = $('#template'),
                $clone    = $template
                                .clone()
                                .removeClass('hide')
                                .removeAttr('id')
                                .attr('id', 'parameter'+pindex);
                                

              $clone
                .find('[name="type"]').attr('name', 'field[' + pindex + '][type]').end()
                .find('[name="units"]').attr('name', 'field[' + pindex + '][units]').end()
                .find('[name="paraname"]').attr('name', 'field[' + pindex + '][paraname]').end()
                .insertBefore($holder);

				console.log($clone);
			})


			.on('click', '.removeButton', function() {
            var $row  = $(this).parents('.parameter-row');

             // Remove element containing the fields
            $row.remove();		
			});
	});


	</script>
</body>
<?php include('/includes/footer.php'); ?>


