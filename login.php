<?php include('/includes/header.php') ?>
<link rel="stylesheet" href="css/loginpage.css">
<body> 
  <div class="container">
    <div class="row" id="pwd-container">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <section class="login-form">
          <form id="loginform" action="#" role="login">
            <img src='img/logodefault.png' class="img-responsive" alt="logo" />
            
            
            <input type="text"  data-toggle="popover" data-placement="right" data-content="Required"
            name="username" placeholder="Username" id="username" required class="form-control input-lg" value="" />
            <input type="password"  data-toggle="popover" data-placement="right" data-content="password min length 7 "
            name="password"class="form-control input-lg" id="password" placeholder="Password" required="" />
            
            <button id="adminlogin" type="button"  class="btn btn-lg btn-primary btn-block">Admin Login</button>
            <button id="studentlogin" type="button" class="btn btn-lg btn-primary btn-block">Student Login</button>
            
            <div>
              <a href="#">Register</a> or
              <a href="#">reset password</a> </div>
            </form>
            <div class="form-links">
              <a href="#">www.aceacademy.com</a> </div>
            </section>
          </div>
          <!-- <div class="col-md-4"></div> </div>  -->
        </div>
      </div>
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src= " js/login.js"></script>
</body>

<?php include('/includes/footer.php'); ?>