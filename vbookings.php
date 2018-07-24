<?php session_start(); ?>
<?php require_once('2_connection.php'); ?>

<?php
	if(!isset($_SESSION['name']))
	{ 
		header("Location: 4_login.php?log=0");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Book Your Vehicle Now</title>
	
	<!-- device compatibility -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="description" content="Island Dreams... Best Tourism Services">
	<meta name="keywords" content="beautiful places, island dreams, hotels, vehicle, rent, sri lanka, tourist, guide" />
	
	<!-- stylesheets -->
	<link rel="stylesheet" href="css/login/font-awesome.css">
	<link rel="stylesheet" href="css/login/loginstyle.css">
	<link rel="stylesheet" href="css/homepage/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/homepage/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link rel="shortcut icon" href="images/logos/log1.png" type="text/css" /> 
</head>
<body style="background: url('images/bookings/vehicle1.jpg') no-repeat fixed center;background-size: auto 136%;">
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
                		if(isset($_SESSION['name']))
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

	<div class="agile-login">
		
		
		<div class="wrapper">
			<h2>Please Fill</h2>
			<div class="w3ls-form">
				
				<?php
					$vnum = $_GET['vnum'];
					$uname = $_SESSION['name'];
					$query = "SELECT * FROM vehicle WHERE VehicleNo='{$vnum}' LIMIT 1";
					$result_set = mysqli_query($con, $query);
					if(!$result_set)
					{
						die("Database Query Failed.".mysqli_error($con));
					}

					if(mysqli_num_rows($result_set) == 1)
					{
						$vehicle = mysqli_fetch_assoc($result_set);
						$vtype = $vehicle['VehicleType'];
						$vloc = $vehicle['VehicleLocation'];
					}

				?>
				<form action="<?php $_PHP_SELF ?>" method="post">
					<label>Vehicle Type</label>
					<input type="text" name="vtype" value="<?php echo $vtype; ?>" readonly/>
					<label>Vehicle Location</label>
					<input type="text" name="vloc" value="<?php echo $vloc; ?>" readonly/>
					<label>Your Name</label>
					<input type="text" name="uname" value="<?php echo $uname; ?>" readonly/>
					<label>Booking Date</label>
					<input type="text" name="bdate" placeholder="Eg: 2017/12/25" required/>
					<input type="submit" value="Pay Now" name="submit" />
					<input type="hidden" name="vnum" value="<?php echo $vnum; ?>" />
					
				</form>
			</div>
		</div>
		<br>
		<div class="copyright">
			<p>© 2017 Island Dreams. All rights reserved </p> 
		</div>
	</div>
</body>
</html>

	<!-- PHP Codes -->

<?php
	if(isset($_POST['submit']))
	{
		$vloc = $_POST['vloc'];
		$uid = $_SESSION['uid'];
		$vnum = $_POST['vnum'];
		$date = $_POST['bdate'];
		
		$query = "INSERT INTO vehicle_buyer(UserId,VehicleNo,BoughtDate) VALUES('$uid','$vnum','$date')";
		$result = mysqli_query($con, $query);

		if(!$result)
		{
			die("Database Query Failed.".mysqli_error($con));
		}
		else
		{
			header("Location: 7_vehicles.php?book=1");
		}
	}
?>
