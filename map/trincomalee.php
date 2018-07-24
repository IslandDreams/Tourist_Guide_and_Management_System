<?php
	session_start();
	require_once('../2_connection.php');
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
	<link rel="stylesheet" href="../css/homepage/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/homepage/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/hotels/style.css">

	<link rel="shortcut icon" type="text/css" href="../images/logos/log1.png"/>
	
	<!-- gmaps -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDDcGNQGXqz0uAi_VywtOIWNUslBXKeJmw&sensor=true"></script>
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
                <a href="../3_homepage.php" class="navbar-brand" style="padding-top: 2px;"><img src="../images/logos/logoq1.png" width="50px" height="47px"></a>
                <a href="../3_homepage.php" class="navbar-brand">Island Dreams</a>
            </div>	<!--navbar header-->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav" style="float: right;">
                	<?php
                		if(!isset($_SESSION['name']))
                		{
                			echo "<li><a href='../4_login.php'>Log In</a></li>";
                		}
                		else
                		{
                			$name = $_SESSION['name'];
                			echo "<li><a style='color:#97edc2;font-size:17px;'>Welcome, $name</a></li>";
                			echo "<li><a href='../logout.php'>(LogOut)</a></li>";
                		}
                	?>
                </ul>
            </div> 
        </div>	<!-- end container-->
    </nav>	<!--end navbar-->

	<div class="container">
    	<section>
		<div class="page-header">
			<h1><i>Trincomalee</i></h1>
		</div>    
		<div class="row">
			<div class="lt-attr-map">
				<div class="map-area">
					<div id="map" style="width:100%;height:300px;"></div>	
				</div>
			</div>
			<script type="text/javascript" src="trincomalee.js"></script>
			<br><br>
			<p>
Trincomalee, one of the finest natural deep-water harbours in the world is located 257 km north-east of Colombo, which is considered as the commercial hub of Sri Lanka. Trincomalee is home to the fine beaches of Nilaveli, Uppuveli and the off-shore Pigeon Island. Recently Trincomalee has become popular as a Whale Watching destination as well. The Dive centres at Nilaveli and Uppuveli offer touriststhe opportunity to enjoy their holidays in diving, snorkeling and swimming. The Trincomalee district, referred as Gokanna or Gokarna in the historical chronicles and inscriptions, is studded with a multitude of ruins of ancient Buddhist temples and is considered a major Buddhist cultural and archaeological site of Sri Lanka. The seven hot springs at Kanniya located a mere 8km fromTrincomalee attract regular crowds throughout the year in view of the therapeutic properties of the water as well as the varying temperatures from one well to the other.<br><br>
			</p>
			<!--<div class="col-lg-4" id="">
					<blockquote>
						<img src="images/colhot1.jpg" style="width:342px;height:200px;"><br><br>
						<a href="hotelinfo.php" target="_blank" style="position: absolute;"><button type="button" class="btn btn-danger" ">View</button></a>
					</blockquote>
				</div>
			</div><!--end row-->
        </section>
    </div>	<!--end coontainer-->
    <br><br><br><br>

	<!--jquery-->
	<script src="../js/homepage/jquery-3.2.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="../js/homepage/bootstrap.min.js"></script>
	<script src="../js/hotels/bootstrap.bundle.min.js"></script>
	<script src="../js/hotels/popper.min.js"></script>
	
	<footer class="container-fluid text-center">
		<p>© 2017 Island Dreams. All rights reserved</p>
	</footer>
	<br><br>
</body>
</html>
