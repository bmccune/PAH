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

	<title>Prestige Animal Hospital | Veterinarian in Fontana, Ca | About Us</title>
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
	<style type="text/css">
	.row.employee{margin-bottom:30px;}
	.employeePhoto{
		background-color: #CCCCCC;
		border: 1px solid #666666;
		height: 50px;
		margin: 0 auto;
		padding: 50px;
		width: 50px;
	}

	.about-name{font-size:1.4em;}
	.about-pos{font-size:0.7em;margin-left:20px;text-decoration:underline;}
	.about-bio{margin-top:10px;}
	
</style>
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
    	        <h4>About Us</h4>
					<div class="row panel" style="width:auto;">
			<div class="row employee">
	                        
        	            	<div class="twelve columns">
								<div class="about-name">Sudeep Wahla<span class="about-pos">DVM</span></div>
                                <div class="about-bio">Dr. Wahla was born at Kaiser Hospital in Fontana.  He lived in Fontana for 18 years before pursuing his Veterinary degree.  Dr. Wahla attended College in India to learn more about his culture.  After graduating, he then returned to attend Oklahoma State University to finish his Veterinary degree.  Dr. Wahla graduated in 2006 and has been practicing since.  He was Chief of Staff at his previous facility, which was a robust 3 doctor practice.  He was a preceptor to assist in educating Veterinary students from Western Veterinary College in Pomona.  Dr. Wahla has also been on the Western Veterinary College and Carrington college of Registered Veterinary Technicians advisory boards.  He enjoys playing/watching sports, spending time with his family and pets and Veterinary medicine.  He has 3 dogs and 1 cat.</div>
						   	</div>	
                    	</div>
                        <div class="row employee">
                           
                            <div class="twelve columns">
                                <div class="about-name">Kam<span class="about-pos">Veterinary Assistant/Receptionist</span></div>
								<div class="about-bio">Kam has always loved pets.  Her passion from pets has been since she was young.  She feels that helping pets have a voice is an important part of her life.  She has 1 dog (right now).   Kam enjoys spending time with her husband and daughter, playing with Zoey and helping pets.</div>

                            </div>
                        </div>
                        <div class="row employee">
                            
                            <div class="twelve columns">
                                <div class="about-name">Noneet<span class="about-pos">Receptionist</span></div>
								<div class="about-bio">Noneet's love for pets has stemmed from her family which has always had animals.  Noneet has a degree in child psychology, but her true passion is pets.  She has quite the number of veterinarians in her family as well, and we are glad she chose to work with us.  Noneet has a dog &quot;Layla&quot;, who is a certified service and therapy dog.  One of Noneet's goals is to &quot;help people with pets, and help pets with people&quot;.  Noneet enjoys baking, watching Layla be a &quot;trouble maker and diva&quot; and helping children.</div>

                            </div>
                        </div>
                        <div class="row employee">
                            
                            <div class="twelve columns">
                            	<div class="about-name">Delly<span class="about-pos">Veterinary Assistant/Receptionist</span></div>
								<div class="about-bio">Delly has been in the Veterinary field for over 5 years.  She took a brief break, but has returned and joined the Prestige Animal Hospital family.   Delly is an animal lover, she could not stay away from the Veterinary field and loves to see pets healthy and happy.  We are very lucky to have her.</div>

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