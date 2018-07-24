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
			<h1><i>Galle</i></h1>
		</div>    
		<div class="row">
			<div class="lt-attr-map">
				<div class="map-area">
					<div id="map" style="width:100%;height:300px;"></div>	
				</div>
			</div>
			<script type="text/javascript" src="galle.js"></script>
			<br><br>
			<p>
The seaside town of Galle is 116 Km away from Colombo by road or rail, down the south coast of Sri Lanka. Both routes are picturesque, following the coastline closely for much of the way. You can also take the Southern Expressway if you need to reach the city by half the time but there is not much scenery to admire.
Today’s town has grown greatly and spreads into the surroundings but the Fort is the slowbeating heart of Galle ‘s history. The walled city has stood since the early sixteenth century, through the Colonial periods of the Portuguese, Dutch and British and in our present times is proclaimed as an Archaeological Reserve and has been identified as a living World Heritage Site. The etymology of the name Galle is explained as probably an altered form of the Sinhalese word “gala”: a cattle fold or posting-place from which the Portuguese named it Point-de-Galle. The simpler and more popular theory is found in the similarity of the Sinhalese word: gala, for rock, which the Portuguese duplicated by adopting the Latin word: gallus, for rooster. They thus designed the coat-of-arms of the city as that of a rooster standing upon a rocky perch.Galle Fort Sri Lanka<br><br>
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
