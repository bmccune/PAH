<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title>Prestige Animal Hospital | Veterinarian in Fontana, Ca | Home</title>
	<link rel="stylesheet" href="stylesheets/foundation.css">
	<link rel="stylesheet" href="stylesheets/app.css">

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="stylesheets/ie.css">
		<script src="javascripts/html5shiv.js"></script>
	<![endif]-->

</head>
<body>
	<?php include_once("includes/trackingcode.php") ?>
	<!-- container -->
	<div class="container">
	<div class="outerborder">
		<div class="row header">
			<div class="six phone-four  columns">
			<div class="logo hide-on-phones"><img src="images/logo_l.png" alt="Prestige Animal Hospital" /></div>
			<div class="logo show-on-phones"><img src="images/logo_l.png" alt="Prestige Animal Hospital" /></div>
				<h1 class="bmUtil-hide">PRESTIGE</h1>
				<h2 class="bmUtil-hide">ANIMAL HOSPITAL</h2>
				<p class="subtext hide-on-phones">Quality you can see, care you can feel</p>
			</div>
			<div class="six columns">
				<?php include_once("includes/topBar.php") ?>
			</div>
			<div class="twelve phone-four columns">
				<?php include_once("includes/navigation.php") ?>
			</div>
		</div>

	
		<div class="row body">
			<div class="seven columns">
				<div id="featured"> 
     				<img src="images/Home_Photo_01_cropped.jpg" alt="Puppy" />
    				<img src="images/Home_Photo_02_cropped.jpg" alt="Kitten" />
					<img src="images/Home_Photo_04_cropped.jpg" alt="Puppy" />
    				<img src="images/Home_Photo_03_cropped.jpg" alt="Kitten" />
				</div>
			</div>

			<div class="five columns">			
				<div class="row">
					<div class="twelve columns">
						<div class="panel">
							<h5>Welcome to Prestige Animal Hospital</h5>
							<p class="bottom-fifty">Prestige Animal Hospital is a full-service veterinary hospital; Prestige Animal Hospital offers only the highest quality pet care services provided by a compassionate and competent staff...<br/><a class="top-ten right small red button round" href="/article/welcome.php">Read More</a></p>
						</div>
						<div class="panel">
							<h5>Grand Opening Soon</h5>
							<p class="bottom-fifty">We will be open to the public and taking appointments as of 05/29/2012.  Our Grand Opening celebration date will be determined shortly...<br/><a class="top-ten right small red button round" href="/article/grandopening.php">Read More</a></p>
						</div>
						
					</div>
				</div>
				<div class="row" style="display:none;">
					<div class="eight columns centered">
					<ul class="pagination ">
							<li class="unavailable"><a href="">&laquo;</a></li>
							<li class="current"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li class="unavailable"><a href="">&hellip;</a></li>
							<li><a href="">12</a></li>
							<li><a href="">13</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<?php include_once("includes/tiles.php") ?>
		</div>
		<div class="row footer">
			<?php include_once("includes/footer.php") ?>
		</div>
	</div>
	</div>
	<!-- container -->




	<!-- Included JS Files -->
	<script src="javascripts/jquery.min.js"></script>
	<script src="javascripts/modernizr.foundation.js"></script>
	<script src="javascripts/foundation.js"></script>
	<script src="javascripts/app.js"></script>
	<script src="javascripts/print.js"></script>
<script type="text/javascript">
     $(window).load(function() {
        $('#featured').orbit({
			 animation: 'fade',                  // fade, horizontal-slide, vertical-slide, horizontal-push
			 animationSpeed: 800,                // how fast animtions are
			 timer: true, 			 // true or false to have the timer
			 advanceSpeed: 4000, 		 // if timer is enabled, time between transitions 
			 pauseOnHover: true, 		 // if you hover pauses the slider
			 startClockOnMouseOut: true, 	 // if clock should start on MouseOut
			 startClockOnMouseOutAfter: 1000, 	 // how long after MouseOut should the timer start again
			 directionalNav: false, 		 // manual advancing directional navs
			 captions: true, 			 // do you want captions?
			 captionAnimation: 'fade', 		 // fade, slideOpen, none
			 captionAnimationSpeed: 800, 	 // if so how quickly should they animate in
			 bullets: true,			 // true or false to activate the bullet navigation
			 bulletThumbs: false,		 // thumbnails for the bullets
			 bulletThumbLocation: '',		 // location from this file where thumbs will be
			 afterSlideChange: function(){}, 	 // empty function 
			 fluid: true   })
		$( ".printBTN" ).click(
			function(){
				$(this).parent(".reveal-modal").print();
				return( false );
			}
		);
	 });
</script>
</body>
</html>
