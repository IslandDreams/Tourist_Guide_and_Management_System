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
					<li data-target="#screenshot-carousel" data-slide-to="4"></li>
				</ol>
				<div class="carousel-inner" style="max-height: 480px">
					<div class="item active">
						<img src="images/vehicles/(1).jpg" alt="text of the image">
					</div>
					<div class="item">
						<img src="images/vehicles/(2).jpg" alt="text of the image">
					</div>
					<div class="item">
						<img src="images/vehicles/(3).jpg" alt="text of the image">
					</div>
					<div class="item">
						<img src="images/vehicles/(4).jpg" alt="text of the image">
					</div>
					<div class="item">
						<img src="images/vehicles/(5).jpg" alt="text of the image">
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

	<div class="container">
    	<section>
			<div class="page-header">
			<?php 
				if(isset($_GET['book']) && $_GET['book'] == 1)
				{
					echo "<h4 style='color:#14a768;'>Vehicle Booking Completed Successfully !<h4>";
				}
				
			?>
				<h2>Vehicles<small> (Best vehicles for you)</small></h2>
			</div>
			<form action="7_vehicles.php" method="post">
				<button type="submit" name="go" class="btn btn-info" style="float: right;margin-left: 10px;height: 40px;width:50px;">Go</button>
					<div class="select" tabindex="1" >
					<input class="selectopt" name="test" type="radio" id="opt1" value="ampara" <?php if(isset($_POST['test'])){if($_POST['test'] == "ampara"){ echo "checked"; }} ?> >
					<label for="opt1" class="option">Ampara</label>
					<input class="selectopt" name="test" type="radio" id="opt2" value="anuradhapura" <?php if(isset($_POST['test'])){if($_POST['test'] == "anuradhapura"){ echo "checked"; }} ?> >
					<label for="opt2" class="option">Anuradhapura</label>
					<input class="selectopt" name="test" type="radio" id="opt3" value="colombo" <?php if(isset($_POST['test'])){if($_POST['test'] == "colombo"){ echo "checked"; }} ?> >
					<label for="opt3" class="option">Colombo</label>
					<input class="selectopt" name="test" type="radio" id="opt4" value="galle" <?php if(isset($_POST['test'])){if($_POST['test'] == "galle"){ echo "checked"; }} ?> >
					<label for="opt4" class="option">Galle</label>
					<input class="selectopt" name="test" type="radio" id="opt5" value="hambantota" <?php if(isset($_POST['test'])){if($_POST['test'] == "hambbantota"){ echo "checked"; }} ?> >
					<label for="opt5" class="option">Hambantota</label>
					<input class="selectopt" name="test" type="radio" id="opt6" value="jaffna" <?php if(isset($_POST['test'])){if($_POST['test'] == "jaffna"){ echo "checked"; }} ?> >
					<label for="opt6" class="option">Jaffna</label>
					<input class="selectopt" name="test" type="radio" id="opt7" value="kalutara" <?php if(isset($_POST['test'])){if($_POST['test'] == "kalutara"){ echo "checked"; }} ?> >
					<label for="opt7" class="option">Kalutara</label>
					<input class="selectopt" name="test" type="radio" id="opt8" value="matara" <?php if(isset($_POST['test'])){if($_POST['test'] == "matara"){ echo "checked"; }} ?> >
					<label for="opt8" class="option">Matara</label>
					<input class="selectopt" name="test" type="radio" id="opt9" value="monaragala" <?php if(isset($_POST['test'])){if($_POST['test'] == "monaragala"){ echo "checked"; }} ?> >
					<label for="opt9" class="option">Monaragala</label>
					<input class="selectopt" name="test" type="radio" id="opt10" value="nuwaraeliya" <?php if(isset($_POST['test'])){if($_POST['test'] == "nuwaraeliya"){ echo "checked"; }} ?> >
					<label for="opt10" class="option">Nuwara Eliya</label>
					<input class="selectopt" name="test" type="radio" id="opt11" value="polonnaruwa" <?php if(isset($_POST['test'])){if($_POST['test'] == "polonnaruwa"){ echo "checked"; }} ?> >
					<label for="opt11" class="option">Polonnaruwa</label>
					<input class="selectopt" name="test" type="radio" id="opt12" value="rathnapura" <?php if(isset($_POST['test'])){if($_POST['test'] == "rathnapura"){ echo "checked"; }} ?> >
					<label for="opt12" class="option">Rathnapura</label>
					<input class="selectopt" name="test" type="radio" id="opt13" value="trincomalee" <?php if(isset($_POST['test'])){if($_POST['test'] == "trincomalee"){ echo "checked"; }} ?> >
					<label for="opt13" class="option">Trincomalee</label>
				</div>
			</form>
			<br><br><br><br>
			<div class="row">
				<?php
					if(isset($_POST['go']))
					{
						$city = $_POST['test'];
						$query = "SELECT * FROM vehicle WHERE VehicleLocation='$city'";
						if(!$results = mysqli_query($con, $query))
						{
							die("Error in database...");
						}
						else
						{
							$n = mysqli_num_rows($results);

							while($row=mysqli_fetch_assoc($results))
							{
								$vnum = $row['VehicleNo'];
								$name = $row['VehicleType'];
								$link = $row['VehiclePhoto'];
								$av = $row['Availablity'];
								if($av==1){
									$avb="Available";
								}
								else{
									$avb="Not Available";
								}
								
								echo '<div class="col-lg-4" id="">
										<blockquote>
											<img src="'.$link.'" style="width:342px;height:200px;"><br>
											<div class="panel-body"><h4>'.$name.'<small style="color:red;">'.$avb.'</small></h4></div>
											<a href="vbookings.php?vnum='.$vnum.'" target="_blank" style="position: absolute;">
												<button type="button" class="btn btn-danger" ">Book Now</button>
											</a>
										</blockquote><br><br>
									</div>';
							}
						}
					}
				?>
			</div><!--end row-->
        </section>
    </div>	<!--end coontainer-->
	
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
