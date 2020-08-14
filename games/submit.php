<?php
error_reporting(E_ERROR);
require('config.php');
if(isset($_POST['stripeToken'])){
	\Stripe\Stripe::setVerifySslCerts(false);

	$token=$_POST['stripeToken'];

	$data=\Stripe\Charge::create(array(
		"amount"=>1000,
		"currency"=>"usd",
		"description"=>"Ordermania",
		"source"=>$token,
	));

	echo "<pre>";

    
    // print_r($data);
    if($data.id){

    	echo '<script>alert("Transaction Successfull")</script>'; 
  

    }
}
?>


<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Game Warrior Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
        
		<div class="container">
			<!-- logo -->
			<a class="site-logo" href="index.php">
				
			</a>
			<div class="user-panel">
                
                <a href="#"><STRONG>ORDER</STRONG></a>   &nbsp &nbsp<a href="#"><STRONG>FOOD</STRONG></a>
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<nav class="main-menu">
				<ul>
					<li><a href="../index.php">Home</a></li>
					<li><a href="#cut">Games</a></li>
					<li><a href="../about.php">About Us</a></li>
					<li><a href="community.php">Forums</a></li>
					<li><a href="../contactsaee.php">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/slider-1.jpg">
				<div class="hs-text">
					<div class="container">
						<h2>The Waiting Room  Of &nbsp<span>ORDERMANIA</span> </h2>
						<p><span>Ordermania </span>  provides you to play games for free of cost. <br> Spend time with some cool games while family decides what to order. <br>Make your muscles strong with <span>Ordermania </span>  food .<br> And make your mind sharp and active with <span>Ordermania </span> games</p>
						<a href="../about.php" class="site-btn">Read More</a>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/slider-2.jpg">
				<div class="hs-text">
					<div class="container">
						<h2>The Best <span>Games</span> Out There</h2>
						<p>Be ready for the exciting games <br> while your food is being prepared. <br>Games will make you prepare to handle your pateince...</p>
						<a href="../aboutsaee.php" class="site-btn">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Latest news section -->
	<div class="latest-news-section">
		<div class="ln-title">ORDERMANIA FEATURES</div>
		<div class="news-ticker">
			<div class="news-ticker-contant">
				<div class="nt-item"><span class="new">FOOD</span>Food from top restuarants of INDIA with fully hygenic. </div>
				<div class="nt-item"><span class="strategy">UNIQUENESS</span>You can play games if you feel  bored ,before and after ordering. </div>
				<div class="nt-item"><span class="racing">RESPECT</span>We honour some of the great indian chefs for their brilliant work. </div>
			</div>
		</div>
	</div>
	<!-- Latest news section end -->

	<div id="cut">
	</div>
	<!-- Feature section -->
	<section class="feature-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="mariopic.jpg">
						<a href="mario.php" ><span class="cata new">Mario Game</span></a>
						<div class="fi-content text-white">
							<h5><a href="#">Hey Mario Is Back After eating food of Ordemania.</a></h5>
							<p>Make him To Digest The Food And Make Yourself A Mario Pro </p>
							<a href="#" class="fi-comment">GO ON CHAMP</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="ham.jpg">
                        <a href="hamburger%20making.php" >	<span class="cata strategy">CHEF</span></a>
						<div class="fi-content text-white">
							<h5><a href="#">Hey Mr. Chef Is Back After eating food of Ordemania.</a></h5>
							<p>Make him To Prepare The Hamburger And Make Yourself A  Pro Eater. </p>
							<a href="#" class="fi-comment">GO AND COOK</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="heli.jpg">
                        <a href="corona%20shooter.php" ><span class="cata new">CORONA SHOOTING</span></a>
						<div class="fi-content text-white">
							<h5><a href="#">Hey LETS SHOOT SOME CORONA VIRUS, After eating food of Ordemania.r</a></h5>
							<p>Tke the HELICOPTER  And Make your time COVID FREE. </p>
							<a href="#" class="fi-comment">GO CORONA , CORONA GO</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="detect.jpg">
                        <a href="detective%20gogo%20.php" ><span class="cata racing">MR. DETECTIVE</span></a>
						<div class="fi-content text-white">
							<h5><a href="#">Hey Mr. DETECTIVE Is Back After eating food of Ordemania.</a></h5>
							<p>LETS DO SOME INVESTIGATION AND FIND THE COP. </p>
							<a href="#" class="fi-comment">GO ON MR. GOGO</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Feature section end -->


	


	<!-- Tournaments section -->
	<section class="tournaments-section spad">
		<div class="container">
			<div class="tournament-title">Tournaments</div>
			<div class="row">
				<div class="col-md-6">
					<div class="tournament-item mb-4 mb-lg-0">
						<div class="ti-notic">Premium Tournament</div>
						<div class="ti-content">
							<div class="ti-thumb set-bg" data-setbg="img/tournament/1.jpg"></div>
							<div class="ti-text">
								<h4>World Of WarCraft</h4>
								<ul>
									<li><span>Tournament Beggins:</span> June 20, 2018</li>
									<li><span>Tounament Ends:</span> July 01, 2018</li>
									<li><span>Participants:</span> 10 teams</li>
									<li><span>Tournament Author:</span> Admin</li>
								</ul>
								<p><span>Prizes:</span> 1st place $2000, 2nd place: $1000, 3rd place: $500</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="tournament-item">
						<div class="ti-notic">Premium Tournament</div>
						<div class="ti-content">
							<div class="ti-thumb set-bg" data-setbg="img/tournament/2.jpg"></div>
							<div class="ti-text">
								<h4>DOOM</h4>
								<ul>
									<li><span>Tournament Beggins:</span> June 20, 2018</li>
									<li><span>Tounament Ends:</span> July 01, 2018</li>
									<li><span>Participants:</span> 10 teams</li>
									<li><span>Tournament Author:</span> Admin</li>
								</ul>
								<p><span>Prizes:</span> 1st place $2000, 2nd place: $1000, 3rd place: $500</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Tournaments section bg -->


	<!-- Review section -->
	<section class="review-section spad set-bg" data-setbg="img/review-bg.png">
		<div class="container">
			<div class="section-title">
				<div class="cata new">new</div>
				<h2>Recent Reviews</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/1.jpg">
							<div class="score yellow">9.3</div>
						</div>
						<div class="review-text">
							<h5>Assasin’’s Creed</h5>
							
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/2.jpg">
							<div class="score purple">9.5</div>
						</div>
						<div class="review-text">
							<h5>Doom</h5>
							
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/3.jpg">
							<div class="score green">9.1</div>
						</div>
						<div class="review-text">
							<h5>Overwatch</h5>
							
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/4.jpg">
							<div class="score pink">9.7</div>
						</div>
						<div class="review-text">
							<h5>GTA</h5>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Review section end -->


	

	
	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<ul class="footer-menu">
				<li><a href="../index.html">Home</a></li>
					<li><a href="#cut">Games</a></li>
					<li><a href="../about.php">About Us</a></li>
					<li><a href="community.php">Forums</a></li>
					<li><a href="../contactsaee.php">Contact</a></li>
			</ul>
			<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  <i class="fa fa-heart-o" aria-hidden="true"></i>  <a href="https://www.facebook.com/Ordermania-102530271540894/?modal=admin_todo_tour" target="_blank">ORDERMANIA TEAM</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>