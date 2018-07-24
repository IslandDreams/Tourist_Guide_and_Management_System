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
	<title>Book Your Hotel Now</title>
	
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
<body style="background: url('images/bookings/counter2.jpg') no-repeat fixed center;background-size: auto 154%;">
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
					$hid = $_GET['hid'];
					$uname = $_SESSION['name'];

					$query = "SELECT * FROM hotel WHERE HotelId='{$hid}' LIMIT 1";
					$result_set = mysqli_query($con, $query);
					if(!$result_set)
					{
						die("Database Query Failed.".mysqli_error($con));
					}

					if(mysqli_num_rows($result_set) == 1)
					{
						$hotel = mysqli_fetch_assoc($result_set);
						$hname = $hotel['HotelName'];
					}

				?>
				<form action="<?php $_PHP_SELF ?>" method="post">
					<label>Hotel Name</label>
					<input type="text" name="hname" value="<?php echo $hname; ?>" readonly/>
					<label>Your Name</label>
					<input type="text" name="uname" value="<?php echo $uname; ?>" readonly/>
					<label>Room Size</label>
					<select name="room">
					  <option value="1">1 Person</option>
					  <option value="2">2 Person</option>
					  <option value="4">4 Person</option>
					  <option value="8">8 Person</option>
					</select>
					<label>Booking Date</label>
					<input type="date" name="bdate" placeholder="Eg: 2017/12/25" required/>
					<input type="submit" value="Pay Now" name="submit" />
					<input type="hidden" name="hid" value="<?php echo $hid; ?>" />
					
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
		$rmsize = $_POST['room'];
		$uid = $_SESSION['uid'];
		$hid = $_POST['hid'];
		$date = $_POST['bdate'];
		
		$query = "INSERT INTO room_buyer(UserId,HotelId,RoomNo,ArrivalDate) VALUES('$uid','$hid','$rmsize','$date')";
		$result = mysqli_query($con, $query);

		if(!$result)
		{
			die("Database Query Failed.".mysqli_error($con));
		}
		else
		{
			header("Location: 6_hotels.php?book=1");
		}
	}
?>
