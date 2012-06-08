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

	<title>Prestige Animal Hospital | Veterinarian in Fontana, Ca | Services - Medicine</title>
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="../stylesheets/foundation.css">
	<link rel="stylesheet" href="../stylesheets/app.css">

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="../stylesheets/ie.css">
	<![endif]-->


	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
	<?php include_once("../includes/trackingcode.php") ?>
	<!-- container -->
	<div class="container">
	<div class="outerborder">
		<div class="row header">
			<div class="six phone-four  columns">
			<div class="logo hide-on-phones"><img src="../images/logo_l.png" alt="Prestige Animal Hospital" /></div>
			<div class="logo show-on-phones"><img src="../images/logo_l.png" alt="Prestige Animal Hospital" /></div>
				<h1 class="bmUtil-hide">PRESTIGE</h1>
				<h2 class="bmUtil-hide">ANIMAL HOSPITAL</h2>
				<p class="subtext hide-on-phones">Quality you can see, care you can feel</p>
			</div>
			<div class="six columns">
				<?php include_once("../includes/topBar.php") ?>
			</div>
			<div class="twelve phone-four columns">
				<?php include_once("../includes/navigation.php") ?>
			</div>
		</div>

		<div class="row body">
		
			<div class="twelve columns">
				<div class="row panel" style="width:auto;">
					<div class="four columns">
						<img src="../images/medicine.jpg" />
					</div>
					<div class="eight columns">
					<h4>Medicine</h4>
					<p>Prestige Animal Hospital offers comprehensive examinations for your pet that covers all body systems, including, but not limited to:</p>
					<p>Nutrition, Dentistry, Dermatology, Gastrointestinal disorders, Ocular, Urinary tract issues, etc…</p>
					<p>We have in-house laboratory equipment and services such as:</p>
						<ul>
							<li><strong>CBC Machine:</strong> Helps assess white/red blood cell counts and monitors for anemia or infection.</li>
							<li><strong>Blood Chemistry Machine:</strong> Helps detect any internal organ disfunctions of the kidneys, liver, pancreas, etc…</li>
							<li><strong>Digital X-ray:</strong> Quickly provides images of various internal structures of your pet’s anatomy.  These images can be sent, via the internet, to a board certified radiologist for review and evaluation as needed.</li>
							<li><strong>Ultrasound:</strong> We offer ultrasound to provide the utmost diagnostic capabilities under one roof. Done by appointment only.</li>
						</ul>
					</div>
				</div>
			
			
			</div>
		</div>
		<div class="row">
			<?php include_once("../includes/tiles.php") ?>
		</div>
		<div class="row footer">
			<?php include_once("../includes/footer.php") ?>
		</div>
	</div>
	</div>
	<!-- container -->




	<!-- Included JS Files -->
	<script src="../javascripts/jquery.min.js"></script>
	<script src="../javascripts/modernizr.foundation.js"></script>
	<script src="../javascripts/foundation.js"></script>
	<script src="../javascripts/app.js"></script>
</body>
</html>
