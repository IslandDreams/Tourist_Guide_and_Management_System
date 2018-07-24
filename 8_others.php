<?php
	session_start();
	require_once('2_connection.php');
?>

<!doctype html>
<html>
<head>
	<title>Welcome to Island Dreams</title>
	
	<!-- device compatibility -->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="description" content="Island Dreams... Best Tourism Services">
	<meta name="keywords" content="beautiful places, island dreams, hotels, vehicle, rent, sri lanka, tourist, guide" />
	
	<!-- stylesheets -->
	<link rel="stylesheet" href="css/homepage/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/homepage/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="css/hotels/style.css">

	<link rel="shortcut icon" type="text/css" href="images/logos/log1.png"/>
</head>

<body>
	<!-- Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
    	<div class="container">
        	<div class="navbar-header">
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                	<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="3_homepage.php" class="navbar-brand" style="padding-top: 2px;"><img src="images/logos/logoq1.png" width="50px" height="47px"></a>
                <a href="3_homepage.php" class="navbar-brand">Island Dreams</a>
            </div>	<!--navbar header-->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav" style="float: right;">
                	<?php
                		if(!isset($_SESSION['name']))
                		{
                			echo "<li><a href='4_login.php'>Log In</a></li>";
                		}
                		else
                		{
                			$name = $_SESSION['name'];
                			echo "<li><a style='color:#97edc2;font-size:17px;'>Welcome, $name</a></li>";
                			echo "<li><a href='logout.php'>(LogOut)</a></li>";
                		}
                	?>
                </ul>
            </div> 
        </div>	<!-- end container-->
    </nav>	<!--end navbar-->
	
	<div class="container">
		<section>
			<br><br>
			<div class="carousel slide" id="screenshot-carousel" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#screenshot-carousel" data-slide-to="1"></li>
					<li data-target="#screenshot-carousel" data-slide-to="2"></li>
					<li data-target="#screenshot-carousel" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" style="max-height: 480px">
					<div class="item active">
						<img src="images/others/(1).jpg" alt="text of the image">
					</div>
					<div class="item">
						<img src="images/others/(2).jpg" alt="text of the image">
					</div>
					<div class="item">
						<img src="images/others/(3).jpg" alt="text of the image">
					</div>
					<div class="item">
						<img src="images/others/(4).jpg" alt="text of the image">
					</div>
				</div>
				<a href="#screenshot-carousel" class="left carousel-control" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a href="#screenshot-carousel" class="right carousel-control" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>	<!-- end carousel inner-->
		</section>
	</div>	<!-- end container-->
	
	<div class="container"> <!-- services -->
		<section>
			<div class="page-header">
				<h4>We can also provide following equipments that can help your journey...</h4>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="page-header">
						<h3><strong><i>Surfing Equipments</i></strong></h3>
					</div>
					<div class="col-lg-12">
						<img src="images/others/surfing/(1).jpg" width="500" height="250"> 
					</div>
				</div>
				<div class="col-lg-6">
					<div class="page-header">
						<h3><strong><i>Diving Equipments</i></strong></h3>
					</div>
					<div class="col-lg-12">
						<img src="images/others/diving/(1).png" width="500" height="250"> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="page-header">
					<h3><strong><i>Hiking & Camping Equipments</i></strong></h3>
				</div>
				<div class="col-lg-6">
					<img src="images/others/camping/(1).jpg" width="500" height="250"> 
				</div>
				<div class="col-lg-6">
					<img src="images/others/camping/(2).jpg" width="500" height="250"> 
				</div>
			</div>
		</section>
	</div> <!-- end services -->
	
	<div>
		<br><br><br>
		<footer class="container-fluid text-center">
			<p>© 2017 Island Dreams. All rights reserved</p>
		</footer>
		<br><br>
	</div>

	<!--jquery-->
	<script src="js/homepage/jquery-3.2.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/homepage/bootstrap.min.js"></script>
</body>
</html>
