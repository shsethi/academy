<?php include('/includes/header.php') ?>
<body>
  
  <div class="container">
    <h1 class="">Student Profile</h1>
    <hr class="">
    <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="img/default.jpg" class="avatar img-circle" alt="avatar">
          <h6 class="">Upload a photo...</h6>
          <input class="form-control" type="file">
        </div>
      </div>
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div style="display: none;" class="alert alert-info alert-dismissable"> <a class="panel-close close" data-dismiss="alert">×</a>  <i class="fa fa-coffee"></i>
        This
        is an <strong class="">.alert</strong>. Use this to show important messages
      to the user.</div>
      <h3 class="">Personal info</h3>
      <form class="form-horizontal" role="form">
        <div class="form-group">
          <label class="col-lg-2 control-label">First name:</label>
          <div class="col-lg-7">
            <input class="form-control" value="" type="text">
          </div>
          
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Last name:</label>
          <div class="col-lg-7">
            <input class="form-control" value="" type="text">
          </div>
        </div>
        <div class="form-group">
          <label for="Gendergroup" class="col-sm-2 control-label">Gender</label>
          <div class="col-sm-5">
            <label class="radio-inline">
              <input type="radio" name="gender"  value="M"> M
            </label>
            <label class="radio-inline">
              <input type="radio" name="gender"  value="F"> F
            </label>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Email:</label>
          <div class="col-lg-7">
            <input class="form-control" value="" type="text">
          </div>
          <div class="col-lg-2">
            <input class="btn btn-primary" value="Edit" type="button"> <span class=""></span>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-lg-2 control-label">Address:</label>
          <div class="col-lg-7">
            <input class="form-control" value="" type="textArea">
          </div>
          <div class="col-lg-2">
            <input class="btn btn-primary" value="Edit" type="button"> <span class=""></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Contact Number</label>
          <div class="col-lg-7">
            <input class="form-control" value="" type="text">
          </div>
          <div class="col-lg-2">
            <input class="btn btn-primary" value="Edit" type="button"> <span class=""></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">Username:</label>
          <div class="col-md-7">
            <input class="form-control" value="" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">Password:</label>
          <div class="col-md-7">
            <input class="form-control" value="" type="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">Confirm password:</label>
          <div class="col-md-7">
            <input class="form-control" value="" type="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label"></label>
          <div class="col-md-7">
            <input class="btn btn-primary" value="Save Changes" type="button"> <span class=""></span>
            <input class="btn btn-default" value="Cancel" type="reset">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<hr class="">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
<?php include('/includes/footer.php'); ?>