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
			<h1><i>Anuradhapura</i></h1>
		</div>    
		<div class="row">
			<div class="lt-attr-map">
				<div class="map-area">
					<div id="map" style="width:100%;height:300px;"></div>	
				</div>
			</div>
			<script type="text/javascript" src="anuradapura.js"></script>
			<br><br>
			<p>
Anuradhapura is a major city in Sri Lanka. It is the capital city of North Central Province, Sri Lanka and the capital of Anuradhapura District. Anuradhapura is one of the ancient capitals of Sri Lanka, famous for its well-preserved ruins of an ancient Sri Lankan civilization. It was the third capital of the Kingdom of Rajarata, following the kingdoms of Tambapanni and Upatissa Nuwara. The city, now a UNESCO World Heritage Site, was the center of Theravada Buddhism for many centuries. The city lies 205 km north of the current capital Colombo in Sri Lanka's North Central Province, on the banks of the historic Malvathu Oya. It is one of the oldest continuously inhabited cities in the world and one of the eight World Heritage Sites of Sri Lanka. It is believed that from the fourth century BC until the beginning of the 11th century AD it was the capital of the Sinhalese. During this period it remained one of the most stable and durable centers of political power and urban life in South Asia. The ancient city, considered sacred to the Buddhist world, is today surrounded by monasteries covering an area of over sixteen square miles.<br><br>
Anuradhapura was first settled by Anuradha, a follower of Prince Vijaya the founder of the Sinhala race. Later, it was made the Capital by King Pandukabhaya at about 380 B.C.According to the Mahavamsa, the epic of Sinhala History, King Pandukabhaya’s city was a model of planning. Precincts were set aside for huntsmen, for scavengers and for heretics as well as for foreigners. There were hostels and hospitals, at least one Jain chapel, and cemeteries for high and low castes. A water supply was assured by the construction of tanks, artificial reservoirs, of which the one named after the king itself exists to this day under the altered name of Baswakkulam.<br><br>
It was during the reign of King Devanampiya Tissa (250 – 210 B.C.) that the Arahat Mahinda, son of the great Buddhist Emperor Asoka, led a group of missionaries from North India to Sri Lanka. With his followers he settled in a hermitage of caves on the hill of Mihintale – the name which derives from Mahinda’s own.The new religion swept over the land in a wave. The King himself donated land for a great monastery in the very heart of the city which was also his own Royal Park – the beautiful Mahamegha Gardens.The Buddhist principality had had but a century to flourish when it was temporarily overthrown by an invader from the Chola Kingdom of South India. The religion, however, received no set-back.<br><br>
At this time far away on the southeast coast, was growing up the prince who was to become the paladin of Sinhala nationalism: Dutugamunu (161 – 137 B.C)<br><br>
For his entire martial prowess, King Dushta Gamini must have been a man of singular sensibility. He built the MIRISAVETI DAGOBA and the mighty Brazen Palace, which was nine stories high and presented to the Mahasanga (order of monks). But, the RUWANVELI DAGOBA, his most magnificent creation, he did not live to see its completion.<br><br>
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
