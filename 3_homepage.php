<?php 
	session_start();
	require_once('2_connection.php');
?>

<!doctype html>
<html>
<head>
	<title>Island Dreams</title>
	
	<!-- device compatibility -->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="description" content="Island Dreams... Best Tourism Services">
	<meta name="keywords" content="beautiful places, island dreams, hotels, vehicle, rent, sri lanka, tourist, guide" />
	
	<!-- stylesheets -->
	<link rel="stylesheet" href="css/homepage/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/homepage/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link rel="shortcut icon" type="text/css" href="images/logos/log1.png"/>
</head>
<style>
	body{
		padding-top:40px;
		background-color:#D4EDF0;
	}
</style>
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
            	<ul class="nav navbar-nav" >
                	<li><a href="#pop-1">Services</a></li>
                    <li><a href="#pop-2">Map</a></li>
                    <li><a href="#pop-3">FAQ</a></li>
                    <li><a href="#pop-4">Contact</a></li>
                    <li><a href="#pop-5">About Us</a></li>
                    <?php if(isset($_SESSION['role']))
                    		{
                    			if($_SESSION['role'] == 'admin') 
                    			{
                    				echo "<li><a href='adminpanel.php' style='color:#97edc2;font-size:17px;'>DashBoard</a></li>";
                    			}
                    		} 
                     ?>
                </ul>
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
			<br><br><br>
			<div class="carousel slide" id="screenshot-carousel" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#screenshot-carousel" data-slide-to="1"></li>
					<li data-target="#screenshot-carousel" data-slide-to="2"></li>
					<li data-target="#screenshot-carousel" data-slide-to="3"></li>
					<li data-target="#screenshot-carousel" data-slide-to="4"></li>
					<li data-target="#screenshot-carousel" data-slide-to="5"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="images/homepage/(0).jpg" alt="text of the image">
					</div>
					<div class="item">
						<img src="images/homepage/(1).jpg" alt="text of the image">
					</div>
					<div class="item">
						<img src="images/homepage/(2).jpg" alt="text of the image">
					</div>
					<div class="item">
						<img src="images/homepage/(3).jpg" alt="text of the image">
					</div>
					<div class="item">
						<img src="images/homepage/(4).jpg" alt="text of the image">
					</div>
					<div class="item">
						<img src="images/homepage/(5).jpg" alt="text of the image">
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
	
	<br  id="pop-1">
	<div class="jumbotron">
    	<div class="container text-center">
        	<h1>ISLAND DREAMS</h1>
            <p>Are you new to Sri Lanka? We can help you to find your necessaries...</p>
            <div class="button-group">
				<a href="#" class="btn btn-lg btn-info" data-toggle="modal" data-target="#myModal">Download app</a>
			</div>	<!--end button group-->
            
			<!-- Modal -->
			<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Sorry</h4>
						</div>
						<div class="modal-body">
							<p>App is still developing.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>	<!--end container-->
    </div>	<!--end jumbotron-->
    
    <div class="container">
    	<section>
            <div class="row">
            	<div class="col-lg-4">
                	<blockquote>
						<img src="images/homepage/service (1).jpg" style="width:342px;height:200px;"><br><br>
                        <a href="6_hotels.php"><button type="button" class="btn btn-danger">Hotels</button></a>
                    </blockquote>
                </div>
                <div class="col-lg-4">
                	<blockquote>
						<img src="images/homepage/service (2).jpg" style="width:342px;height:200px;"><br><br>
                        <a href="7_vehicles.php""><button type="button" class="btn btn-danger">Vehicles</button></a>
                    </blockquote>
                </div>
                <div class="col-lg-4">
                	<blockquote>
						<img src="images/homepage/service (3).jpg" style="width:342px;height:200px;"><br><br>
						<a href="8_others.php"><button type="button" class="btn btn-danger">Others</button></a>
                    </blockquote>
                </div>
            </div><!--end row-->
        </section>
    </div>	<!--end coontainer
	
	<!-- create a Gallery -->

	<!-- map-->
	<br  id="pop-2">
	<div class="container">
    	<section>
        	<div class="page-header">
            </div>
            <div class="row">
            	<div class="col-lg-10">
				<br>
					<form action="description.php" method="get">
						<img src="images/homepage/map.jpg" usemap="#umap">
						<map name="umap">
							<area shape="circle" coords="305,430,55" href="map/anuradapura.php" target="_blank" alt="anuradapura">
							<area shape="circle" coords="420,650,70" href="map/nuwaraeliya.php" target="_blank" alt="nuwaraeliya">
							<area shape="circle" coords="310,950,40" href="map/galle.php" target="_blank" alt="galle">
							<area shape="circle" coords="530,340,60" href="map/trincomalee.php" target="_blank" alt="trincomalee">
						</map>
					</form>
                </div>
                <div class="col-lg-2">
                	<h3 class="text-center">Popular Places</h3>
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
  							<div class="panel-heading">
    							<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
										<img src="images/homepage/ad (1).jpg" width="100%" height="100%">
									</a>
    							</h4>
   							</div>
							<div id="collapse1" class="panel-collapse collapse in">
								<div class="panel-body">Sigiriya</div>
							</div>	<!-- close collaps 1-->
						</div>	<!-- close pannel default-->
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
										<img src="images/homepage/ad (2).jpg" width="100%" height="100%">
									</a>
								</h4>
							</div>
							<div id="collapse2" class="panel-collapse collapse">
								<div class="panel-body">Rangiri Dambulla Temple</div>
							</div>	<!-- close collaps 2-->
						</div>	<!-- close pannel default-->
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
										<img src="images/homepage/ad (3).jpg" width="100%" height="100%">
									</a>
								</h4>
							</div>
							<div id="collapse3" class="panel-collapse collapse">
								<div class="panel-body">Temple of Tooth, Kandy</div>
							</div>	<!-- close collaps 3-->
						</div>	<!-- close pannel default-->
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
										<img src="images/homepage/ad (4).jpg" width="100%" height="100%">
									</a>
								</h4>
							</div>
							<div id="collapse4" class="panel-collapse collapse">
								<div class="panel-body">Gregory Lake, Nuwara Eliya</div>
							</div>	<!-- close collaps 4-->
						</div>	<!-- close pannel default-->
					</div>	<!-- close pannel group--> 
				</div>	<!-- close lg2-->
			</div>	<!--close row-->
		</section>
	</div>	<!-- close containner-->

	<!-- faq-->
	<br  id="pop-3"><br><br>
	<div class="container">
		<section>
			<div class="page-header">
				<h1>FAQ</h1>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#q1">The best time to visit Sri Lanka?</a>
						</h4>
					</div>
					<div id="q1" class="panel-collapse collapse in">
						<div class="panel-body">
							Sri Lanka is a tropical country with almost the same season all year long except for monsoon seasons kicking off at different times during the year, despite showers a warm sunny climate is always guaranteed.
						</div>
					</div>	<!-- close collaps 1-->
				</div>	<!-- close pannel default-->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#q2">What kind of clothes should be worn?</a>
						</h4>
					</div>
					<div id="q2" class="panel-collapse collapse ">
						<div class="panel-body">
							It actually depends in where you are , religious places have a strict protocol when it comes to clothes where people should cover themselves up. However, other than that you can wear almost anything that goes with the warm climate , sundresses, shorts , t-shirts and sandals are some of the clothes that you can wear to fight of the heat.
						</div>
					</div>	<!-- close collaps 1-->
				</div>	<!-- close pannel default-->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#q3">Ayuruvedic Medicine, can I get any access to it?</a>
						</h4>
					</div>
					<div id="q3" class="panel-collapse collapse ">
						<div class="panel-body">
							Sri Lanka boasts a very ancient medicinal system that can be used by almost anyone, lots of spas offer treatments as well as Ayuruvedic hospitals, speacial Ayuruvedic packages, getaways are offered by hotels.
						</div>
					</div>	<!-- close collaps 1-->
				</div>	<!-- close pannel default-->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#q4">How many languages are spoken in Sri Lanka?</a>
						</h4>
					</div>
					<div id="q4" class="panel-collapse collapse ">
						<div class="panel-body">
							English is widely spoken. Sinhala (Indo-Aryan language) (language of 74% of the population). Though Tamil (Dravidian language) is language of only 18.1% of the population, Tamil too is an official language in Sri Lanka.
						</div>
					</div>	<!-- close collaps 1-->
				</div>	<!-- close pannel default-->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#q5">What currency is used in Sri Lanka?</a>
						</h4>
					</div>
					<div id="q5" class="panel-collapse collapse ">
						<div class="panel-body">
							Sri Lankan Rupee (LKR) Approximate exchange rate USD 1 = LKR 153.80
						</div>
					</div>	<!-- close collaps 1-->
				</div>	<!-- close pannel default-->
				<div>
					<a href="#pop-3" class="btn btn-lg btn-info" >Load more</a>
				</div>
			</div>	<!--end caosels-->
		</section>
	</div>

	<!-- contact us -->
	<br  id="pop-4"><br><br>
	<div class="container">
		<section>
			<div class="page-header">
				<h1>Contact Us For More Details...</h1>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<p>Comment or Contact us from the address or phone numbers below...</p>
					<address>
						<strong>Island Dreams,</strong><br>
						University of Ruhuna,<br>
						Matara<br>
						Tel : +94715141987 (Uditha)<br>
						      +94773012323 (Yasas)<br>
					</address>
				</div>
				<div class="col-lg-8">
					<form action="" class="form-horizontal">
						<div class="form-group">
							<label for="username" class="col-lg-2 control-label"> Name : </label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="username" placeholder="Enter Your Name">
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-lg-2 control-label"> Email : </label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="email" placeholder="Enter Your Email">
							</div>
						</div>
						<div class="form-group">
							<label for="usermessage" class="col-lg-2 control-label"> Comments : </label>
							<div class="col-lg-10">
								<textarea name="usermessage" id="usermessage" class="form-control" cols="20" rows="10" placeholder="Enter Your Comments"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-10  col-lg-offset-2" >
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
	</div>

    <!--about us-->
	<br  id="pop-5"><br><br>
    <div class="container">
    		<section>
            <div class="page-header">
				<h1>About Us</h1>
                <h2><small>University of Ruhuna <small>(Group 04)</small></small></h2>
			</div>
			<div class="row">
				<div class="col-lg-2">
                	<img src="images/aboutus/(7).jpg" class="img-rounded" alt="Cinque Terre" width="100" height="100"> 
                    <h4><strong>Uditha Prabath</strong></h4>
                    <h4><small>Business Analyst</small></h4>
              	</div>
                <div class="col-lg-2">
                	<img src="images/aboutus/(3).jpg" class="img-rounded" alt="Cinque Terre" width="100" height="100"> 
                    <h4><strong>Yasas Rangika</h4></strong>
                    <h4><small>Business Analyst</small></h4>
              	</div>
				<div class="col-lg-2">
                	<img src="images/aboutus/(1).jpg" class="img-rounded" alt="Cinque Terre" width="100" height="100"> 
                    <h4><strong>Prasad Madusanka</strong></h4>
                    <h4><small>Designer & Programmer</small></h4>
              	</div>
                <div class="col-lg-2">
                	<img src="images/aboutus/(4).jpg" class="img-rounded" alt="Cinque Terre" width="100" height="100"> 
                    <h4><strong>Ravindu Dilshan</strong></h4>
                  	<h4><small>Designer & Programmer</small></h4>
              	</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
                	<img src="images/aboutus/(2).jpg" class="img-rounded" alt="Cinque Terre" width="100" height="100"> 
                    <h4><strong>Dasun Tharinda</strong></h4>
                    <h4><small>Designer & Programmer</small></h4>
              	</div>
                <div class="col-lg-3">
                	<img src="images/aboutus/(6).jpg" class="img-rounded" alt="Cinque Terre" width="100" height="100"> 
                    <h4><strong>Gopinath</strong></h4>
                    <h4><small>Tester</small></h4>
              	</div>
           		<div class="col-lg-3">
                	<img src="images/aboutus/(5).jpg" class="img-rounded" alt="Cinque Terre" width="100" height="100"> 
                    <h4><strong>Pruthavi Dulanga</strong></h4>
                    <h4><small>Tester</small></h4>
              	</div>
			</div><!-- end row -->
            </section>	
    </div><!-- end container-->

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
	<script src="js/homepage/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
