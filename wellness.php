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

	<title>Prestige Animal Hospital | Veterinarian in Fontana, Ca | Wellness Plans</title>
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="stylesheets/foundation.css">
	<link rel="stylesheet" href="stylesheets/app.css">

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="stylesheets/ie.css">
	<![endif]-->


	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
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
		
			<div class="twelve columns">
				<div class="row panel" style="width:auto;">
					<div class="twelve columns">
						<h4>Wellness Plans</h4>
						<dl class="sub-nav">
						  <dd><a href="/wellness/kittens-puppies.php">Puppies &amp; Kittens</a></dd>
						  <dd><a href="/wellness/adult.php">Adult &amp; Senior Pets</a></dd>
						  <dd><a href="/wellness/faq.php">FAQ</a></dd>
						</dl>
						<p>Wellness plans make high quality veterinary care easy and affordable.  By enrolling your pet in a Wellness Plan, you are taking an important step towards maintaining your pet’s health and wellbeing.</p>
						<p>When enrolled, office visits are at NO CHARGE! You will receive all recommended tests and vaccines your dog or cat needs to help them live as long and comfortably as possible.</p>
						<p>These plans are NOT insurance, but are monthly payment plans with discounted rates on services to help make the necessary, annual care your pet needs more readily available.</p> 
						<p>Our plans are designed for healthy pets, but should a medical or surgical problem arise, you will receive 5-15% of our services not covered by your plan.</p>
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
<script type="text/javascript">
     $(window).load(function() {
         $('#featured').orbit({
     		animation: 'fade',                  // fade, horizontal-slide, vertical-slide, horizontal-push
     		animationSpeed: 800,                // how fast animtions are
     		timer: false, 			 // true or false to have the timer
     advanceSpeed: 4000, 		 // if timer is enabled, time between transitions 
     pauseOnHover: false, 		 // if you hover pauses the slider
     startClockOnMouseOut: false, 	 // if clock should start on MouseOut
     startClockOnMouseOutAfter: 1000, 	 // how long after MouseOut should the timer start again
     directionalNav: true, 		 // manual advancing directional navs
     captions: true, 			 // do you want captions?
     captionAnimation: 'fade', 		 // fade, slideOpen, none
     captionAnimationSpeed: 800, 	 // if so how quickly should they animate in
     bullets: false,			 // true or false to activate the bullet navigation
     bulletThumbs: false,		 // thumbnails for the bullets
     bulletThumbLocation: '',		 // location from this file where thumbs will be
     afterSlideChange: function(){}, 	 // empty function 
     fluid: true   })



     });
</script>
</body>
</html>
