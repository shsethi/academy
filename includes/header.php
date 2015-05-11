<!DOCTYPE html>
<html lang="en">
<head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="css/site.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/sticky-footer-navbar.css">
  <link rel="stylesheet" href="css/news.css">

  <script src="js/jquery.min.js"></script>
<script src="js/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>

 <nav class="navbar navbar-inverse">
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
                <li><a href="tennis.php">Tennis</a></li>
                <li><a href="badminton.php">Badminton</a></li>
                <li><a href="football.php">Football</a></li>
                <li><a href="cricket.php">Cricket</a></li>
                <li><a href="martialarts.php">Martial Arts</a></li>
                
                <li><a href="tabletennis.php">Table Tennis</a></li>
              </ul>
            </li>
        <li><a href="aboutUs.php">About Us</a></li>
        <li><a href="commonsports.php">Sports</a></li>
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
</nav>
</head>










