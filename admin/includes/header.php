<!DOCTYPE html>
<html lang="en">
<head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="../css/sticky-footer-navbar.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">   
   <link rel="stylesheet" href="css/admin.css">

<!--  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Ace Academy</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
         <li><a href="index.php">Home</a></li>
        <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">Games<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Tennis</a></li>
                <li><a href="#">Badminton</a></li>
                <li><a href="#">Football</a></li>
                <li><a href="#">Cricket</a></li>
                <li><a href="#">Martial Arts</a></li>
                <li><a href="#">Squash</a></li>
                <li><a href="#">Table Tennis</a></li>
              </ul>
            </li>
        <li><a href="aboutUs.php">About Us</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="contactUs.php">Contact Us</a></li>
      </ul>
       <ul class="nav navbar-nav navbar-right">
          <?php if (isset($_SESSION['userId'])) { ?>
           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
        <?php } else { ?>
            <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Register </a></li>
           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>

        <?php } ?>
      </ul>
    </div>
  </div>
</nav> -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
           <span class="navbar-header" style="height: 5px">
              <a class="navbar-brand" href="#"> Ace Academy </a>
              <!-- <p>  </p> -->
           </span> 

             <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="studmanager.php" class="active"><i class="fa fa-user fa-fw"></i> Student Manager</a>
                    </li>
                    
                    <li>
                        <a href="attendance.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Attendance</a>
                    </li>

                    
        <!--             <li>
                        <a href="feesmanager.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Fees Manager</a>
                    </li> -->
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Fees Manager <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="feerecordview.php">Fees Record</a>
                            </li>
                            <li>
                                <a href="feesmanager.php"> Fees Enter</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="designTest.php"><i class=" fa fa-fw fa-pencil-square-o"></i> Design Test</a>
                    </li>
                    <li>
                        <a href="blank.php"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
           
                </ul>
            </div>

        <ul class="nav navbar-right top-nav">
              <?php if (isset($_SESSION['userId'])) { ?>
           <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
        <?php } else { ?>
            <li><a href="../registration.php"><span class="glyphicon glyphicon-user"></span> Register </a></li>
           <li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>

        <?php } ?>
        <ul>

</nav>

</head>










