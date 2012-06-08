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

	<title>Prestige Animal Hospital | Veterinarian in Fontana, Ca | Services</title>
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
		<style type="text/css">
		dl.sub-nav dt, dl.sub-nav dd{display:block;float:none;}
		.body .twelve.columns{margin-left:0px;}
		</style>
			<div class="twelve columns">
				<div class="row panel" style="width:auto;">
					<div class="four columns">
						<h4>Services</h4>
						<p>Our services include, but are not limited to:</p>
						<dl class="sub-nav">
						  <dd><a href="/services/medicine.php">Medicine</a></dd>
						  <dd><a href="/services/surgery.php">Surgery</a></dd>
						  <dd><a href="/services/dental.php">Dental Services</a></dd>
						  <dd><a href="/services/grooming.php">Grooming</a></dd>
						  <dd>Advanced Diagnostic Capabilities</dd>
						  <dd>Digital X-rays</dd>
						  <dd>State of the art surgical suites</dd>
						  <dd>Ultrasound (at request)</dd>
						</dl>
					</div>
					<div class="eight columns">
						<p>At Prestige Animal Hospital, we strive to provide high quality services and care for your pets.  In addition to comprehensive physical examinations for your pet, we provide top quality wellness and preventative care plans. These plans are designed to help protect your pet by making their necessary care affordable to everyone.  Prestige Animal Hospital is a fully equipped facility offering the latest and most advanced medical, surgical and dental services.  Additionally, we are happy to offer medical boarding, and will have full service grooming soon.</p><p>We practice "Modern medicine, with old fashion love". We provide "Quality you can see, and care you can feel".</p>

					</div>
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
</body>
</html>