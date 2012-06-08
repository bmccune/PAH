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

	<title>Prestige Animal Hospital | Veterinarian in Fontana, Ca | Services - Surgery</title>
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
						<img src="../images/surgery.jpg" />
					</div>
					<div class="eight columns">
						<h4>Surgery</h4>
						<p>We provide a wide variety of basic and advanced surgical procedures for your pets, including:</p>
						<ul>
							<li><strong>Abdominal Surgery:</strong> Foreign bodies in the intestinal system, bladder stone removal, pyometra, cryptorchid, etc…</li>
							<li><strong>Elective Procedures:</strong> Spays and Neuters</li>
							<li><strong>Soft Tissue Surgeries:</strong> Mass removals, laceration repairs, etc.</li>
							<li><strong>Oral Surgery:</strong> Extractions, gingival flaps, mass removal, etc.</li>
							<li><strong>Orthopedic Surgery:</strong> Bone fractures, patellar surgeries, ligament tears, etc. More complicated cases may be referred to a Board Certified Orthopedic Surgeon.</li>
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