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
			<h1><i>Nuwara Eliya</i></h1>
		</div>    
		<div class="row">
			<div class="lt-attr-map">
				<div class="map-area">
					<div id="map" style="width:100%;height:300px;"></div>	
				</div>
			</div>
			<script type="text/javascript" src="nuwaraeliya.js"></script>
			<br><br>
			<p>
This famous upcountry town is situated 1868 meters (6128 feet) above sea level and is in the Nuwara Eliya District. Due to its high altitude, it has a Sub Tropical Highland climate. The average annual temperature varies between 11-20 C° and the recorded lowest temperature is 0.4 C° and the recorded highest temperature is 27.7 C°. Monthly rainfall varies between 70-225 mm and has an average annual rainfall figure or precipitation of 1900 mm. The maximum rainfall is generally in October and the minimum rainfall is in March. During the year it has a relative humidity between 65%-87%. Sri Lanka's highest mountain Pidurutalagala with a height of 2,527 m (8,292 ft) is very close to this town and can be seen prominently.The distance to the mountain is about 5 Km as the crow flies. During the British period this mountain was called as Mount Pedro. Today the mountain area is a high security zone since the summit is made used for state communication and TV transmission towers. Horton Plains situated south of Nuwara Eliya is a unique Ecological zone of Wet Patana Grassland with a Cloud Forest. The extend of Nuwara Eliya district is 1741 sq. Km. It consists of Nuwara Eliya, Maskeliya, Kothmale, Wapane and Hanguranketha electorates.<br><br>
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
