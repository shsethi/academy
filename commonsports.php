<?php include('/includes/header.php') ?>

		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Fullscreen Slit Slider with CSS3 and jQuery</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Slit Slider with CSS3 and jQuery" />
        <meta name="keywords" content="slit slider, plugin, css3, transitions, jquery, fullscreen, autoplay" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/custom.css" />
		<noscript>
			<link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
		</noscript>
    
    <body>
        
        <div class="container demo-1">
		
			
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<a href="tennis.php"><div class="deco" data-icon="T"></div></a>
							<h2>TENNIS</h2>
							<blockquote><p>Tennis is one of the most popular sports in the world, although the game as we know it today has only been around since the late 19th century.
											Popular opinion is that the inception of tennis can be traced back to 12th century France. However the game played back then involved using the palm of a players hand to strike the ball. It was not until the 16th century that rackets came into use and the name 'tennis' was first used.</p></blockquote>
						</div>
					</div>
					
					<div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<a href="badminton.php"><div class="deco" data-icon="B"></div></a>
							<h2>BADMINTON</h2>
							<blockquote><p>The roots of the sport of badminton can be traced back thousands of years, although the exact origin is unknown. Games involving a racket and a shuttlecock were probably developed and played in Ancient Greece.</p></blockquote>
						</div>
					</div>
					
					<div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<a href="football.php"><div class="deco" data-icon="F"></div></a>
							<h2>FOOTBALL</h2>
							<blockquote><p>The inception of the sport of football can be traced back for hundreds of years. Football was first wrtitten about in 1170 in London, by William Fitzstephan. The sport quickly grew and there is a plethora of records of games happening over the following years.</p></blockquote>
						</div>
					</div>
					
					<div class="sl-slide bg-4" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<a href="cricket.php"><div class="deco" data-icon="C"></div></a>
							<h2>CRICKET</h2>
							<blockquote><p>Cricket is a bat-and-ball game played between two teams of 11 players each on a field at the centre of which is a rectangular 22-yard long pitch. The game is played by 120 million players in many countries, making it the world's second most popular sport.</p></blockquote>
						</div>
					</div>
					
					<div class="sl-slide bg-5" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<a href="martialarts.php"><div class="deco" data-icon="MA"></div></a>
							<h2>MARTIAL ARTS</h2>
							<blockquote><p>Martial arts are codified systems and traditions of combat practices, which are practiced for a variety of reasons: self-defense, competition, physical health and fitness, entertainment, as well as mental, physical, and spiritual development.
											Although the term martial art has become associated with the fighting arts of eastern Asia, it originally referred to the combat systems of Europe as early as the 1550s.</p></blockquote>
						</div>
					</div>

					<div class="sl-slide bg-5" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<a href="tabletennis.php"><div class="deco" data-icon="TT"></div></a>
							<h2>TABLE TENNIS</h2>
							<blockquote><p>Table tennis is a sport in which two or four players hit a lightweight ball back and forth across a table using a small, round bat. The game takes place on a hard table divided by a net. Except for the initial serve, players must allow a ball played toward them only one bounce on their side of the table and must return it so that it bounces on the opposite side.</p></blockquote>
						</div>
					</div>
				</div><!-- /sl-slider -->
				
				<nav id="nav-arrows" class="nav-arrows">
					<span class="nav-arrow-prev">Previous</span>
					<span class="nav-arrow-next">Next</span>
				</nav>

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->

        </div>
	    <script src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
     	<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
		<script type="text/javascript" src="js/jquery.slitslider.js"></script>
		<script type="text/javascript">	
			$(function() {
			
				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ),
						$nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':last' ).on( 'click', function() {

								slitslider.next();
								return false;

							} );

							$navArrows.children( ':first' ).on( 'click', function() {
								
								slitslider.previous();
								return false;

							} );

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes: 
				 * 
				 * example how to add items:
				 */

				/*
				
				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
				
				// call the plugin's add method
				ss.add($items);

				*/
			
			});
		</script>
	</body>
<?php include('/includes/footer.php'); ?>