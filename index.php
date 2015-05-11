<?php include('/includes/header.php') ?>
<title>Ace Academy</title>


<body>
<div class="container">

<div class="row">
	<div class="col-md-8">
		
	<div id="myCarousel" class="carousel slide">
	    <!-- Carousel items -->
	    <div class="carousel-inner span7">
	    <div class="active item"><img class="first-slide" src="img/academy_pics/aca2.jpg" style="width:100%"/>
		<div class="carousel-caption">
	                  <h4>Tennis Court</h4>
	                  <p>A tennis court is the venue where the sport of tennis is played. It is a firm rectangular surface with a low net stretched across the center. The same surface can be used to play both doubles and singles.</p>
	                </div>
		</div>
	    <div class="item"><img class="second-slide" src="img/academy_pics/aca.jpg" style="width:100%"/>
		<div class="carousel-caption">
	                  <h4>Junior Team</h4>
	                  <p>The budding stars and the future of the academy, Ace provides the healthy competitive environment where players can excel and can match the standards of professional players.</p>
	                </div>
		</div>
	    <div class="item"><img class="third-slide" src="img/academy_pics/aca1.jpg" style="width:100%"/>
		<div class="carousel-caption">
	                  <h4>Players in action</h4>
	                  <p>The view of tennis training. Ace provides the flexible training timings for the students along with the individual attention in particular.</p>
	    </div>
		</div>
	    </div>
	    <!-- Carousel nav -->

	    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span> </a>
	    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span> </a>
	    <!-- <a class="glyphicon glyphicon-chevron-left" href="#myCarousel" data-slide="prev">&lsaquo;</a> -->
	    <!-- <a class="glyphicon glyphicon-chevron-right" href="#myCarousel" data-slide="next">&rsaquo;</a> -->
	</div>
		
	</div>

	<div class="col-md-4">
			
<div class="panel panel-default">
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>News</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<ul class="demo2">
<li class="news-item">Upcoming tournaments <a href="#">Read more...</a></li>
<li class="news-item">Monday's timetable<a href="#">Read more...</a></li>
<li class="news-item">Result of badminton matches held last month<a href="#">Read more...</a></li>
<li class="news-item">Result of badminton matches held last month<a href="#">Read more...</a></li>

</ul>
</div>
</div>
</div>
<div class="panel-footer"> </div>
</div>
</div>
	<div class="col-md-4">
		<div class="well">
			<h3>Welcome!</h3><br/>
			<p style="text-align:justify">
				Ace Tennis Academy wa established in 2006. We have total 8-10 Branches in Ludhiana. We provide different kind of programs for beginner & professional level. We arrange regular Tournaments for players. All age groups are invited. Everyone can join. We assure you to give our best. <br/>
			</p>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-4">	
		<center>
		<a data-toggle="modal" href="#myModal" ><img src="img/academy_pics/ab.jpg"/></a>
		<div class="modal hide" id="myModal">
	    <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal">×</button>
		<h3>Modal header</h3>
	    <img src="" style="width:600px; height:300px"/>
	    </div>
		</div>
		<br/><br/>
		
		<a class="btn" style="width:285px;" href="#">"Only where children gather <br>is there any real chance of fun."</a>
		</center>
	</div>
	<div class="col-lg-4">
		<center>
		<a data-toggle="modal" href="#myModal1" ><img src="img/academy_pics/gh.jpg"/></a>
		<div class="modal hide" id="myModal1">
	    <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal">×</button>
		<h3>Modal header</h3>
	    <img src="" style="width:600px; height:300px"/>
	    </div>
		</div>
		<br/><br/>
		
		<a class="btn" style="width:285px;" href="#">"Children are great imitators. <br/> So give them something great to imitate."</a>
		</center>
	
	</div>
	
	<div class="col-lg-4">
		<center>
		<a data-toggle="modal" href="#myModal2" ><img src="img/academy_pics/ef.jpg"/></a>
		<div class="modal hide" id="myModal2">
	    <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal">×</button>
		<h3>Modal header</h3>
	    <img src="http://placehold.it/600x300" style="width:600px; height:300px"/>
	    </div>
		</div>
		<br/><br/>
		
		<a class="btn" style="width:285px;" href="#">"It is easier to build strong <br>children than to repair broken men".</a>
		</center>
	
	</div>
</div>

</div>
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <!-- // <script src="js/bootstrap-carousel.js"></script> -->
 <script src="js/application.js"></script>

 <script type="text/javascript">
    $(function () {
    	
        $(".demo2").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });
		
		
    });
</script>

</body>
<?php include('/includes/footer.php'); ?>