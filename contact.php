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

	<title>Prestige Animal Hospital | Veterinarian in Fontana, Ca | Contact Us</title>
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
					<div class="six columns">
						<h4>Contact Us</h4>
						<form action="" method="post" id="contactForm" name="contactForm" class="nice" target="_blank">
							<label for="cform-name">Name*</label>
							<input type="text" value="" name="cform-name" class="expand input-text" id="cform-name">
							<label for="cform-email">E-mail Address*</label>
							<input type="text" value="" name="cform-email" class="expand input-text" id="cform-email">
							<label for="cform-phone">Phone Number</label>
							<input type="text" value="" name="cform-phone" class="expand input-text" id="cform-phone">
							<label for="cform-comments">Comments*</label>
							<textarea id="cform-comments">Enter your comments here</textarea>
							<script type="text/javascript">
 								var RecaptchaOptions = {
    								theme : 'clean'
 								};
 							</script>
							<?php
         						require_once('recaptchalib.php');
          						$publickey = "6LdvmNESAAAAAEunybHJQHqaQlwLN53bIXE2Ynye"; // you got this from the signup page
          						echo recaptcha_get_html($publickey);
        					?>

							<input type="submit" value="E-mail Us" name="subscribe" id="mc-embedded-subscribe" class="button">
				
				</form>
			</div>

			<div class="six columns">			
				<h4>Location</h4>
				<a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=10986+Sierra+Ave.+Fontana,+Ca+92337&amp;aq=&amp;sll=35.960223,-95.712891&amp;sspn=53.172343,102.65625&amp;ie=UTF8&amp;hq=&amp;hnear=10986+Sierra+Ave,+Fontana,+California+92337&amp;ll=34.054185,-117.435644&amp;spn=0.00648,0.012531&amp;t=m&amp;z=14" style="color:#0000FF;text-align:left" class="show-on-phones"><img src="images/map3.png" /></a>
				<iframe class="hide-on-phones" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=10986+Sierra+Ave.+Fontana,+Ca+92337&amp;aq=&amp;sll=35.960223,-95.712891&amp;sspn=53.172343,102.65625&amp;ie=UTF8&amp;hq=&amp;hnear=10986+Sierra+Ave,+Fontana,+California+92337&amp;ll=34.054185,-117.435644&amp;spn=0.00648,0.012531&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
				<small>
					<a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=10986+Sierra+Ave.+Fontana,+Ca+92337&amp;aq=&amp;sll=35.960223,-95.712891&amp;sspn=53.172343,102.65625&amp;ie=UTF8&amp;hq=&amp;hnear=10986+Sierra+Ave,+Fontana,+California+92337&amp;ll=34.054185,-117.435644&amp;spn=0.00648,0.012531&amp;t=m&amp;z=14" style="color:#0000FF;text-align:left" class="hide-on-phones">View Larger Map</a>
				</small>
				
			
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
</body>
</html>