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

	<title>Prestige Animal Hospital | Veterinarian in Fontana, Ca | Grand Opening!</title>
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
		<style type="text/css">
		.picture{
			width:100px;
			height:100px;
			background-color:#666;
			border:1px solid #ccc;
			margin-right:10px;
			float:left;
			margin-bottom:20px;
		}
		</style>
				<div class="row panel" style="width:auto;">
					<div class="twelve columns">
					<h4>Grand Opening Soon</h4>
					<p>We will be open to the public and taking appointments on 05/24/2012.  Our Grand Opening celebration date will be determined shortly.  The celebration will include a raffle for flea and tick products, hospital tours, and free give-aways. We love meeting your pets, but for their safety, we ask that you please not bring them to the Grand Opening event.</p>

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