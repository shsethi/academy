<?php include('/includes/header.php') ?>
<title>Registration Page</title>
<body>
  
  <!-- <button type="button " class="btn btn-primary">CLICK</button> -->
  <div class="container">
      <!-- Body -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Registration Page</h3>
      </div>
      <div class="panel-body">
        <form class="form-horizontal" id="form1" name="form1" method="post" action="target.php">
          <div class="form-group">
             <label for="uname" class="col-sm-2 control-label">Name</label>        
             <div class="col-sm-5">
              <input type="text" class="form-control" name="uname" placeholder="Name" required>
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
             <label for="dob" class="col-sm-2 control-label">DOB</label>        
             <div class="col-sm-5">
              <input type="date" class="form-control" name="dob"  required>
            </div>
          </div>

          <div class="form-group">
             <label for="Year of Joining" class="col-sm-2 control-label">Year of Joining</label>        
             <div class="col-sm-5">
              <input type="number" class="form-control" name="yoj" placeholder="20XX" >
            </div>
          </div>
         
        <div class="form-group">
          <label for="password" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-5">
            <input type="password" class="form-control" name="password" placeholder="Choose password">
          </div>
        </div>

          <div class="form-group">
             <label for="weight" class="col-sm-2 control-label">Weight</label>        
             <div class="col-sm-5">
              <input type="number" step="0.01" class="form-control" name="weight" placeholder="in kg" >
            </div>
          </div>


          <div class="form-group">
             <label for="height" class="col-sm-2 control-label">Height</label>        
             <div class="col-sm-5">
              <input type="number" step="0.01" class="form-control" name="height" placeholder="in cm" >
            </div>
          </div>

          <div class="form-group">
             <label for="fname" class="col-sm-2 control-label">Father's Name</label>        
             <div class="col-sm-5">
              <input type="text" class="form-control" name="fname" placeholder="Father's Name" required>
            </div>
          </div>

          <div class="form-group">
             <label for="mname" class="col-sm-2 control-label">Mother's Name</label>        
             <div class="col-sm-5">
              <input type="text" class="form-control" name="mname" placeholder="Mothers Name">
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-5">
              <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
          </div>

          <div class="form-group">
            <label for="phoneno" class="col-sm-2 control-label">Contact</label>
            <div class="col-sm-5">
              <input type="tel" class="form-control" name="phoneno" placeholder="10 digits" required>
            </div>
          </div>

          <div class="form-group">
             <label for="address" class="col-sm-2 control-label">Address</label>        
             <div class="col-sm-5">
              <input type="text" class="form-control" name="address" placeholder="Address">
            </div>
          </div>

          <div class="form-group">

             <label for="Center" class="col-sm-2 control-label">Center</label>        
              <div class="col-sm-5">
                <select class="form-control" name= "center">
                  <option value="01">Sarabha Nagar</option>
                  <option value="02">Khalsa College</option>
                  <option value="03">BCM college</option>
                  <option value="04">Govt. College</option>
                  <option value="05">Sports College</option>
                </select>
              </div>
          </div>

          <div class="form-group">

             <label for="Sports" class="col-sm-2 control-label">Sports</label>        
              <div class="col-sm-5">
                <select class="form-control" name= "sports" >
                  <option value="BD">Badminton</option>
                  <option value="CK">Cricket</option>
                  <option value="FB">Football</option>
                  <option value="MA">Martial Arts</option>
                  <option value="TT">Table Tennis</option>
                  <option value="LT">Tennis</option>
                </select>
              </div>
          </div>
          <div class="form-group">
              <label for="trainingType" class="col-sm-2 control-label">Training Type</label>        
              <div class="col-sm-5">

              <label class="radio-inline">
                <input type="radio" name="trainingType"  value="Private"> Private
              </label>
              <label class="radio-inline">
                <input type="radio" name="trainingType"  value="Semi-Private"> Semi-Private
              </label>
              <label class="radio-inline">
                <input type="radio" name="trainingType"  value="Group"> Group
               </label>
            </div>
          </div>
      
          <div id="tg1" style="display: none">
                  <div class="form-group">
                         <label for="timings" class="col-sm-2 control-label">Timings</label>        
                         <div class="col-sm-2">
                          <input type="text" class="form-control" name="timings" placeholder="eg. 2-4 pm" >
                        </div>
                  </div>
           </div>

          <div id="tg2" style="display: none">
                <div class="form-group">
                  <label for="timings" class="col-sm-2 control-label">Timings</label>        
                    <div class="col-sm-5">
        
                    <label for="timings" class="col-sm-2 control-label">Morning</label>        

                         <label class="radio-inline">
                          <input type="radio" name="timings"  value="6-7 am"> 6-7 am 
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="timings"  value="7-8 am"> 7-8 am 
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="timings"  value="8-9 am"> 8-9 am 
                         </label>
                         <label class="radio-inline">
                          <input type="radio" name="timings"  value="9-10 am"> 9-10 am 
                         </label>
                    <br>
                    <label for="timings" class="col-sm-2 control-label">Evening </label>        

                        <label class="radio-inline">
                          <input type="radio" name="timings"  value="3-4 pm "> 3-4 pm
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="timings"  value="4-5 pm "> 4-5 pm 
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="timings"  value="5-6 pm "> 5-6 pm 
                         </label>
                 

                  </div>
                </div>
          </div>
 
   
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-5">
            <!-- <button type="submit" class="btn btn-default">Submit</button> -->
            <input class="btn btn-primary" type="submit" value="Submit">
          </div>
        </div>
      </form>
    </div>
  </div>



  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script>

      //to show hide timings

      $(document).ready(function ()
        {
            $("input[name='trainingType']").change(radioValueChanged);
        })
     function radioValueChanged()
            {

                radioValue = $(this).val();
                if($(this).is(":checked") && radioValue == "Private")
                {
                    $( "#tg1" ).show();
                    $( "#tg2" ).hide();
                }
                else
                {
                    $( "#tg1" ).hide();
                    $( "#tg2" ).show();
                }
            } 
  </script>

</body>
<?php include('/includes/footer.php') ?>

    <!-- Static navbar -->
    <!-- <nav class="navbar navbar-default">
      <div class="container-fluname">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Ace Academy</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li><a href="#">Student</a></li>
            <li><a href="#">Admin</a></li>
          </ul>
        </div> 
      </div>  
    </nav> -->